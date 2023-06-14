

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="nouraForDriving">
        <div class="container">
            <div class="row company-description">
                <div class="col-12 col-md-4 company-logo">
                    <img src="<?php echo e($company->image); ?>" alt="<?php echo e($title); ?>" class="img-fluid w-100">
                </div>
                <div class="col-12 col-md-8 company-detail pe-4">
                    <h1 class="mb-3"><?php echo e($title); ?></h1>
                    <p class="mb-4">
                        <?php echo $company['content_' . getLang()]; ?>

                    </p>
                    <a href="<?php echo e($company->url); ?>" class="custom-btn">
                        <?php echo e(trans('home.website')); ?>

                    </a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/companies/single.blade.php ENDPATH**/ ?>