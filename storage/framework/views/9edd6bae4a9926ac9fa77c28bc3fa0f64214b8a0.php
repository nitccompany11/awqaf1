<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Start intro  -->
    <section class="intro py-3">
        <div class="container position-relative h-100">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="500">
                    <h1 class="mb-4">
                        <?php echo e(strip_tags(getLayout('header_content_home')['name_' . getLang()])); ?>

                    </h1>
                    <p class="text-black-50">
                        <?php echo e(strip_tags(getLayout('header_content_home')['content_' . getLang()])); ?>

                    </p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="500">
                    <div class="intro-img">
                        <img class="w-100" src="<?php echo e(getLayout('image_header_home')->image); ?>" alt="intro">
                    </div>
                </div>
            </div>
            <div class="intro-decoration mt-5 w-100">
                <img class="d-none d-md-block" src="<?php echo e(url('public')); ?>/front/images/intro-decoration.png" alt="">
                <img src="<?php echo e(url('public')); ?>/front/images/intro-decoration.png" alt="">
            </div>
        </div>
    </section>
    <!-- End intro  -->

    <!-- Start CEO's Message -->
    <section class="CEO-msg py-3">
        <div data-aos="fade-up" data-aos-offset="400" data-aos-delay="700"
            class="container h-100 d-flex justify-content-center align-items-center flex-column">
            <div class="title">
                <h1>
                    <?php echo e(strip_tags(getLayout('ceo_text_home')['name_' . getLang()])); ?>

                </h1>
            </div>
            <p class="text-black-50 mt-5 text-center w-75">
                <?php echo e(strip_tags(getLayout('ceo_text_home')['content_' . getLang()])); ?>

            </p>
            <h5 class="CEO-name mt-5 w-75">
                <?php echo e(strip_tags(getLayout('euhod_home_ceo')['content_' . getLang()])); ?>

            </h5>
        </div>
    </section>
    <!-- End CEO's Message -->

    <!-- Start Our Work -->
    <section class="ourWork py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-group">
                    <h5>
                        <?php echo e(trans('home.honaNast3red')); ?>

                    </h5>
                    <h1>
                        <?php echo e(trans('home.ourWorks')); ?>

                    </h1>
                </div>
                <a href="<?php echo e(route('get.projects')); ?>" class="custom-btn custom-btn-btn">
                    <?php echo e(trans('home.more')); ?>

                </a>
            </div>
            <div class="row my-5">
            	<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-4 project" data-aos="fade-up" data-aos-delay="300">
                    <a href="<?php echo e(route('get.project', [$project->id, $project->getUrlTitle()])); ?>">
                        <img class="w-100" src="<?php echo e($project->image); ?>" alt="project">
                        <div class="overlay">
                            <div class="project-info">
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
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- End Our Work -->

    <!-- Start Latest items -->
    <section class="latestNews py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-group">
                    <h5>
                        <?php echo e(trans('home.mediaCenter')); ?>

                    </h5>
                    <h1>
                        <?php echo e(trans('home.blog')); ?>

                    </h1>
                </div>
                <a href="<?php echo e(route('get.blogs')); ?>" class="custom-btn custom-btn-btn">
                    <?php echo e(trans('home.more')); ?>

                </a>
            </div>
            <div class="row my-5">
            	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="item">
                        <a href="<?php echo e(route('get.blog', [$blog->id, $blog->getUrlTitle()])); ?>">
                            <div class="position-relative">
                                <img class="w-100" src="<?php echo e($blog->image); ?>" alt="news">
                                <h5 class="custom-date position-absolute">
                                    <?php echo e($blog->created_at->format('Y/m/d')); ?>

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
    <!-- End Latest items -->

    <!-- Start Contact Us -->
    <section class="contactUs py-5">
        <div class="container">
            <h5 class="subtitle w-100 text-center mb-3">
                <?php echo e(trans('home.setMessage')); ?>

            </h5>
            <h1 class="title">
                <?php echo e(trans('home.contact')); ?>

            </h1>
            <div class=" d-flex justify-content-center w-100">
                <form action="<?php echo e(route('set.contact')); ?>" class="my-5 w-75" method="post">
                	<?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="custom-input position-relative col-12 col-md-4">
                            <input class="w-100 h-100 px-3" type="text" name="name" required>
                            <h5 class="position-absolute">
                               <?php echo e(trans('admin.name')); ?>

                            </h5>
                        </div>
                        <div class="custom-input position-relative col-12 col-md-4">
                            <input class="w-100 h-100 px-3 text-start" name="phone" type="tel" required>
                            <h5 class="position-absolute">
                                <?php echo e(trans('admin.phone')); ?>

                            </h5>
                        </div>
                        <div class="custom-input position-relative col-12 col-md-4">
                            <input class="w-100 h-100 px-3" name="email" type="text" required>
                            <h5 class="position-absolute">
                               <?php echo e(trans('admin.email')); ?>

                            </h5>
                        </div>
                        <div class="custom-input position-relative col-12">
                            <input class="w-100 h-100 px-3" name="message" type="text" required>
                            <h5 class="position-absolute">
                               <?php echo e(trans('home.message')); ?>

                            </h5>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button type="submit" class="custom-btn">
                            <?php echo e(trans('home.send')); ?>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Contact Us -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/home/welcome.blade.php ENDPATH**/ ?>