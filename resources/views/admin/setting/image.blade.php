@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">
				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $settings->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_logo') }} </label>
					<div class="col-md-9">
						<input type="file" name="site_logo" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img src="{{ url('public/uploads/settings/' . $settings->site_logo) }}" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_logo_footer') }} </label>
					<div class="col-md-9">
						<input type="file" name="site_logo_footer" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img src="{{ url('public/uploads/settings/' . $settings->site_logo_footer) }}" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.site_icon') }} </label>
					<div class="col-md-9">
						<input type="file" name="site_icon" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img src="{{ url('public/uploads/settings/' . $settings->site_icon) }}" class="img-responsive center-block">
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