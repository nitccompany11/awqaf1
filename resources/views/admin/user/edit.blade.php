@extends('admin.layouts.app')

@section('content')

	@php

		if(session()->get('userType') == 'user') {

			$title2 = trans('admin.user');
			$url2 = url('admin/user/user');

		} elseif (session()->get('userType') == 'admin') {

			$title2 = trans('admin.adminT');
			$url2 = url('admin/user/admin');

		}

	@endphp

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), $title2, $url2) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $user->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name') }} </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control required name" placeholder="{{ trans('admin.name') }}" value="{{ $user->name }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.email') }} </label>
					<div class="col-md-9">
						<input type="email" name="email" class="form-control required" placeholder="{{ trans('admin.email') }}" value="{{ $user->email }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.phone') }} </label>
					<div class="col-md-9">
						<input type="number" name="phone" class="form-control required lenght" data-length="10" placeholder="{{ trans('admin.phone') }}" value="{{ $user->phone }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.password') }} </label>
					<div class="col-md-9">
						<input type="password" name="password" class="form-control" placeholder="{{ trans('admin.password') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3">{{ trans('admin.image') }}</label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div>

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3">{{ trans('admin.imageUse') }}</label>
					<div class="col-md-9">
						<img src="{{ getImage('users', $user->image) }}" width="125">
					</div>
				</div>

				@if(session()->get('userType') == 'admin' && $user->admin == 3)
				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3">{{ trans('admin.permissionGroup') }}</label>
					<div class="col-md-9">
						<select name="group_id" class="form-control required">
							<option value="">{{ trans('admin.permissionGroup') }}</option>
							@foreach($groups as $group)
							<option value="{{ $group->id }}" @if($group->id == $user->group_id) selected @endif>{{ $group['name_' . getLang()] }}</option>
							@endforeach
						</select>
					</div>
				</div>
				@endif

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.save') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection

@section('script')

	<script type="text/javascript">
		
		$(document).ready(function() {

			
		});

	</script>

@endsection