@extends('layouts.admin')

@section('title', 'Edit speciality')
@section('page-title', 'Edit speciality')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">				
<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-7 col-auto">
					<h3 class="page-title">Edit Details of Speciality</h3>				
				</div>
			</div>
		</div>
        <div class="row">
	        <div class="col-lg-12">
	            <div class="card">
		            <div class="card-header">
						<h3 class="card-title">Edit Speciality</h3>
					</div>
					<div class="card-body">
						<form action="{{route('adminSpeciality.update',$speciality->id)}}" method = "POST" enctype="multipart/form-data">
							@csrf
                            @method('put')
							<div class="form-group row">
								<label class="col-form-label col-md-2">Speciality Name</label>
								<div class="col-md-10">
									<input type="text" name="name" id="name" value="{{$speciality->name}}" class="form-control" required> 
								</div>
                            </div>		
							<div class="form-group row">
								<label class="col-form-label col-md-2">Image</label>
								<div class="col-md-10">
                                    <div id="uniform-undefined">
                                        <table>
                                            <tr>
                                                <td>
                                                    <input class="form-control" name="image" id="image" type="file">
                                                    @if(!empty($speciality->image))
                                                        <input type="hidden" name="current_image" class="form-control" value="{{ $speciality->image }}">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($speciality->image))
                                                        <img style="padding-left:20px;" src="{{ asset('adminCss/img/specialities/'.$speciality->image) }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
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
