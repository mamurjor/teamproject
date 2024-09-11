<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li style="font-size: 18px" class="nav-item nav-category"><a href="" target="_blank">View Website</a></li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span style="font-size: 25px; color:black;font-weight:bold" class="menu-title">Dashboard</span>
        </a>
      </li>
      <li style="font-size: 17px; color:rgb(39, 224, 55);font-weight:bold" class="nav-item nav-category">Website Settign</li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('herolist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Hero</span>   
        </a>
      </li>



      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#about" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">About</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="about">
          <ul class="nav flex-column sub-menu">

            <li class="nav-item">
              <a class="nav-link"  href="{{route('personDetailsList')}}" >
                
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Person Details</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('personinfoslist')}}" >
                
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Person Infos</span>
                </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link"  href="{{route('aboutexpertiselist')}}" >
                
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Expertise</span>
                </a>
            </li>
          

           
           
          </ul>
        </div>
      </li>


   


      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Resume</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link"  href="{{route('education.index')}}" >
              
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Education</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('expertiselist')}}" >
              
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Expertise</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('skilllist')}}" >
              
                <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Skill</span>
                </a>
            </li>

           
           
          </ul>
        </div>
      </li>



     

      <li class="nav-item">
        <a class="nav-link"  href="{{route('packspricing.index')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Packs Pricing</span>
          </a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link"  href="{{route('counterlist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Counter</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('servicelist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Service</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('calltoactionlist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Call to action</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('postlist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Post</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="{{route('categorylist')}}" >
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span style="font-size: 16px; color:black;font-weight:bold" class="menu-title">Category</span>
          </a>
      </li>
     
     
    </ul>
  </nav>