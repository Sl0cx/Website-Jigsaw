@extends('_layouts.master')

@section('body')
<h1>Hello world!</h1>
{% extends 'base.html.twig' %}

{% block title %}Slocx{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Hello, My name is Simon</p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="{{ path('contact') }}">simon.maniez.creation@gmail.com</a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="{{ path('home') }}">Simon</a></h1>
                        <p class="site-description">Personal Site</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="{{ path('home') }}">Home</a></li>
                            <li><a href="{{ path('music') }}">Music</a></li>
                            <li><a href="{{ path('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ path('stories') }}">Stories</a></li>
                            <li><a href="{{ path('about') }}">About Me</a></li>
                            <li><a href="{{ path('contact') }}">Contact</a></li>
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider1.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider2.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider3.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                    </div>
                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <a href="https://www.youtube.com/channel/UCAbVa8U-8ZtYDmQr-4BwKJw/">
                        <div class="yt-subscribe">
                            <img src="images/Logo-youtube.png" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            October 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"> One Piece </h2>

                        <div class="tags-links">
                           
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/logo_one_piece.png" href="{{ path('one_piece') }}" alt="Logo One Piece">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I love One Piece</p> </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="{{ path('one_piece') }}">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            Ocotober 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"> Star Wars</h2>

                        <div class="tags-links">
                
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/logo_star_wars.png" alt="Logo Star Wars">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I love Star Wars </p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="#">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            Ocotber 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title">Solo Leveling</h2>

                        <div class="tags-links">
                   
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/solo_leveling.jpg" alt="Solo Leveling image">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I Love Solo Leveling</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="#">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="pagination">
                    <ul class="flex align-items-center">
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div>
            </div><!-- .col -->

            <div class="col-12 col-lg-3">
                <div class="sidebar">
                    <div class="about-me">
                        <h2>I’m Simon Maniez</h2>

                        <p>21 years, I'm learning development informatics</p>
                    </div><!-- .about-me -->

                    <div class="recent-posts">
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_luke_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_luke_skywalker.html">Star Wars - Luke Skywalker</a></h3>

                                <div class="tags-links">
                                    
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_anakin_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_anakin_skywalker.html">Star Wars - Anakin Skywalker</a></h3>

                                <div class="tags-links">
                             
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
	                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_leïa_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_leïa_skywalker.html">Star Wars - Leïa Skywalker</a></h3>

                                <div class="tags-links">
                              
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_dark_vador.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_dark_vador.html">Star Wars - Dark Vador</a></h3>

                                <div class="tags-links">
                             
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->
                    </div><!-- .recent-posts -->

                    <div class="tags-list">
                        <a href="#">Music</a>
                        <a href="#">Love</a>
                       
                        <a href="#">Stories</a>
                        <a href="#">Photography</a>
                        <a href="#">Music</a>
                       
                    </div><!-- .tags-list -->

                    <div class="sidebar-ads">
                        <img src="images/Logo-youtube.png" alt="ads">
                    </div>
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

<footer class="sit-footer">
    <div class="outer-container">
        <div class="container-fluid">
            <div class="row footer-recent-posts">
                <div class="col-12 col-md-6 col-xl-3">
                 <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_luke_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_luke_skywalker.html">Star Wars - Luke Skywalker</a></h3>

                                <div class="tags-links">
                         
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_luke_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_anakin_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_anakin_skywalker.html">Star Wars - Anakin Skywalker</a></h3>

                                <div class="tags-links">
                     
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_anakin_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_dark_vador.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_dark_vador.html">Star Wars - Dark Vador</a></h3>

                                <div class="tags-links">
                                
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_dark_vador.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_leïa_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_leïa_skywalker.html">Star Wars - Leïa Skywalker</a></h3>

                                <div class="tags-links">
                               
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_leïa_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .outer-container -->

    <div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                <figure>
                    <a href="#"><img src="images/a.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/b.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/c.jpg" alt=""></a>
                </figure>

                <figure>
                        <a href="#"><img src="images/d.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/e.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/f.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/g.jpg" alt=""></a>
                </figure>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>

{% endblock %}
{% extends 'base.html.twig' %}

{% block title %}Slocx{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Hello, My name is Simon</p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="{{ path('contact') }}">simon.maniez.creation@gmail.com</a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="{{ path('home') }}">Simon</a></h1>
                        <p class="site-description">Personal Site</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="{{ path('home') }}">Home</a></li>
                            <li><a href="{{ path('music') }}">Music</a></li>
                            <li><a href="{{ path('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ path('stories') }}">Stories</a></li>
                            <li><a href="{{ path('about') }}">About Me</a></li>
                            <li><a href="{{ path('contact') }}">Contact</a></li>
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider1.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider2.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="images/slider3.jpg" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                    </div>
                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <a href="https://www.youtube.com/channel/UCAbVa8U-8ZtYDmQr-4BwKJw/">
                        <div class="yt-subscribe">
                            <img src="images/Logo-youtube.png" alt="Youtube Subscribe">
                            <h3>Subscribe</h3>
                            <p>To my Youtube Channel</p>
                        </div><!-- .yt-subscribe -->
                    </a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->

    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            October 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"> One Piece </h2>

                        <div class="tags-links">
                           
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/logo_one_piece.png" href="{{ path('one_piece') }}" alt="Logo One Piece">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I love One Piece</p> </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="{{ path('one_piece') }}">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            Ocotober 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title"> Star Wars</h2>

                        <div class="tags-links">
                
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/logo_star_wars.png" alt="Logo Star Wars">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I love Star Wars </p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="#">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="content-wrap">
                    <header class="entry-header">
                        <div class="posted-date">
                            Ocotber 10, 2020
                        </div><!-- .posted-date -->

                        <h2 class="entry-title">Solo Leveling</h2>

                        <div class="tags-links">
                   
                        </div><!-- .tags-links -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="images/solo_leveling.jpg" alt="Solo Leveling image">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p>I Love Solo Leveling</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">
                        <ul class="post-share flex align-items-center order-3 order-lg-1">
                            <label>Share</label>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- .post-share -->

                        <a class="read-more order-2" href="#">Read more</a>

                        <div class="comments-count order-1 order-lg-3">
                            <a href="#">2 Comments</a>
                        </div><!-- .comments-count -->
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->

                <div class="pagination">
                    <ul class="flex align-items-center">
                        <li class="active"><a href="#">01.</a></li>
                        <li><a href="#">02.</a></li>
                        <li><a href="#">03.</a></li>
                    </ul>
                </div>
            </div><!-- .col -->

            <div class="col-12 col-lg-3">
                <div class="sidebar">
                    <div class="about-me">
                        <h2>I’m Simon Maniez</h2>

                        <p>21 years, I'm learning development informatics</p>
                    </div><!-- .about-me -->

                    <div class="recent-posts">
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_luke_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_luke_skywalker.html">Star Wars - Luke Skywalker</a></h3>

                                <div class="tags-links">
                                    
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_anakin_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_anakin_skywalker.html">Star Wars - Anakin Skywalker</a></h3>

                                <div class="tags-links">
                             
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
	                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_leïa_skywalker.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_leïa_skywalker.html">Star Wars - Leïa Skywalker</a></h3>

                                <div class="tags-links">
                              
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->

                        <div class="recent-post-wrap">
                            <figure>
                                <img src="images/star_wars_the_old_republic_jedi_council.jpg" alt="" href="star_wars_dark_vador.html">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_dark_vador.html">Star Wars - Dark Vador</a></h3>

                                <div class="tags-links">
                             
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->
                    </div><!-- .recent-posts -->

                    <div class="tags-list">
                        <a href="#">Music</a>
                        <a href="#">Love</a>
                       
                        <a href="#">Stories</a>
                        <a href="#">Photography</a>
                        <a href="#">Music</a>
                       
                    </div><!-- .tags-list -->

                    <div class="sidebar-ads">
                        <img src="images/Logo-youtube.png" alt="ads">
                    </div>
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

<footer class="sit-footer">
    <div class="outer-container">
        <div class="container-fluid">
            <div class="row footer-recent-posts">
                <div class="col-12 col-md-6 col-xl-3">
                 <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_luke_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_luke_skywalker.html">Star Wars - Luke Skywalker</a></h3>

                                <div class="tags-links">
                         
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_luke_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_anakin_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_anakin_skywalker.html">Star Wars - Anakin Skywalker</a></h3>

                                <div class="tags-links">
                     
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_anakin_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_dark_vador.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_dark_vador.html">Star Wars - Dark Vador</a></h3>

                                <div class="tags-links">
                                
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_dark_vador.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="star_wars_leïa_skywalker.html"><img src="images/star_wars_the_old_republic_jedi_council.jpg" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    January 30, 2018
                                </div><!-- .entry-header -->

                                <h3><a href="star_wars_leïa_skywalker.html">Star Wars - Leïa Skywalker</a></h3>

                                <div class="tags-links">
                               
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="star_wars_leïa_skywalker.html">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .outer-container -->

    <div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                <figure>
                    <a href="#"><img src="images/a.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/b.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/c.jpg" alt=""></a>
                </figure>

                <figure>
                        <a href="#"><img src="images/d.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/e.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/f.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/g.jpg" alt=""></a>
                </figure>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="https://www.facebook.com/simon.maniez.50"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Sl0cx"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/simon-maniez/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>

{% endblock %}

@endsection

