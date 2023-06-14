

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="py-5">
        <div class="container">
            <div class="title-group w-100 text-center my-4">
                <h1>
                    <?php echo e($title); ?>

                </h1>
            </div>
            <div class="row company-list">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-4 item d-flex justify-content-center flex-column align-items-center">
                    <a href="<?php echo e(route('get.company', [$company->id, $company->getUrlTitle()])); ?>">
                        <div class="company-img w-50 h-50 d-flex justify-content-center align-items-center mb-4">
                            <img src="<?php echo e($company->image); ?>" alt="<?php echo e($company['name_' . getLang()]); ?>" class="img-fluid text-center">
                        </div>
                        <div class="title-group w-100 text-center py-4">
                            <h5>
                                <?php echo e(trans('home.company')); ?>

                            </h5>
                            <h1>
                                <?php echo e($company['name_' . getLang()]); ?>

                            </h1>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/companies/index.blade.php ENDPATH**/ ?>