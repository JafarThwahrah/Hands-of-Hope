<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\doctor;
use App\Models\product;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $Departments = departments::all();
        $products = product::all();
        $doctor = doctor::all();
        return view('Home.index', ['Department' => $Departments, 'products' => $products, 'doctors' => $doctor]);
    }
}
