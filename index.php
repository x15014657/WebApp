<!DOCTYPE html>
<html>

<head>
	<title>MusicStop</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Video/Audio On-line Shop">
	<meta name="keywords" content="Videos, Albumes, Music, Shop, On-line, Entertainment">
	<meta name="author" content="Team J">
<meta name="google-signin-client_id" content="936123769398-o8i22vemkb0o032m5j9hh2a9fq880epf.apps.googleusercontent.com">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">

	<script src="http://code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
	</script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>


<body onload="intro()">
	<div class="container-fluid">
		<div class="row padding">
			<div class="col-md-4"></div>
			<div class="col-md-offset-1"></div>
			<div class="col-md-2"><img src="img/logo-bird.png" alt="logo-video shop" /></div>
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
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Collections</a></li>
					<li><a href="services.php">Services</a>
						<div class="g-signin2" data-onsuccess="onSignIn"></div>
					</li>
					<li><a href="contact.php">Contact</a><a href="http://webapp-x15014657654604.codeanyapp.com/" onclick="signOut();">Sign out</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<br/>
	<div class="container">
		<div class="row padding">
			<div class="col-md-8">
				<img class="img-thumbnail img-responsive" src="img/music.jpg" alt="home page photo" />
			</div>




			<div class="col-md-4">
				<div class="well">
					<div class="welcome">
						<h1 class="text-centre" id="fade"> Welcome</h1>
						<hr>
						<h2> <em>Music-<span>Zone</span> </em> </h2>
						<p class="text-justified"> is a locally owend and operated business that sales <span>music CD </span>as well as <span>handyman</span> services in Dublin and surroundings.</p>
						<p class="text-justified"> Our main priority is customer satisfaction under all aspects...

						</p>
					</div>
				</div>
				<div class="well">
					<blockquote>
						<p class="text-justified"> Testimonial......</p>
						<footer>Aidan Maher<cite title="ID design">owner at ID design </cite></footer>
					</blockquote>
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
			<p>&copy;2016 by Team J<br/></p>
		</footer>
	</div>


	<script>
		var petru = "Welcome to Music- Zone site";

		function intro() {

			alert(petru);
		}

		function getElements() {
			var x = document.getElementByTagName("input");
			document.getElementByClass("text-centre");

		}
	</script>

	<script>
		$("#fade").delay(1000).fadeIn(3000);
	</script>




	<script src="js/bootstrap.min.js">
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
		function signOut() {  
			var auth2 = gapi.auth2.getAuthInstance();  
			auth2.signOut().then(function() {   
				console.log('User signed out.');  
			}); 
		}
	</script>



</body>

</html>