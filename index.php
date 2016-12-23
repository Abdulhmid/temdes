<!DOCTYPE html>
<html>
<head>
	<title>Landing</title>
	<link rel="stylesheet" type="text/css" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="assets/jquery.min.js"></script>

	<style type="text/css">
		.navbar {
		    margin-bottom: 0;
		}

		.navbar-toggle {
		    z-index:3;
		}

		/* Menu Toogle */
		.sidenav {
		    height: 100%;
		    width: 0;
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    right: 0;
		    background-color: #111;
		    overflow-x: hidden;
		    transition: 0.5s;
		    padding-top: 60px;
		}

		.sidenav a {
		    padding: 8px 8px 8px 32px;
		    text-decoration: none;
		    font-size: 25px;
		    color: #818181;
		    display: block;
		    transition: 0.3s
		}

		.sidenav a:hover, .offcanvas a:focus{
		    color: #f1f1f1;
		}

		.sidenav .closebtn {
		    position: absolute;
		    top: 0;
		    right: 25px;
		    font-size: 36px;
		    margin-left: 50px;
		}

		#main {
		    transition: margin-right .5s;
		}

		.li-toogle{
		    padding-top: 5px;
		    padding-right: 5px;
		}

		/*@media screen and (max-height: 450px) {*/
		@media (max-width: 768px){
			.li-toogle{
		    	padding-left: 13px;
		    	text-align: center;
		    	padding-top: 26px;
			}
			.navbar-brand
			{
			    position: absolute;
			    width: 100%;
			    left: 0;
			    text-align: center;
			    margin:0 auto;
			}
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}

	</style>

</head>
<body>
	<div id="main">
	<!-- Navigation -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
		<ul class="nav navbar-nav navbar-right">
		  <!-- <li><a href="#about">Right</a></li> -->
		  <li class="li-toogle">
			<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
		  </li>
		</ul>
	    <!-- <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	      <li><a href="#">Page 3</a></li>
	    </ul> -->
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
</script>

</body>
</html>