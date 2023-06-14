

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="latestNews py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-group">
                    <h1>
                        <?php echo e($title); ?>

                    </h1>
                </div>
            </div>
            <div class="row my-5">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-4 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="item">
                        <a href="<?php echo e(route('get.blog', [$blog->id, $blog->getUrlTitle()])); ?>">
                            <div class="position-relative">
                                <img class="w-100" src="<?php echo e($blog->image); ?>" alt="news">
                                <h5 class="custom-date position-absolute">
                                    <?php echo e($blog->created_at->format('Y-m-d')); ?>

                                </h5>
                            </div>
                            <div class="item-info mt-4">
                                <h4>
                                    <?php echo e($blog['name_' . getLang()]); ?>

                                </h4>
                                <p class="text-black-50 mt-3">
                                    <?php echo e(\Illuminate\Support\Str::limit($blog['description_' . getLang()], 150, $end='...')); ?>

                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/blogs/index.blade.php ENDPATH**/ ?>