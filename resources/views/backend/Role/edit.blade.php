@extends('layouts.admin')

@section('title', 'Edit role')
@section('page-title', 'Edit role')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">				
<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-7 col-auto">
					<h3 class="page-title">Edit Details of Role</h3>				
				</div>
			</div>
		</div>
        <div class="row">
	        <div class="col-lg-12">
	            <div class="card">
		            <div class="card-header">
						<h3 class="card-title">Edit Role</h3>
					</div>
					<div class="card-body">
						<form action="{{route('adminRole.update',$role->id)}}" method = "POST" enctype="multipart/form-data">
							@csrf
                            @method('put')
							<div class="form-group row">
								<label class="col-form-label col-md-2">Role Name</label>
								<div class="col-md-10">
									<input type="text" name="name" id="name" value="{{$role->name}}" class="form-control" required> 
								</div>
                            </div>		
							
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Edit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
