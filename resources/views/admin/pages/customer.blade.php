@extends('welcome')

@section('content')

<div style="margin: 30px; background: #e4dcc4; padding: 20px;">
@if(session()->has('success'))
			<span class="alert alert-danger">{{session()->get('success')}}</span>
			@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">StudentID</th>
      <th scope="col">Image</th>
      <th scope="col">Mobile</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($user as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->studentid}}</td>
      <td>
        <img style="border-radius: 4px;"  width="100px;" src="{{url('uploads/uploads/users/'.$data->image)}}" alt="book" >
      </td>
      <td>{{$data->mobile}}</td>
      

      <td><a class="btn btn-dark" href="{{route('deletestudent',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>


@endsection