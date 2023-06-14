

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="visionMissionObjectives">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="<?php echo e(url('public')); ?>/front/images/vision.png" alt="الرؤية">
                        <h1 class="m-auto"><?php echo e($vision['name_' . getLang()]); ?></h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        <?php echo e($vision['content_' . getLang()]); ?>

                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="<?php echo e(url('public')); ?>/front/images/mission.png" alt="الرسالة">
                        <h1 class="m-auto"><?php echo e($mission['name_' . getLang()]); ?></h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        <?php echo e($mission['content_' . getLang()]); ?>

                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="header d-flex justify-content-start align-items-center px-5">
                        <img class="position-absolute" src="<?php echo e(url('public')); ?>/front/images/objectives.png" alt="الأهداف">
                        <h1 class="m-auto"><?php echo e($message['name_' . getLang()]); ?></h1>
                    </div>
                    <p class="text-center m-auto mt-3 px-4">
                        <?php echo e($message['content_' . getLang()]); ?>

                    </p>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/home/vission.blade.php ENDPATH**/ ?>