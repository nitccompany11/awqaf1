

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.reports'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="<?php echo e(url('admin/reports/add')); ?>" class="btn btn-success">
				<i class="fa fa-plus"></i> <?php echo e(trans('admin.addReport')); ?> 
			</a>
			<a href="<?php echo e(url('admin/reports/'. $reports->id .'/edit')); ?>" class="btn btn-info">
				<i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td><?php echo e(trans('admin.ID')); ?></td>
                		<td><?php echo e($reports->id); ?></td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.name')); ?></td>
                		<td><?php echo e($reports['name_' . getLang()]); ?></td>
                	</tr>
                    <tr>
                        <td><?php echo e(trans('admin.date')); ?></td>
                        <td>
                            <?php echo e($reports['date_project']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.image')); ?></td>
                        <td>
                            <img src="<?php echo e($reports->image); ?>" width="80">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.file')); ?></td>
                        <td>
                            <a href="<?php echo e($reports->file); ?>" download="<?php echo e($reports['file']); ?>" class="btn btn-success">
                                <i class="fa fa-file"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
			
		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/reports/show.blade.php ENDPATH**/ ?>