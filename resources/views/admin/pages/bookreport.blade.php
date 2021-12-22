@extends('welcome')

@section('content')

 <h1>Book Report</h1>

 @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif

<table class="table">
  <thead>
    <tr>
    <th scope="col">Sl</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book ISBN</th>
      <th scope="col">Author Name</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach ($viewbookreport as $key=>$viewbookreport)
    <tr>
      <td>{{$viewbookreport->id}}</td>
      <td>{{$viewbookreport->book_name}}</td>
      <td>{{$viewbookreport->ssl_no}}</td>
      <td>{{$viewbookreport->author_name}}</td>
      <td>{{$viewbookreport->category}}</td>
      <td>{{$viewbookreport->quantity}}</td>
      <td>{{$viewbookreport->status}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('bookdetails',$viewbookreport->id)}}">Book Details</a>
        <a class="btn btn-info" href="{{route('bookdelete',$viewbookreport->id)}}">Delete</a>
      </td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection