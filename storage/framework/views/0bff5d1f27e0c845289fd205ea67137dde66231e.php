

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.permissionGroup'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="id" value="<?php echo e($group->id); ?>">

				

				<div class="row row-sm">
					<?php $__currentLoopData = $permissionModels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<div class="panel panel-danger col-md-3 pannelPermission">
						<div class="panel-heading">
							<?php echo e($permissionModel['name_' . getLang()]); ?>

						</div>
					  	<div class="panel-body">
					    	<ul>
					    		<?php $__currentLoopData = $permissionModel->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    		<li>
					    			<input type="checkbox" name="permissions[]" value="<?php echo e($role->id); ?>" <?php if(in_array($role->id, $permissions->pluck('role_id')->toArray())): ?> checked <?php endif; ?>>
					    			<span><?php echo e($role['name_' . getLang()]); ?></span>
					    		</li>
					    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					    	</ul>
					  	</div>
					</div>
					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="<?php echo e(trans('admin.save')); ?>">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/permissionGroup/permission.blade.php ENDPATH**/ ?>