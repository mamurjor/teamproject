<section class="section bg-dark text-center">
    <div class="container">
        <div class="row text-center">

            @foreach ($counter as $singlevalue )

             <div class="col-md-6 col-lg-3">
                <div class="row ">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">{{$singlevalue->count_number}}K</h1>
                        <p class="text-light mb-1">{{$singlevalue->sub}}</p>
                    </div>
                </div>
            </div>
                
            @endforeach

           

      
        </div>
    </div>
</section>