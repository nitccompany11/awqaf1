<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbred', $title, url()->current())); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="<?php echo e(url('admin/teamwork/add')); ?>" class="btn btn-success">
				<i class="fa fa-plus"></i> <?php echo e(trans('admin.addTeamwork')); ?> 
			</a>
			<form style="display: inline-block;" method="post" action="<?php echo e(url('admin/teamwork/deleteAll')); ?>" id="formDeleteAll">
				<?php echo e(csrf_field()); ?>

				<button type="submit" class="btn btn-success">
					<i class="fa fa-close"></i> 
					<?php echo e(trans('admin.deleteAll')); ?> 
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
	                  <th><?php echo e(trans('admin.ID')); ?></th>
	                  <th><?php echo e(trans('admin.title')); ?></th>
	                  <th><?php echo e(trans('admin.job')); ?></th>
	                  <th><?php echo e(trans('admin.addedDate')); ?></th>
	                  <th><?php echo e(trans('admin.options')); ?></th>
	                </tr>
                </thead>
                <tbody>
                	<?php if(count($teamwork) > 0): ?>
                	<?php $__currentLoopData = $teamwork; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <tr>
	                	<td>
	                		<input type="checkbox" class="inputUser" name="teamwork[]" value="<?php echo e($s->id); ?>" form="formDeleteAll">
	                	</td>
	                  	<td><?php echo e($s->id); ?></td>
	                  	<td><?php echo e($s['name']); ?></td>
	                  	<td><?php echo e($s['job']); ?></td>
	                  	<td><?php echo e($s->created_at->format('Y-m-d')); ?></td>
	                  	<td>
		                  	<a href="<?php echo e(url('admin/teamwork') . '/' . $s->id . '/show'); ?>" class="btn btn-warning"><i class="fa fa-eye"></i> <?php echo e(trans('admin.show')); ?> </a>

		                  	<a href="<?php echo e(url('admin/teamwork') . '/' . $s->id . '/edit'); ?>" class="btn btn-info"><i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> </a>
		                  	
		                  	<a href="<?php echo e(url('admin/teamwork') . '/' . $s->id . '/delete'); ?>" class="btn btn-danger delete"><i class="fa fa-close"></i> <?php echo e(trans('admin.delete')); ?> </a>

		                  	<?php if($s->status == 1): ?>
		                  		<a href="<?php echo e(url('admin/teamwork') . '/' . $s->id . '/status'); ?>" class="btn btn-danger">
		                  			<i class="fa fa-close"></i>
		                  		</a>
		                  	<?php else: ?>
		                  		<a href="<?php echo e(url('admin/teamwork') . '/' . $s->id . '/status'); ?>" class="btn btn-success">
		                  			<i class="fa fa-check"></i>
		                  		</a>
		                  	<?php endif; ?>
	                  	</td>
	                </tr>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                <?php else: ?> 
	                	<p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> <?php echo e(trans('admin.noData')); ?> <?php echo e(trans('admin.willAdd')); ?> <a href="<?php echo e(url('admin/teamwork/add')); ?>"> <?php echo e(trans('admin.addTeamwork')); ?> </a> </p>
	                <?php endif; ?>	
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

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
			      title: "<?php echo e(trans('admin.areYouSure')); ?>",
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/teamwork/index.blade.php ENDPATH**/ ?>