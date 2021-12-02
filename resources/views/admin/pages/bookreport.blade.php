@extends('welcome')

@section('content')

 <h1>Book Report</h1>

<table class="table">
  <thead>
    <tr>
    <th scope="col">sl</th>
      <th scope="col">Book Name</th>
      <th scope="col">ssl</th>
      <th scope="col">Author Name</th>
      <th scope="col">Details</th>

      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($viewbookreport as $book)
    <tr>
      <td>{{$book->id}}</td>
      <td>{{$book->book_name}}</td>
      <td>{{$book->ssl_no}}</td>
      <td>{{$book->author_name}}</td>
      <td>{{$book->description}}</td>
      <td>{{$book->price}}</td>
      <td>{{$book->quantity}}</td>
      <td>{{$book->status}}</td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection