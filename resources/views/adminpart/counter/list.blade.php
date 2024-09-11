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
                    <h4 class="card-title">Couter List</h4>
                    <p class="card-description"> <a href="{{route('counterform')}}">Add New</a></p>

                   {{--success message start--}}
                      @if (session('success'))
                      <div class="alert alert-success text-center">
                          {{ session('success') }}
                      </div>
                      @endif
                      {{--success message end--}}


                    @if (count($counter)>0)
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> SL.No </th>
                            <th> Count Number</th>
                            <th> Subject </th>
                            <th> Icon </th>
                            
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>


                          @foreach ($counter as $item)
                            <tr>
                              <td>{{++$i}}</td>
                              <td> {{$item->count_number}}</td>

                              <td>{{$item->sub}}</td>

                              <td>{{$item->icon}}</td>
                          
                              
                              <td> <a href="{{route('counteredit',$item->id)}}"><i class="fa-solid fa-pencil"></i></a><b class="p-2">||</b>
                                <a href="{{route('countershow',$item->id)}}"><i class="fa-solid fa-eye"></i></a><b class="p-2">||</b>


                                <form class="d-inline" action="{{ route('counterdelete', $item->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"><i class="fa-solid fa-trash"></i></button>
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