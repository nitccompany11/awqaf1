

<?php $__env->startSection('content'); ?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.pages'), substr(url()->current(), 0, -4))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>


				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name_ar')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name_ar" class="form-control" placeholder="<?php echo e(trans('admin.name_ar')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name_en')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name_en" class="form-control" placeholder="<?php echo e(trans('admin.name_en')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.keyword_ar')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="keyword_ar" class="form-control" placeholder="<?php echo e(trans('admin.keyword_ar')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.keyword_en')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="keyword_en" class="form-control" placeholder="<?php echo e(trans('admin.keyword_en')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.description_ar')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_ar" placeholder="<?php echo e(trans('admin.description_ar')); ?>"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.description_en')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control" name="description_en" placeholder="<?php echo e(trans('admin.description_en')); ?>"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.content_ar')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_ar" id="ckeditor" placeholder="<?php echo e(trans('admin.content_ar')); ?>"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.content_en')); ?> </label>
					<div class="col-md-9">
						<textarea class="form-control ckeditor" name="content_en" id="ckeditor" placeholder="<?php echo e(trans('admin.content_en')); ?>"></textarea>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.image')); ?> </label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control" placeholder="<?php echo e(trans('admin.image')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.menu_place')); ?> </label>
					<div class="col-md-9">
						<select class="form-control" name="menu_place">
							<option value="1"><?php echo e(trans('admin.aboutCompany')); ?></option>
							<option value="2"><?php echo e(trans('admin.aboutAwqaf')); ?></option>
						</select>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.image_place')); ?> </label>
					<div class="col-md-9">
						<select class="form-control" name="image_place">
							<option value="1"><?php echo e(trans('admin.afterText')); ?></option>
							<option value="2"><?php echo e(trans('admin.nextToText')); ?></option>
						</select>
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<div class="col-md-12">
						<input type="submit" class="btn btn-success" value="<?php echo e(trans('admin.add')); ?>">
					</div>
				</div> <!-- End Item -->

			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/pages/add.blade.php ENDPATH**/ ?>