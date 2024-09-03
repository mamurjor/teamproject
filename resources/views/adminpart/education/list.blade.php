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
                    <h4 class="card-title">Education List</h4>
                    <p class="card-description"> <a href="{{route('educationform')}}">Add New</a></p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> SL.No </th>
                            <th> Personal Text </th>
                            <th> User Name </th>
                            <th> Short Discription </th>
                            <th> Button text </th>
                            <th> Button Url </th>
                            <th> Banner Image </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                          
                          <tr>
                            <td>

                              1
                              
                            </td>
                            <td> 
                             hello

                            </td>

                            <td>
                              nirob
                            </td>

                            <td>
                              
                              I am a laravel developer

                            </td>
                            <td> 

                              button text
                              
                            </td>
                            <td> 

                              button url
                              
                            </td>
                            <td> 

                              Bannger iamge
                              
                            </td>
                            <td> 

                              <a href=""></a>
                              
                            </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
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