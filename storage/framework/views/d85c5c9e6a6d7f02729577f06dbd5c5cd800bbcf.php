<!DOCTYPE html>
<html lang="ar" <?php if(getLang() == 'ar'): ?> dir="rtl" <?php endif; ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)): ?> <?php echo e($title); ?> <?php else: ?> <?php echo e(getSetting()['site_name_' . getLang()]); ?> <?php endif; ?></title>

    <!-- change tab img -->
    <link rel="icon" href="<?php echo e(getImage('settings', getSetting()->site_icon)); ?>">

    <!-- include Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,700;0,800;1,100;1,200;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- include font awesome -->
    <script src="https://kit.fontawesome.com/d041aa17c9.js" crossorigin="anonymous"></script>

    <!-- animation.css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- include Bootstrap CSS  -->
    <?php if(getLang() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/front/css/bootstrap-rtl.css" />
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/front/css/bootstrap.css" />
    <?php endif; ?>

    <!-- include CSS file  -->
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/front/css/style.css">

    <?php if(getLang() == 'en'): ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/front/css/style_en.css">
    <?php endif; ?>

    <meta content="<?php if(isset($description)): ?> <?php echo e($description); ?> <?php else: ?> <?php echo e(getSetting()['site_description_' . getLang()]); ?> <?php endif; ?>" name="description">
    <meta content="<?php if(isset($keyword)): ?> <?php echo e($keyword); ?> <?php else: ?> <?php echo e(getSetting()['site_keyword_' . getLang()]); ?> <?php endif; ?>" name="keywords">
    <meta content="WaitEG" name="author">

    <?php echo $__env->yieldContent('style'); ?>

</head>

<body class="with_AOS">
    <!-- Start Spinner -->
    <div class="vh-100 my-spinner">
        <div class="spinner-container">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- End Spinner  -->
    <!-- Start Header / Nav bar  -->
    <nav class="navbar navbar-expand-lg" aria-label="Offcanvas">
        <div class="container">
            <div class="d-flex justify-content-between w-100">
                <div class="navbar-brand">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(getImage('settings', getSetting()->site_logo)); ?>" alt="<?php echo e(getSetting()['site_name_' . getLang()]); ?>">
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark" aria-labelledby="offcanvasNavbar2Label"
                id="offcanvasNavbar" tabindex="-1">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title"><?php echo e(trans('home.menu')); ?></h5>
                    <button type="button" class="btn-close text-reset btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($homePage) && $homePage == true): ?> active <?php endif; ?>" aria-current="page" href="<?php echo e(route('home')); ?>"><?php echo e(trans('home.home')); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if(isset($pageMenuOne) && $pageMenuOne == true): ?> active <?php endif; ?>" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(trans('admin.aboutCompany')); ?>

                            </a>
                            <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown">
                                <?php $__currentLoopData = getPages(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.page', [$page->id, $page->getUrlTitle()])); ?>">
                                            <?php echo e($page['name_' . getLang()]); ?>

                                        </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.vission')); ?>"><?php echo e(trans('home.vision')); ?></a>
                                </li>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.companies')); ?>"><?php echo e(trans('admin.companies')); ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if(isset($pageMenuTwo) && $pageMenuTwo == true): ?> active <?php endif; ?>" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(trans('admin.aboutAwqaf')); ?>

                            </a>
                            <ul class="dropdown-menu shadow-lg">
                                <?php $__currentLoopData = getPages(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.page', [$page->id, $page->getUrlTitle()])); ?>">
                                            <?php echo e($page['name_' . getLang()]); ?>

                                        </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.teamwork')); ?>">
                                            <?php echo e(trans('admin.teamWork')); ?>

                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-item <?php if(isset($investmentPage) && $investmentPage == true): ?> active <?php endif; ?>" aria-current="page" target="_self"
                                href="<?php echo e(route('get.investment')); ?>">
                                    <?php echo e(strip_tags(getLayout('investment')['name_' . getLang()])); ?>

                                </a>
                        </li>
                        <li class="nav-item <?php if(isset($projectsPage) && $projectsPage == true): ?> active <?php endif; ?>">
                            <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                href="<?php echo e(route('get.projects')); ?>">
                                    <?php echo e(trans('admin.projects')); ?>

                                </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link <?php if(isset($blogsPage) && $blogsPage == true): ?> active <?php endif; ?>" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?php echo e(trans('home.mediaCenter')); ?>

                            </a>
                            <ul class="dropdown-menu shadow-lg">
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.blogs')); ?>">
                                            <?php echo e(trans('admin.blogs')); ?>

                                        </a>
                                </li>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="<?php echo e(route('get.reports')); ?>">
                                            <?php echo e(trans('admin.reports')); ?>

                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-item <?php if(isset($contactPage) && $contactPage == true): ?> active <?php endif; ?>" aria-current="page" target="_self"
                                href="<?php echo e(route('contact')); ?>">
                                    <?php echo e(trans('home.contact')); ?>

                                </a>
                        </li>
                        <li class="nav-item lang">
                            <?php if(getLang() == 'ar'): ?>
                            <a class="nav-link" href="<?php echo e(url('language/en')); ?>">
                                <span>En</span>
                            </a>
                            <?php else: ?>
                            <a class="nav-link" href="<?php echo e(url('language/ar')); ?>">
                                <span>Ar</span>
                            </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header / Nav bar  -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Start footer  -->
    <footer>
        <div class="container pt-5 pb-4">
            <div class="row pt-5 d-flex justify-content-between">
                <div class="col-12 col-md-6">
                    <h1 class="mb-3">
                        <?php echo e(trans('home.about')); ?>

                    </h1>
                    <p>
                        <?php echo e(\Illuminate\Support\Str::limit(getSetting()['site_description_' . getLang()], 150, $end='...')); ?>

                    </p>
                    <ul class="social">
                        <a href="<?php echo e(getSetting()->facebook); ?>">
                            <li>
                                <i class="fa-brands fa-facebook"></i>
                            </li>
                        </a>
                        <a href="<?php echo e(getSetting()->instagram); ?>">
                            <li>
                                <i class="fa-brands fa-instagram"></i>
                            </li>
                        </a>
                        <a href="<?php echo e(getSetting()->linkedin); ?>">
                            <li>
                                <i class="fa-brands fa-linkedin"></i>
                            </li>
                        </a>
                        <a href="<?php echo e(getSetting()->youtube); ?>">
                            <li>
                                <i class="fa-brands fa-youtube"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <h1 class="mb-3">
                        <?php echo e(trans('home.subscribe')); ?>

                    </h1>
                    <h5>
                        <?php echo e(trans('home.subscribeText')); ?>

                    </h5>
                    <form action="<?php echo e(route('subscribe')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="custom-input position-relative my-3">
                            <input class="w-100 h-100 px-3" type="email" required="required" name="email">
                            <h5 class="position-absolute">
                                <?php echo e(trans('admin.email')); ?>

                            </h5>
                        </div>
                        <button type="submit" class="custom-btn">
                            <?php echo e(trans('home.send')); ?>

                        </button>
                    </form>
                </div>
            </div>
            <h5 class="w-100 text-center mt-5 mb-0 rights-reserved">
                <?php echo e(getSetting()['site_copy_' . getLang()]); ?>

                <br />
                <?php echo e(trans('home.copy')); ?>

                <br />
                <a href="https://waiteg.com/" style="display: inline-block;position: relative;top: 15px;right: 5px;" target="_blank">
                    <img src="<?php echo e(url('public')); ?>/2.png" class="img-fluid" width="80">
                </a>
            </h5>
        </div>
    </footer>
    <!-- End footer  -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- AOS animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- include Bootstrap JS  -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/js/bootstrap.min.js" integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="<?php echo e(url('public')); ?>/front/js/script.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

         <?php if(session()->has('success')): ?>
        
            //pop up
            swal({
              title: "رائع",
              text: "<?php echo e(session()->get('success')); ?>", 
              icon: "success",
              buttons: true,
              dangerMode: false,
            });

        <?php elseif(session()->has('error')): ?>

            //pop up
            swal({
              title: "تحذير",
              text: "<?php echo e(session()->get('error')); ?>", 
              icon: "warning",
              buttons: true,
              dangerMode: true,
            });

         <?php endif; ?>

        <?php if(session()->has('errors') && count($errors) > 0): ?>

            //pop up
            swal({
              title: "تحذير",
              text: "<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($error); ?> \n  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>", 
              html: true,
              icon: "warning",
              buttons: true,
              dangerMode: true,
            });

        <?php endif; ?>

      });
   </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                    whatsapp: "<?php echo e(getSetting()->site_phone); ?>", // WhatsApp number
                    call_to_action: "<?php echo e(trans('home.messageUs')); ?>", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
    </script>
    <!-- /GetButton.io widget -->

    <?php echo $__env->yieldContent('script'); ?>
    
    

</body>
</html><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/layouts/app.blade.php ENDPATH**/ ?>