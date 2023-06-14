

<?php $__env->startSection('content'); ?>

	<?php

		if(session()->get('userType') == 'user') {

			$title2 = trans('admin.user');
			$url2 = url('admin/user/user');

		} elseif (session()->get('userType') == 'admin') {

			$title2 = trans('admin.adminT');
			$url2 = url('admin/user/admin');

		}

	?>

	<?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), $title2, $url2)); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="form card-body pb-2">
			
			<form class="form-horizontal" method="post" action="<?php echo e(url()->current()); ?>" enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>


				<input type="hidden" name="id" value="<?php echo e($user->id); ?>">

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.name')); ?> </label>
					<div class="col-md-9">
						<input type="text" name="name" class="form-control required name" placeholder="<?php echo e(trans('admin.name')); ?>" value="<?php echo e($user->name); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.email')); ?> </label>
					<div class="col-md-9">
						<input type="email" name="email" class="form-control required" placeholder="<?php echo e(trans('admin.email')); ?>" value="<?php echo e($user->email); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.phone')); ?> </label>
					<div class="col-md-9">
						<input type="number" name="phone" class="form-control required lenght" data-length="10" placeholder="<?php echo e(trans('admin.phone')); ?>" value="<?php echo e($user->phone); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"> <?php echo e(trans('admin.password')); ?> </label>
					<div class="col-md-9">
						<input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('admin.password')); ?>">
					</div>
				</div> <!-- End Item -->

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"><?php echo e(trans('admin.image')); ?></label>
					<div class="col-md-9">
						<input type="file" name="image" class="form-control">
					</div>
				</div>

				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"><?php echo e(trans('admin.imageUse')); ?></label>
					<div class="col-md-9">
						<img src="<?php echo e(getImage('users', $user->image)); ?>" width="125">
					</div>
				</div>

				<?php if(session()->get('userType') == 'admin' && $user->admin == 3): ?>
				<div class="row row-sm"> <!-- Item -->
					<label class="label label-control col-md-3"><?php echo e(trans('admin.permissionGroup')); ?></label>
					<div class="col-md-9">
						<select name="group_id" class="form-control required">
							<option value=""><?php echo e(trans('admin.permissionGroup')); ?></option>
							<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($group->id); ?>" <?php if($group->id == $user->group_id): ?> selected <?php endif; ?>><?php echo e($group['name_' . getLang()]); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</div>
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

			
		});

	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>