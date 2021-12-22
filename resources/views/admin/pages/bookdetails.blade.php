@extends('welcome')

@section('content')

 <h1>Book Details</h1>
     
     <p>Book Name:{{$book->book_name}}</p>
     <p>Author Name:{{$book->author_name}}</p>
     
 @endsection