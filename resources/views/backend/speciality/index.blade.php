@extends('layouts.admin')

@section('title', 'List of Specialities')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-7 col-auto">
					@if(Session::has('flash_success_message'))
					    <div class="alert alert-success alert-block">
		    			    <button type="button" class="close" data-dismiss="alert">×</button>
		        			<strong>{!! session('flash_success_message') !!}</strong>
		    			</div>
					@endif
					<h3 class="page-title">List of Specialities</h3>
				</div>
				<div class="col-sm-5 col">
					<a href="{{route('adminSpeciality.create')}}" class="btn btn-success pull-right">Add New</a>
				</div>
			</div>
		</div>
<!-- /Page Header -->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
		                        <thead>
									<tr>
										<th style="text-align: center;">Id</th>
										<th style="text-align: center;">Speciality</th>
										<th style="text-align: center;">Icon</th>
										<th style="text-align: center;">Action</th>
                            		</tr>
                        		</thead>
                        		<tbody>
                            		@if($speciality->count()>0)
                                		@php($count = 1)
                                    		@foreach ($speciality as $spec)
                                        		<tr class="col text-center">
													<td>{{$count}}</td>
													<td>{{$spec->name}}</td>
													<td>
                                                		@if(!empty($spec->image))
                                                    		<img src="{{ asset('adminCss/img/specialities/'.$spec->image) }}" style="width:35px;">
                                                		@endif
                                            		</td>
                                            {{-- for action like edit and delete --}}
                                            		<td>
                                                		<a href="{{route('adminSpeciality.edit', $spec->id)}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>

                                            {{-- deleting users from database --}}
                                                		<form action="{{route('adminSpeciality.destroy',$spec->id)}}" method="POST">
															@csrf
															@method('delete')
															<button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete">
																<i class="far fa-trash-alt"></i>
															</button>
                                                		</form>
                                            		</td>
                                        		</tr>
                                        @php($count++)
                                    @endforeach
                            		@else
                                		<tr>
                                    		<th colspan="4" class="text-center">
                                        		No entries in the table!
                                    		</th>
                                		</tr>
                            		@endif
                        		</tbody>
                    		</table>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>			
</div>
<!-- /Page Wrapper -->                
@endsection