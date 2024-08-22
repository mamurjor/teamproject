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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Person Details List</h4>
                    <p class="card-description"> <a href="{{route('personDetailsForm')}}">Add New</a></p>

                   {{--success message start--}}
                      @if (session('success'))
                      <div class="alert alert-success text-center">
                          {{ session('success') }}
                      </div>
                      @endif
                      {{--success message end--}}


                    @if (count($personDetails)>0)
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> SL.No </th>
                            <th> Main Title </th>
                            <th> Sub Title</th>
                            <th> Discription </th>
                            <th> Button text </th>
                            <th> Button Url </th>
                             <th> Create Date </th>
                            <th> Update Date </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>


                          @foreach ($personDetails as $item)
                            <tr>
                              <td>{{$item->id}}</td>
                              <td> {{$item->main_titile}}</td>

                              <td>{{$item->sub_titile}}</td>

                              <td>{{$item->discription}}</td>
                              <td>{{$item->btn_text}}</td>
                              <td>{{$item->btn_url}}</td>
                              
                              <td>{{$item->create_date}}</td>
                              <td>{{$item->update_date}}</td>
                              
                              <td> <a href="#"><i class="fa-solid fa-pencil"></i></a><b class="p-2">||</b><a href="#"><i class="fa-solid fa-trash"></i></a></td>

                            </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    @else


                    <p class="alert alert-danger text-center">No Data Available</p>


                    @endif
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
         











    {{--@include('adminpart.mainpanel')--}}

    
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