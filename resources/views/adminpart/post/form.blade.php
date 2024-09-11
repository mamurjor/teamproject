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
                  <h4 class="card-title"><a href="{{route('postlist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Post Form </p>
                  <form id="postform" class="forms-sample" method="POST" action="{{route('poststore')}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" >
                    </div>
                    <div class="form-group">
                      <label for="short_dis">short discription</label>
                      <input type="text" class="form-control" name="short_dis" id="short_dis">
                    </div>
                    <div class="form-group">
                      <label for="long_dis">Long Discription</label>
                      <textarea id="editor" name="long_dis" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="feature_image">Feature image</label>
                      <input type="file" class="form-control" name="feature_image" id="feature_image">
                    </div>
                    <div class="form-group">
                      <label for="cat_id">Category Id</label>
                      <input type="text" class="form-control" name="cat_id" id="cat_id" >
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