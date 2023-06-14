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
	                  <th>{{ trans('admin.title') }}</th>
	                  <th>{{ trans('admin.options') }}</th>
	                </tr>
                </thead>
                <tbody>
                	@if(count($layouts) > 0)
                	@foreach($layouts as $s)
	                <tr>
	                  <td>{{ $s->id }}</td>
	                  <td>{{ $s['name_' . getLang()] }}</td>
	                  <td>
	                  	<a href="{{ url('admin/layouts') . '/' . $s->id . '/edit' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>
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