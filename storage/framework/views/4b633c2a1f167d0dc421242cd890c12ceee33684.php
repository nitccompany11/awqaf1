<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo e(getSetting()['site_description_' . getLang()]); ?>">
    <meta name="author" content="WaitEG">
    <meta name="keywords" content="<?php echo e(getSetting()['site_keyword_' . getLang()]); ?>">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(getImage('settings', getSetting()->site_icon)); ?>" />

    <!-- TITLE -->
    <title><?php if(isset($title)): ?> <?php echo e($title); ?> <?php else: ?> <?php echo e(trans('admin.siteTitle')); ?> <?php endif; ?></title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(url('public')); ?>/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(url('public')); ?>/admin/css/style.css" rel="stylesheet" />
    <link href="<?php echo e(url('public')); ?>/admin/css/dark-style.css" rel="stylesheet" />
    <link href="<?php echo e(url('public')); ?>/admin/css/transparent-style.css" rel="stylesheet">
    <link href="<?php echo e(url('public')); ?>/admin/css/skin-modes.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.2/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.3.0/mapbox-gl-draw.css' type='text/css' />

    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(url('public')); ?>/admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('public')); ?>/admin/colors/color1.css" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('public')); ?>/admin/css/main.css" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('public')); ?>/admin/css/rtl.css" />

    <?php if(getLang() == 'en'): ?>
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(url('public')); ?>/admin/css/ltr.css" />
    <?php endif; ?>

    <?php echo $__env->yieldContent('style'); ?>

    <style type="text/css">
        
        .errorBorder,
        .errorBorder1 {
          border: 1px solid red;
        }

        .limitspan {
          display: block;
          color: red;
        }

        .notificationList {
          z-index: 999999999999;
          position: fixed;
          bottom: 30px;
          right: 10px;
          background: #fff;
          border-left: 3px solid green;
          border-right: 3px solid green;
          border-top: 1px solid green;
          border-bottom: 1px solid green;
          padding: 10px 20px;
          border-radius: 10px;
          box-shadow: 0 0 5px hsl(0deg 0% 0% / 10%), 0 2px 3px hsl(0deg 0% 0% / 10%);
          min-width: 200px;
          min-height: 50px;
          display: none;
        }

        .notificationList p {
          font-weight: bold;
        }

        .notifications-menu {
            height: 300px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .btnDiv {
            text-align: right !important;
            margin: 20px 0px;
        }

    </style>
    
    <style type="text/css">
            
            .swal-button--danger,
            .swal-button--success {
                background-color: #041e2b !important;
            }
            
            .swal-text {
                text-align: center !important;
            }
    </style>

</head>
<body class="app sidebar-mini <?php if(getLang() == 'ar'): ?> rtl <?php else: ?> ltr <?php endif; ?> light-mode <?php if(Request::is('login') || Request::is('register')): ?> login-img <?php endif; ?>">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?php echo e(url('public')); ?>/admin/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <?php if(!Request::is('login') && !Request::is('register')): ?>

                <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title"><?php echo e($title); ?></h1>
                                <div>
                                    
                                    <ol class="breadcrumb">
                                        <?php echo $__env->yieldContent('bredcrumb'); ?>    
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <?php echo $__env->yieldContent('content'); ?>

                        </div>
                        <!-- CONTAINER END -->
                    </div>
                </div>
                <!--app-content close-->

            <?php else: ?>

                <?php echo $__env->yieldContent('content'); ?>

            <?php endif; ?>

        </div>

        <?php if(!Request::is('login') && !Request::is('register')): ?>

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title"><?php echo e(trans('admin.changeLanguage')); ?></h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-4 mb-2">
                                <a href="<?php echo e(url('language/en')); ?>" class="btn btn-country btn-lg btn-block <?php if(getLang() == 'en'): ?> active <?php endif; ?>">
                                    <span class="country-selector"><img alt="" src="<?php echo e(url('public')); ?>/admin/images/flags/us_flag.jpg"
                                            class="me-3 language"></span><?php echo e(trans('admin.english')); ?>

                                </a>
                            </li>
                            <li class="col-lg-4 mb-2">
                                <a href="<?php echo e(url('language/ar')); ?>" class="btn btn-country btn-lg btn-block <?php if(getLang() == 'ar'): ?> active <?php endif; ?>">
                                    <span class="country-selector"><img alt=""
                                        src="<?php echo e(url('public')); ?>/admin/images/flags/ksa_flag.png"
                                        class="me-3 language"></span><?php echo e(trans('admin.arabic')); ?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        <?php echo e(getSetting()['site_copy_' . getLang()]); ?>

                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
        <?php endif; ?>

    </div>

    <audio controls id="myAudioTagID" style="display: none;">
        <source src="<?php echo e(url('public')); ?>/notification.mp3" type="audio/mp3">
        Your browser does not support the audio tag.
    </audio>

    <div class="notificationList">
        <p>
           <i class="fa fa-bell-o"></i>
           <span></span>
        </p>
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="<?php echo e(url('public')); ?>/admin/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXg8u14j3Xo2eRK3T4yK8052y725FTN98&sensor=false&libraries=places"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.2/js/lightbox.min.js" integrity="sha512-G3hBdkIeUYJc1flNDPOYlCBoDkllX5f3wyk2BW8vNU9gAobQ8mnOpNC2t3kWxkWSz6aSCJUSqZn/C7Mb9yTbTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="<?php echo e(url('public')); ?>/admin/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="<?php echo e(url('public')); ?>/admin/js/sticky.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="<?php echo e(url('public')); ?>/admin/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/p-scroll/pscroll.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/chart/Chart.bundle.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/chart/rounded-barchart.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/select2/select2.full.min.js"></script>
    

    <!-- INTERNAL Data tables js-->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/jszip.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/js/table-data.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--- TABS JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/tabs/tab-content.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="<?php echo e(url('public')); ?>/admin/js/apexcharts.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/apexchart/irregular-data-series.js"></script>

    <!-- C3 CHART JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/charts-c3/c3-chart.js"></script>

    <!-- C3 LINE-CHART JS -->
    <script src="<?php echo e(url('public')); ?>/admin/js/charts.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="<?php echo e(url('public')); ?>/admin/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="<?php echo e(url('public')); ?>/admin/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="<?php echo e(url('public')); ?>/admin/js/themeColors.js"></script>

    <script type="text/javascript">
      var path = '<?php echo e(asset('public')); ?>';
    </script>

    <script src="<?php echo e(url('public')); ?>/ckeditor/ckeditor.js"></script>

    <!-- CUSTOM JS -->
    <script src="<?php echo e(url('public')); ?>/admin/js/custom.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click', '.delete', function(e){
        e.preventDefault(); //cancel default action

        //Recuperate href value
        var href = $(this).attr('href');
        var message = $(this).data('confirm');
    
        //pop up
        swal({
          title: "<?php echo e(trans('admin.areYouSure')); ?>",
          text: message, 
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = href;
          } else {
            return false;
          }
        });
      });

      $('#typeLayouts').on('change', function() {

        var value = $(this).val();

        if (value == 1) {

            $('.contentLayouts').removeClass('hidden');
            $('.imageLayouts').addClass('hidden');

        } else if(value == 2) {

            $('.imageLayouts').removeClass('hidden');
            $('.contentLayouts').addClass('hidden');

        } else {

            $('.imageLayouts').addClass('hidden');
            $('.contentLayouts').addClass('hidden');

        }

    });

    });
    </script>

    <script>
        $( function() {
            $( ".date" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
            $('.timepicker').timepicker({
                timeFormat: 'HH:mm',
                interval: 30,
                minTime: '01',
                maxTime: '23',
                defaultTime: '11',
                startTime: '10:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });
      </script>

      <script type="text/javascript">
    $(document).ready(function(){
      
      $("form").submit(function(e){

        var empty = [];

        $('input, textarea, select').each(function(event) {

          if($(this).hasClass('required')) {

            if($(this).val() == ""){
              $(this).addClass('errorBorder');
              empty.push($(this).val());
            } else {
              $(this).removeClass('errorBorder');
            }

          }

          });

        $('input, textarea, select').each(function(event) {

          if($(this).hasClass('lenght')) {

            var length = $(this).attr('data-length');

            console.log(length);

            if($(this).val() == ""){

              $(this).addClass('errorBorder');

              $(this).next().empty().append('<?php echo e(trans('admin.shouldHavNumber')); ?>' + length + '<?php echo e(trans('admin.number')); ?>').show();

              setTimeout(function(){ $(this).next().fadeOut(); }, 5000);

              empty.push($(this).val());

            } else if($(this).val().length != length) {

              $(this).addClass('errorBorder');

              $(this).addClass('maxLenght');

              $(this).next().empty().append('<?php echo e(trans('admin.shouldHavNumber')); ?>' + length + '<?php echo e(trans('admin.number')); ?>').show();

              setTimeout(function(){ $(this).next().fadeOut(); }, 5000);

              empty.push($(this).val());
              
            } else {

              $(this).removeClass('errorBorder');

              $(this).next().empty().hide();

              setTimeout(function(){ $(this).next().fadeOut(); }, 5000);

            }

          }

          });

          if (empty.length > 0) {
            e.preventDefault();
              console.log('true');
          } else {
              console.log('false');
          }

        });

    });
  </script>

  <script type="text/javascript">
            
        $(document).ready(function() {

          // setInterval(function(){
          //       $(".notificationsDiv").load(location.href + " .notifyContent");
          //   }, 45000);

            setInterval(function(){

                var url = "<?php echo e(url('admin/getNotification')); ?>";

                $.ajax({

                    type: "GET",
                    url : url,
                    success: function(data) {

                        if (data.code == 1) {

                            $('.notificationList p span').empty().append(data.content);
                            $('.notificationList').css('display', 'block');

                            document.getElementById('myAudioTagID').play();

                            setTimeout(function() {
                                $('.notificationList').fadeOut('fast');
                            }, 15000);

                        } else if(data.code == 2) {

                            $('.notificationList').css('display', 'none');
                            $('.notificationList p span').empty();

                        }
                         
                    }    

                });

            }, 40000);

            <?php if(session()->has('success')): ?>
        
                    //pop up
                    swal({
                      title: "<?php echo e(trans('home.aswesome')); ?>",
                      text: "<?php echo e(session()->get('success')); ?>", 
                      icon: "success",
                      buttons: true,
                      dangerMode: false,
                    });

                <?php elseif(session()->has('error')): ?>

                    //pop up
                    swal({
                      title: "<?php echo e(trans('home.warning')); ?>",
                      text: "<?php echo e(session()->get('error')); ?>", 
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    });

                <?php endif; ?>

                <?php if(session()->has('errors') && count($errors) > 0): ?>

                    //pop up
                    swal({
                      title: "<?php echo e(trans('home.warning')); ?>",
                      text: "<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($error); ?> \n  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>", 
                      html: true,
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    });

                <?php endif; ?>

        });

    </script>

    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
    </script>

    <?php echo $__env->yieldContent('script'); ?>

</body>
</html><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>