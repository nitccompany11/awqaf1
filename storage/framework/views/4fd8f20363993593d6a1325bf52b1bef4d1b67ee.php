

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbred', $title, url()->current())); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="id" value="<?php echo e($settings->id); ?>">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.site_logo')); ?> </label>
					<div class="col-md-9">
						<input type="file" name="site_logo" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.imageUse')); ?> </label>
					<div class="col-md-9">
						<img src="<?php echo e(url('public/uploads/settings/' . $settings->site_logo)); ?>" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.site_logo_footer')); ?> </label>
					<div class="col-md-9">
						<input type="file" name="site_logo_footer" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.imageUse')); ?> </label>
					<div class="col-md-9">
						<img src="<?php echo e(url('public/uploads/settings/' . $settings->site_logo_footer)); ?>" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.site_icon')); ?> </label>
					<div class="col-md-9">
						<input type="file" name="site_icon" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.imageUse')); ?> </label>
					<div class="col-md-9">
						<img src="<?php echo e(url('public/uploads/settings/' . $settings->site_icon)); ?>" class="img-responsive center-block">
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/setting/image.blade.php ENDPATH**/ ?>