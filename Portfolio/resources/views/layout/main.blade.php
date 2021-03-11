<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>ARSEN</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!-- script
   ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>
    <script src="{{ asset('js/categories.js') }}"></script>

    <!-- favicons
	================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header>
        <div class="row">

            <div class="top-bar">
                <a class="menu-toggle" href="#"><span>Menu</span></a>

                <div class="logo">
                    <a href="{{route('index')}}">ARSEN</a>
                </div>

                <nav id="main-nav-wrap">
                    <ul class="main-navigation">
                        <li class="current"><a href="{{route('index')}}" title="">Home</a></li>
                        <li><a class="smoothscroll" href="#about" title="">About</a></li>
                        <li><a class="smoothscroll" href="#resume" title="">Resume</a></li>
                        <li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
                        <li><a class="smoothscroll" href="#services" title="">Services</a></li>
                        <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
                        <li class="hassubs">
                            <a href="{{route('post.index')}}">Posts</a>
                            <ul>
                                <li><a href="{{route('post.create')}}">Create post</a></li>
                            </ul>
                        </li>
                        <li class="hassubs">
                            <a href="{{route('blog.index')}}">Blogs</a>
                            <ul>
                                <li><a href="{{route('blog.create')}}">Create blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> <!-- /top-bar -->

        </div> <!-- /row -->
    </header> <!-- /header -->

    @yield('content')

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
   ================================================== -->
    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>