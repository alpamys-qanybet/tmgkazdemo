<style type="text/css">
/* img zoom effect */
.pic {
	overflow: hidden;
}

.pic:hover {
  cursor: pointer;
}

#certificate-page .pic {
	/*height: 270px;*/
	height: 520px;
	width: 100%;

	overflow: hidden;
}

/*GROW*/
.grow img {
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	-ms-transition: all 1s ease;
	transition: all 1s ease;
}

#certificate-page .grow img {
/*    height: auto;
    width: 330px;
*/
	height: auto;
	width: 100%;
    margin-left: -10px;

	vertical-align: middle;
	-webkit-transition: 1s all;
	-moz-transition: 1s all;
	-o-transition: 1s all;
	-ms-transition: 1s all;
	transition: 1s all;
}

.grow img:hover {
	/*margin-top: -200px;*/
	/*margin-top: -20px;*/
	/*margin-left: -20px;*/
	/*width: 460px;*/
	/*margin-left: -30px;*/
	/*margin-top: -30px;*/
}

#certificate-page .grow img:hover {
	height: auto;
	width: 130%;
	margin-left: -50px;
	margin-top: -50px;	
	
	-webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);
}
</style>
<div ng-controller="PageCertCtrl" id="certificate-page">
	<div class="container">
		<div class="row margin-bottom-30">
			<div class="col-md-12">
				<div class="heading /*heading-v1*/ margin-bottom-10">
					<h2>{{'nav.certificate' | i18next}}</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bottom-60" ng-show="$cookies.get('lng') == 'ru'">
			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/1ru'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/1ru'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/2ru'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/2ru'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/3ru'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/3ru'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>
		</div>

		<div class="row margin-bottom-60" ng-show="$cookies.get('lng') == 'en'">
			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/1en'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/1en'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/2en'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/2en'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="grow pic">
					<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url('static/img/certificate/3en'); ?>.jpg" title=''>
						<img class="lazy" src="<?php echo base_url('static/img/transparent.gif'); ?>" data-src="<?php echo base_url('static/img/certificate/3en'); ?>.jpg" alt=''>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>