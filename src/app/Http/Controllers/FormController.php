<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function elements(){
        return view('admin/form/elements');
    }

    public function advanced(){
        return view('admin/form/advanced');
    }

    public function layouts(){
        return view('admin/form/layouts');
    }

    public function validation(){
        return view('admin/form/validation');
    }

    public function pickers(){
        return view('admin/form/pickers');
    }

    public function wizard(){
        return view('admin/form/wizard');
    }

    public function mask(){
        return view('admin/form/mask');
    }

    public function summernote(){
        return view('admin/form/summernote');
    }

    public function quilljs(){
        return view('admin/form/quilljs');
    }

    public function typeahead(){
        return view('admin/form/typeahead');
    }

    public function editable(){
        return view('admin/form/editable');
    }

    public function uploads(){
        return view('admin/form/uploads');
    }
}
