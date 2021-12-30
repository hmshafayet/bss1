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
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">StudentId</th>
      <th scope="col">Email</th>
      <th scope="col">Issued Book</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
   <tbody>
     @foreach ($reports as $key=>$student)
    <tr>
      <th>{{$key+1}}</th>
      <td><img style="border-radius: 4px;" width="100px;" src="{{url('uploads/uploads/student/'.$student->image)}}" alt="student" ></td>
      <td>{{$student->name}}</td>
      <td>{{$student->student_id}}</td>
      <td>{{$student->email}}</td>
      <td></td>
      <td>
        <a class="btn btn-primary" href="{{route('studentdetails',$student->id)}}">Details</a>
        <a class="btn btn-info" href="{{route('studentdelete',$student->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection