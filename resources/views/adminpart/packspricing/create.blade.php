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
                  <h4 class="card-title"><a href="{{route('packspricing.index')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Packs Pricing Form </p>
                  <form id="packspricing" class="forms-sample" method="POST" action="{{route('packspricing.store')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                      <label for="package_name">Package name *</label>
                      <input type="text" class="form-control" name="package_name" id="package_name" >
                    </div>
                    <div class="form-group">
                      <label for="price">Price *</label>
                      <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group">
                      <label for="button_text">Button text *</label>
                      <input type="text" class="form-control" id="button_text" name="button_text" >
                    </div>
                    <div class="form-group">
                      <label for="button_url">Button Url *</label>
                      <input type="text" class="form-control" id="button_url" name="button_url" >
                    </div>
                    <div class="form-group">
                      <label for="package_feature">Package feature *</label>
                     
                      <div class="field_wrapper">
                        <div>
                            <input type="text" name="field_name[]" value=""/>
                            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{asset('images/add.jpeg')}}"/></a>
                        </div>
                    </div>

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