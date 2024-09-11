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
                  <p class="card-description"> Expersise Form </p>
                  <form id="resumeexpertiseform" class="forms-sample" action="{{route('expertisestore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Year</label>
                      <input type="text" name="year" class="form-control" id="exampleInputName1" placeholder="Year">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Designation</label>
                      <input type="text" name="designation" class="form-control" id="exampleInputEmail3" placeholder="Designation">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Discription</label>
                      <textarea name="discription" class="form-control" id="" cols="30" rows="10"></textarea>
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