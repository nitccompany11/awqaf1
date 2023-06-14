@extends('admin.layouts.app')

@section('content')

  	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.permissionGroup'), substr(url()->current(), 0, -4)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" class="form-control" placeholder="{{ trans('admin.name_ar') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_en" class="form-control" placeholder="{{ trans('admin.name_en') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.add') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection