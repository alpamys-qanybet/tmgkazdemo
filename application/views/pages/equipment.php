<script type="text/ng-template" id="img">
	<!--div class="overflow-h">
		<a class="illustration-v3 illustration-{{item.illustration}}" href="#">
			<span class="illustration-bg">
				<span class="illustration-ads">
					<span class="illustration-v3-category">
						<span class="product-category">{{item.product}}</span>
						<span class="product-amount">
							<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'">{{item.titleEn}}</span>
							<span ng-if="$cookies.get('lng') == 'ru'">{{item.titleRu}}</span>
						</span>
					</span>
				</span>
			</span>
		</a>
	</div-->
	<img class="img-responsive" src="<?php echo base_url('static/img/'); ?>/{{item.img}}"/>
</script>

<script type="text/ng-template" id="content">
	<h2>
		{{item.product}} - 
		<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'">{{item.titleEn}}</span>
		<span ng-if="$cookies.get('lng') == 'ru'">{{item.titleRu}}</span>
	</h2>
	<table class="table table-bordered table-hover table-condensed table-striped">
		<thead ng-if="$first">
			<tr>
				<th>{{'parameter.name' | i18next}}</th>
				<th>{{'parameter.value' | i18next}}</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="p in item.props">
				<td>
					<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'">{{p.nameEn}}</span>
					<span ng-if="$cookies.get('lng') == 'ru'">{{p.nameRu}}</span>
				</td>
				<td>
					<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'">{{p.valueEn}}<sup ng-if="p.isVolume">3</sup></span>
					<span ng-if="$cookies.get('lng') == 'ru'">{{p.valueRu}}<sup ng-if="p.isVolume">3</sup></span>
				</td>
			</tr>
		</tbody>
	</table>
</script>

<div ng-controller="PageEquipmentCtrl">	
	<div class="container content-md">
		<div class="row margin-bottom-60" ng-repeat="item in items">
			<div class="col-md-{{item.left}}" ng-if="$even">
				<div ng-include="'img'"></div>
			</div>
			<div class="col-md-{{item.right}}" ng-if="$even">
				<div ng-include="'content'"></div>
			</div>

			<div class="col-md-{{item.right}}" ng-if="$odd">
				<div ng-include="'content'"></div>
			</div>
			<div class="col-md-{{item.left}}" ng-if="$odd">
				<div ng-include="'img'"></div>
			</div>
		</div>
	</div>
</div>