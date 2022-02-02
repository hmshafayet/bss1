@extends('welcome')

@section('content')

<div style="margin: 30px; background: #e4dcc4; padding: 20px;">

 <h1><b>Add Book Category</b></h1>
 <form action="{{route('submitcategory')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInputcategory">Category</label>
    <input name="categoryname" type="text" class="form-control" id="exampleInputCategory" aria-describedby="CategoryHelp" placeholder="Enter books category here">
    <small id="CategoryHelp" class="form-text text-muted"></small>
 
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
<div>
  <table class="table table-light" style="width: 100">
    <thead>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <!-- <th scope="col">Category Details</th> -->
      <th scope="col">Action</th>
    </thead>
    <tbody>
      @foreach($addcategory as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->categoryname}}</td>
        <td>
        
          <a class="btn btn-info" href="{{route('category.delete',$item->id)}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</div>

@endsection