

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

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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

					<li><a href="collections.php">Collections</a></li>

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

				<div><img src="img/vinyl.png" alt="vinyl" class="vinyl" /><img src="img/logo-bird.png" alt="logo" /><img src="img/vinyl.png" alt="vinyl" class="vinyl" /></div>

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

								<h3 class="text-centre">Contact us </h3> <hr>

						</div>

						</div>	

						<div class="row">

              <form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

							</form>
											
									</div>

								</div>

								

	
								 <div class="col-md-4"></div>

				 
			 	<div class="col-md-4">
					 <?php

// configure
$from = 'Demo contact form <demo@domain.com>';
$sendTo = 'Demo contact form <demo@domain.com>';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
			 
  
		echo '<table>';
		echo '<tr>';
		echo '<td>';

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
		echo '</td>';
	echo '</tr>';
	echo '</table>';
  
	
}
              ?>
					</div>

						</div>

					</div>

				</div>

				

	
<script>
	 $(function () {

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});

</script>	



 

		

		<div class="alt2">

			<footer class="container-fluid text-center">

				<h2 class="text-center"><em>Music-<span>Zone</span></em></h2>

					<p class="text-justified">

									Dublin<br>

											Tel: 0871389294

											<br>

					<a href="mailto:x15014657@student.ncirl.ie"><span class="glyphicon glyphicon-envelope"></span></a>

					</p>

				<hr>

				<p>&copy;2016 by Team J<br/></p>

			</footer>

		</div>	

		



	

	

		<script src="js/bootstrap.min.js"> </script>

	</body>

</html>
