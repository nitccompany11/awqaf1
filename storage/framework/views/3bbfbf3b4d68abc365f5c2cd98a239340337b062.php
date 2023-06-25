

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Start Projects -->
    <section class="cards-with-title py-5">
        <div class="container">
            <div class="title-group w-100 mb-5">
                <h1 class="text-start">
                    <?php echo e($title); ?>

                </h1>
            </div>
            <div class="row">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-4 px-md-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?php echo e(route('get.project', [$project->id, $project->getUrlTitle()])); ?>">
                        <img src="<?php echo e($project->image); ?>" alt="" class="w-100">
                        <div class="project-info mt-4 mb-5">
                            <h6>
                                <?php echo e(trans('admin.date')); ?>

                                <span>
                                    <?php echo e($project->date_project); ?>

                                </span>
                            </h6>
                            <h4>
                                <?php echo e($project['name_' . getLang()]); ?>

                            </h4>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- End Projects -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/website/projects/index.blade.php ENDPATH**/ ?>