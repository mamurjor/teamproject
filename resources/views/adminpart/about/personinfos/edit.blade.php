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
                  <h4 class="card-title"><a href="{{route('personinfoslist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> About person infos edit Form </p>
                  <form id="" class="forms-sample" method="POST" action="{{route('personinfosupdate',$aboutperInfos->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                      <label for="birthday">Birthday</label>
                      <input type="text" class="form-control" name="birthday" value="{{$aboutperInfos->birthday}}" id="birthday">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" value="{{$aboutperInfos->email}}" id="email" >
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{$aboutperInfos->phone}}">
                    </div>
                    <div class="form-group">
                      <label for="skype">Skype</label>
                      <input type="text" class="form-control" name="skype" value="{{$aboutperInfos->skype}}" id="skype" >
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" value="{{$aboutperInfos->address}}" id="address" >
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