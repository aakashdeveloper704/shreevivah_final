<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <a class="navbar-brand" href="javascript:void(0);">
                <b class="logo-icon text-dark" style="margin: 0 auto;"><img src="{{ URL::to('/') }}/images/Final Logo png1.png" alt="users" class="rounded-circle" width="60"/></b>
                <span class="logo-text">Shree Vivah</span>
            </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong>Shree Vivah</strong>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa  fa-flag "></i>
                        Languages
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated bounceInDown" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-us"></i>
                            English
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-fr"></i>
                            French
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-es"></i>
                            Spanish
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-de"></i>
                            German
                        </a>
                    </div> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell font-24"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title bg-primary text-white">
                                    <h4 class="mb-0 mt-1">4 New</h4>
                                    <span class="font-light">Notifications</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center notifications">
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-danger btn-circle">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Luanch Admin</h5>
                                            <span class="mail-desc">Just see the my new admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-success btn-circle">
                                            <i class="ti-calendar"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Event today</h5>
                                            <span class="mail-desc">Just a reminder that you have event</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-info btn-circle">
                                            <i class="ti-settings"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Settings</h5>
                                            <span class="mail-desc">You can customize this template as you want</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-primary btn-circle">
                                            <i class="ti-user"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);">
                                    <strong>Check all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('images/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                            <div class="">
                                <img src="{{asset('images/1.jpg')}}" alt="user" class="img-circle" width="60">
                            </div>
                            <div class="ml-2">
                                <h4 class="mb-0">{{Auth::user()->full_name}}</h4>
                                <p class=" mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-user mr-1 ml-1"></i>
                            My Profile
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-wallet mr-1 ml-1"></i>
                            Activities
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-email mr-1 ml-1"></i>
                            Lock
                        </a>
                        <a class="dropdown-item" href="{{route('auth.logout')}}">
                            <i class="fa fa-power-off mr-1 ml-1"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>