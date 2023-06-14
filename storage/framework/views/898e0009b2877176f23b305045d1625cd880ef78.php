<!DOCTYPE html>
<html>
<head>
	<title><?php if(session()->get('lang') == 'en'): ?> <?php echo e(getSetting()->site_name_en); ?> <?php else: ?> <?php echo e(getSetting()->site_name_ar); ?> <?php endif; ?></title>
</head>

<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Tajawal&display=swap');
* {
  padding: 0;
  margin: 0;
  font-family: 'Tajawal', sans-serif;
}

.error {
  background-color: #f38715;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

h1 {
  font-size: 150px;
  text-align: center;
  line-height: 100%;
  background: url("http://st2.depositphotos.com/1963585/7084/v/110/depositphotos_70848521-Seamless-background-with-game-consoles.jpg") repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-animation: updown 2s linear infinite;
          animation: updown 2s linear infinite;
}

.shadow {
  content: "";
  display: block;
  width: 20%;
  height: 25px;
  background-color: rgba(50, 50, 50, 0.5);
  margin: 10px auto;
  border-radius: 50%;
  -webkit-animation: shadow 2s linear infinite;
          animation: shadow 2s linear infinite;
}

@-webkit-keyframes updown {
  0% {
    -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
    background-position: 0 25px;
  }
  50% {
    -webkit-transform: translateY(8px);
            transform: translateY(8px);
    background-position: 0 -25px;
  }
  75% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    background-position: 0 0px;
  }
  100% {
    -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
    background-position: 0 25px;
  }
}

@keyframes updown {
  0% {
    -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
    background-position: 0 25px;
  }
  50% {
    -webkit-transform: translateY(8px);
            transform: translateY(8px);
    background-position: 0 -25px;
  }
  75% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    background-position: 0 0px;
  }
  100% {
    -webkit-transform: translateY(-8px);
            transform: translateY(-8px);
    background-position: 0 25px;
  }
}
@-webkit-keyframes shadow {
  0% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  75% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
  }
}
@keyframes shadow {
  0% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  75% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
  }
}


</style>

<body>

	<section class="error">
	  <h1>404</h1>
	  <span class="shadow"></span>
	  <a href="<?php echo e(url('/')); ?>" style="color: #fff; font-size: 20px; text-decoration: none;">Back To Home Page</a>
	</section>

</body>
</html><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/errors/404.blade.php ENDPATH**/ ?>