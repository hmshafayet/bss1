@extends('website.master')

@section('content')
<div style="margin: 60px;">
<form action="{{route('available.book')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search for books,author" name="search" class="form-control">
        </div>
        <div  class="col-md-4">
            <button type="submit" class="btn btn-dark">Search</button>
        </div>
    </div>
    </form>
    @if($key)
    <h4>
         {{$key}} : <b>Total Result Found:<b> {{$books->count()}}
    </h4>
@endif
</div>

<section class="services"> 
      <div class="container">

        <div class="row">
        @foreach($books as $key=>$item)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon">
                <img width ="60px" height="100px" src="{{url('uploads/uploads/book/'.$item->image)}}" alt="">
                </div>
                
             <div>
             <h4 class="title"><a href="">{{$item->book_name}}</a></h4>
             </div>
              
              <a href="{{route('cart.add',$item->id)}}" class="btn btn-primary">Borrow</a>
            </div>
          </div>
          @endforeach
      </div>
    </section>
    @endsection