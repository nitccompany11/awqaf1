

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbred', $title, url()->current())); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th><?php echo e(trans('admin.ID')); ?></th>
	                  <th><?php echo e(trans('admin.CName')); ?></th>
	                  <th><?php echo e(trans('admin.CEmail')); ?></th>
	                  <th><?php echo e(trans('admin.phone')); ?></th>
	                  <th><?php echo e(trans('admin.CMessage')); ?></th>
	                  <th><?php echo e(trans('admin.options')); ?></th>
	                </tr>
                </thead>
                <tbody>
                	<?php if(count($contact) > 0): ?>
                	<?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <tr>
	                  	<td><?php echo e($s->id); ?></td>
	                  	<td><?php echo e($s->name); ?></td>
	                  	<td><?php echo e($s->email); ?></td>
	                  	<td><?php echo e($s->phone); ?></td>
	                  	<td><?php echo e($s->message); ?></td>
	                 	<td>
	                  		

	                  		<a href="<?php echo e(url('admin/contact') . '/' . $s->id . '/delete'); ?>" class="btn btn-danger delete"><i class="fa fa-close"></i> <?php echo e(trans('admin.delete')); ?> </a>
	                  	</td>
	              	</tr>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                <?php else: ?> 
	                	<p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> <?php echo e(trans('admin.noData')); ?> </p>
	                <?php endif; ?>	
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>