

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="content-with-title">
        <div class="container">
            <div class="title-group w-100 text-center mb-3 mb-md-5">
                <h1>
                    <?php echo e($title); ?>

                </h1>
            </div>
            <div class="row board">
                <?php $__currentLoopData = $teamworks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teamwork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-6 col-lg-3 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php echo e($teamwork->image); ?>" alt="<?php echo e($teamwork->name); ?>" class="w-100">
                    <h5 class="text-center p-3"><?php echo e($teamwork->name); ?></h5>
                    <h6 class="text-black-50 text-center mb-3"><?php echo e($teamwork->job); ?></h6>
                    <p class="text-center">
                        <?php echo $teamwork['content_' . getLang()]; ?>

                    </p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/teamwork/index.blade.php ENDPATH**/ ?>