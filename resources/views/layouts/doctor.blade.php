<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<title>@yield('title', 'Dashboard')</title>
    
 @include('user.requires.styleLinks')
</head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		@include('user.requires.header')	
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
                            <div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{asset('frontendCss/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">Specialist</h5>
											</div>
										</div>
									</div>
								</div>
							</li>
                            <hr>
                            <li>
							    <a href="doctor-dashboard.html">
									<i class="fas fa-home"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li>
								<a href="appointments.html">
									<i class="fas fa-calendar-check"></i>
									<span>Appointments</span>
								</a>
							</li>
							<li>
								<a href="my-patients.html">
									<i class="fas fa-user-injured"></i>
									<span>My Patients</span>
								</a>
							</li>
							<li>
								<a href="schedule-timings.html">
									<i class="fas fa-hourglass-start"></i>
									<span>Schedule Timings</span>
								</a>
							</li>
							<li>
								<a href="invoices.html">
							    	<i class="fas fa-file-invoice"></i>
									<span>Invoices</span>
								</a>
							</li>
							<li>
								<a href="chat-doctor.html">
									<i class="fas fa-comments"></i>
									<span>Messages</span>
								</a>
							</li>
							<li>
								<a href="doctor-profile-settings.html">
									<i class="fas fa-user-cog"></i>
									<span>Profile Settings</span>
								</a>
							</li>
							<li>
								<a href="doctor-change-password.html">
									<i class="fas fa-lock"></i>
									<span>Change Password</span>
								</a>
							</li>
						</ul>
			        </div>
                </div>
            </div>
			<!-- /Sidebar -->
			<div class="page-wrapper">
				@yield('content')
				@include('user.requires.footer') 
			</div>
        </div>
		<!-- /Main Wrapper -->
		@include('user.requires.scriptLinks')
		
</body>
</html>