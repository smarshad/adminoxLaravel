<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $bodyCss;
    public function __construct(){
        $this->bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
    }

    public function index(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/register',compact('bodyCss'));
    }

    public function forgotPasswordForm(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/forgot-password',compact('bodyCss'));
    }
}
