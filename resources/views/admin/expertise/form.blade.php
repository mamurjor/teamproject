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
            <button>show </button>
            <div class="row">


                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><a href="{{route('expertiselist')}}">Back</a></h4>
                      <p class="card-description" > Basic form elements </p>
                      <form action="" method="POST" class="forms-sample">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">skill_year</label>
                          <input type="text" name="skill_year" class="form-control" id="year" placeholder="Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputName1">designation</label>
                            <input type="text" name="designation" class="form-control" id="desig" placeholder="Name">
                          </div>

                        <div class="form-group">
                            <label for="exampleInputName1">discription</label>
                            <textarea name="discription" id="des" class="form-control" cols="30" rows="10"></textarea>
                          </div>

                        <button type="submit"  class="btn btn-primary me-2">Submit</button>



                      </form>

                       <button id="saveskill"> Save User Info </button>
                       <p id="result"></p>

                      <script>

                        // all html tag
                        // id
                        // class

                        $(document).ready(function(){
                            $("#saveskill").click(function(){
                                            // var skil_year =  $("#year").val();
                                            // var desig =  $("#desig").val();
                                            // var des =  $("#des").val();

                                            // $("#result").text(skil_year+desig+des);
                                            // //alert(skil_year+desig+des);

                                            var mytext = $(".card-description").text();

                                            alert(mytext);
                                    });

                        });

                        // $(document).ready(function(){
                        //     $(".card-title").hover(function(){

                        //                 $(".card").hide();

                        //             });

                        // });




                      </script>
                    </div>
                  </div>




            </div>
          </div>



       {{-- @include('adminpart.mainpanel') --}}
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
