@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.permission'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			<form class="form-horizontal" method="post" action="{{ url()->current() }}">

				{{ csrf_field() }}

				<input type="hidden" name="id" value="{{ $user->id }}">

				@foreach($role as $role)
				<div class="col-md-4"> <!-- Item -->
					<label class="label label-control col-md-3">@if(session()->get('lang') == 'en') {{ $role->name_en }} @else {{ $role->name_ar }} @endif</label>
					<div class="col-md-9">
						<input type="checkbox" name="role[]" value="{{ $role->id }}" @if(!empty($permission))@if(in_array($role->id, $permission)) checked @endif @endif>
					</div>
				</div> <!-- End Item -->
				@endforeach

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="{{ trans('admin.edit') }}">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

@endsection