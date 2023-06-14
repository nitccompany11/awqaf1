@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

  	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/user/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addUser') }} 
			</a>
			<form style="display: inline-block;" method="post" action="{{ url('admin/user/deleteAll') }}" id="formDeleteAll">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-success">
					<i class="fa fa-close"></i> 
					{{ trans('admin.deleteAll') }} 
				</button>
			</form>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable table-responsive"> <!-- Content -->

			<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                <thead>
	                <tr>
	                  <th>
	                  	<input type="checkbox" class="checkAllData">
	                  	<i class="fa fa-close unCheckAllData hidden"></i>
	                  </th>
	                  <th>{{ trans('admin.ID') }}</th>
	                  <th>{{ trans('admin.name') }}</th>
	                  <th>{{ trans('admin.email') }}</th>
	                  <th>{{ trans('admin.phone') }}</th>
	                  <th>{{ trans('admin.userType') }}</th>
	                  <th>{{ trans('admin.addedDate') }}</th>
	                  <th>{{ trans('admin.options') }}</th>
	                </tr>
                </thead>
                <tbody>
                	@if(count($users) > 0)
                	@foreach($users as $s)
	                <tr>
	                	<td>
	                		<input type="checkbox" class="inputUser" name="user[]" value="{{ $s->id }}" form="formDeleteAll">
	                	</td>
	                  <td>{{ $s->id }}</td>
	                  <td>{{ $s->name }}</td>
	                  <td>{{ $s->email }}</td>
	                  <td>{{ $s->phone }}</td>
	                  <td>
	                  		@foreach(userType() as $key => $type)
	                  			@if($s->admin == $key)
	                  				{{ $type }}
	                  			@endif
	                  		@endforeach
	                  </td>
	                  <td>@if(!is_null($s->created_at)){{ $s->created_at->format('Y-m-d') }}@endif</td>
	                  <td>
	                  	<a href="{{ url('admin/user') . '/' . $s->id . '/show' }}" class="btn btn-warning"><i class="fa fa-eye"></i> {{ trans('admin.show') }} </a>

	                  	<a href="{{ url('admin/user') . '/' . $s->id . '/edit' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>

	                  	{{-- @if($s->status == 0)
							<a href="{{ url('admin/user') . '/' . $s->id . '/active' }}" class="btn btn-success"><i class="fa fa-check"></i> {{ trans('admin.approve') }} </a>
						@else
							<a href="{{ url('admin/user') . '/' . $s->id . '/unactive' }}" class="btn btn-danger"><i class="fa fa-check"></i> {{ trans('admin.unactive') }} </a>	
	                  	@endif --}}

	                  	<a href="{{ url('admin/user') . '/' . $s->id . '/delete' }}" class="btn btn-danger delete"><i class="fa fa-close"></i> {{ trans('admin.delete') }} </a>
	                  </td>
	                </tr>
	                @endforeach
	                @else 
	                	<p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} {{ trans('admin.willAdd') }} <a href="{{ url('admin/user/add') }}"> {{ trans('admin.addAdmin') }} </a> </p>
	                @endif	
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

@endsection

@section('script')

	<script type="text/javascript">
		
		$(document).ready(function() {

			$('.checkAllData').on('click', function() {

				$(this).removeAttr('checked').addClass('hidden');
				$('.unCheckAllData').removeClass('hidden');
				$('.inputUser').prop('checked', true);

			});

			$('.unCheckAllData').on('click', function() {

				$(this).addClass('hidden');
				$('.checkAllData').removeClass('hidden');
				$('.inputUser').prop('checked', false);

			});

			$('#formDeleteAll button').click(function(e) {

				e.preventDefault(); //cancel default action

			    //Recuperate href value
			    var message = $(this).data('confirm');

			    //pop up
			    swal({
			      title: "{{ trans('admin.areYouSure') }}",
			      text: message, 
			      icon: "warning",
			      buttons: true,
			      dangerMode: true,
			    })
			    .then((willDelete) => {
			      if (willDelete) {

			        $('#formDeleteAll').submit();

			      } else {
			        
			      	$('.unCheckAllData').addClass('hidden');
					$('.checkAllData').removeClass('hidden');
					$('.inputUser').prop('checked', false);
			        return false;

			      }
			      
			    });

			});

		});

	</script>

@endsection