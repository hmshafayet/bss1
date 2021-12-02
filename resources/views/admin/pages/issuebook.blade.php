@extends('welcome')

@section('content')

 <h1>Issue Book</h1>

<form  action="{{route('submitissue')}}" method="post">
  @csrf
<div class="form-group col-md-10 ">
    <label for="exampleInputPersonname">Student Name</label>
    <input name="studentname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Student name">
  </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputPersonname">Student Id</label>
    <input name="studentid" type="number" class="form-control" id="exampleInputPassword1" placeholder="Student ID">
  </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputSelectBook"> Book Name</label>
    <input name="bookname" type="text" class="form-control" id="exampleInputSelectbook" aria-describedby="selectbookHelp" placeholder="Enter Book Name Here">
    <small id="selectbookHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputSelectBook">Book Id</label>
    <input name="bookid" type="number" class="form-control" id="exampleInputSelectbookid" aria-describedby="selectbookidHelp" placeholder="Enter Bookid Here">
    <small id="selectbookidHelp" class="form-text text-muted"></small>
  </div>
  
  <div class="form-group col-md-10 ">
    <label for="exampleInputSelectBook">Issue date</label>
    <input name="issuedate" type="datetime-local" class="form-control" id="exampleInputSelectbookid" aria-describedby="selectbookidHelp" placeholder="Enter Bookid Here">
    <small id="selectbookidHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-10 ">
    <label for="exampleInputSelectBook">Return date</label>
    <input name="returndate" type="datetime-local" class="form-control" id="exampleInputSelectbookid" aria-describedby="selectbookidHelp" placeholder="Enter Bookid Here">
    <small id="selectbookidHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Issue Book</button>
</form>

@endsection