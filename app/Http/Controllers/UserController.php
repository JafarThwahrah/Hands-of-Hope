<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function showuserpage($id)
    {
        $User = User::where('id', $id)->get();
        $appointmentsAndDoctors = DB::table('appointment')->join('doctors', 'appointment.doctor_id', '=', 'doctors.id')->where('appointment.user_id' , $id)->get();


        $orders = User::where('id', $id)->get();

        return view('profile' ,  ['id' => $id, 'User' => $User , 'appointments' => $appointmentsAndDoctors]);

    }

    public function edituserinfo($id){
        $User = User::where('id', $id)->get();
        return view('editProfile' ,['id' => $id , 'User'=>$User]);
    }

    public function updateuserinfo(Request $request, $id){

        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            
        ]);

        

        User::where('id', $id)->update(['name' => request('Name'), 'email' => request('Email'), 'password' => request('Password')]);

        return redirect("/userprofile/$id")->with('mssg', 'Personal information updated successfully');
    

    }

    public function testimonial(){

        return view('testimonial');
    }

    public function testimonialpost(Request $request){
        
        $request->validate([
            'book_title' => 'unique:books|max:255',
            'book_author' => '',
            'book_description' => ''
        ]);
       

        $Testimonial = new Testimonial();
        

        $Testimonial->name = request('name');
        $Testimonial->email = request('email');
        $Testimonial->subject = request('subject');
        $Testimonial->message = request('message');


        $Testimonial->save();

        return redirect('/')->with('mssg', 'Book added successfully');
        
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
