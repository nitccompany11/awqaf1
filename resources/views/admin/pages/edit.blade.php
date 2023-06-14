@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.pages'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $page->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" value="{{ $page->name_ar }}" class="form-control" placeholder="{{ trans('admin.name_ar') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_en" value="{{ $page->name_en }}" class="form-control" placeholder="{{ trans('admin.name_en') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.keyword_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="keyword_ar" class="form-control" placeholder="{{ trans('admin.keyword_ar') }}" value="{{ $page->keyword_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.keyword_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="keyword_en" class="form-control" placeholder="{{ trans('admin.keyword_en') }}" value="{{ $page->keyword_en }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.description_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_ar" placeholder="{{ trans('admin.description_ar') }}">{{ $page->description_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.description_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_en" placeholder="{{ trans('admin.description_en') }}">{{ $page->description_en }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_ar" id="ckeditor" placeholder="{{ trans('admin.content_ar') }}">{{ $page->content_ar }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_en" id="ckeditor" placeholder="{{ trans('admin.content_en') }}">{{ $page->content_en }}</textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.image') }} </label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control" placeholder="{{ trans('admin.image') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img class="img-fluid" src="{{ $page->image }}" width="125">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.menu_place') }} </label>
					<div class="col-md-9">
						<select class="form-control" name="menu_place">
							<option value="1" @if($page->menu_place == 1) selected @endif>{{ trans('admin.aboutCompany') }}</option>
							<option value="2" @if($page->menu_place == 2) selected @endif>{{ trans('admin.aboutAwqaf') }}</option>
						</select>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.image_place') }} </label>
					<div class="col-md-9">
						<select class="form-control" name="image_place">
							<option value="1" @if($page->image_place == 1) selected @endif>{{ trans('admin.afterText') }}</option>
							<option value="2" @if($page->image_place == 2) selected @endif>{{ trans('admin.nextToText') }}</option>
						</select>
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