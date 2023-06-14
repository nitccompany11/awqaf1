@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.testom'), substr(url()->current(), 0, -4)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="{{ url()->current() }}" enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.name') }} </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control" placeholder="{{ trans('admin.name') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.job') }} </label>
					<div class="col-md-9">
						<input type="text" name="job" class="form-control" placeholder="{{ trans('admin.job') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.comment_ar') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" placeholder="{{ trans('admin.comment_ar') }}" name="comment_ar"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.comment_en') }} </label>
					<div class="col-md-9">
						<textarea class="form-control" placeholder="{{ trans('admin.comment_en') }}" name="comment_en"></textarea>
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