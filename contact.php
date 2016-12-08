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
			
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneNoErr = $commentErr = "";
$name = $email  = $phoneNo = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["phoneNo"])) {
    $phoneNo = "000-0000-0000";
  } else {
    $phoneNo = test_input($_POST["phoneNo"]);
    // check if phone number is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/",$phoneNo)) {
      $websiteErr = "Invalid phone number";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="well">
						<div class="well well-sm">
							<div class="get">
								<h3 class="text-centre">Contact us </h3> <hr>
									<p class="text-justified">
									<br>
									.....
									</p></div>
						</div>	
						<div class="row">
							<p><span class="error">* required field.</span></p>
							<form method='post'  name="myForm" class="form-horizontal" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' >
								<div class="form-group">
									<label for="inputName" class="control-label col-sm-2" > *Name:</label>
										<div class="col-sm-10">
											<input type="text" name='name' size="20" class="form-control" id="inputName" placeholder="Enter name" value='<?php echo $name;?>'>
										</div>
								</div>
								<div class="form-group">
									<label for="inputE-mail" class="control-label col-sm-2">*E-mail:</label>
										<div class="col-sm-10">
											<input type="text" name='email' class="form-control" id="inputE-mail" placeholder="Enter e-mail" value="<?php echo $email;?>">
										</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" >*Phone no:</label>
										<div class="col-sm-10">
											<input type="number" name='phoneNo' min="1" max="15" class="form-control" id="inputPhoneNumber" placeholder="Enter phone number" value='<?php echo $phoneNo;?>'> >
										</div>
								</div>	
								<div class="form-group">
									<label for="inputMessage" class="control-label col-sm-2">Message:</label>
										<div class="col-sm-10">
											<textarea name='comment' onfocus="thanks();" class="form-control" rows="7" id="inputMessage" placeholder="Enter message"><?php echo $comment;?></textarea>
										</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										 <button type="submit" name="submit" value='submit' class="btn btn-default">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phoneNo;
echo "<br>";
echo $comment;
echo "<br>";
?>
		<div class="alt2">
			<footer class="container-fluid text-center">
				<h2 class="text-center"><em>Music-<span>Zone</span></em></h2>
					<p class="text-justified">
											Military Road, Rathmines, Dublin<br>
											Tel: 0871389294
											<br>
					<a href="mailto:x15014657@student.ncirl.ie"><span class="glyphicon glyphicon-envelope"></span></a>
					</p>
				<hr>
				<p>&copy;2015 by Team J<br/></p>
			</footer>
		</div>	
		

	
	
		<script src="js/bootstrap.min.js"> </script>
	</body>
</html>