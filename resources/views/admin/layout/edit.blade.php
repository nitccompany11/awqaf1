@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.layouts'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $layout->id }}">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_ar') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" class="form-control" placeholder="{{ trans('admin.name_ar') }}" value="{{ $layout->name_ar }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name_en') }} </label>
					<div class="col-md-9">
						<input type="text" name="name_en" class="form-control" placeholder="{{ trans('admin.name_en') }}" value="{{ $layout->name_en }}">
					</div>
				</div> <!-- End Item -->

				@if(!empty($layout->image))
				<div class="row row-sm imageLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.image') }} </label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm imageLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.imageUse') }} </label>
					<div class="col-md-9">
						<img src="{{ $layout->image }}" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->
				@endif

				@if(!empty($layout->content_ar))
				<div class="row row-sm contentLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_ar" placeholder="{{ trans('admin.content_ar') }}" id="ckeditor">{{ $layout->content_ar }}</textarea>
					</div>
				</div> <!-- End Item -->
				@endif

				@if(!empty($layout->content_en))
				<div class="row row-sm contentLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.content_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_en" placeholder="{{ trans('admin.content_en') }}" id="ckeditor">{{ $layout->content_en }}</textarea>
					</div>
				</div> <!-- End Item -->
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

			$('#typeLayouts').on('change', function() {

				var value = $(this).val();

				if (value == 1) {

					$('.contentLayouts').removeClass('hidden');
					$('.imageLayouts').addClass('hidden');

				} else if(value == 2) {

					$('.imageLayouts').removeClass('hidden');
					$('.contentLayouts').addClass('hidden');

				} else {

					$('.imageLayouts').addClass('hidden');
					$('.contentLayouts').addClass('hidden');

				}

			});

		});
	</script>

@endsection