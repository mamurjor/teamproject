<!--Resume Section-->
<section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Expertise</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">

                        @foreach ($resumerxpertise as $singlevalue)

                        <h6 class="title text-danger">{{$singlevalue->year}}</h6>
                        <P>{{$singlevalue->designation}}</P>
                        <P class="subtitle">{{$singlevalue->discription}}.</P>
                        <hr>
                            
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Education</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">

                        @foreach ($resumeeducation as $singlevalue )
                        <h6 class="title text-danger">{{$singlevalue->year}}</h6>
                        <P>{{$singlevalue->designation}}</P>
                        <P class="subtitle">{{$singlevalue->discription}}</P>
                        <hr>
                            
                        @endforeach
                      
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Skills</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">

                        @foreach ($skill as $singlevalue )

                        <h6>{{$singlevalue->skill_name}}</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width:{{$singlevalue->skill_persentense}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                            
                        @endforeach
                     
                 

                    </div>
                </div>
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Languages</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                       <h6>English</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>French</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Spanish</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>