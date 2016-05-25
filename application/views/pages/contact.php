<div ng-controller="PageContactCtrl">
	<div class="container /*content-md*/">
		<div class="row margin-bottom-20">
			<div class="col-md-12">
				<div class="heading /*heading-v1*/ margin-bottom-15">
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

				<div class="btn-group maps" data-toggle="buttons">
                    <button class="btn btn-default btn-xs active" id="map-btn-google" onclick="showMap('g');">Google map</button>
                    <button class="btn btn-default btn-xs" id="map-btn-yandex" onclick="showMap('y');">Яndex</button>
                </div>
  	            <div id="map"></div>
  	            <div id="ymaps-map-id_140052407543525456224" style="width: 100%; height: 350px;"></div>
  	            <script type="text/javascript">
				function initMap() {
					var mapDiv = document.getElementById('map');
					var myLatLng = {lat: 50.304893, lng: 57.159141};

					var map = new google.maps.Map(mapDiv, {
						zoom: 17,
						center: myLatLng
					});

					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: 'Офис'
					});
				}
  	            function fid_140052407543525456224(ymaps) {
  	                var map = new ymaps.Map("ymaps-map-id_140052407543525456224", {
  	                    center: ['57.159141', '50.304893'],
  	                    zoom: 16,
  	                    type: "yandex#map"
  	                });
  	                map.controls
  	                    .add("zoomControl")
  	                    .add("mapTools")
  	                    .add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid"]));
  	                map.geoObjects
  	                    .add(new ymaps.Placemark(['57.159141', '50.304893'], {
  	                        balloonContent: ""
  	                    }, {
  	                        preset: "twirl#lightblueDotIcon"
  	                    }));
  	            };
  	            function showMap(map) {
					if (map == 'g') {
						jQuery('#map').show();
						jQuery('#ymaps-map-id_140052407543525456224').hide();

						jQuery('#map-btn-google').addClass('active');
						jQuery('#map-btn-yandex').removeClass('active');
					}
					else if (map == 'y') {
						jQuery('#map').hide();
						jQuery('#ymaps-map-id_140052407543525456224').show();
					
						jQuery('#map-btn-google').removeClass('active');
						jQuery('#map-btn-yandex').addClass('active');
					}
				}

				showMap('g');
  	            </script>
          	</div>

			<div class="col-md-4">
				<div><img class="img-responsive" src="<?php echo base_url('static/img/cont.jpg'); ?>"/></div>
			</div>
		</div>
	</div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_140052407543525456224"></script>