@extends('welcome')

@section('content')

 <h1>Student Details</h1>
     <p>Student Name:{{$student->name}}</p>
     <p>Student Email:{{$student->email}}</p>
 @endsection