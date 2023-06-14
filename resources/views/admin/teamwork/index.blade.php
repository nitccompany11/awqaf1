@extends('admin.layouts.app')

@section('content')

	@section('bredcrumb')
        {{ Breadcrumbs::render('mainbred', $title, url()->current()) }}
    @endsection

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="{{ url('admin/teamwork/add') }}" class="btn btn-success">
				<i class="fa fa-plus"></i> {{ trans('admin.addTeamwork') }} 
			</a>
			<form style="display: inline-block;" method="post" action="{{ url('admin/teamwork/deleteAll') }}" id="formDeleteAll">
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
	                  <th>{{ trans('admin.title') }}</th>
	                  <th>{{ trans('admin.job') }}</th>
	                  <th>{{ trans('admin.addedDate') }}</th>
	                  <th>{{ trans('admin.options') }}</th>
	                </tr>
                </thead>
                <tbody>
                	@if(count($teamwork) > 0)
                	@foreach($teamwork as $s)
	                <tr>
	                	<td>
	                		<input type="checkbox" class="inputUser" name="teamwork[]" value="{{ $s->id }}" form="formDeleteAll">
	                	</td>
	                  	<td>{{ $s->id }}</td>
	                  	<td>{{ $s['name'] }}</td>
	                  	<td>{{ $s['job'] }}</td>
	                  	<td>{{ $s->created_at->format('Y-m-d') }}</td>
	                  	<td>
		                  	<a href="{{ url('admin/teamwork') . '/' . $s->id . '/show' }}" class="btn btn-warning"><i class="fa fa-eye"></i> {{ trans('admin.show') }} </a>

		                  	<a href="{{ url('admin/teamwork') . '/' . $s->id . '/edit' }}" class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('admin.edit') }} </a>
		                  	
		                  	<a href="{{ url('admin/teamwork') . '/' . $s->id . '/delete' }}" class="btn btn-danger delete"><i class="fa fa-close"></i> {{ trans('admin.delete') }} </a>

		                  	@if($s->status == 1)
		                  		<a href="{{ url('admin/teamwork') . '/' . $s->id . '/status' }}" class="btn btn-danger">
		                  			<i class="fa fa-close"></i>
		                  		</a>
		                  	@else
		                  		<a href="{{ url('admin/teamwork') . '/' . $s->id . '/status' }}" class="btn btn-success">
		                  			<i class="fa fa-check"></i>
		                  		</a>
		                  	@endif
	                  	</td>
	                </tr>
	                @endforeach
	                @else 
	                	<p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> {{ trans('admin.noData') }} {{ trans('admin.willAdd') }} <a href="{{ url('admin/teamwork/add') }}"> {{ trans('admin.addTeamwork') }} </a> </p>
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