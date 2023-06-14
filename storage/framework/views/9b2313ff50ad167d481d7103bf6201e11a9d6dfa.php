

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbred', $title, url()->current())); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="admin" value="<?php echo e($myProfile->admin); ?>">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('admin.name')); ?>" value="<?php echo e($myProfile->name); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.email')); ?> </label>
					<div class="col-md-9">
						<input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('admin.email')); ?>" value="<?php echo e($myProfile->email); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.phone')); ?> </label>
					<div class="col-md-9">
						<input type="text" value="<?php echo e($myProfile->phone); ?>" name="phone" class="form-control" placeholder="<?php echo e(trans('admin.phone')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.password')); ?> </label>
					<div class="col-md-9">
						<input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('admin.password')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="<?php echo e(trans('admin.save')); ?>">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/user/myProfile.blade.php ENDPATH**/ ?>