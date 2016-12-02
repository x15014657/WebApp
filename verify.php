<?php
         	 require_once('recaptchalib.php');
          <?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldsrw0UAAAAAJLk5BV8BdtCDa04Yw_26zZ2eyje";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }
  ?>  $publickey = "6Ldsrw0UAAAAAJ76-56yX16JTjPk9NezNI_blD0a"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
      			  ?>
					<?php
		