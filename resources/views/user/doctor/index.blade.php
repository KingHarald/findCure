@extends('layouts.doctor')

@section('title', 'Doctor Dashboard')

@section('content')

<div class="content container-fluid">
<!-- Page Header -->
	<section class="content-header">
     	<h1>Welcome Doctor!</h1>
        <ul class="breadcrumb">
            <li><a href="{{url('/doctor/doctorDashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
    </section>
<!-- /Page Header -->
				
</div>
@endsection