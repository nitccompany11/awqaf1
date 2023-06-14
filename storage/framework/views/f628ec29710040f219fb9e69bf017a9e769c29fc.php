

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('bredcrumb'); ?>
        <?php echo e(Breadcrumbs::render('mainbreda', $title, url()->current(), trans('admin.pages'), substr(url()->current(), 0, -7))); ?>

    <?php $__env->stopSection(); ?>

	<div class="col-md-12 text-center content-t card">
		<div class="col-md-12 text-right btnDiv"> <!-- Heading Button -->
			<a href="<?php echo e(url('admin/page/add')); ?>" class="btn btn-success">
				<i class="fa fa-plus"></i> <?php echo e(trans('admin.addPage')); ?> 
			</a>
			<a href="<?php echo e(url('admin/page/'. $page->id .'/edit')); ?>" class="btn btn-info">
				<i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> 
			</a>
		</div> <!-- End Heading Button -->
		<div class="col-md-12 contentTable"> <!-- Content -->

			<table id="example1" class="table table-bordered table-striped">
                <tbody>
                	<tr>
                		<td><?php echo e(trans('admin.ID')); ?></td>
                		<td><?php echo e($page->id); ?></td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.name')); ?></td>
                		<td><?php if(session()->get('lang') == 'en'): ?> <?php echo e($page->name_en); ?> <?php else: ?> <?php echo e($page->name_ar); ?> <?php endif; ?></td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.keyword')); ?></td>
                		<td>
                			<?php echo e($page['keyword_' . getLang()]); ?>

                		</td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.description')); ?></td>
                		<td>
                			<?php echo e($page['description_' . getLang()]); ?>

                		</td>
                	</tr>
                	<tr>
                		<td><?php echo e(trans('admin.content')); ?></td>
                		<td>
                            <?php if(session()->get('lang') == 'en'): ?> <?php echo $page->content_en; ?> <?php else: ?> <?php echo $page->content_ar; ?> <?php endif; ?>      
                        </td>
                	</tr>
                </tbody>
             </table>
			
		</div> <!-- End Content -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/pages/show.blade.php ENDPATH**/ ?>