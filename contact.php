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

	<script src="http://code.jquery.com/jquery-1.11.3.min.js">
	</script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js">
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
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
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="well">
					<div class="well well-sm">
						<div class="get">
							<h3 class="text-centre">Contact us </h3>
							<hr>
							<p class="text-justified">Feel free to contact us by calling 0871389294 or by filling in the enquiry form bellow.
								<br> .....
							</p>
						</div>
					</div>
					<div class="row">
						<form name="myForm" method='post' action='contact.php' class="form-horizontal" require_once( 'recaptchalib.php')   $publickey="6Ldsrw0UAAAAAJ76-56yX16JTjPk9NezNI_blD0a" >
							<div class="form-group">
								<label for="inputName" class="control-label col-sm-2"> Name:</label>
								<div class="col-sm-10">
									<input type="text" maxlen="30" class="form-control" id="inputName" placeholder="Enter name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputE-mail" class="control-label col-sm-2">E-mail:</label>
								<div class="col-sm-10">
									<input type="email" name=email class="form-control" id="inputE-mail" placeholder="Enter e-mail">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Phone no:</label>
								<div class="col-sm-10">
									<input type="number" maxlen="20" class="form-control" id="inputPhoneNumber" placeholder="Enter phone number">
								</div>
							</div>
							<div class="form-group">
								<label for="inputMessage" class="control-label col-sm-2">Message:</label>
								<div class="col-sm-10">
									<textarea onfocus="thanks();" class="form-control" rows="7" id="inputMessage" placeholder="Enter message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" name="fname" onsubmit="return validateForm()" class="btn btn-default" if(isset($_POST['submit'])){ echo 'form sucessfully submitted'; } ?>Submit</button>
									<div class="g-recaptcha" data-theme="dark" data-sitekey="6Ldsrw0UAAAAAJ76-56yX16JTjPk9NezNI_blD0a">
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
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
			<p>&copy;2015 by Team J<br/></p>
		</footer>
	</div>


	<script>
		function thanks() {
			alert("Thank you for visiting our site");
		}

		function validateForm() {
			var x = document.forms["myForm"]["fname"].value;
			if (x == null || x == "") {
				alert("Name must be filled out");
				return false;
			}
		}
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
		function signOut(googleUser) {  
			var auth2 = gapi.auth2.getAuthInstance();  
			auth2.signOut().then(function() {   
				console.log('User signed out.');  
			}); 
		}
	</script>
	
	
	
	
	
</body>

</html>