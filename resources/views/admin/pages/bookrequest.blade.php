@extends('welcome')

@section('content')

 <h1>Requested Book Details</h1>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">BorrowID</th>
      <!-- <th scope="col">StudentID</th> -->
      <th scope="col">StudentName</th>
      <th scope="col">IssueDate</th>
      <th scope="col">ReturnDate</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
  @foreach($borrow as $key=>$data)
  <tr>
  
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->user->name}}</td>
    <!-- <td>{{$data->borrow_id}}</td> -->
    <td>{{$data->issue_date}}</td>
    <td>{{$data->return_date}}</td>
    <td> {{$data->status}}<td>
    <a class="btn btn-info" href="{{route('bookrequestdetails',$data->id)}}">View Details</a>
    @if($data->status=='pending')
    <a class="btn btn-dark" href="{{route('approve',$data->id)}}">Approval</a>
    @endif
    </td>
  </tr>
  @endforeach
 </tbody>  
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>

@endsection