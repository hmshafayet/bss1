@extends('welcome')
@section('content')
<div style="margin: 10px 30px 90px 30px; background: #A1045A; padding: 20px;">
<style>
        .card-box {
            position: relative;
            color: #fff;
            padding: 20px 10px 40px;
            margin: 20px 0px;
        }
        .card-box:hover {
            text-decoration: none;
            color: #f1f1f1;
        }
        .card-box:hover .icon i {
            font-size: 100px;
            transition: 1s;
            -webkit-transition: 1s;
        }
        .card-box .inner {
            padding: 5px 10px 0 10px;
        }
        .card-box h3 {
            font-size: 27px;
            font-weight: bold;
            margin: 0 0 8px 0;
            white-space: nowrap;
            padding: 0;
            text-align: left;
        }
        .card-box p {
            font-size: 15px;
        }
        .card-box .icon {
            position: absolute;
            top: auto;
            bottom: 5px;
            right: 5px;
            z-index: 0;
            font-size: 72px;
            color: rgba(0, 0, 0, 0.15);
        }
        .card-box .card-box-footer {
            position: absolute;
            left: 0px;
            bottom: 0px;
            text-align: center;
            padding: 3px 0;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            text-decoration: none;
        }
        .card-box:hover .card-box-footer {
            background: rgba(0, 0, 0, 0.3);
        }
        .bg-blue {
            background-color: #00c0ef !important;
        }
        .bg-green {
            background-color: #00a65a !important;
        }
        .bg-orange {
            background-color: #f39c12 !important;
        }
        .bg-red {
            background-color: #d9534f !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-8">
                <div class="card-box bg-secondary">
                    <div class="inner">
                        <h3> {{$book}} </h3>
                        <p> Books </p>
                    </div>
                    <div class="icon">
                     
                        <i class="fas fa-book" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('bookreport')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-4">
                <div class="card-box bg-green">
                    <div class="inner">
                        <h3> {{$approve}} </h3>
                        <p> Total Borrows </p>
                    </div>
                    <div class="icon">
                        
                        <i class="fa fa-vote-yea"aria-hidden="true"></i>
                        >
                    </div>
                    <a href="{{route('bookrequest')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card-box bg-info">
                    <div class="inner">
                        <h3>{{$return}}</h3>
                        <p> Total Returned </p>
                    </div>
                    <div class="icon">
                        
                        <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('bookrequest')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
             

            <div class="col-lg-4 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <h3> {{$cancel}}</h3>
                        <p> Request Cancel  </p>
                    </div>
                    <div class="icon">
                        
                        <i class="fas fa-pause"  aria-hidden="true"></i>
                    </div>
                    <a href="{{route('bookrequest')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="card-box bg-red">
                    <div class="inner">
                        <h3>{{$student}}</h3>
                        <p> Total Students </p>
                    </div>
                    <div class="icon">
                       
                        <i class="fas fa-child"aria-hidden="true"></i>
                    </div>
                    <a href="{{route('customer.list')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card-box bg-purple">
                    <div class="inner">
                        <h3> {{$pending}}</h3>
                        <p> Pending Request</p>
                    </div>
                    <div class="icon">
                        
                        <i class="fas fa-sync fa-spin"  aria-hidden="true"></i>
                    </div>
                    <a href="{{route('bookrequest')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection