@extends('website.master')

@section('content')





<div class="row">
<div class="col-md-3">
<h2> Register Here </h2>

</div> 
<div class="col-md-6">
@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif
<form action="{{route('user.signup.store')}}" type="form" method="post">
  @csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input   name="user_name" type="text" class="form-control" id="name" placeholder="enter your name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="user_email" placeholder="enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="user_password" placeholder="enter your password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="mobilenumber" class="form-label">Mobile</label>
    <input name="user_mobile" placeholder="enter your mobile number" type="text" class="form-control" id="mobile"  >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
<div class="col-md-3"></div> 
</div>

@endsection