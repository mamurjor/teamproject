@extends('layouts.admin')


@section('maincontent')

<div class="container-scroller">
 @include('adminpart.probanner')
    <!-- partial:partials/_navbar.html -->
    @include('adminpart.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('adminpart.sidebar')
    

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><a href="{{route('herolist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Hero Form </p>
                  <form id="heroform" class="forms-sample" method="POST" action="{{route('heroupdate',$hero->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                      <label for="person_text">Personal Text</label>
                      <input type="text" class="form-control" name="person_text" value="{{$hero->person_text}}" id="personalText" placeholder="Personal Text">
                    </div>
                    <div class="form-group">
                      <label for="user_name">User Name</label>
                      <input type="text" class="form-control" name="user_name" value="{{$hero->user_name}}" id="user_name" >
                    </div>
                    <div class="form-group">
                      <label for="short_dis">Short Discription</label>
                      <input type="text" class="form-control" id="short_dis" name="short_dis" value="{{$hero->short_dis}}">
                    </div>
                    <div class="form-group">
                      <label for="button_text">Button text</label>
                      <input type="text" class="form-control" name="button_text" value="{{$hero->button_text}}" id="button_text" >
                    </div>
                    <div class="form-group">
                      <label for="button_url">Button Url</label>
                      <input type="text" class="form-control" name="button_url" value="{{$hero->button_url}}" id="button_url" >
                    </div>

                    <div class="form-group">
                      <label for="image">Upload Banner Image</label>
                      <input type="file" class="form-control" name="image" value="{{$hero->image}}" id="image">
                     
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <!-- content-wrapper ends -->
      




        {{-- @include('adminpart.mainpanel')--}}
      
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('adminpart.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


    
@endsection