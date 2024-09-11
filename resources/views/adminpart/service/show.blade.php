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
                    <h4 class="card-title">Service Single  Details</h4>

                    <div class="table-responsive">
                    <table border="1" style="width:100%; border-collapse: collapse;">
                        <tr>
                            <th style="padding: 8px; text-align: left;">Field</th>
                            <th style="padding: 8px; text-align: left;">Value</th>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Id</td>
                            <td style="padding: 8px;">{{$service->id }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Title</td>
                            <td style="padding: 8px;">{{$service->title}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Discription</td>
                            <td style="padding: 8px;">{{$service->discription}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Icon</td>
                            <td style="padding: 8px;">{{$service->icon}}</td>
                        </tr>
                     
                        <tr>
                            <td style="padding: 8px;">Create Date</td>
                            <td style="padding: 8px;">{{$service->created_at}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Update Date</td>
                            <td style="padding: 8px;">{{$service->updated_at}}</td>
                        </tr>
                        
                    </table>
                
                   <div>
                     <!-- Navigation options -->
                     <a href="{{ route('servicelist') }}" style="display: inline-block; margin-top: 15px;">Back to list</a>
                     <a href="{{ route('serviceedit', $service->id) }}" style="display: inline-block; margin-top: 15px; margin-left: 10px;">Edit</a>
                 
                     <!-- Delete Button -->
                     <form action="{{ route('servicedelete', $service->id) }}" method="POST" style="display:inline;">
                         @csrf
                         @method('DELETE')
                         <button type="submit" style="margin-left: 10px;">Delete</button>
                     </form>
                   </div>
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