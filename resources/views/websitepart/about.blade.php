<div class="container-fluid">
    <div id="about" class="row about-section">

        @foreach ($persondetails as $singlevalue)

        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">{{$singlevalue->main_titile}}</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">{{$singlevalue->sub_titile}}</h5>
            <p class="mt-20">{{$singlevalue->discription}}</p>
            <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>{{$singlevalue->btn_text}}</button>
        </div>
            
        @endforeach
       
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Personal Info</h3>
            <span class="line mb-5"></span>

            @foreach ($personinfos as $singlevalue )
            <ul class="mt40 info list-unstyled">
                <li><span>Birthdate</span> : {{$singlevalue->birthday}}</li>
                <li><span>Email</span> : {{$singlevalue->email}}</li>
                <li><span>Phone</span> : {{$singlevalue->phone}}</li>
                <li><span>Skype</span> :{{$singlevalue->skype}}</li>
                <li><span>Address</span> :  {{$singlevalue->address}}.</li>
            </ul>
                
            @endforeach
           
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>

            @foreach ($aboutexpertise as $singlevalue )

            <div class="row">
                <div class="col-1 text-danger pt-1"></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>{{$singlevalue->designation}}</h6>
                    <p class="subtitle">{{$singlevalue->discription}}</p>
                    <hr>
                </div>
            </div>
                
            @endforeach

           

            {{-- <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Web Development</h6>
                    <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Digital Marketing</h6>
                    <p class="subtitle">voluptate commodi illo voluptatib.</p>
                    <hr>
                </div>
            </div> --}}
        </div>
    </div>
</div>