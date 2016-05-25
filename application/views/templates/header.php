<!DOCTYPE html>
<html lang="en" ng-app="tmg">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Technology Management Group</title>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url('static/img/favicon.ico'); ?>">
    
    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/index_files/css.css'); ?>">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/shop.css'); ?>">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/header-v5.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/footer-v4.css'); ?>">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/jquery.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/owl.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/settings.css'); ?>">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/default.css'); ?>" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url('static/index_files/custom.css'); ?>">


    <link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/parallax-slider/css/parallax-slider.css'); ?>">

    <style>
        body {
            font-size: 16px;
        }

        .mywrapper {
            padding-left: 80px;
            padding-right: 80px;
            font-size: 17px;
        }
    </style>
</head>

<body ng-controller="MainCtrl" class="header-fixed">

    <div class="wrapper">
        <!--=== Header v5 ===-->
        <div class="header-v5 header-static">
            <!-- Navbar -->
            <div class="navbar navbar-default mega-menu" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://tmgkaz.kz">
                            <img id="logo-header" src="<?php echo base_url('static/img/logo.png'); ?>" alt="Logo">
                        </a>
                    </div>

                    <div class="pull-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown" style="padding: 0;">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000" style="cursor: default; padding: 23px 20px 27px 0px; /*padding-bottom: 5px;*/">
                                    <img src="<?php echo base_url('static/img/flag/'); ?>/{{$cookies.get('lng')}}.png">
                                    <!-- {{'language.'+$cookies.get('lng') | i18next}} -->
                                </a>
                                <ul class="dropdown-menu">

                                    <li ng-class="{'active': 'en' == $cookies.get('lng')}">
                                        <a href ng-click="$locales.changeLang('en')">English</a>
                                    </li>

                                    <li ng-class="{'active': 'ru' == $cookies.get('lng')}">
                                        <a href ng-click="$locales.changeLang('ru')">Русский</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li ng-class="{'active': nav.url == current}" ng-repeat="nav in navs">
                                <a href="<?php echo base_url('/'); ?>{{nav.url}}">
                                    {{'nav.'+nav.name | i18next}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
        </div>
        <!--=== End Header v5 ===-->

<!--=== Collection Banner ===-->
    <div class="collection-mybanner margin-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
<!--                     &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/>
                    &nbsp;<br/> -->
                </div>
            </div>
        </div>
    </div>
    <!--=== End Collection Banner ===-->

<!--=== Slider ===-->
<!--div style="overflow: visible;" class="tp-banner-container margin-bottom-60">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2 style="margin-top: -30px;">
                <i>{{'slide.s0.h0' | i18next}}</i> <br />
                <i>{{'slide.s0.h1' | i18next}}</i> <br />
                <i>{{'slide.s0.h2' | i18next}}</i> <br />
                <i>{{'slide.s0.h3' | i18next}}</i> <br />
                <i>{{'slide.s0.h4' | i18next}}</i> <br />
                <i>{{'slide.s0.h5' | i18next}}</i>
            </h2>
            <div class="da-img" style="margin-top: -80px;text-align: left;">
                <p style="margin-top: -230px;">
                    <i>{{'slide.s0.p0' | i18next}}</i><br/>
                    <i>{{'slide.s0.p1' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p2' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p3' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p4' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p5' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p6' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p7' | i18next}}</i> <br/>
                    <i>{{'slide.s0.p8' | i18next}}</i>
                </p>
            </div>
        </div>
        <div class="da-slide">
            <h2>
                <i>{{'slide.s1.h0' | i18next}}</i> <br />
                <i>{{'slide.s1.h1' | i18next}}</i> <br />
                <i>{{'slide.s1.h2' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s1.p0' | i18next}}</i> <br /> 
                <i>{{'slide.s1.p1' | i18next}}</i>
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/eq0.jpg'); ?>" style="height: 280px"/>
                <img src="<?php #echo base_url('static/img/eq4.jpg'); ?>" style="height: 280px"/>
            </div>
        </div>
        <div class="da-slide">
           <h2>
                <i>{{'slide.s2.h0' | i18next}}</i> <br />
                <i>{{'slide.s2.h1' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s2.p0' | i18next}}</i> <br />
                <i>{{'slide.s2.p1' | i18next}}</i>
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/topdrive.png'); ?>" style="margin-top: -40px;width: 600px;" />
            </div>
        </div>

        <div class="da-slide">
            <h2>
                <i>{{'slide.s3.h0' | i18next}}</i> <br />
                <i>{{'slide.s3.h1' | i18next}}</i> <br />
                <i>{{'slide.s3.h2' | i18next}}</i>
            </h2>
            <p>
                <i>{{'slide.s3.p0' | i18next}}</i> <br />
                <i>{{'slide.s3.p1' | i18next}}</i> <br />
                <i>{{'slide.s3.p2' | i18next}}</i> 
            </p>
            <div class="da-img">
                <img src="<?php #echo base_url('static/img/deal.png'); ?>" style="width: 600px;" />
            </div>
        </div>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
    </div>
</div-->
<!--=== End Slider ===-->