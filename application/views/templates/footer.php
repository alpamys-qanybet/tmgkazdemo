
	<!--=== Footer v4 ===-->
	<div class="footer-v4">
		<div class="footer">
			<div class="container">
				<div class="row">
					<!-- About -->
					<div class="col-md-3 md-margin-bottom-40">
						<a href=""><img class="footer-logo" src="<?php echo base_url('static/img/tmg-dark0.png'); ?>" alt=""></a>
						<p>{{'footer.slogan' | i18next}}</p>
						<br>
						<ul class="list-unstyled address-list margin-bottom-20">
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.republic' | i18next}}, {{'page.contact.address.post' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.region' | i18next}}, {{'page.contact.address.city' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.address.street' | i18next}}, {{'page.contact.address.building' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.telephone' | i18next}}</li>
							<li><i class="fa fa-angle-right"></i>{{'page.contact.email' | i18next}}</li>
						</ul>

						<!--ul class="list-inline shop-social">
							<li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="tw rounded-md fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="gp rounded-md fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="yt rounded-md fa fa-youtube"></i></a></li>
						</ul-->
					</div>
					<!-- End About -->
					<!-- Simple List -->
					<div class="col-md-3 col-sm-4">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/about'); ?>">{{'nav.about' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li>
										<span>{{'page.about.0' | i18next | truncate: 133}}</span>
									</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/service'); ?>">{{'nav.service' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list">
									<li><span>{{'page.service.specialization.title' | i18next | truncate: 133}}</span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-4">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/certificate'); ?>">{{'nav.certificate' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li ng-if="$cookies.get('lng') == 'en'" ng-repeat="cert in certificates['en']">
										<span>{{cert.name}}</span>
									</li>

									<li ng-if="$cookies.get('lng') == 'ru'" ng-repeat="cert in certificates['ru']">
										<span>{{cert.name}}</span>
									</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/policy'); ?>">{{'nav.policy' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list">
									<li><span>{{'page.policy.staffmanage.0' | i18next | truncate: 133}}</span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-4">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">
									<a href="<?php echo base_url('/equipment'); ?>">{{'nav.equipment' | i18next}}</a>
								</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li ng-repeat="eq in equipments">
										<span>
											{{eq.product}} -
											<span ng-if="$cookies.get('lng') == 'en'">{{eq.titleEn}}</span>
											<span ng-if="$cookies.get('lng') == 'ru'">{{eq.titleRu}}</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Simple List -->
				</div><!--/end row-->
			</div><!--/end continer-->
		</div><!--/footer-->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>
							by LLC «<a target="_blank" href="http://essc.kz">Enterprise Solutions</a>» © 2016
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<a target="_blank" href="http://essc.kz/" class="pull-right"><img src="http://essc.kz/static/public/images/white-logo.png" style="height: 30px; width:auto;" title="Enterprise Solutions" /></a>
						</p>
					</div>
				</div>
			</div>
		</div><!--/copyright-->
	</div>
	<!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="<?php echo base_url('static/index_files/jquery_002.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery-migrate.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/bootstrap.js'); ?>"></script>
<!-- JS Implementing Plugins -->
<script src="<?php echo base_url('static/index_files/back-to-top.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/smoothScroll.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_005.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/owl.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_004.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery_003.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/jquery.js'); ?>"></script>
<!-- JS Customization -->
<script src="<?php echo base_url('static/index_files/custom.js'); ?>"></script>
<!-- JS Page Level -->
<script src="<?php echo base_url('static/index_files/shop.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/owl-carousel.js'); ?>"></script>
<script src="<?php echo base_url('static/index_files/revolution-slider.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/modernizr.js"'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/jquery.cslider.js"'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/assets/js/plugins/parallax-slider.js"'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/jquery.laziestloader.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/lib/jquery.mousewheel-3.0.6.pack.js'); ?>"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/jquery.fancybox.js?v=2.1.5'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>" />
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>" />
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?php echo base_url('static/lib/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>"></script>

<script>
	jQuery(document).ready(function() {
		App.init();
		App.initScrollBar();
		App.initParallaxBg();
		OwlCarousel.initOwlCarousel();
		RevolutionSlider.initRSfullWidth();
		ParallaxSlider.initParallaxSlider();

		$('.lazy').laziestloader({
			threshold: 400
		});

		$('.fancybox-buttons').fancybox({
			autoSize: true,
			width: 1200,

			openEffect: 'fade',
			closeEffect: 'fade',
			nextEffect: 'fade',
			prevEffect: 'fade',

			closeBtn  : false,

			helpers : {
				title : {
					type : 'inside'
				},
				buttons : {}
			}
		});
	});
</script>

<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/ui-router/angular-ui-router.min.0.2.18.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-cookies.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('static/lib/angular/angular-sanitize.min.js'); ?>'></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/underscore/underscore-min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/lib/i18next/i18next-1.7.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/lib/ng-i18next/ng-i18next.min.0.5.2.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/app.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/services/locales.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/main.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/about.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/certificate.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/contact.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/equipment.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/policy.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/scripts/controllers/page/service.js'); ?>"></script>

		<div title="" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"></div>
	</body>
</html>