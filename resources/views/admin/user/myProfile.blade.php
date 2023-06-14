@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="admin" value="{{ $myProfile->admin }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name') }} </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control" placeholder="{{ trans('admin.name') }}" value="{{ $myProfile->name }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.email') }} </label>
					<div class="col-md-9">
						<input type="email" name="email" class="form-control" placeholder="{{ trans('admin.email') }}" value="{{ $myProfile->email }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.phone') }} </label>
					<div class="col-md-9">
						<input type="text" value="{{ $myProfile->phone }}" name="phone" class="form-control" placeholder="{{ trans('admin.phone') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.password') }} </label>
					<div class="col-md-9">
						<input type="password" name="password" class="form-control" placeholder="{{ trans('admin.password') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.save') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection