@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.teamwork'), substr(url()->current(), 0, -7)) }}
    @endsection

  	{{-- <div class="alert alert-info text-center">
  		<p>
  			Image Size 219px Width * 268px Height
  		</p>
  	</div> --}}

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $teamwork->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name') }} </label>
					<div class="col-md-9">
						<input type="text" name="name" value="{{ $teamwork->name }}" class="form-control" placeholder="{{ trans('admin.name') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.job') }} </label>
					<div class="col-md-9">
						<input type="text" name="job" value="{{ $teamwork->job }}" class="form-control" placeholder="{{ trans('admin.job') }}">
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
						<img src="{{ $teamwork->image }}" width="150">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" placeholder="{{ trans('admin.content_ar') }}" name="content_ar">{{ $teamwork->content_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" placeholder="{{ trans('admin.content_en') }}" name="content_en">{{ $teamwork->content_en }}</textarea>
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