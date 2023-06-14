@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.blogs'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/blogs/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addBlog') }} 
			</a>
			<a href="{{ url('admin/blogs/'. $blogs->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $blogs->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>{{ $blogs['name_' . getLang()] }}</td>
                	</tr>
                    <tr>
                        <td>{{ trans('admin.keyword') }}</td>
                        <td>
                            {{ $blogs['keyword_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.description') }}</td>
                        <td>
                            {{ $blogs['description_' . getLang()] }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.content') }}</td>
                        <td>{!! $blogs['content_' . getLang()] !!}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('admin.image') }}</td>
                        <td>
                            <img src="{{ $blogs->image }}" width="80">
                        </td>
                    </tr>
                </tbody>
            </table>
			
		</div> <!-- End Content -->
	</div>

@endsection