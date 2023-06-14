@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.projects'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/projects/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addProject') }} 
			</a>
			<a href="{{ url('admin/projects/'. $projects->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $projects->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $projects['name_' . getLang()] }}</td>
                	</tr>
                    <tr>
                        <td>{{ trans('admin.date') }}</td>
                        <td>
                            {{ $projects['date_project'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.description') }}</td>
                        <td>
                            {{ $projects['description_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.content') }}</td>
                        <td>{!! $projects['content_' . getLang()] !!}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.image') }}</td>
                        <td>
                            <img src="{{ $projects->image }}" width="80">
                        </td>
                    </tr>
                </tbody>
            </table>

            @if(!empty($projects->points) && count($projects->points) > 0)

            <h4>{{ trans('admin.projectPoints') }}</h4>

            <table id="example1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>{{ trans('admin.name') }}</td>
                        <td>{{ trans('admin.content') }}</td>
                        <td>{{ trans('admin.options') }}</td>
                    </tr>
                    @foreach($projects->points as $point)
                    <tr>
                        <td>{{ $point['name_' . getLang()] }}</td>
                        <td>{{ $point['description_' . getLang()] }}</td>
                        <td>
                            <a href="{{ url('admin/projects') . '/' . $point->id . '/editPoint' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>
                            
                            <a href="{{ url('admin/projects') . '/' . $point->id . '/deletePoint' }}" class="btn btn-danger delete"><i class="fa fa-close"></i> {{ trans('admin.delete') }} </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
			@endif

		</div> <!-- End Content -->
	</div>

@endsection