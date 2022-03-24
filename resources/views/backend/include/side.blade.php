<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img  src="{{asset('uploads/images/user/'. auth()->user()->image)}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">My-Profile</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.create')}}">View</a>
                    </li>
                    </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Skills</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('skill.create')}}">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('skill.index')}}">List</a>
                    </li>
                </ul>
            </div>
        </li>
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Portfolio</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="portfolio">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portfolio.create')}}">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portfolio.index')}}">List</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"> Blog</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basics">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.create')}}">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.index')}}">List</a>
                    </li>
                </ul>
            </div>
        </li>

        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">--}}
        {{--                <span class="menu-title">Basic UI Elements</span>--}}
        {{--                <i class="menu-arrow"></i>--}}
        {{--                <i class="mdi mdi-crosshairs-gps menu-icon"></i>--}}
        {{--            </a>--}}
        {{--            <div class="collapse" id="ui-basic">--}}
        {{--                <ul class="nav flex-column sub-menu">--}}
        {{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>--}}
        {{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        {{--        </li>--}}


        {{--        <li class="nav-item sidebar-actions">--}}
        {{--              <span class="nav-link">--}}
        {{--                <div class="border-bottom">--}}
        {{--                  <h6 class="font-weight-normal mb-3">Projects</h6>--}}
        {{--                </div>--}}
        {{--                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>--}}
        {{--                <div class="mt-4">--}}
        {{--                  <div class="border-bottom">--}}
        {{--                    <p class="text-secondary">Categories</p>--}}
        {{--                  </div>--}}
        {{--                  <ul class="gradient-bullet-list mt-4">--}}
        {{--                    <li>Free</li>--}}
        {{--                    <li>Pro</li>--}}
        {{--                  </ul>--}}
        {{--                </div>--}}
        {{--              </span>--}}
        {{--        </li>--}}
    </ul>
</nav>
