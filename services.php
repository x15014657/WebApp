<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Music-Zone</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Video/Audio On-line Shop">
		<meta name="keywords" content="Videos, Albumes, Music, Shop, On-line, Entertainment">
		<meta name="author" content="Team J">
			
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"> </script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"> </script>
	</head>
	
	
	<body>
		<div class="container-fluid">
			<div class="row padding">
				<div class="col-md-4"></div>
				<div class="col-md-offset-1"></div>
				<div class="logo"><div><img src="img/vinyl.png" alt="vinyl" class="vinyl" /><img src="img/logo-bird.png" alt="logo-renovation" />" /><img src="img/vinyl.png" alt="vinyl" class="vinyl" /></div>
				</div>
				<div class="col-md-offset-1"></div>
				<div class="col-md-4"></div>
			</div>
		</div>
	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="contaianer-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
				</div>
				<div class="collapse navbar-collapse" id="mainNavBar">
					<ul class="nav nav-tab nav-justified">
						<li><a href="index.php">Home</a></li> 
						<li><a href="gallery.php">Collections</a></li>
						<li class="active"><a href="services.php">Services</a></li> 
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>		
		</nav>

		<?php
		require 'catalog.php';
		
		?>
		<div class="container">
			<div class="row padding">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="well">
						<h1 class="text-centre">Services</h1> <hr>
							<p class="text-justified">We know your passionate for music....
													</p>
							<ul class="list-group">
								 <li class="list-group-item list-group-item-success">
									<h2>Can't Find Something Online?</h2> <hr>
										<ul>
											<li>We have specialist music collectors and collaborators that for a small fee will help you build and grow your collection!</li>
										</ul>
								</li>
								 <li class="list-group-item list-group-item-info">
									<h2>Members Auctions</h2> <hr>
										<ul> 
											<li>If you join up to our mailing program you will be allowed access to special onine auctions. Some rare items can be found here!!!</li>
										</ul>
								 </li>
								 <li class="list-group-item list-group-item-warning">
									<h2>Trade!!!</h2> <hr>
										<ul> 
											<li>We will be happy to trade all cd's, cassette tapes, vinyls and a-tracks!!! (Some T&C's Apply)</li>
										</ul>
								 </li>
								 <li class="list-group-item list-group-item-danger">
									<h2>Spread The Word!!!</h2> <hr>
										<ul> 
											<li>Get 10 friends to sign up and use our service and you each wi receive a &euro;20 off your next purchase (T&C's Apply)</li>
										</ul>
								 </li>
							</ul>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	
		
		<div class="alt2">
			<footer class="container-fluid text-center">
				<h2 class="text-center"><em>Music-<span>Zone</span></em></h2>
					<p class="text-justified">
											Military Road, Rathmines, Dublin<br>
											Tel: 0871389294
											<br>
					<a href="mailto:cameliafarcas.cf@gmail.com"><span class="glyphicon glyphicon-envelope"></span></a>
					</p>
				<hr>
				<p>&copy;2015 by Team J<br/></p>
			</footer>
		</div>	
		
		<script src="js/bootstrap.min.js"> </script>	
	</body>
</html>