<!DOCTYPE html>
<html lang="ar" @if(getLang() == 'ar') dir="rtl" @endif>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if(isset($title)) {{ $title }} @else {{ getSetting()['site_name_' . getLang()] }} @endif</title>

    <!-- change tab img -->
    <link rel="icon" href="{{ getImage('settings', getSetting()->site_icon) }}">

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
    @if(getLang() == 'ar')
    <link rel="stylesheet" href="{{ url('public') }}/front/css/bootstrap-rtl.css" />
    @else
    <link rel="stylesheet" href="{{ url('public') }}/front/css/bootstrap.css" />
    @endif

    <!-- include CSS file  -->
    <link rel="stylesheet" href="{{ url('public') }}/front/css/style.css">

    @if(getLang() == 'en')
    <link rel="stylesheet" href="{{ url('public') }}/front/css/style_en.css">
    @endif

    <meta content="@if(isset($description)) {{ $description }} @else {{ getSetting()['site_description_' . getLang()] }} @endif" name="description">
    <meta content="@if(isset($keyword)) {{ $keyword }} @else {{ getSetting()['site_keyword_' . getLang()] }} @endif" name="keywords">
    <meta content="WaitEG" name="author">

    @yield('style')

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
                    <a href="{{ route('home') }}">
                        <img src="{{ getImage('settings', getSetting()->site_logo) }}" alt="{{ getSetting()['site_name_' . getLang()] }}">
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
                    <h5 class="offcanvas-title">{{ trans('home.menu') }}</h5>
                    <button type="button" class="btn-close text-reset btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link @if(isset($homePage) && $homePage == true) active @endif" aria-current="page" href="{{ route('home') }}">{{ trans('home.home') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(isset($pageMenuOne) && $pageMenuOne == true) active @endif" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ trans('admin.aboutCompany') }}
                            </a>
                            <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown">
                                @foreach(getPages(1) as $page)
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.page', [$page->id, $page->getUrlTitle()]) }}">
                                            {{ $page['name_' . getLang()] }}
                                        </a>
                                </li>
                                @endforeach
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.vission') }}">{{ trans('home.vision') }}</a>
                                </li>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.companies') }}">{{ trans('admin.companies') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if(isset($pageMenuTwo) && $pageMenuTwo == true) active @endif" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ trans('admin.aboutAwqaf') }}
                            </a>
                            <ul class="dropdown-menu shadow-lg">
                                @foreach(getPages(2) as $page)
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.page', [$page->id, $page->getUrlTitle()]) }}">
                                            {{ $page['name_' . getLang()] }}
                                        </a>
                                </li>
                                @endforeach
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.teamwork') }}">
                                            {{ trans('admin.teamWork') }}
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-item @if(isset($investmentPage) && $investmentPage == true) active @endif" aria-current="page" target="_self"
                                href="{{ route('get.investment') }}">
                                    {{ strip_tags(getLayout('investment')['name_' . getLang()]) }}
                                </a>
                        </li>
                        <li class="nav-item @if(isset($projectsPage) && $projectsPage == true) active @endif">
                            <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                href="{{ route('get.projects') }}">
                                    {{ trans('admin.projects') }}
                                </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link @if(isset($blogsPage) && $blogsPage == true) active @endif" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ trans('home.mediaCenter') }}
                            </a>
                            <ul class="dropdown-menu shadow-lg">
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.blogs') }}">
                                            {{ trans('admin.blogs') }}
                                        </a>
                                </li>
                                <li>
                                    <a class="nav-link dropdown-item" aria-current="page" target="_self"
                                        href="{{ route('get.reports') }}">
                                            {{ trans('admin.reports') }}
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-item @if(isset($contactPage) && $contactPage == true) active @endif" aria-current="page" target="_self"
                                href="{{ route('contact') }}">
                                    {{ trans('home.contact') }}
                                </a>
                        </li>
                        <li class="nav-item lang">
                            @if(getLang() == 'ar')
                            <a class="nav-link" href="{{ url('language/en') }}">
                                <span>En</span>
                            </a>
                            @else
                            <a class="nav-link" href="{{ url('language/ar') }}">
                                <span>Ar</span>
                            </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header / Nav bar  -->

    @yield('content')

    <!-- Start footer  -->
    <footer>
        <div class="container pt-5 pb-4">
            <div class="row pt-5 d-flex justify-content-between">
                <div class="col-12 col-md-6">
                    <h1 class="mb-3">
                        {{ trans('home.aboutHome') }}
                    </h1>
                    <p>
                        {{ \Illuminate\Support\Str::limit(getSetting()['site_description_' . getLang()], 150, $end='...') }}
                    </p>
                    <ul class="social">
                        <a href="{{ getSetting()->facebook }}">
                            <li>
                                <i class="fa-brands fa-facebook"></i>
                            </li>
                        </a>
                        <a href="{{ getSetting()->instagram }}">
                            <li>
                                <i class="fa-brands fa-instagram"></i>
                            </li>
                        </a>
                        <a href="{{ getSetting()->linkedin }}">
                            <li>
                                <i class="fa-brands fa-linkedin"></i>
                            </li>
                        </a>
                        <a href="{{ getSetting()->youtube }}">
                            <li>
                                <i class="fa-brands fa-youtube"></i>
                            </li>
                        </a>
                        @if(isset(getSetting()->twitter) && !is_null(getSetting()->twitter))
                        <a href="{{ getSetting()->twitter }}">
                            <li>
                                <i class="fa-brands fa-twitter"></i>
                            </li>
                        </a>
                        @endif
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <h1 class="mb-3">
                        {{ trans('home.subscribe') }}
                    </h1>
                    <h5>
                        {{ trans('home.subscribeText') }}
                    </h5>
                    <form action="{{ route('subscribe') }}" method="post">
                        {{ csrf_field() }}
                        <div class="custom-input position-relative my-3">
                            <input class="w-100 h-100 px-3" type="email" required="required" name="email">
                            <h5 class="position-absolute">
                                {{ trans('admin.email') }}
                            </h5>
                        </div>
                        <button type="submit" class="custom-btn">
                            {{ trans('home.send') }}
                        </button>
                    </form>
                </div>
            </div>
            <h5 class="w-100 text-center mt-5 mb-0 rights-reserved">
                {{ getSetting()['site_copy_' . getLang()] }}
                {{-- <br />
                {{ trans('home.copy') }}
                <br />
                <a href="https://waiteg.com/" style="display: inline-block;position: relative;top: 15px;right: 5px;" target="_blank">
                    <img src="{{ url('public') }}/2.png" class="img-fluid" width="80">
                </a> --}}
            </h5>
        </div>
    </footer>
    <!-- End footer  -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- AOS animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- include Bootstrap JS  -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{ url('public') }}/front/js/script.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

         @if(session()->has('success'))
        
            //pop up
            swal({
              title: "رائع",
              text: "{{ session()->get('success') }}", 
              icon: "success",
              buttons: true,
              dangerMode: false,
            });

        @elseif(session()->has('error'))

            //pop up
            swal({
              title: "تحذير",
              text: "{{ session()->get('error') }}", 
              icon: "warning",
              buttons: true,
              dangerMode: true,
            });

         @endif

        @if(session()->has('errors') && count($errors) > 0)

            //pop up
            swal({
              title: "تحذير",
              text: "@foreach ($errors->all() as $error) {{ $error }} \n  @endforeach", 
              html: true,
              icon: "warning",
              buttons: true,
              dangerMode: true,
            });

        @endif

      });
   </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                    whatsapp: "{{ getSetting()->site_phone }}", // WhatsApp number
                    call_to_action: "{{ trans('home.messageUs') }}", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
    </script>
    <!-- /GetButton.io widget -->

    @yield('script')
    
    {{-- {!! Links::track() !!} --}}

</body>
</html>