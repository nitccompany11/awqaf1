@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>{{ trans('admin.ID') }}</th>
	                  <th>{{ trans('admin.CName') }}</th>
	                  <th>{{ trans('admin.CEmail') }}</th>
	                  <th>{{ trans('admin.phone') }}</th>
	                  <th>{{ trans('admin.CMessage') }}</th>
	                  <th>{{ trans('admin.options') }}</th>
	                </tr>
                </thead>
                <tbody>
                	@if(count($contact) > 0)
                	@foreach($contact as $s)
	                <tr>
	                  	<td>{{ $s->id }}</td>
	                  	<td>{{ $s->name }}</td>
	                  	<td>{{ $s->email }}</td>
	                  	<td>{{ $s->phone }}</td>
	                  	<td>{{ $s->message }}</td>
	                 	<td>
	                  		{{-- <a href="{{ url('admin/contact') . '/' . $s->id . '/replay' }}" class="btn btn-success"><i class="fa fa-envelope-o"></i> {{ trans('admin.replay') }} </a> --}}

	                  		<a href="{{ url('admin/contact') . '/' . $s->id . '/delete' }}" class="btn btn-danger delete"><i class="fa fa-close"></i> {{ trans('admin.delete') }} </a>
	                  	</td>
	              	</tr>
	                @endforeach
	                @else 
	                	<p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} </p>
	                @endif	
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection