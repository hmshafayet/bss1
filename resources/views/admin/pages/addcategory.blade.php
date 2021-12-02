@extends('welcome')

@section('content')

 <h1>Add Book Category</h1>
 <form action="{{route('submitcategory')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInputcategory">Category</label>
    <input name="categoryname" type="text" class="form-control" id="exampleInputCategory" aria-describedby="CategoryHelp" placeholder="Enter books category here">
    <small id="CategoryHelp" class="form-text text-muted"></small>
 
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
 


@endsection