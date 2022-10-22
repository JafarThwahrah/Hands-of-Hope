<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function showdoctorpage($id)
    {
        $doctor = doctor::where('id', $id)->get();
        $appointmentsAndusers = DB::table('appointment')->join('users', 'appointment.user_id', '=', 'users.id')->where('appointment.doctor_id' , $id)->get();

        return view('doctorpage' , ['id' => $id , 'doctor' => $doctor , 'appointmentsAndusers' => $appointmentsAndusers]);
    }

    public function editdoctorinfo($id){
        $doctor = doctor::where('id', $id)->get();
        return view('editDocProfile' ,['id' => $id , 'doctor'=>$doctor]);
    }

    public function updateDoctorProfile(Request $request, $id){

        $request->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Personal'=>['required'],
            'Certificate'=>['required'],
            'Available'=>['required'],
            'Password' => ['required'],

            
        ]);

        $image = base64_encode(file_get_contents($request->file('image')));
        $Certificate = base64_encode(file_get_contents($request->file('Certificate')));

        doctor::where('id', $id)->update(['name' => request('Name'), 'email' => request('Email'), 'password' => request('Password'), 'available_time' => request('Available'), 'image' => $image, 'certificate' => $Certificate ]);

        return redirect("/doctorprofile/$id")->with('mssg', 'Personal information updated successfully');
    


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
