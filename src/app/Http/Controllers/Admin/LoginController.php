<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $bodyCss;
    public function __construct(){
        $this->bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
    }

    public function index(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/login',compact('bodyCss'));
    }
}
