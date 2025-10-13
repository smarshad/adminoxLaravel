<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $bodyCss;
    public function __construct()
    {
        $this->bodyCss = 'class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100"';
    }

    public function starter(){
        return view('admin/pages/starter');
    }
    
    public function login(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/login',compact('bodyCss'));
    }

    public function register(){
        $bodyCss = $this->bodyCss;
        return view('admin/auth/register',compact('bodyCss'));
    }

    public function logout(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/logout',compact('bodyCss'));
    }

    public function recoverpw(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/recoverpw',compact('bodyCss'));
    }

    public function lockScreen(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/lockscreen',compact('bodyCss'));
    }

    public function confirmMail(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/confirm-mail',compact('bodyCss'));
    }

    public function notFound(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/404',compact('bodyCss'));
    }

    public function notFoundAlt(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/404-alt',compact('bodyCss'));
    }

    public function errorPage(){
        $bodyCss = $this->bodyCss;
        return view('admin/pages/500',compact('bodyCss'));
    }

    public function about(){
        return view('admin/extra-pages/about');
    }

    public function contact(){
        return view('admin/extra-pages/contact');
    }



}
