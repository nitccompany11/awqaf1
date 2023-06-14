<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo e(getImage('settings', getSetting()->site_icon)); ?>">
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap CDN -->
    <!-- css files -->
    <?php if(getLang() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/style.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/style-ltr.css">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/hero-section.css">
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/bank-logo.css">
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/scroll-to-top.css">
    
    <?php if(getLang() == 'ar'): ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/media.css">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/footer-ltr.css">
    <link rel="stylesheet" href="<?php echo e(url('public')); ?>/assets/css/media-ltr.css">
    <?php endif; ?>
    <!-- ./css files -->
    <title><?php if(isset($title)): ?> <?php echo e($title); ?> <?php else: ?> <?php echo e(getSetting()['site_name_' . getLang()]); ?> <?php endif; ?></title>

    <meta content="<?php if(isset($description)): ?> <?php echo e($description); ?> <?php else: ?> <?php echo e(getSetting()['site_description_' . getLang()]); ?> <?php endif; ?>" name="description">
    <meta content="<?php if(isset($keyword)): ?> <?php echo e($keyword); ?> <?php else: ?> <?php echo e(getSetting()['site_keyword_' . getLang()]); ?> <?php endif; ?>" name="keywords">
    <meta content="WaitEG" name="author">

    <?php echo $__env->yieldContent('style'); ?>

</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/6c3c4cf23b.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="<?php echo e(url('public')); ?>/assets/js/script.js"></script>
    <script src="<?php echo e(url('public')); ?>/assets/js/scrollToTop.js"></script>

    <script type="text/javascript">
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

        $(".dontSpace").on({
          keydown: function(e) {
            if (e.which === 32)
              return false;
          },
          change: function() {
            this.value = this.value.replace(/\s/g, "");
          }
        });

        function limit(element, max_chars)
        {
            if(element.value.length > max_chars) {
                element.value = element.value.substr(0, max_chars);
            }
        }
        function minmax(value, min, max) 
        {
            if(parseInt(value) < min || isNaN(parseInt(value))) 
                return 0; 
            else if(parseInt(value) > max) 
                return 100; 
            else return value;
        }

        $(document).on('keypress','.numberOnlyInput',function(e){
          if(!(e.keyCode >=48 && e.keyCode <=57) ){
                e.preventDefault();
          }
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
</html><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/website/layouts/appAuth.blade.php ENDPATH**/ ?>