<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function basic(){
        return view('admin/tables/basic');
    }

    public function layouts(){
        return view('admin/tables/layouts');
    }

    public function datatable(){
        return view('admin/tables/datatable');
    }

    public function footables(){
        return view('admin/tables/footables');
    }

    public function responsive(){
        return view('admin/tables/responsive');
    }

    public function tablesaw(){
        return view('admin/tables/tablesaw');
    }

    public function editable(){
        return view('admin/tables/editable');
    }
}
