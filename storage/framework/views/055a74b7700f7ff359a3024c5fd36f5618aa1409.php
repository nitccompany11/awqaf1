

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbred', $title, url()->current())); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 contentTable table-responsive"> <!-- Content -->

			<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                <thead>
	                <tr>
	                  <th><?php echo e(trans('admin.ID')); ?></th>
	                  <th><?php echo e(trans('admin.title')); ?></th>
	                  <th><?php echo e(trans('admin.options')); ?></th>
	                </tr>
                </thead>
                <tbody>
                	<?php if(count($layouts) > 0): ?>
                	<?php $__currentLoopData = $layouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <tr>
	                  <td><?php echo e($s->id); ?></td>
	                  <td><?php echo e($s['name_' . getLang()]); ?></td>
	                  <td>
	                  	<a href="<?php echo e(url('admin/layouts') . '/' . $s->id . '/edit'); ?>" class="btn btn-info"><i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> </a>
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/layout/index.blade.php ENDPATH**/ ?>