<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $bodyCss;
    

    public function inbox(){
        return view('admin/email/inbox');
    }
    
    public function read(){
        return view('admin/email/read');
    }
    
    public function compose(){
        return view('admin/email/compose');
    }

}
