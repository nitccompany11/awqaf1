<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.layouts'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="id" value="<?php echo e($layout->id); ?>">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name_ar')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" class="form-control" placeholder="<?php echo e(trans('admin.name_ar')); ?>" value="<?php echo e($layout->name_ar); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name_en')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name_en" class="form-control" placeholder="<?php echo e(trans('admin.name_en')); ?>" value="<?php echo e($layout->name_en); ?>">
					</div>
				</div> <!-- End Item -->

				<?php if(!empty($layout->image)): ?>
				<div class="row row-sm imageLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.image')); ?> </label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm imageLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.imageUse')); ?> </label>
					<div class="col-md-9">
						<img src="<?php echo e($layout->image); ?>" class="img-responsive center-block">
					</div>
				</div> <!-- End Item -->
				<?php endif; ?>

				<?php if(!empty($layout->content_ar)): ?>
				<div class="row row-sm contentLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.content_ar')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_ar" placeholder="<?php echo e(trans('admin.content_ar')); ?>" id="ckeditor"><?php echo e($layout->content_ar); ?></textarea>
					</div>
				</div> <!-- End Item -->
				<?php endif; ?>

				<?php if(!empty($layout->content_en)): ?>
				<div class="row row-sm contentLayouts"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.content_en')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_en" placeholder="<?php echo e(trans('admin.content_en')); ?>" id="ckeditor"><?php echo e($layout->content_en); ?></textarea>
					</div>
				</div> <!-- End Item -->
				<?php endif; ?>

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="<?php echo e(trans('admin.save')); ?>">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

	<script type="text/javascript">
		$(document).ready(function() {

			$('#typeLayouts').on('change', function() {

				var value = $(this).val();

				if (value == 1) {

					$('.contentLayouts').removeClass('hidden');
					$('.imageLayouts').addClass('hidden');

				} else if(value == 2) {

					$('.imageLayouts').removeClass('hidden');
					$('.contentLayouts').addClass('hidden');

				} else {

					$('.imageLayouts').addClass('hidden');
					$('.contentLayouts').addClass('hidden');

				}

			});

		});
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/layout/edit.blade.php ENDPATH**/ ?>