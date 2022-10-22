<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $allUsers = User::all();
        $allDoctors = doctor::all();
        return view('admin.overview', ['allUsers' => $allUsers, 'allDoctors' => $allDoctors]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allDoctor()
    {

        $allDoctors = doctor::all();
        $approved = doctor::all('status')->where('status', '=', 'Approve');
        $pending = doctor::all('status')->where('status', '=', 'pending ');
        return view('admin.allDoctor', ['allDoctors' => $allDoctors, 'approved' => $approved, 'pending' => $pending]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allProduct()
    {
        //TODO get All product From table
        $allProduct = product::all();
        return view('admin.allProduct',['allProduct'=>$allProduct]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function allUsers()
    {

        $allUsers = User::all();
        // $approved = doctor::all('status')->where('status','=','Approve');
        // $pending = doctor::all('status')->where('status','=','pending ');
        return view('admin.allUsers', ['allUsers' => $allUsers]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        dd($request);
        //TODO add product to table
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editUser($id)
    {
        $user = User::find($id);

        return view('admin.editUser', ['user' => $user]);
    }

    public function editDoctor($id)
    {
        $doctor = doctor::find($id);

        return view('admin.editDoctor', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function storeEdit(Request $request, $id)
    {
        // dd($request);
        //TODO: handle update user
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect('admin')->withSuccess('User Updated');
    }

    public function storeEditDoctor(Request $request, $id)
    {
        //TODO: handle update doctor
//        dd($request);
        $doctor = doctor::find($id);
        $doctor->email = $request->email;
        $doctor->name = $request->name;
        $doctor->password = $request->password;
        $image = base64_encode(file_get_contents($request->file('image')));
        $doctor->image = $image;
        $certificate = base64_encode(file_get_contents($request->file('certificate')));
        $doctor->certificate = $certificate;
        $doctor->status = $request->status;
        $doctor->save();
        return redirect('admin')->withSuccess('Doctor Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function destroy($id)
    {
        $allUsers = User::destroy($id);

        return response()->json($allUsers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     */
    public function deleteDoctor($id)
    {
        $doctor = doctor::destroy($id);

        return response()->json($doctor);
    }
}
