<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('backend/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Avijit Halder</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category</a></li>
                <li><a href="{{url('index')}}"> <i class="fa fa-bar-chart"></i>All Item</a>
                <li><a href="{{url('create')}}"> <i class="fa fa-bar-chart"></i>Create Item</a>
              </li>

                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Slider</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_slider')}}">Add Slider</a></li>
                    <li><a href="{{url('view_slider')}}">View Slider</a>  </li>
                   
                  </ul>
                </li>
                
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="{{url('table')}}"> <i class="icon-settings"></i>Table Book</a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>