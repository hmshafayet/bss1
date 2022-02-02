@extends('website.master')

@section('content')

@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif
@if(session()->has('error'))
    <p class="alert alert-danger">
        {{ session()->get('error') }}
</p>
@endif




<div class="container emp-profile" style="padding:10px;">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{url('/uploads/uploads/users',$profile->image)}}" style="width: 100px; height: 100px;border-radius: 100%;" alt=""/>
                            <h3 style="text-transform: capitalize;"> 
                                       {{$profile->name}}
                            </h3>
                        </div>
                    </div>
                    
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <h6><b>Email:</b> {{$profile->email}}</h6>
                            <h6><b>StudentID:</b> {{$profile->studentid}}</h6>
                            <h6><b>Mobile:</b> {{$profile->mobile}}</h6>
                            <a class="btn btn-info" href="{{route('profile.edit',$profile->id)}}">Edit Profile</a>
                        </div>
                    </div>
                   
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- table here -->
 
                                        <table class="table table-dark">
  <thead>
 
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Issue date</th>
      <th scope="col">Status</th>
      <th scope="col">Return Date</th>
      <th scope="col">Action</th>
    </tr>
   
  </thead>
  <tbody>
  @foreach ($myCollection as $key=>$viewprofile)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$viewprofile->issue_date}}</td>
      <td>{{$viewprofile->status}}</td>
      <td>{{$viewprofile->return_date}}</td>
      <td>
      <a class="btn btn-info" href="{{route('request.details',$viewprofile->id)}}">View Details</a>
      @if($viewprofile->status=='pending')
      <a class="btn btn-danger" href="{{route('cancel',$viewprofile->id)}}">Cancel</a>   
         @endif
         @if($viewprofile->status=='Approved' && $viewprofile->return_date <=now())
      <a href="{{route('borrow.return',$viewprofile->id)}}" class="btn btn-danger" href="">Return</a>
      @endif
      </td>
     
    </tr>
    @endforeach
  </tbody>
</table>


                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
  
@endsection