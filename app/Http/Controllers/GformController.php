<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class GformController extends Controller
{
    //
    public function index(){
        $form_key=Str::random(15);
        $data=array('form_key'=>$form_key);
        
        return view('generalform',$data);
    }
}
