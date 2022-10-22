<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $Departments = departments::all();

        return view('Home.index' , ['Department'=>$Departments]);
    }
}
