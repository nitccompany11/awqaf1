@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.reports'), substr(url()->current(), 0, -7)) }}
    @endsection

  	<div class="alert alert-info text-center">
  		<p>
  			Image Size 54px Width * 45px Height
  		</p>
  	</div>

	<div class="col-md-12 text-center content-t card card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $reports->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" value="{{ $reports->name_ar }}" class="form-control" placeholder="{{ trans('admin.name_ar') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_en" value="{{ $reports->name_en }}" class="form-control" placeholder="{{ trans('admin.name_en') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.date') }} </label>
					<div class="col-md-9">
						<input type="text" name="date_project" class="form-control date" placeholder="{{ trans('admin.date') }}" readonly="readonly" value="{{ $reports->date_project }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.image') }} </label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img src="{{ $reports->image }}" width="150">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.file') }} </label>
					<div class="col-md-9">
						<input type="file" name="file" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.fileUse') }} </label>
					<div class="col-md-9">
						<a href="{{ $reports->file }}" download="{{ $reports['file'] }}" class="btn btn-success">
							<i class="fa fa-file"></i>
						</a>
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