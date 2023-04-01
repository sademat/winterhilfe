<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\File;
use App\Models\RevenueType;
use App\Models\ExpenditureType;
use App\Models\GeneralForm;
use App\Models\Child;
use App\Models\Expenditure;
use App\Models\Revenue;
use App\Models\Permission;
use App\Models\Meritalstatu;

class GformController extends Controller
{
    //
    public function index(Request $request)
    {
        $form_key = Str::random(15);
        if ($request->session()->has('form_key')) {

            $this->deleteFile($request->session()->get('form_key'));
        }
        $revTypes = RevenueType::all()->toArray();
        $expTypes = ExpenditureType::all()->toArray();
        $permissions = Permission::all()->toArray();
        $meritalstatus = Meritalstatu::all()->toArray();

        $data = array('form_key' => $form_key, 
        'revTypes' => $revTypes, 'expTypes' => $expTypes,
        'permissions'=>$permissions,'meritalstatus'=>$meritalstatus);
        $request->session()->put('form_key', $form_key);


        return view('generalform', $data);
    }

    public function store(Request $request)
    {
       
        $data = $request->all();
        unset($data['_token']);
        $data['form_key']=$data['form_id'];
        
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        
        $gform= new GeneralForm;
        $gform->form_key=$data['form_id'];
        $gform->needed_support=$data['needed_support'];
        $gform->einkommantwort=$data['einkommantwort'];
        $gform->lang=$data['lang'];
        $gform->name=$data['name'];
        $gform->surname=$data['surname'];
        $gform->gender=$data['gender'];
        $gform->maritalstatus_id=$data['maritalstatus_id'];
        $gform->birthdate=$data['birthdate'];
        $gform->street=$data['street'];
        $gform->street_no=$data['street_no'];
        $gform->postcode=$data['postcode'];
        $gform->city=$data['city'];
        $gform->telephone=$data['telephone'];
        $gform->email=$data['email'];
        $gform->nationality=$data['nationality'];
        $gform->permission_id=$data['permission_id'];
        $gform->work=$data['work'];
        $gform->employment=$data['employment'];
        $gform->employment_percent=$data['employment_percent'];
        $gform->family_situation=$data['family_situation'];
        $gform->child_total=$data['child_total'];
        $gform->totalpeople=$data['totalpeople'];

        $gform->pname=$data['pname'];
        $gform->psurname=$data['psurname'];
        //$gform->pgender=$data['pgender'];
        $gform->maritalstatus_id=$data['pmaritalstatus_id'];
        $gform->pbirthdate=$data['pbirthdate'];
        $gform->pstreet=$data['pstreet'];
        $gform->pstreet_no=$data['pstreet_no'];
        $gform->ppostcode=$data['ppostcode'];
        $gform->pcity=$data['pcity'];
        $gform->ptelephone=$data['ptelephone'];
        $gform->pemail=$data['pemail'];
        $gform->pnationality=$data['pnationality'];
        $gform->ppermission_id=$data['ppermission_id'];
        $gform->pwork=$data['pwork'];
        $gform->pemployment=$data['pemployment'];
        $gform->pemployment_percent=$data['pemployment_percent'];

        $gform->gcompany=$data['gcompany'];
        $gform->gname=$data['gname'];
        $gform->gsurname=$data['gsurname'];
        $gform->ggender=$data['ggender'];
        $gform->gstreet=$data['gstreet'];
        $gform->gpostcode=$data['gpostcode'];
        $gform->gcity=$data['gcity'];
        $gform->gtelephone=$data['gtelephone'];
        $gform->gemail=$data['gemail'];

        $gform->desc_situation=$data['desc_situation'];
        $gform->required_financial=$data['required_financial'];
        $gform->own_contribution=$data['own_contribution'];
        $gform->application_to_winter=$data['application_to_winter'];
        $gform->aply_others=$data['aply_others'];
        $gform->date_appsubmt=date("y-m-d");
        //$gform->fill($data);
        $gform->save();
        
        //childs data insert
        $cdata = [];
        $cnames = $request->cname;
        $csurname = $request->csurname;
        $cbirthdate = $request->cbirthdate;
               
        foreach ($cnames as $key => $value) {
            if ($value != "") {
                $cdata[$key]['forms_id'] = $gform->id;
                $cdata[$key]['name'] = $value;
                $cdata[$key]['surname'] = $csurname[$key];
                $cdata[$key]['birthdate'] = $cbirthdate[$key];
                $cdata[$key]['gender'] = $data['cgender' . $key][0];
                $cdata[$key]['created_at'] = date("Y-m-d");
            }
        }
        echo "<pre>";
        print_r($cdata);
        echo "</pre>";
        Child::insert($cdata);
        
        //revenue
        $revdata=[];
        $revenues = $request->revenue;
        foreach ($revenues as $key => $value) {
            if ($value != "") {
                $revdata[$key]['forms_id'] = $gform->id;;
                $revdata[$key]['type_id'] = $value;                
                $revdata[$key]['created_at'] = date("Y-m-d");
            }
        }
        Revenue::insert($revdata);
       


    }

    public function uploadToServer(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        //var_dump(request()->file);
        $org_name = Str::of(request()->file->getClientOriginalName())->slug('-');
        // File extension
        $extension = request()->file->getClientOriginalExtension();
        $name = time() . '_' . $org_name . "." . $extension;

        $request->file->move(public_path('uploads'), $name);

        $file = new File;
        $file->name = $name;
        $file->form_key = $request->form_key;
        $file->save();


        // File path
        $filepath = url('uploads/' . $name);

        // Response
        $data['success'] = 1;
        $data['message'] = 'Uploaded Successfully!';
        $data['filepath'] = $filepath;
        $data['extension'] = $extension;

        $data['files'] = File::select('name')->where('form_key', $request->form_key)->get();

        return response()->json($data);
    }

    public function deleteFile($form_key)
    {
        $files = File::select('name')->where('forms_id', NULL)->where('form_key', $form_key)->get();
        foreach ($files as $file) {

            $file_path = public_path('uploads/') . $file['name'];

            unlink($file_path);
        }
        File::where('forms_id', NULL)->where('form_key', $form_key)->delete();
    }
}
