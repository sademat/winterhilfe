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

class GformController extends Controller
{
    //
    public function index(Request $request){
        $form_key=Str::random(15);
        if ($request->session()->has('form_key')) {
            
            $this->deleteFile($request->session()->get('form_key'));
        }
        $revTypes=RevenueType::all()->toArray();
        $expTypes=ExpenditureType::all()->toArray();
        
        $data=array('form_key'=>$form_key,'revTypes'=>$revTypes,'expTypes'=>$expTypes);
        $request->session()->put('form_key', $form_key);
        
        
        return view('generalform',$data);
    }

    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
        $data=$request->all();

        // $gform= new GeneralForm;
        // $gform->fill($data);
        // $gform->save();

        $cdata=[];
        $cnames=$request->cname;
        $csurname=$request->csurname;
        $cbirthdate=$request->cbirthdate;
        $ff=0;
        $cgender=$data['cgender'.$ff];
        var_dump($cgender);
        echo $cgender[0];
        foreach ($cnames as $key => $value) {
            if ($value !="") {
                $cdata[$key]['forms_id']=1;
                $cdata[$key]['name']=$value;
                $cdata[$key]['surname']=$csurname[$key];
                $cdata[$key]['birthdate']=$cbirthdate[$key];
                $cdata[$key]['gender']=$data['cgender'.$key][0];
                $cdata[$key]['created_at']=date("Y-m-d");
            }
        }
        echo "<pre>";
        print_r($cdata);
        echo "</pre>";
        Child::insert($cdata);
        
        // $child= new Child;
        // $child->fill($cdata);
        // $child->save();



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
        $name = time().'_'.$org_name.".".$extension;
        
        $request->file->move(public_path('uploads'), $name);
   
        $file = new File;
        $file->name = $name;
        $file->form_key = $request->form_key;
        $file->save();

        
        // File path
        $filepath = url('uploads/'.$name);

        // Response
        $data['success'] = 1;
        $data['message'] = 'Uploaded Successfully!';
        $data['filepath'] = $filepath;
        $data['extension'] = $extension;

        $data['files']=File::select('name')->where('form_key', $request->form_key)->get();
  
        return response()->json($data);
    }

    public function deleteFile($form_key){
        $files=File::select('name')->where('forms_id', NULL)->where('form_key',$form_key)->get();
        foreach($files as $file){
            
            $file_path=public_path('uploads/').$file['name'];
            
            unlink($file_path);
        }
        File::where('forms_id', NULL)->where('form_key',$form_key)->delete();
    }
}
