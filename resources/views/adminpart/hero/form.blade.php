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
                  <h4 class="card-title"><a href="{{route('herolist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Hero Form </p>
                  <form class="forms-sample" method="POST" action="{{route('heroFormDataCatch')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                      <label for="personalText">Personal Text</label>
                      <input type="text" class="form-control" name="personalText" id="personalText" placeholder="Personal Text">
                    </div>
                    <div class="form-group">
                      <label for="username">User Name</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    </div>
                    <div class="form-group">
                      <label for="shortDis">Short Discription</label>
                      <input type="text" class="form-control" id="shortDis" name="shortDis" placeholder="Short Discription">
                    </div>
                    <div class="form-group">
                      <label for="btn_text">Button text</label>
                      <input type="text" class="form-control" name="btn_text" id="btn_text" placeholder="Button text">
                    </div>
                    <div class="form-group">
                      <label for="btn_url">Button Url</label>
                      <input type="text" class="form-control" name="btn_url" id="btn_url" placeholder="Button Url">
                    </div>

                    <div class="form-group">
                      <label for="image">Upload Banner Image</label>
                      <input type="file" class="form-control" name="image" id="image">
                     
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