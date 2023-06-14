@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.teamwork'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/teamwork/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addTeamwork') }} 
			</a>
			<a href="{{ url('admin/teamwork/'. $teamwork->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $teamwork->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $teamwork['name'] }}</td>
                	</tr>
                    <tr>
                        <td>{{ trans('admin.job') }}</td>
                        <td>{{ $teamwork['job'] }}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.image') }}</td>
                        <td>
                            <img src="{{ $teamwork->image }}" width="80">
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.content') }}</td>
                        <td>{{ $teamwork['content_' . getLang()] }}</td>
                    </tr>
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection