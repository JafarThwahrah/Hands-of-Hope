@extends('admin.index')

@section('content')


<div class="d-flex justify-content-between">
    <div class="h4" style="color: black">All Departments</div>
</div>
<table class="table text-center table-hover">
    <thead style="color:#1D2A4D; ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Department Name</th>
        <th scope="col">Description</th>
        <th scope="col">Members</th>
        <th scope="col">edit/delete</th>

    </tr>
    </thead>
    <tbody style="color:#354F8E">
    @foreach($allDepartments as $department)
       
        <tr>

            <td>{{$department->id}}</td>
            <td>{{$department->name}}</td>
            <td>{{$department->description}}</td>
            <td>{{$department->numberOfMembers}}</td>
             <td>  
                 <div>
                    <a class="fa-solid fa-user-pen me-2"  style="color:green" href="editDepartment/{{$department->id}}"></a>
                   <a class="fa-solid fa-trash"  style="color: red"  onclick="deleteDepartment(this,{{$department->id}})"></a>
                </div>
            </td>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection