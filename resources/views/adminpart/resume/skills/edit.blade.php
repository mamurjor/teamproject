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
                  <h4 class="card-title"><a href="{{route('skilllist')}}"><i class="fa-solid fa-arrow-left"></i>Back</a></h4>
                  <p class="card-description"> Skill  edit form </p>
                  <form id="skillform" class="forms-sample" method="POST" action="{{route('skillupdate',$skill->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-group">
                      <label for="skill_name">Skill Name</label>
                      <input type="text" class="form-control" name="year" id="year" value="{{$skill->skill_name}}" >
                    </div>
                    <div class="form-group">
                      <label for="skill_persentense">Skill persentense</label>
                      <input type="number" class="form-control" name="skill_persentense" id="skill_persentense" value="{{$skill->skill_persentense}}">
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