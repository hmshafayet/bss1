@extends('welcome')

@section('content')

 <h1>Add Book</h1>
 <form action="{{route('submitbook')}}" method="post">
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
    <input name="bookid" type="number" class="form-control" id="exampleInputbookid" aria-describedby="bookidHelp" placeholder="Enter book id here">
    <small id="bookidHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputdescription">Description of Book</label>
    <input name="bookdescription" type="text" class="form-control" id="exampleInputdescription" aria-describedby="bookHelp" placeholder="Enter book description here">
    <small id="descriptionHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10">
      <label for="inputcategory">Category</label>
      <select name="bookcategory" id="inputcategory" class="form-control">
        <option selected>Enter category name</option>
        <option>novel </option>
        <option>fiction </option>
        <option>history </option>
        <option>nonfiction </option>
      </select>
    </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputNumber of Issues">Number of Issues Book</label>
    <input name="number" type="number" class="form-control" id="exampleInputNumber of Issues" placeholder="Number of Issues">
  </div>
  <button type="submit" class="btn btn-info">Add Book</button>
  
  
</form>


@endsection