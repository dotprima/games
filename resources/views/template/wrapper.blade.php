<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lifestyle Blog || Blogar - Personal Blog Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=ENV('APP_URL')?>assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/vendor/base.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?=ENV('APP_URL')?>assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="<?=ENV('APP_URL')?>javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="<?=ENV('APP_URL')?>javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        @yield('content')


        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/slick.min.js"></script>
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/tweenmax.min.js"></script>
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/js.cookie.js"></script>
    <script src="<?=ENV('APP_URL')?>assets/js/vendor/jquery.style.switcher.js"></script>


    <!-- Main JS -->
    <script src="<?=ENV('APP_URL')?>assets/js/main.js"></script>

</body>


</html>
