@extends('welcome')

@section('content')

<h1>Update Book</h1>
 <form action="{{route('bookupdate',$book->id)}}" method="post" enctype="multipart/form-data">
   @method('PUT')
     @csrf

  <div class="form-group  col-md-10">
    <label for="exampleInputEmail1">Title of Book</label>
    <input value="{{$book->book_name}}" name="booktitle" type="text" class="form-control" id="exampleInputBook" aria-describedby="bookHelp" placeholder="Enter book title here">
    <small id="bookHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputAuthor">Author Name</label>
    <input  value="{{$book->author_name}}" name="authorname" type="text" class="form-control" id="exampleInputAuthor" aria-describedby="bookHelp" placeholder="Enter author name here">
    <small id="authorHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputAuthor">Book ID</label>
    <input  value="{{$book->ssl_no}}" name="bookid" type="number" class="form-control" id="exampleInputbookid" aria-describedby="bookidHelp" placeholder="Enter book id here">
    <small id="bookidHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputImage">Image</label>
    <input   name="image" type="file" class="form-control" id="exampleInputImage" aria-describedby="imageHelp" placeholder="Insert image here">
    <small id="imageHelp" class="form-text text-muted"></small>
  </div>
 
  <div class="form-group col-md-10 ">
    <label for="exampleInputdescription">Description of Book</label>
    <input  value="{{$book->description}}" name="bookdescription" type="text" class="form-control" id="exampleInputdescription" aria-describedby="bookHelp" placeholder="Enter book description here">
    <small id="descriptionHelp" class="form-text text-muted"></small>
  </div>
  
  <div class="form-group col-md-10">
      <label for="inputcategory">Category</label>
      <select name="category" id="inputcategory" class="form-control">
        <option selected>Enter Category Name</option>
      
        @foreach($categories as $category)

<option 
@if($category->id==$book->category)
selected
@endif
value="{{$category->id}}">{{$category->categoryname}}</option>

@endforeach
      </select>
    </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputNumber of Issues">Number of Issues Book</label>
    <input value="{{$book->quantity}}" name="number" type="number" class="form-control" id="exampleInputNumber of Issues" placeholder="Number of Issues">
  </div>
  <button type="submit" class="btn btn-info">Update</button>
  
  
</form>


@endsection
