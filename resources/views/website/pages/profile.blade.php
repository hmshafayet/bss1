@extends('website.master')

@section('content')




<div class="container emp-profile" style="padding:10px;">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                               <h6>
                               Hello,
                            </h6>
                                    <h1 style="text-transform: capitalize;"> 
                                       {{$profile->name}}
                                    </h1>
                                    
                                    <p class="proile-rating"> <span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Collection</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a class="btn btn-info" href="">Edit Profile</a>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>My interest</p>
                            <a href="">Sports</a><br/>
                            <a href="">Comics</a><br/>
                            <a href="">Novel</a>
                            
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
      <a class="btn btn-info" href="{{route('cancel',$viewprofile->id)}}">Cancel</a>   
         
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