

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="py-5">
        <div class="container h-100 d-flex justify-content-center align-items-center flex-column">
            <div>
                <h1 class="text-black title fs-2 fs-md-1">
                    <?php echo e($title); ?>

                </h1>
            </div>
            <p class="text-black-50 mt-5 text-center w-100 w-md-75">
                <?php echo $investment['content_' . getLang()]; ?>

            </p>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/website/home/investment.blade.php ENDPATH**/ ?>