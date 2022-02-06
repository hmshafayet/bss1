@extends('welcome')

@section('content')

<div style="margin: 30px; background: #e4dcc4; padding: 20px;">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
      @foreach($user as $data)
    <tr>
      <th scope="row">1</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>

@endsection