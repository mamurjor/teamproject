
@extends('layouts.website');

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
   @include('websitepart.header');

   @include('websitepart.nav');
   @include('websitepart.container_fluid');
   @include('websitepart.resume_section');
   @include('websitepart.text_section');
   @include('websitepart.service_section');
   @include('websitepart.packs');
   @include('websitepart.hire_me');
   @include('websitepart.portfolio_section');
   @include('websitepart.blog_section');
   @include('websitepart.contact_section');
   @include('websitepart.footer_section');
    <!--Resume Section-->







    <!-- Portfolio Section -->

    <!-- End of portfolio section -->





	<!-- core  -->
    <script src="{{asset('backend')}}/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="{{asset('backend')}}/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{asset('backend')}}/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="{{asset('backend')}}/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{asset('backend')}}/js/johndoe.js"></script>

</body>
</html>

