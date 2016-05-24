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
                            <img id="logo-header" src="<?php echo base_url('static/img/tmg-light.png'); ?>" alt="Logo">
                        </a>
                    </div>

                    <div class="pull-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="1000" style="cursor: default;">
                                    {{'language.'+$cookies.get('lng') | i18next}}
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

        <!--=== Slider ===-->
<div style="overflow: visible;" class="tp-banner-container margin-bottom-60">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2 style="margin-top: -30px;">
                <i>специализируется на</i> <br />
                <i>разведочном,</i> <br />
                <i>эксплуатационном</i> <br />
                <i>бурении и капитальном</i> <br />
                <i>ремонте нефтегазовых</i> <br />
                <i>и водяных скважин</i>
            </h2>
            <div class="da-img" style="margin-top: -80px;text-align: left;">
                <p style="margin-top: -230px;">
                    <i>а также предоставляет следующие услуги на условиях «под ключ» и «суточная ставка»:</i><br/>
                    <i>1. Поисково-разведочное бурение. </i> <br/>
                    <i>2. Эксплуатационное бурение.</i> <br/>
                    <i>3. Сервисные работы по цементированию обсадных колонн и хвостовиков.</i> <br/>
                    <i>4. Сервисное обслуживание скважин.</i> <br/>
                    <i>5. Сервисные работы колтюбинговой установкой при капитальном ремонте скважин, воздействии на призабойную зону и другие работы.</i> <br/>
                    <i>6. Сервисные работы выполняемые с использованием азотно-компрессорной установки.</i> <br/>
                    <i>7. Отбор керна.</i> <br/>
                    <i>8. Работы по строительству и обустройству месторождений.</i>
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
                <img src="<?php echo base_url('static/img/eq0.jpg'); ?>" style="height: 280px"/>
                <img src="<?php echo base_url('static/img/eq4.jpg'); ?>" style="height: 280px"/>
            </div>
        </div>
        <div class="da-slide">
           <h2><i>оснащены верхними</i> <br /> <i>силовыми приводами</i></h2>
            <p><i>производства компаний Varco, Tesco</i> <br /> <i>а также производства КНР. </i></p>
            <div class="da-img">
                <img src="<?php echo base_url('static/img/topdrive.png'); ?>" style="margin-top: -40px;width: 600px;" />
            </div>
        </div>

        <div class="da-slide">
            <h2><i>Исполнение буровых</i> <br />
            <i>станков в соответствии</i> <br />
            <i>со стандартами API </i>
            </h2>
            <p>
                <i>позволяет применять их в различных географических регионах и странах, </i> <br />
                <i>а также привлекать различные зарубежные сервисные компании без дополнительных доработок оборудования.</i> <br />
                <i> поэтому, сотрудничает с такими сервисными компаниями как Schlumberger, Halliburton, BakerHughes.</i> 
            </p>
            <div class="da-img">
                <img src="<?php echo base_url('static/img/deal.png'); ?>" style="width: 600px;" />
            </div>
        </div>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
    </div>
</div>
<!--=== End Slider ===-->