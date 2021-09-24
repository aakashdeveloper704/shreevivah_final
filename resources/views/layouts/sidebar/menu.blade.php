<ul id="sidebarnav">
    <li>
        <div class="user-profile d-flex no-block dropdown mt-3">
            <div class="user-pic">
                <img src="{{asset('images/1.jpg')}}" alt="users" class="rounded-circle" width="40" />
            </div>
            <div class="user-content hide-menu ml-2">
                <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h5 class="mb-0 user-name font-medium">{{Auth::user()->full_name}}</h5>
                    <span class="op-5 ">Online</span>
                </a>
            </div>
        </div>
    </li>
    @permission("superadmin")
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="{{route('user.index')}}">
            <i class="mdi mdi-account-circle"></i>
            <span class="hide-menu">User</span>
        </a>
    </li>
    @endpermission
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('setting.*')) ? 'active' : ''  }}" href="{{route('setting.index')}}">
            <i class="fas fa-cog"></i>
            <span class="hide-menu">Setting</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('sociallink.*')) ? 'active' : ''  }}" href="{{route('sociallink.index')}}">
            <i class="fas fa-share-alt"></i>
            <span class="hide-menu">Social links</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('pricing.*')) ? 'active' : ''  }}" href="{{route('pricing.index')}}">
            <i class="   ">&#8377</i>
            <!-- &#8377 -->
            <span class="hide-menu">Pricing</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('success_stories.*')) ? 'active' : ''  }}" href="{{route('success_stories.index')}}">
            <i class="fas fa-calendar-check"></i>
            <span class="hide-menu">Success Story</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('aboutus.*')) ? 'active' : ''  }}" href="{{route('aboutus.index')}}">
            <i class="fas fa-address-card"></i>
            <span class="hide-menu">About Us</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('abouthomepage.*')) ? 'active' : ''  }}" href="{{route('abouthomepage.index')}}">
            <i class="fas fa-address-card"></i>
            <span class="hide-menu">About Home Page</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('contactus.*')) ? 'active' : ''  }}" href="{{route('contactus.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Contact Us</span>
        </a>
    </li>


    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('blogs.*')) ? 'active' : ''  }}" href="{{route('blogs.index')}}">
            <i class="fab fa-blogger"></i>
            <span class="hide-menu">Blogs</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('careers.*')) ? 'active' : ''  }}" href="{{route('careers.index')}}">
            <i class="fa fa-child"></i>
            <span class="hide-menu">Careers</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('privacy_policy.*')) ? 'active' : ''  }}" href="{{route('privacy_policy.index')}}">
            <i class="fas fa-lock"></i>
            <span class="hide-menu">Privacy Policy</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('terms_of_use.*')) ? 'active' : ''  }}" href="{{route('terms_of_use.index')}}">
            <i class="far fa-id-badge"></i>
            <span class="hide-menu">Terms Of Use</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('payment_policy.*')) ? 'active' : ''  }}" href="{{route('payment_policy.index')}}">
            <i class="fas fa-bell"></i>
            <span class="hide-menu">Payment Policy</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('disclaimer.*')) ? 'active' : ''  }}" href="{{route('disclaimer.index')}}">
            <i class="far fa-file"></i>
            <span class="hide-menu">Disclaimer</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('membership.*')) ? 'active' : ''  }}" href="{{route('membership.index')}}">
            &nbsp;&nbsp; <i class="fas fa-user-circle"></i> &nbsp;&nbsp;
            <span class="hide-menu">Membership And Top-Up Plans</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('kundali.*')) ? 'active' : ''  }}" href="{{route('kundali.index')}}">
            <i class="far fa-copy"></i>
            <span class="hide-menu">Kundali Matching</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('engagement.*')) ? 'active' : ''  }}" href="{{route('engagement.index')}}">
            <i class="fa fa-life-ring"></i>
            <span class="hide-menu">Pre & Post Engagement & Marriage Services</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('background.*')) ? 'active' : ''  }}" href="{{route('background.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Pre-Marriage Background Verification</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('health.*')) ? 'active' : ''  }}" href="{{route('health.index')}}">
            <i class="fab fa-temperature-low"></i>
            <span class="hide-menu">Pre-Marriage Health Check-Up</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('shopping.*')) ? 'active' : ''  }}" href="{{route('shopping.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Shopping For Engagement & Marriage</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('refer.*')) ? 'active' : ''  }}" href="{{route('refer.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Refer & And Earn</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('join_us.*')) ? 'active' : ''  }}" href="{{route('join_us.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Join Us As Our Employee / Agent / Advisor / Franchisee</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark {{ (Route::is('other_services.*')) ? 'active' : ''  }}" href="{{route('other_services.index')}}">
            <i class="fas fa-id-card-alt"></i>
            <span class="hide-menu">Other Services</span>
        </a>
    </li>

    <!-- <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="{{route('dashboard.index')}}">
            <i class="mdi mdi-view-dashboard"></i>
            <span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-calendar"></i>
            <span class="hide-menu">Calender</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-layers"></i>
            <span class="hide-menu">Job Requirement</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-view-day"></i>
            <span class="hide-menu">Interviews</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-border-outside"></i>
            <span class="hide-menu">Database</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-credit-card-scan"></i>
            <span class="hide-menu">Selected Candidate</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-cart-outline"></i>
            <span class="hide-menu">Sales</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Invoice</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Payment Recieved</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Tax Rates</span>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-content-copy"></i>
            <span class="hide-menu">Transactions</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Expense</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Deposit</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Transfer</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Transaction Report</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Balance Sheet</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Bank & Cash</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-account-circle"></i>
            <span class="hide-menu">Departments </span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-content-copy"></i>
            <span class="hide-menu">Attendance</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Time History</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Timechange Request</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Attendance Report</span>
                </a>
            </li>
        </ul>
    </li>
    
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-content-copy"></i>
            <span class="hide-menu">Utilities</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="{{route('holiday.index')}}" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Holiday</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('salary.index')}}" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Salary</span>
                </a>
            </li>
        </ul>
    </li>
  
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-content-copy"></i>
            <span class="hide-menu">Reports</span>
        </a>
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Account Statement</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Income Reports</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Expense Reports</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Income vs Expense</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Report by Date</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">All Income</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">All Expense</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">All Transactions</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="mdi mdi-application"></i>
                    <span class="hide-menu">Report by Month</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark" href="#">
            <i class="mdi mdi-account-circle"></i>
            <span class="hide-menu">Private Chat </span>
        </a>
    </li> -->
</ul>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>