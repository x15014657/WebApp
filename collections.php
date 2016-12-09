<!DOCTYPE html >
<html lang="en">

<head>
	<title>Music-Zone</title>

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Video/Audio On-line Shop"/>
	<meta name="keywords" content="Videos, Albumes, Music, Shop, On-line, Entertainment"/>
	<meta name="author" content="Team J"/>
	<meta name="google-signin-client_id" content="936123769398-o8i22vemkb0o032m5j9hh2a9fq880epf.apps.googleusercontent.com"/>

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="css/lightbox.css"/>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
	</script>
	<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
	<script src="https://apis.google.com/js/platform.js"></script>
</head>


<body>


<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="full" data-theme="dark" data-count="default" data-onytevent="onYtEvent"></div>

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
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Collections</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="http://webapp-x15014657654604.codeanyapp.com/" onclick="signOut();">Sign out</a> <div class="g-signin2" data-onsuccess="onSignIn"></div></li>
				</ul>
			</div>
		</div>
	</nav>
	<br/><br/>
	
	
	<div class="container-fluid">
		<div class="row padding">
			<div class="col-md-4"></div>
			<div class="col-md-offset-1"></div>
			<div class="logo">
				<div><img src="img/vinyl.png" alt="vinyl" class="vinyl" /><img src="img/logo-bird.png" alt="logo-renovation" /><img src="img/vinyl.png" alt="vinyl" class="vinyl" /></div>
			</div>
			<div class="col-md-offset-1"></div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<div class="container">
		<div class="row padding">
			<div class="col-md-12">
				<div class="well">
					<div class="gallery1">
						<h1 class="text-centre"> Music Collections</h1>
						<hr/>
						<p class="text-justified"> The best music from today and yesterday. We have the biggest collection onine in the world.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gallery">
			<div class="row padding">
				
						<?php

$xml=simplexml_load_file("albums.xml");


foreach ($xml->cd as $cd)  
{  
   
   echo '<div class="col-md-3">';
   echo $cd['id'], '  ';  
   
   echo $cd->ARTIST, '  ';  
   echo $cd->COUNTRY, '<br />'; 
   echo $cd->R_LABEL, '  ';  
   echo $cd->PRICE, '<br />';
   echo $cd->YEAR, '  ';
   echo '<img class="img-responsive" src="'.$cd->IMAGE.'"/>';
   echo $cd->SUBSCRIBE;
   echo '</div>';
	
  
}  

?>

	
				</div>
				<!--<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					
				</div>-->

			<!--</div>
			<div class="row padding">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
					
				</div>-->
			</div>
		</div>
	</div>

	<div class="alt2">
		<footer class="container-fluid text-center">
			<h2 class="text-center"><em>Music-<span>Zone</span></em></h2>
			<p class="text-justified">
				Military Road, Rathmines, Dublin<br/> Tel: 0871389294
				<br/>
				<a href="mailto:cameliafarcas.cf@gmail.com"><span class="glyphicon glyphicon-envelope"></span></a>
			</p>
			<hr/>
			<p>2015 br Team J<br/></p>
		</footer>
	</div>


	<script src="js/bootstrap.min.js">
	</script>
	<script src="js/lightbox.js">
	</script>


	<script>
		function onSignIn(googleUser) { 
			var profile = googleUser.getBasicProfile(true); 
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			 
			console.log('Name: ' + profile.getName()); 
			console.log('Image URL: ' + profile.getImageUrl()); 
			console.log('Email: ' + profile.getEmail());
		}
	</script>
	<script>
		function signOut(googleUser) {  
			var auth2 = gapi.auth2.getAuthInstance();  
			auth2.signOut().then(function() {   
				console.log('User signed out.');  
			}); 
		}
	</script>
</body>

			</html>
	