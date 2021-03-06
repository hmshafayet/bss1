@extends('welcome')

@section('content')
<div style="margin: 30px 120px 30px 120px; background: #edf1f5; padding: 5px;">
@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif
 <h1 style="text-align: center;"><b>Add Book</b></h1>
 <form action="{{route('submitbook')}}" method="post" enctype="multipart/form-data">
     @csrf
  <div class="form-group  col-md-10">
    <label for="exampleInputEmail1">Title of Book</label>
    <input name="booktitle" type="text" class="form-control" id="exampleInputBook" aria-describedby="bookHelp" placeholder="Enter book title here">
    <small id="bookHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputAuthor">Author Name</label>
    <input name="authorname" type="text" class="form-control" id="exampleInputAuthor" aria-describedby="bookHelp" placeholder="Enter author name here">
    <small id="authorHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputAuthor">Book ID</label>
    <input name="bookid" type="number" min="1000" class="form-control" id="exampleInputbookid" aria-describedby="bookidHelp" placeholder="Enter book id here">
    <small id="bookidHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
    <label for="exampleInputImage">Image</label>
    <input name="image" type="file" class="form-control" id="exampleInputImage" aria-describedby="imageHelp" placeholder="Insert image here">
    <small id="imageHelp" class="form-text text-muted"></small>
  </div>
 
  <div class="form-group col-md-10 ">
    <label for="exampleInputdescription">Description of Book</label>
    <input name="bookdescription" type="text" class="form-control" id="exampleInputdescription" aria-describedby="bookHelp" placeholder="Enter book description here">
    <small id="descriptionHelp" class="form-text text-muted"></small>
  </div>
  
  <div class="form-group col-md-10">
      <label for="inputcategory">Category</label>
      <select name="category" id="inputcategory" class="form-control">
        <option selected>Enter Category Name</option>
      
        @foreach($categories as $category)

<option value="{{$category->id}}">{{$category->categoryname}}</option>

@endforeach
      </select>
    </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputNumber of Issues">Number of Issues Book</label>
    <input name="number" type="number" class="form-control" id="exampleInputNumber of Issues" min="1" placeholder="Number of Issues">
  </div>
  <button type="submit" class="btn btn-info">Add Book</button>
  
  
</form>
</div>


@endsection