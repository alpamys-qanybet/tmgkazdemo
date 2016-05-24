<div ng-controller="PageContactCtrl">
	<div class="container /*content-md*/">
		<div class="row margin-bottom-20">
			<div class="col-md-12">
				<div class="heading heading-v1 margin-bottom-15">
					<h2>{{'page.contact.name' | i18next}}</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bottom-60">
			<div class="col-md-8">
				<div class="margin-bottom-15">
					<h3>{{'page.contact.title' | i18next}}</h3>
				</div>

				<div style="text-align:left;" class="margin-bottom-15">
					{{'page.contact.address.republic' | i18next}}, {{'page.contact.address.post' | i18next}}, {{'page.contact.address.region' | i18next}}
				</div>
			
				<div style="text-align:left;" class="margin-bottom-15">
					{{'page.contact.address.city' | i18next}}, {{'page.contact.address.street' | i18next}}, {{'page.contact.address.building' | i18next}}
				</div>
			
				<div class="margin-bottom-15">
					{{'page.contact.telephone' | i18next}}
				</div>

				<div class="margin-bottom-15">
					{{'page.contact.email' | i18next}}
				</div>
			</div>

			<div class="col-md-4">
				<div><img class="img-responsive" src="<?php echo base_url('static/img/cont.jpg'); ?>"/></div>
			</div>
		</div>
	</div>
</div>