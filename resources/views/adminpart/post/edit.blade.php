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
                  <h4 class="card-title"><a href="{{route('postlist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Hero Form </p>
                  <form id="postform" class="forms-sample" method="POST" action="{{route('postupdate',$post->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" value="{{$post->title}}" id="title">
                    </div>
                    <div class="form-group">
                      <label for="short_dis">short discription</label>
                      <input type="text" class="form-control" name="short_dis" value="{{$post->short_dis}}" id="short_dis" >
                    </div>
                    <div class="form-group">
                      <label for="long_dis">Long Discription</label>
                      <input type="text" class="form-control" id="long_dis" name="long_dis" value="{{$post->long_dis}}">
                    </div>
                    <div class="form-group">
                      <label for="feature_image">Feature image</label>
                      <input type="text" class="form-control" name="feature_image" value="{{$post->feature_image}}" id="feature_image" >
                    </div>
                    <div class="form-group">
                      <label for="cat_id">Category id</label>
                      <input type="text" class="form-control" name="cat_id" value="{{$post->cat_id}}" id="cat_id" >
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