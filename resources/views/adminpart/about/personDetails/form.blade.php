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
                  <h4 class="card-title"><a href="{{route('personDetailsList')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> About person details Form </p>
                  <form id="persondetsform" class="forms-sample" method="POST" action="{{route('personDetailsStore')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                      <label for="main_titile">Main titile</label>
                      <input type="text" class="form-control" name="main_titile" id="main_titile">
                    </div>
                    <div class="form-group">
                      <label for="sub_titile">Sub titile</label>
                      <input type="text" class="form-control" name="sub_titile" id="sub_titile" >
                    </div>
                    <div class="form-group">
                      <label for="discription">Discription</label>
                      <input type="text" class="form-control" id="discription" name="discription">
                    </div>
                    <div class="form-group">
                      <label for="btn_text">Button text</label>
                      <input type="text" class="form-control" name="btn_text" id="btn_text" >
                    </div>
                    <div class="form-group">
                      <label for="btn_url">Button Url</label>
                      <input type="text" class="form-control" name="btn_url" id="btn_url" >
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