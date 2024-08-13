@extends('admin.layouts.master')

@section('maincontent')

<!--start header-->
  @include('admin.layouts.sections.navbar.navbar')
<!--end top header-->

<!--start sidebar-->
@include('admin.layouts.sections.menu.sidebar')
<!--end sidebar-->

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <h5 class="mb-4">Horizontal Form</h5>
                                    <div class="row mb-3">
                                        <label for="input35" class="col-sm-3 col-form-label">Name Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="input35" placeholder=" Name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="input37" class="col-sm-3 col-form-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="input37" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="input37" class="col-sm-3 col-form-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <textarea name="" id="" cols="30" rows="10"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, quaerat.</textarea>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="button" class="btn btn-grd-royal px-4">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                      </div>
                   </div><!--end row-->
    </div>
  </main>
  <!--end main wrapper-->
<!--end main wrapper-->

<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->

<!--start footer-->
@include('admin.layouts.sections.footer.footer')
<!--end footer-->

<!--start switcher-->
@include('admin.layouts.sections.menu.switcher')
<!--start switcher-->

@endsection
