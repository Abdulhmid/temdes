<!DOCTYPE html>
<html>
<head>
	<title>Landing</title>
	<link rel="stylesheet" type="text/css" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="assets/jquery.min.js"></script>
	<script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAysR_Khm8Dxdz_aoAoYmIk9WO_ltt3lcs&libraries=places"></script>
	<!-- <link rel="stylesheet" type="text/css" href="assets/maps_search.css"> -->


</head>
<body>
	<div id="main">
	<!-- Navigation -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid" style="background-color: #FFFFFF;">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">HaloDesa</a>
	    </div>
		<ul class="nav navbar-nav navbar-right">
		  <!-- <li><a href="#about">Right</a></li> -->
		  <li class="li-toogle">
			<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
		  </li>
		</ul>
	  </div>

	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="#">About</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>

	</nav>
	  
	<div class="container" style="background-color: #F4F4F2;">
		<div class="col-md-4 no-padd-img-padd">
		  <h3>Basic Navbar Examplesss</h3>
			<div class="row" style="height: 567px;overflow-y: scroll; overflow-x: hidden; ">
				<div class="col-md-12 img-padd">
				    <div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" src="assets/imagesnew.png" alt="alt">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading">Media heading</h4>
				        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
				      </div>
				    </div>
				</div>
				<div class="col-md-12 img-padd">
				    <div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" src="assets/imagesnew.png" alt="alt">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading">Media heading</h4>
				        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
				      </div>
				    </div>
				</div>
				<div class="col-md-12 img-padd">
				    <div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" src="assets/imagesnew.png" alt="alt">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading">Media heading</h4>
				        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
				      </div>
				    </div>
				</div>
				<div class="col-md-12 img-padd">
				    <div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" src="assets/imagesnew.png" alt="alt">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading">Media heading</h4>
				        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
				      </div>
				    </div>
				</div>
				<div class="col-md-12 img-padd">
				    <div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" src="assets/imagesnew.png" alt="alt">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading">Media heading</h4>
				        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
				      </div>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="box filter-box">
				<div class="col-md-4">
					<input type="text" class="form-control">
				</div>
				<div class="col-md-4">
					<input type="text" id="pac-input" value="" class="form-control">
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<button class="btn btn-filter-box btn-warning">Cari</button>
				</div>
			</div>
			<div class="clearfix"></div>
			<div id="maps">
			</div>
		</div>
	</div>

	<div class="container category_container">
	  <h3>Kategori </h3>
	  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

	<div class="container">
	  <h3>Basic Navbar Example</h3>
	  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
	  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

	<!-- Footer -->
	<footer class="bd-footer text-muted">
	  <div class="container">
	    <ul class="bd-footer-links">
	      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
	      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
	      <li><a href="/examples/">Examples</a></li>
	      <li><a href="/about/history/">About</a></li>
	    </ul>
	    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
	    <p>Currently v4.0.0-alpha.5. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
	  </div>
	</footer>

	</div>

<script type="text/javascript">
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	    document.getElementById("main").style.marginRight = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	    document.getElementById("main").style.marginRight= "0";
	}

        /** Map  */
        function initialize() {


            /** Default latitude and longitude */
            var latitude_ = '-6.20909772559144';
            var longitude_ = '106.84479586254884';

            var myLatlng = new google.maps.LatLng(latitude_, longitude_);
            var mapOptions = {
                zoom: 8,
                center: myLatlng,
                mapTypeControl: false
            };

            var map = new google.maps.Map(document.getElementById('maps'), mapOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                draggable: true,
                animation: google.maps.Animation.DROP,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });


            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    // $('input[name="latitude"]').val(place.geometry.location.lat);
                    // $('input[name="longitude"]').val(place.geometry.location.lng);

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {
                $('input[name="latitude"]').val(this.getPosition().lat());
                $('input[name="longitude"]').val(this.getPosition().lng());
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);


</script>

</body>
</html>