<header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
        </ul>  

        @foreach ( $herodata as $singlevalue )

        <div class="header-content">
            <h4 class="header-subtitle" >{{$singlevalue->person_text}}</h4>
            <h1 class="header-title">{{$singlevalue->user_name}}</h1>
            <h6 class="header-mono" >{{$singlevalue->short_dis}}</h6>
            <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>{{$singlevalue->button_text}}</button>
        </div>
            
        @endforeach
      
    </div>
</header>