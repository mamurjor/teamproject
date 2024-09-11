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
                  <h4 class="card-title"><a href="{{route('servicelist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description">Service Form </p>
                  <form id="serviceform" class="forms-sample" method="POST" action="{{route('servicestore')}}" enctype="multipart/form-data">
                    @csrf
                    
                   
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                      <label for="discription">Discription</label>
                      <textarea name="discription" id="discription" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="icon">Icon</label>
                      <input type="text" class="form-control" id="icon" name="icon">
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