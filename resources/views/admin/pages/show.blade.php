@extends('admin.layouts.app')

@section('content')

    @section('bredcrumb')
        {{ Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.pages'), substr(url()->current(), 0, -7)) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/page/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addPage') }} 
			</a>
			<a href="{{ url('admin/page/'. $page->id .'/edit') }}" class="btn btn-info">
				<i class="fa fa-edit"></i> {{ trans('admin.edit') }} 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td>{{ trans('admin.ID') }}</td>
                		<td>{{ $page->id }}</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.name') }}</td>
                		<td>@if(session()->get('lang') == 'en') {{ $page->name_en }} @else {{ $page->name_ar }} @endif</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.keyword') }}</td>
                		<td>
                			{{ $page['keyword_' . getLang()] }}
                		</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.description') }}</td>
                		<td>
                			{{ $page['description_' . getLang()] }}
                		</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.content') }}</td>
                		<td>
                            @if(session()->get('lang') == 'en') {!! $page->content_en !!} @else {!! $page->content_ar !!} @endif      
                        </td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.image') }}</td>
                		<td>
                			<img class="img-fluid" src="{{ $page->image }}" width="125">
                		</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.menu_place') }}</td>
                		<td>
                			@if($page->menu_place == 1)
                				{{ trans('admin.aboutCompany') }}
                			@else
                				{{ trans('admin.aboutAwqaf') }}
                			@endif
                		</td>
                	</tr>
                	<tr>
                		<td>{{ trans('admin.image_place') }}</td>
                		<td>
                			@if($page->image_place == 1)
                				{{ trans('admin.afterText') }}
                			@else
                				{{ trans('admin.nextToText') }}
                			@endif
                		</td>
                	</tr>
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection