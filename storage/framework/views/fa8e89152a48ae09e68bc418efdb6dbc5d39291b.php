

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="cards-with-title py-5">
        <div class="container">
            <div class="title-group w-100 mb-5">
                <h1 class="text-start">
                    التقارير السنوية
                </h1>
            </div>
            <div class="row reports justify-content-between">
                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <a href="<?php echo e($report->file); ?>" class="report d-flex justify-content-start align-items-center">
                        <img src="<?php echo e($report->image); ?>" alt="report" class="w-25 me-3">
                        <div>
                            <h4 class="mb-3">
                                <?php echo e($report['name_' . getLang()]); ?>

                            </h4>
                            <h5>
                                <?php echo e(trans('home.by')); ?>

                                <span class="name">
                                    <?php echo e(@$report->user->name); ?>

                                </span>
                                |
                                <span class="date">
                                    <?php echo e($report->date_project); ?>

                                </span>
                            </h5>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/reports/index.blade.php ENDPATH**/ ?>