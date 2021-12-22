@extends('welcome')

@section('content')

 <h1>Issued Book Report</h1>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Id</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book ISBN</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Fine</th>
    </tr>
   </thead>
  <tbody>
  @foreach ($viewissuereports as $key=>$viewissuereport)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$viewissuereport->studentname}}</td>
      <td>{{$viewissuereport->studentid}}</td>
      <td>{{$viewissuereport->bookname}}</td>
      <td>{{$viewissuereport->bookid}}</td>
      <td>{{$viewissuereport->issuedate}}</td>
      <td>{{$viewissuereport->returndate}}</td>
  
    </tr>
    @endforeach
  </tbody>
 
</table>


@endsection