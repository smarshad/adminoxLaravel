<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    
    public function google(){
        return view('admin/maps/google');
    }

    public function vector(){
        return view('admin/maps/vector');
    }

    public function mapael(){
        return view('admin/maps/mapael');
    }
}
