@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 contentTable table-responsive"> <!-- Content -->

			<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                <thead>
	                <tr>
	                  <th>{{ trans('admin.ID') }}</th>
	                  <th>{{ trans('admin.name') }}</th>
	                  <th>{{ trans('admin.email') }}</th>
	                  <th>{{ trans('admin.options') }}</th>
	                </tr>
                </thead>
                <tbody>
                	@if(count($users) > 0)
                	@foreach($users as $s)
	                <tr>
	                  <td>{{ $s->id }}</td>
	                  <td>{{ $s->name }}</td>
	                  <td>{{ $s->email }}</td>
	                  <td>
	                  </td>
	                  <td>
	                  	<a href="{{ url('admin/permission') . '/' . $s->id . '/edit' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>
	                  </td>
	                </tr>
	                @endforeach
	                @endif	
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection