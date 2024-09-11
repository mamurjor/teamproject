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
                    <h4 class="card-title">Packs Pricing List</h4>
                    <p class="card-description"> <a href="{{route('packspricing.create')}}">Add New</a></p>

                 
                   {{--success message start--}}
                   @if (session('success'))
                   <div class="alert alert-success text-center">
                       {{ session('success') }}
                   </div>
                   @endif
                   {{--success message end--}}


              @if (count($packspricing)>0) 
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> SL.No </th>
                            <th> Package name </th>
                            <th> Price </th>
                            <th> Button text </th>
                            <th> Button Url </th>
                            <th> Package feature </th>
                            <th> Create Date </th>
                            <th> Update Date </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>


                   @foreach ($packspricing as $singlevalue) 

                   
                           {{-- {{ unserialize($singlevalue->package_feature)->someData }} --}}
                

                            <tr>
                              <td>{{++$i}}</td>
                              <td>{{$singlevalue->package_name}}</td>
                              <td>{{$singlevalue->price}}</td>
                              <td>{{$singlevalue->button_text}}</td>
                              <td>{{$singlevalue->button_url}}</td>
                              <td>{{$singlevalue->package_feature}}</td>
                              <td>{{$singlevalue->created_at}}</td>
                              <td>{{$singlevalue->updated_at}}</td>
                             
                              
                              <td> <a href="{{route('packspricing.edit',$singlevalue->id)}}"><i class="fa-solid fa-pencil"></i></a><b class="p-2">||</b>
                               
                                <form class="d-inline border-0" action="{{route('packspricing.destroy',$singlevalue->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')

                                  <button type="submit" >

                                    

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