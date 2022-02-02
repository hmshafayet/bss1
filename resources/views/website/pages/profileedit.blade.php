@extends('website.master')

@section('content')

<form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
@method('PUT')
   @csrf
   <div style="margin: 30px 300px 30px 300px; background: #311432;color: white; padding: 20px;">

   <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input value="{{$profile->name}}" name="name" type="text" class="form-control" id="name" placeholder="change your name">
  </div>
  <div class="mb-3">
    <label for="mobilenumber" class="form-label">Mobile</label>
    <input value="{{$profile->mobile}}" name="mobile" placeholder="change your mobile number" type="text" class="form-control" id="mobile"  >
  </div>
  
  <div class="mb-3">
    <label for="form3Example1n" class="form-label">Image</label>
    <input  name="image" placeholder="uploads image" type="file" class="form-control form-control-lg" id="form3Example1n"  >
</div>
<button type="submit" class="btn btn-info">Update</button>
</div>
</form>
@endsection