@extends('website.master')

@section('content')


<div style="margin: 20px 200px 20px 200px; background: #e4dcc4; padding: 20px;">


<div class="row">
<div class="col-md-4">
<h2> Register Here </h2>
</div> 
<div class="col-md-6">
@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('user.signup.store')}}" method="post" enctype="multipart/form-data">
   @csrf
  
   <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input required  name="name" type="text" class="form-control" id="name" placeholder="enter your name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email" placeholder="enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required name="password" placeholder="enter your password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="mobilenumber" class="form-label">Mobile</label>
    <input required name="mobile" placeholder="enter your mobile number" type="text" class="form-control" id="mobile"  >
  </div>
  <div class="mb-3">
    <label for="mobilenumber" class="form-label">Student ID</label>
    <input  name="student_id" placeholder="enter your varsity id here" type="text" class="form-control" id=""  >
  </div>
  <div class="mb-3">
    <label for="form3Example1n" class="form-label">Image</label>
    <input  name="image" placeholder="uploads image" type="file" class="form-control form-control-lg" id="form3Example1n"  >
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
<div class="col-md-3"></div> 
</div>

</div>
@endsection