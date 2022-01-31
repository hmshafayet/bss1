@extends('welcome')

@section('content')

<h1>Request Details</h1>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Borrow Details ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Book ISBN</th>
    
    
    </tr>
  </thead>
  <tbody>
 @foreach($bookrequest as $data)
    <tr>
  
      <td>{{$data->id}}</td>
      <td>{{$data->book->book_name}}</td>
      <td>{{$data->book->author_name}}</td>
      <td>{{$data->book->ssl_no}}</td>

    </tr>
  @endforeach
  </tbody>
</table>
</div>

@endsection