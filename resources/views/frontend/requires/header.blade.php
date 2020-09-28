<!-- Header -->
<div class="header">
<!-- Logo -->
    <div class="header-left">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{asset('frontendCss/img/logo.png')}}" height="50" alt="docFind">
        </a>
        <a href="index.html" class="logo logo-small">
            <span><b>doc</b></span>
        </a>
    </div>
<!-- /Logo -->
            
    <a href="javascript:void(0);" id="toggle_btn" role="button">
        <i class="fa fa-bars"></i>
    </a>

<!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
<!-- /Mobile Menu Toggle -->

<!-- Header Right Menu -->
    <ul class="nav user-menu">          
<!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">{{ \Auth::user()->fullName }}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
<!-- /User Menu -->
    </ul>
<!-- /Header Right Menu -->
</div>
<!-- /Header -->
        