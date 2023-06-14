

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.projects'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="<?php echo e(url('admin/projects/add')); ?>" class="btn btn-success">
				<i class="fa fa-plus"></i> <?php echo e(trans('admin.addProject')); ?> 
			</a>
			<a href="<?php echo e(url('admin/projects/'. $projects->id .'/edit')); ?>" class="btn btn-info">
				<i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td><?php echo e(trans('admin.ID')); ?></td>
                		<td><?php echo e($projects->id); ?></td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.name')); ?></td>
                		<td><?php echo e($projects['name_' . getLang()]); ?></td>
                	</tr>
                    <tr>
                        <td><?php echo e(trans('admin.date')); ?></td>
                        <td>
                            <?php echo e($projects['date_project']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.description')); ?></td>
                        <td>
                            <?php echo e($projects['description_' . getLang()]); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.content')); ?></td>
                        <td><?php echo $projects['content_' . getLang()]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.image')); ?></td>
                        <td>
                            <img src="<?php echo e($projects->image); ?>" width="80">
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php if(!empty($projects->points) && count($projects->points) > 0): ?>

            <h4><?php echo e(trans('admin.projectPoints')); ?></h4>

            <table id="example1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><?php echo e(trans('admin.name')); ?></td>
                        <td><?php echo e(trans('admin.content')); ?></td>
                        <td><?php echo e(trans('admin.options')); ?></td>
                    </tr>
                    <?php $__currentLoopData = $projects->points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($point['name_' . getLang()]); ?></td>
                        <td><?php echo e($point['description_' . getLang()]); ?></td>
                        <td>
                            <a href="<?php echo e(url('admin/projects') . '/' . $point->id . '/editPoint'); ?>" class="btn btn-info"><i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> </a>
                            
                            <a href="<?php echo e(url('admin/projects') . '/' . $point->id . '/deletePoint'); ?>" class="btn btn-danger delete"><i class="fa fa-close"></i> <?php echo e(trans('admin.delete')); ?> </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
			<?php endif; ?>

		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/projects/show.blade.php ENDPATH**/ ?>