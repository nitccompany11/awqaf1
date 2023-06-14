@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.blogs'), substr(url()->current(), 0, -7)) }}
    @endsection

  	<div class="alert alert-info text-center">
  		<p>
  			Image Size 530px Width * 370px Height
  		</p>
  	</div>

	<div class="col-md-12 text-center content-t card card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $blogs->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" value="{{ $blogs->name_ar }}" class="form-control" placeholder="{{ trans('admin.name_ar') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_en" value="{{ $blogs->name_en }}" class="form-control" placeholder="{{ trans('admin.name_en') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.keyword_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="keyword_ar" class="form-control" placeholder="{{ trans('admin.keyword_ar') }}" value="{{ $blogs->keyword_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.keyword_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="keyword_en" class="form-control" placeholder="{{ trans('admin.keyword_en') }}" value="{{ $blogs->keyword_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.description_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_ar" placeholder="{{ trans('admin.description_ar') }}">{{ $blogs->description_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.description_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_en" placeholder="{{ trans('admin.description_en') }}">{{ $blogs->description_en }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" placeholder="{{ trans('admin.content_ar') }}" name="content_ar">{{ $blogs->content_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" placeholder="{{ trans('admin.content_en') }}" name="content_en">{{ $blogs->content_en }}</textarea>
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
						<img src="{{ $blogs->image }}" width="150">
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