<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\doctor;
use App\Models\product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        $doctor=doctor::all();
      return view('Home.index',['products'=>$products,'doctors'=>$doctor]);
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
