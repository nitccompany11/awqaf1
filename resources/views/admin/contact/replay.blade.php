@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.contact'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			<form class="form-horizontal" method="post" action="{{ url()->current() }}">

				{{ csrf_field() }}

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.CName') }} </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control" placeholder="{{ trans('admin.CName') }}" value="{{ $contact->name }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.CSubject') }} </label>
					<div class="col-md-9">
						<input type="text" value="{{ $contact->subject }}" name="subject" class="form-control" placeholder="{{ trans('admin.CSubject') }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.CEmail') }} </label>
					<div class="col-md-9">
						<input type="text" name="email" class="form-control" placeholder="{{ trans('admin.CEmail') }}" value="{{ $contact->email }}">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> {{ trans('admin.CMessage') }} </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" id="ckeditor" name="message"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.replay') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection