@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
<div class="page-wrapper">
	<div class="content container-fluid">
		<!-- Page Header -->
<section class="content-header">
	<h1>
	Welome Admin!
	</h1>
	<ul class="breadcrumb">
		<li><a href="{{url('/admin/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ul>
</section>
<!-- /Page Header -->
<div class="row">
	<div class="col">
		<!-- small box -->
		<div class="small-box">
			<div class="inner">
				<h3></h3>
				<p>Doctors</p>
			</div>
			<div class="icon">
				<i class="fa fa-user-md"></i>
			</div>
		</div>
		</div><!-- ./col -->
		<div class="col">
<!-- small box -->
<div class="small-box">
	<div class="inner">
		<h3></h3>
		<p>Clinics</p>
	</div>
	<div class="icon">
		<i class="far fa-hospital"></i>
	</div>
</div>
</div><!-- ./col -->
<div class="col">
	<!-- small box -->
	<div class="small-box">
		<div class="inner">
			<h3></h3>
			<p>Labs</p>
		</div>
		<div class="icon">
			<i class="fas fa-bong"></i>
		</div>
	</div>
	</div><!-- ./col -->
	<div class="col">
<!-- small box -->
<div class="small-box">
	<div class="inner">
		<h3></h3>
		<p>Patients</p>
	</div>
	<div class="icon">
		<i class="fa fa-user"></i>
	</div>
</div>
</div><!-- ./col -->
</div><!-- /.row -->
<div class="row">
	<div class="col-md-12">
		
		<!-- Recent Orders -->
		<div class="card card-table flex-fill">
			<div class="card-header">
				<h4 class="card-title">Doctors List</h4>
			</div>
<div class="card-body">
	<div class="table-responsive">
		<table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
			<thead>
				<tr>
					<th>Doctor Name</th>
					<th>Speciality</th>
					<th>Earned</th>
					<th>Reviews</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
<a href="profile.html">Dr. Ruby Perrin</a>
</h2>
</td>
<td>Dental</td>
<td>$3200.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
	<h2 class="table-avatar">
	<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
	<a href="profile.html">Dr. Darren Elder</a>
	</h2>
</td>
<td>Dental</td>
<td>$3100.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image"></a>
<a href="profile.html">Dr. Deborah Angel</a>
</h2>
</td>
<td>Cardiology</td>
<td>$4000.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image"></a>
<a href="profile.html">Dr. Sofia Brient</a>
</h2>
</td>
<td>Urology</td>
<td>$3200.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image"></a>
<a href="profile.html">Dr. Marvin Campbell</a>
</h2>
</td>
<td>Orthopaedics</td>
<td>$3500.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- /Recent Orders -->

</div>
</div>
<div class="row">
<div class="col-md-12">

<!-- Recent Orders -->
<div class="card  card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Patients List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Patient Name</th>
<th>Phone</th>
<th>Last Visit</th>
<th>Paid</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="" alt="User Image"></a>
<a href="profile.html">Charlene Reed </a>
</h2>
</td>
<td>8286329170</td>
<td>20 Oct 2019</td>
<td class="text-right">$100.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
<a href="profile.html">Travis Trimble </a>
</h2>
</td>
<td>2077299974</td>
<td>22 Oct 2019</td>
<td class="text-right">$200.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
<a href="profile.html">Carl Kelly</a>
</h2>
</td>
<td>2607247769</td>
<td>21 Oct 2019</td>
<td class="text-right">$250.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
<a href="profile.html"> Michelle Fairfax</a>
</h2>
</td>
<td>5043686874</td>
<td>21 Sep 2019</td>
<td class="text-right">$150.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
<a href="profile.html">Gina Moore</a>
</h2>
</td>
<td>9548207887</td>
<td>18 Sep 2019</td>
<td class="text-right">$350.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- /Recent Orders -->

</div>
</div>

</div>
</div>
@endsection