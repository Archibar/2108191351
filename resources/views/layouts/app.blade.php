<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>address ::: user office ::: foodclub</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="cbc">
        <div class="main">

            @include('includes.header')

            @yield('content')

        </div>
        <footer>
            <div class="center_box">
                <div class="wrapper">

                    <nav class="f_nav">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="fadv_ico"><span class="ico_1"></span></span>
                                    <span class="title">Rewards Program</span>
                                    <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fadv_ico"><span class="ico_2"></span></span>
                                    <span class="title">monthly lottery</span>
                                    <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fadv_ico"><span class="ico_3"></span></span>
                                    <span class="title">Restaurant Owners</span>
                                    <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fadv_ico"><span class="ico_4"></span></span>
                                    <span class="title">about foodclub</span>
                                    <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="bt_box">
                <div class="center_box">
                    <div class="wrapper">
                        <div class="soc_link">
                            <a href="#" class="apple"></a>
                            <a href="#" class="android"></a>
                            <a href="#" class="email"></a>
                            <a href="#" class="fb"></a>
                        </div>
                        <div class="copyright">
                            <div>© 2014 Zomlex Inc. All rights reserved.</div>
                            <nav>
                                <a href="#">Partner Agreement</a>
                                <span>|</span>
                                <a href="#">User Agreement</a>
                                <span>|</span>
                                <a href="#">FAQ</a>
                                <span>|</span>
                                <a href="#">Careers</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
