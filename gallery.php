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
	<meta name="google-signin-client_id" content="936123769398-o8i22vemkb0o032m5j9hh2a9fq880epf.apps.googleusercontent.com">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/lightbox.css">

	<script src="http://code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
	</script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>


<body>


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
						<hr>
						<p class="text-justified"> The best music from today and yesterday. We have the biggest collection onine in the world.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gallery">
			<div class="row padding">
				<div class="col-md-3">
					<a href="img/EmmyLouHarris.jpg" class="thumbnail" data-title="records" data-lightbox="example-set">
						<img src="img/EmmyLouHarris.jpg" alt="Roses in the Snow" />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/Mad'house.jpg" class="thumbnail" data-title="records" data-lightbox="example-set">
						<img src="img/Mad'house.jpg" alt="Absolutely Mad" />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/LoveDeLuxe.jpg" class="thumbnail" data-title="..." data-lightbox="example-set">
						<img src="img/LoveDeLuxe.jpg" alt="Again and Again" />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/Survivor.jpg" class="thumbnail" data-title="..." data-lightbox="example-set">
						<img src="img/Survivor.jpg" alt="Premonition" />
					</a>
				</div>

			</div>
			<div class="row padding">
				<div class="col-md-3">
					<a href="img/HenryMancini.jpg" class="thumbnail" data-title="..." data-lightbox="example-set">
						<img src="img/HenryMancini.jpg" alt="..." />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/FrancescaMichielin.jpg" class="thumbnail" data-title="..." data-lightbox="example-set">
						<img src="img/FrancescaMichielin.jpg" alt="10" />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/2Unlimited.jpg" class="thumbnail" data-title="" data-lightbox="example-set">
						<img src="img/2Unlimited.jpg" alt="di20are" />
					</a>
				</div>
				<div class="col-md-3">
					<a href="img/Laleh.jpg" class="thumbnail" data-title="..." data-lightbox="example-set">
						<img src="img/Laleh.jpg" alt="Laleh" />
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="alt2">
		<footer class="container-fluid text-center">
			<h2 class="text-center"><em>Music-<span>Zone</span></em></h2>
			<p class="text-justified">
				Military Road, Rathmines, Dublin<br> Tel: 0871389294
				<br>
				<a href="mailto:cameliafarcas.cf@gmail.com"><span class="glyphicon glyphicon-envelope"></span></a>
			</p>
			<hr>
			<p>&copy;2015 br Team J<br/></p>
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