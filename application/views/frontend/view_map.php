<?php include('header.php'); ?>

    <!-- End Navigation -->
	<div class="contain-wrapp padding-top40">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div itemscope="" itemtype="#" class="bggry2 brd_crmb ros">
						<!-- <span class="nv_hm_icn l">&nbsp;</span> -->
					  <div style="margin-left:15px;" itemprop="child" itemscope="" itemtype="#" class="l">
              <span itemprop="title"><?= $maps['city_name']?></span> 
            </div>
					  <div itemprop="child" itemscope="" itemtype="@" class="l">
              <label>&nbsp;</label> 
              <a href="<?= base_url('home/society_map')?>" itemprop="url"><span itemprop="title"><?= $maps['society_name']?></span></a>
            </div>
            <?php if($maps['phase_name']){?> 
            <div itemprop="child" itemscope="" itemtype="@" class="l">
					    <label>&nbsp;</label> 
					    <span itemprop="title"><?= $maps['phase_name']?></span>
						</div>
          <?php } else {}?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<input type="hidden" id="pac-input" name="location" value="<?= $maps['society_name']?>">
	<input type="hidden" name="mapLat">
	<input type="hidden" name="mapLong">
	<div class="contain-wrapp padding-top10 padding-bot20">	
		<div class="container">
			<div class="row">
				<div class="detail-product2" style="background: #f5f5f5;border-radius: 7px;    border: solid 1px #ebebeb;" id="g-map">
					<div class="heading">  
						<ul class="nav nav-tabs" role="tablist">
							<li class="active">
								<a href="#tab3" data-toggle="tab"><span class="bgc pv_sm_icn l"></span> <?= $maps['society_name']?></a>
							</li>
							<li>
								<a href="#tab2" data-toggle="tab">Google Map</a>
							</li>
						</ul>
					</div>

					<div class="contain-wrapp padding-top20 padding-bot20">	
						<div class="row">
							<!-- Start Tabs -->
							<div class="col-md-12">
								<div class="custom-tabs tab-lg">
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane fade in active" id="tab3">
                      <style type="text/css">
                            #image-zoom-wrapper {
                                margin: 0 auto;
                                height: 500px;
                                width: 100%;
                                overflow: hidden;
                            }
                            /*#imagediv img {
                                position: relative;
                                left: 50%;
                                top: 50%;
                                width:100%;
                            }
                            .zoom-btn
                            {
                              text-align: center;
                              padding: 10px;
                            }
                            .zoom-btn button[type="submit"]
                            {
                              height:40px;
                              width: 40px;
                              background-color: #1bb0e8;
                              border:1px solid #1bb0e8;
                            outline:none;
                              margin:0 5px;
                              color: #fff;
                              font-size: 40px;
                            }
                            .zoom-btn button[type="submit"] span.in
                            {
                              position: relative;
                              top:-4px;
                            }*/
                        </style>
                        <link href="<?= base_url('assets/frontend/css/zoomify.css')?>" rel="stylesheet" type="text/css" media="all"/>
                       <!--  <div id="imagediv">
                            <img id="pic" src="<?= base_url('maps/'.$maps['map_image'])?>" alt="Thumb-1">
                          </div> -->
                          <!-- <a style="float: right;" href="<?= base_url('maps/'.$maps['map_image'])?>" class="btn btn-primary">Download <i class="fa fa-download"></i></a> -->
                      <div id="image-zoom-wrapper">
                        <img id="image-zoom" src="<?= base_url('maps/'.$maps['map_image'])?>" alt="Thumb-1">
                      </div>

                      <script type="text/javascript" src="<?= base_url('assets/frontend/css/zoomify.js')?>"></script>
                          <!-- 
                          <div class="zoom-btn">
                            <button type="submit" onclick="zoom(0.9)"><span class="in">-</span></button>
                                <button type="submit" onclick="zoom(1.1)" ><span class="out">+</span></button>
                          </div>
                          <script type="text/javascript" language="javascript">
                                  window.onload = function () { zoom(1) }
                                  function zoom(zm) {
                                      img = document.getElementById("pic")
                                      wid = img.width
                                      ht = img.height
                                      img.style.width = (wid * zm) + "px"
                                      img.style.height = (ht * zm) + "px"
                                      img.style.marginLeft = -(img.width / 2) + "px";
                                      img.style.marginTop = -(img.height / 2) + "px";
                                  }
                              
                          </script> -->
  										      <!-- <div class="demo-gallery">
  									            <ul id="lightgallery" class="list-unstyled row">
  									                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="images/Google-Maps.jpg 375, images/Google-Maps.jpg 480, images/Google-Maps.jpg 800" data-src="images/Google-Maps.jpg"  data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
  									                    <a href="">
  									                        <img class="img-responsive" src="<?= base_url('maps/'.$maps['map_image'])?>" alt="Thumb-1">
  									                    </a>
  									                </li> 
  									            </ul>
  									        </div> -->
										</div>
										
										<div class="tab-pane fade " id="tab2">
											<!-- Start google map -->
											<div class="map-wrapper">
												<div id="map"></div>
											</div>
										</div>
									</div>
								</div>    
								<!-- End Tabs -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	
<?php include('footer.php')?>  

<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3753, lng: 69.3451},
          zoom: 5
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
		var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
	 
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARA9cUr2g0JA0eXIjNE2IQmdwP5uj-xFs&libraries=places&callback=initMap"
        async defer></script>


        <script>
        	document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
        </script>	