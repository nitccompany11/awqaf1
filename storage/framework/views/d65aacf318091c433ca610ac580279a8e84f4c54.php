

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('website.layouts.crumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5 details-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4  image m-auto m-lg-0">
                    <img src="<?php echo e($project->image); ?>" class="w-100" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="d-flex justify-content-between align-items-center my-4">
                        <div class="project-info">
                            
                            <h4>
                                <?php echo e($title); ?>

                            </h4>
                        </div>
                        <h5 class="custom-date">
                            <?php echo e($project->date_project); ?>

                        </h5>
                    </div>
                    <p>
                        <?php echo $project['content_' . getLang()]; ?>

                    </p>
                    <div class="cards-with-title py-4">
                        <div class="title w-100 mb-3">
                            <h1 class="text-start">
                                <?php echo e(trans('home.importnantPoints')); ?>

                            </h1>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $project->points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-md-4 px-md-2 mb-md-0 mb-3">
                                <div class="project-point px-3 py-2">
                                    <h5><?php echo e($point['name_' . getLang()]); ?></h5>
                                    <p>
                                        <?php echo e($project['description_' . getLang()]); ?>

                                    </p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="p-lg-5 related-items">
                    <div class="title-group w-100 mb-5">
                        <h1 class="text-start">
                            <?php echo e(trans('home.relatedProjects')); ?>

                        </h1>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $relateds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-4 px-md-4 aos-init" data-aos="fade-up" data-aos-delay="300">
                            <div class="item">
                                <a href="<?php echo e(route('get.project', [$related->id, $related->getUrlTitle()])); ?>">
                                    <img src="<?php echo e($related->image); ?>" alt="" class="w-100">
                                    <div class="project-info mt-4 mb-5">
                                        <h6>
                                            <?php echo e(trans('admin.date')); ?>

                                            <span>
                                                <?php echo e($related->date_project); ?>

                                            </span>
                                        </h6>
                                        <h4>
                                            <?php echo e($related['name_' . getLang()]); ?>

                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/projects/single.blade.php ENDPATH**/ ?>