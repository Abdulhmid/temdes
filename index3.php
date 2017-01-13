<!DOCTYPE html>
<html>
<head>
	<title>Landing</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	<!-- Latest compiled and minified JavaScript -->
	<!-- <script src="assets/bootstrap.min.js"></script> -->

	<script src="assets/jquery.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="assets/maps_search.css"> -->

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #maps {
        height: 565px;
        width: 896px;
        /*width: 100%;*/
        padding: 0px;
        margin: 0px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .header-search{
      	border-bottom: #d0d0d0 1px dashed;
      }

      .header-search-padding{
      	padding-bottom: 7px;
      }

      .header-padding-default{
		padding-top: 7px;
      }

	.navbar {
	    border: 0px;
	}

	.navbar-default .navbar-brand {
	    color: #fff;
	}

	.navbar-default .navbar-brand:hover {
	    color: #fff;
	    transform: scale(1.1);
	}

	.btn, .form-control{
		border-radius: 0px;
	}

	.img-padd:hover{
	    border: 1px solid #777;
    	border-color: #777;
    	transform: scale(1.1);
    	margin: 13px 0px 13px 0px;
	}

	.media, .media-body {
    	margin-bottom: -11px;
    	padding-top: 4px;
	}

    </style>

</head>
<body>

	<div id="main">
		<!-- Navigation -->
		<nav class="navbar navbar-default">
			<div class="container-fluid" style="background-color: #d9534f;color: #ffffff;">
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
		<div class="container">
			<div class="col-md-4 no-padd-img-padd" style="height: 567px;overflow-y: scroll; overflow-x: hidden;">
				<div class="row header-search">
					<div class="col-xs-6">
						<div class="pull-left">
							<h4>Search</h4>
						</div>		
					</div>
					<div class="col-xs-6">
						<div class="pull-right">
							<h5>Advance Search</h5>
						</div>		
					</div>
				</div>
				<div class="row header-search header-search-padding">
					<div class="col-md-6">
					  <div class="form-group">
					    <label for="email">Kota</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">
					    <label for="email">Kategori</label>
					    <select class="form-control">
					    	<option value="all">All</option>
					    	<option value="no">Dance</option>
					    </select>
					  </div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-danger">Cari</button>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row header-search">
					<div class="col-xs-6">
						<div class="pull-left">
							<h4>Result</h4>
						</div>		
					</div>
					<div class="col-xs-6">
						<div class="pull-right">
							<h4>Result</h4>
						</div>		
					</div>
				</div>
			  	
				<div class="row header-padding-default">
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
			<div class="col-md-8" style="padding-left: 0px;">
				<div id="maps"></div>
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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA01UsTb9MIXvHP3vCP36C-B6vRasOAMGw&callback=initMap"
async defer></script>

<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('maps'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }
</script>

<script type="text/javascript">
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	    document.getElementById("main").style.marginRight = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	    document.getElementById("main").style.marginRight= "0";
	}
</script>

</body>
</html>