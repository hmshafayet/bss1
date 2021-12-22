@extends('welcome')

@section('content')

 <h1>Student Report</h1>

 @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif

 <table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">StudentId</th>
      <th scope="col">Email</th>
      <th scope="col">Issued Book</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
   <tbody>
     @foreach ($reports as $key=>$report)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$report->name}}</td>
      <td>{{$report->student_id}}</td>
      <td>{{$report->email}}</td>
      <td></td>
      <td>
        <a class="btn btn-primary" href="{{route('studentdetails',$report->id)}}">Details</a>
        <a class="btn btn-info" href="{{route('studentdelete',$report->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection