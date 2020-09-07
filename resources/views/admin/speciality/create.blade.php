@extends('layouts.admin')

@section('title', 'Add speciality')
@section('page-title', 'Add New speciality')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-7 col-auto">
					<h3 class="page-title">Add Details of Speciality</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Add Speciality</h3>
					</div>
					<div class="card-body">
						<form action="{{route('adminSpeciality.store')}}" method = "POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group row">
								<label class="col-form-label col-md-2">Speciality Name</label>
								<div class="col-md-10">
									<input type="text" name="name" id="name" class="form-control" required> 
								</div>
							</div>			
							<div class="form-group row">
								<label class="col-form-label col-md-2">Image</label>
								<div class="col-md-10">
									<input class="form-control" id="image" name="image" type="file" required>
								</div>
							</div>
							<div class="form-group">
                				<button class="btn btn-info" type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
