@extends('website.master')

@section('content')

<h1 style="padding-top: 100px;">My Book ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Book Name</th>
            <th scope="col">Quantity</th> 
            <th scope="col">Author Name</th>
            <th scope="col">Book ISBN</th>
           
           
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @foreach($carts as $key=>$data)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$data['book_name']}}</td>
            <td>{{$data['book_qty']}}</td>
            <td>{{$data['author_name']}}</td>
            <td>{{$data['ssl_no']}}</td>
           
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Your Book</a>

    <div class="row">
    <div class="col-4">
</div>
<div class="col-4">
</div>
    <div class="col-4">
    <form action="{{route('confirm.book')}}" method="post">
@csrf
    <label for="">Issue Date:</label>
    
    <input type="date" name="issue_date" required class="form-control">

        <label for="">Return date:</label>
    
        <input type="date" name="return_date" required class="form-control">

    <button style="padding-top:10px" type="submit" class="btn btn-info">Confirm Book</button>

   

    </form>
    
    </div>
    </div>
    
   

@endsection