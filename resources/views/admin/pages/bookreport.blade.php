@extends('welcome')

@section('content')

<div style="margin: 30px; background: #e4dcc4; padding: 20px;">

 <h1 >Available Book </h1>

 @if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif

<form action="{{route('bookreport')}}" method="get">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="search" placeholder="Search here...">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>

    @if($key)
    <h3>Found {{$viewbookreport->count()}} {{$key}} </h3>
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
   
      <td>{{$key+1}}</td>
      <td>{{$book->book_name}}</td>
      <td>{{$book->ssl_no}}</td>
      <td>{{$book->author_name}}</td>
      <td>
        <img style="border-radius: 4px;" width="100px;" src="{{url('uploads/uploads/book/'.$book->image)}}" alt="book" >
      </td>
      <td>{{optional($book->categories)->categoryname}}</td>
      <td>{{$book->quantity}}</td>
      <td>{{$book->status}}</td>
      <td>
        <a class="btn btn-primary" href="{{route('bookdetails',$book->id)}}">Book Details</a>
        <a class="btn btn-info" href="{{route('bookdelete',$book->id)}}">Delete</a>
        <a class="btn btn-info" href="{{route('bookedit',$book->id)}}">Edit</a>
      </td>


    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection