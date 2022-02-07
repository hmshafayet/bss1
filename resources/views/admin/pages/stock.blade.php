@extends('welcome')

@section('content')


<div style="margin: 10px 120px 90px 120px; padding: 20px;">
<h1><b>Book Stocks</b> </h1>

<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col" style="color: white;">Sl</th>
      <th scope="col" style="color: white;">Book Name</th>
      <th scope="col" style="color: white;">Quantity</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($quantity as $key=>$data)
    <tr>
      <th scope="row" style="color: white;">{{$key+1}}</th>
      <td style="color: white;">{{$data->book_name}}</td>
      <td style="color: white;">{{$data->quantity}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection