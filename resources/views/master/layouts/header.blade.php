<body class="app sidebar-mini rtl">
  {{-- <div id="global-loader" ></div> --}}
  <div class="page">
    <div class="page-main">
      <div class="app-header header py-1 d-flex">
        <div class="container-fluid">
          <div class="d-flex">
            <a class="header-brand" href="{{route('dashboard')}}">
              <img src="{{asset('assets/images/photos/nrt.png')}} " class="header-brand-img" alt="NRT logo">
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="d-none d-lg-block horizontal">
              <ul class="nav">
                <li class="">
                  <div class="dropdown d-none d-md-flex">


                  </div>
                </li>

                <li class="">
                    <div class="dropdown d-none d-md-flex border-right">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <font size="+2" color="#ec2d38"><b>Hospital Management System</b></font>

                  </div>
                </li>
              </ul>
              </div>

            <div class="d-flex order-lg-2 ml-auto">
                                <div class="mt-2">
                  <div class="searching mt-2 ml-2 mr-3">
                    <a href="javascript:void(0)" class="search-open mt-3">
                      <i class="fa fa-search text-dark"></i>
                    </a>
                    <div class="search-inline">
                      <form>
                        <input type="text" class="form-control" placeholder="Search here">
                        <button type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                        <a href="javascript:void(0)" class="search-close">
                          <i class="fa fa-times"></i>
                        </a>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- <div class="mt-2">
                    <div class="searching mt-2 ml-2 mr-3">
                      <a href="javascript:void(0)" class="search-open mt-3">

                      </a>
                      <div class="search-inline">
                          <form>
                                <input type="text" class="form-control" placeholder="Search here">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <a href="javascript:void(0)" class="search-close">
                                    <i class="fa fa-times"></i>
                                </a>
                          </form>
                      </div>
                    </div>
                </div> --}}
                  <div class="dropdown d-none d-md-flex " >
                  <a  class="nav-link icon full-screen-link">
                    <i class="mdi mdi-arrow-expand-all"  id="fullscreen-button"></i>
                  </a>
                </div>
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline "></i>
                    <span class="nav-unread bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex pb-3">
                      <div class="notifyimg">
                        <i class="fa fa-thumbs-o-up"></i>
                      </div>
                      <div>
                        <strong>Someone likes our posts.</strong>
                        <div class="small text-muted">3 hours ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex pb-3">
                      <div class="notifyimg">
                        <i class="fa fa-commenting-o"></i>
                      </div>
                      <div>
                        <strong> 3 New Comments</strong>
                        <div class="small text-muted">5  hour ago</div>
                      </div>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                  </div>
                </div>

  <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-grid floating"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow p-0">
                    <ul class="drop-icon-wrap p-0 m-0">
                      <li>
                        <a href="email.html" class="drop-icon-item">
                          <i class="fe fe-mail"></i>
                          <span class="block"> E-mail</span>
                        </a>
                      </li>
                      <li>
                        <a href="calendar2.html" class="drop-icon-item">
                          <i class="fe fe-calendar"></i>
                          <span class="block">calendar</span>
                        </a>
                      </li>
                      <li>
                        <a href="maps.html" class="drop-icon-item">
                          <i class="fe fe-map-pin"></i>
                          <span class="block">map</span>
                        </a>
                      </li>
                      <li>
                        <a href="cart.html" class="drop-icon-item">
                          <i class="fe fe-shopping-cart"></i>
                          <span class="block">Cart</span>
                        </a>
                      </li>
                      <li>
                        <a href="chat.html" class="drop-icon-item">
                          <i class="fe fe-message-square"></i>
                          <span class="block">chat</span>
                        </a>
                      </li>
                      <li>
                        <a href="profile.html" class="drop-icon-item">
                          <i class="fe fe-phone-outgoing"></i>
                          <span class="block">contact</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar avatar-md brround"><img src="{{asset('assets/images/faces/male/40.jpg')}}" alt="Profile-img" class="avatar avatar-md brround"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                    <div class="text-center">
                      <a href="#" class="dropdown-item text-center font-weight-sembold user">Mohit Singh</a>

                      <div class="dropdown-divider"></div>
                    </div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-account-outline "></i> Profile
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="float-right"><span class="badge badge-primary">6</span></span>
                      <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                    </a>
                   {{--  <a class="dropdown-item" href="#">
                      <i class="dropdown-icon  mdi mdi-settings"></i> Lock Screen
                    </a> --}}

                    <div>
                    <a class="dropdown-item " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                       <i class="dropdown-icon mdi  mdi-logout-variant"></i>  {{ __(' Sign out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
