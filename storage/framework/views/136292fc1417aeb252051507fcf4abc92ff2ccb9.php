

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.companies'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="<?php echo e(url('admin/companies/add')); ?>" class="btn btn-success">
				<i class="fa fa-plus"></i> <?php echo e(trans('admin.addCompany')); ?> 
			</a>
			<a href="<?php echo e(url('admin/companies/'. $companies->id .'/edit')); ?>" class="btn btn-info">
				<i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td><?php echo e(trans('admin.ID')); ?></td>
                		<td><?php echo e($companies->id); ?></td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.name')); ?></td>
                		<td><?php echo e($companies['name_' . getLang()]); ?></td>
                	</tr>
                    <tr>
                        <td><?php echo e(trans('admin.url')); ?></td>
                        <td>
                            <a href="<?php echo e($companies->url); ?>" class="btn btn-success">
                                <i class="fa fa-link"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.description')); ?></td>
                        <td>
                            <?php echo e($companies['content_' . getLang()]); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(trans('admin.image')); ?></td>
                        <td>
                            <img src="<?php echo e($companies->image); ?>" width="80">
                        </td>
                    </tr>
                </tbody>
            </table>
			
		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/companies/show.blade.php ENDPATH**/ ?>