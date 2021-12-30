@extends('welcome')

@section('content')

 <h1>Add Student</h1>
 <div class="row">
 <div class="col-sm-1"> </div>
  <div class="col-sm-10">
        <form action="{{route('submitstudent')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputname">Image</label>
                <input name="image" type="file" class="form-control" id="exampleInputimage" aria-describedby="imageHelp" placeholder="Enter Image">
                <small id="ImageHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputname">Student Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter Name">
                <small id="nameHelp" class="form-text text-muted">We'll never share your details.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputname">Student Id</label>
                <input name="studentid" type="number" class="form-control" id="exampleInputStudentID" aria-describedby="StudentidHelp" placeholder="Stdent ID">
                <small id="IDHelp" class="form-text text-muted"></small>
</div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blood Group</label>
                <input name="bloodgroup" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter blood group">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input name="studenttype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter blood group">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
</div>
<div class="col-sm-1"> </div>
</div>
 

@endsection