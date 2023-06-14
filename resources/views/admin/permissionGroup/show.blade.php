@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.permissionGroup'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/permissionGroup/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addPermissionGroup') }} 
			</a>
			<a href="{{ url('admin/permissionGroup/'. $permissionGroup->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $permissionGroup->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $permissionGroup['name_' . getLang()] }}</td>
                	</tr>
                    <tr>
                        <td colspan="2">{{ trans('admin.permission') }}</td>
                    </tr>
                    @foreach($permissionGroup->permissions as $permission)
                    <tr>
                        <td>{{ $permissionGroup['name_' . getLang()] }}</td>
                        <td>{{ $permission->role['name_' . getLang()] }}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection