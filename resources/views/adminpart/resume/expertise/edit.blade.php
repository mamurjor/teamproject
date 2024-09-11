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
      <!-- partial -->
      

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><a href="{{route('expertiselist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Expertise  update form </p>
                  <form id="resumeexpertiseform" class="forms-sample" method="POST" action="{{route('expertiseupdate',$resumeexpertise->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                      <label for="year">Year</label>
                      <input type="text" class="form-control" name="year" id="year" value="{{$resumeexpertise->year}}" >
                    </div>
                    <div class="form-group">
                      <label for="designation">Designation</label>
                      <input type="text" class="form-control" name="designation" id="designation" value="{{$resumeexpertise->designation}}">
                    </div>
                    <div class="form-group">
                      <label for="discription">Discription</label>
                      <input type="text" class="form-control" id="discription" name="discription" value="{{$resumeexpertise->discription}}" >
                    </div>
                  
                   

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                   
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