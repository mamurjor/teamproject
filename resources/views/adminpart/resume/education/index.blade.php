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
                    <h4 class="card-title">Resume Education</h4>
                    <p class="card-description"> <a href="{{route('education.create')}}">Add New</a></p>

                 
                   {{--success message start--}}
                   @if (session('success'))
                   <div class="alert alert-success text-center">
                       {{ session('success') }}
                   </div>
                   @endif
                   {{--success message end--}}


              @if (count($education)>0) 
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> SL.No </th>
                            <th> Year </th>
                            <th> Designation </th>
                            <th> Discription </th>
                           
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>


                   @foreach ($education as $singlevalue) 
                            <tr>
                              <td>{{++$i}}</td>
                              <td>{{$singlevalue->year}}</td>
                              <td>{{$singlevalue->designation}}</td>
                              <td>{{$singlevalue->discription}}</td>
                              
                             
                              
                              <td> <a href="{{route('education.edit',$singlevalue->id)}}"><i class="fa-solid fa-pencil"></i></a><b class="p-2">||</b>

                                <a href="{{route('education.show',$singlevalue->id)}}"><i class="fa-solid fa-eye"></i></a><b class="p-2">||</b>

                                <form class="d-inline border-0" action="{{route('education.destroy',$singlevalue->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')

                                  <button type="submit">

                                    

                                    <i class="fa-solid fa-trash"></i>


                                  </button>
                                </form>
                              
                              </td>

                            </tr>

                    @endforeach 
                        </tbody>
                      </table>

                     
                    </div>

                 @else


                    <p class="alert alert-danger text-center">No Data Available</p>


                 @endif 
                  </div>
                  {!!$education->links()!!}
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