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
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach ($viewbookreport as $key=>$book)
    <tr>
   
      <td>{{$book->id}}</td>
      <td>{{$book->book_name}}</td>
      <td>{{$book->ssl_no}}</td>
      <td>{{$book->author_name}}</td>
      <td>
        <img src="{{url('uploads/uploads/book/'.$book->image)}}"width="100px">
      </td>
      <td>{{optional($book->categories)->categoryname}}</td>
      <td>{{$book->quantity}}</td>
      <td>{{$book->status}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('bookdetails',$book->id)}}">Book Details</a>
        <a class="btn btn-info" href="{{route('bookdelete',$book->id)}}">Delete</a>
      </td>


    </tr>
    @endforeach
  </tbody>
</table>

@endsection