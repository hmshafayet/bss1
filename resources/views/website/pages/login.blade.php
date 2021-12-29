@extends('website.master')

@section('content')





<div class="row">
<div class="col-md-3">
<h2> Login Here </h2>

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

<form action="{{route('customer.login.post')}}" type="form" method="post">
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required name="email" placeholder="enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required name="password" placeholder="enter your password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
<div class="col-md-3"></div> 
</div>

@endsection