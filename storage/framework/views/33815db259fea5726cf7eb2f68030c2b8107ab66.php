

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="py-5">
        <div class="container">
            <div class="row h-100 d-flex justify-content-center <?php if($page->image_place == 1): ?> align-items-center flex-column <?php endif; ?>">
                <?php if($page->image_place == 1): ?>
                <div>
                    <h1 class="text-black title fs-2 fs-md-1">
                        <?php echo e($title); ?>

                    </h1>
                </div>
                <p class="text-black-50 mt-5 text-center w-100 w-md-75">
                    <?php echo $page['content_' . getLang()]; ?>    
                </p>
                <?php if(!is_null($page->image)): ?>
                <img class="my-5 w-75" src="<?php echo e($page->image); ?>" alt="<?php echo e($title); ?>">
                <?php endif; ?>
                <?php elseif($page->image_place == 2): ?>
                <div class="col-12 col-md-6 ps-md-5">
                        <div class="title-group w-100 mb-3 text-center text-md-start">
                            
                            <h1>
                                <?php echo e($title); ?>

                            </h1>
                        </div>
                        <p class="text-center text-md-start">
                            <?php echo $page['content_' . getLang()]; ?>    
                        </p>
                    </div>
                    <?php if(!is_null($page->image)): ?>
                    <div class="col-12 col-md-6" style="padding: 20px;">
                        <img src="<?php echo e($page->image); ?>" alt="<?php echo e($title); ?>" class="w-100">
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/website/home/page.blade.php ENDPATH**/ ?>