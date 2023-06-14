@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.permissionGroup'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $group->id }}">

				{{-- <div class="row row-sm"> 
					<label class="label label-control col-md-3"> {{ trans('admin.permission') }} </label>
					<div class="col-md-9">
						<select name="permissions[]" class="form-control multiselect" multiple>
							@foreach($permissionModels as $permissionModel)
							<optgroup label="{{ $permissionModel['name_' . getLang()] }}">
								@foreach($permissionModel->roles as $role)
								<option value="{{ $role->id }}" @if(in_array($role->id, $permissions->pluck('role_id')->toArray())) selected @endif>{{ $role['name_' . getLang()] }}</option>
								@endforeach
							</optgroup>
							@endforeach
						</select>
					</div>
				</div> --}}

				<div class="row row-sm">
					@foreach($permissionModels as $permissionModel)

					<div class="panel panel-danger col-md-3 pannelPermission">
						<div class="panel-heading">
							{{ $permissionModel['name_' . getLang()] }}
						</div>
					  	<div class="panel-body">
					    	<ul>
					    		@foreach($permissionModel->roles as $role)
					    		<li>
					    			<input type="checkbox" name="permissions[]" value="{{ $role->id }}" @if(in_array($role->id, $permissions->pluck('role_id')->toArray())) checked @endif>
					    			<span>{{ $role['name_' . getLang()] }}</span>
					    		</li>
					    		@endforeach
					    	</ul>
					  	</div>
					</div>
					
					@endforeach
				</div>

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.save') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection