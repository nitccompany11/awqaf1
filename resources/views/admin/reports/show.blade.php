@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.reports'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/reports/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addReport') }} 
			</a>
			<a href="{{ url('admin/reports/'. $reports->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $reports->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $reports['name_' . getLang()] }}</td>
                	</tr>
                    <tr>
                        <td>{{ trans('admin.date') }}</td>
                        <td>
                            {{ $reports['date_project'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.image') }}</td>
                        <td>
                            <img src="{{ $reports->image }}" width="80">
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.file') }}</td>
                        <td>
                            <a href="{{ $reports->file }}" download="{{ $reports['file'] }}" class="btn btn-success">
                                <i class="fa fa-file"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
			
		</div> <!-- End Content -->
	</div>

@endsection