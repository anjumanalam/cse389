<?php
session_start();

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "anjumanalam@gmail.com";
    $email_subject = "CSE 389 - Contact Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
  }
?>


<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Contact | Silk City Platters</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="contact.css">

  </head>

  <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="index.html">Silk City Platters</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="menu.html">Menu</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="login.html">Login</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

      <!-- Hero -->
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5 text-white">
              <h1 class="display-4 font-weight-normal">Contact</h1>
              <p class="lead font-weight-normal">Get in touch with us.</p>
          </div>
      </div>

      <div class="container mt-4">
          <div class="row">
              <!-- Map Column -->
              <div class="col-lg-8 mb-4 embed-responsive embed-responsive-4by3">
                  <!-- Embedded Google Map -->
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.980612281802!2d-74.173213048402!3d40.91617097920862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fdcb3547cfbd%3A0xd04a5e83642d6ffe!2sSilk%20City%20Platters!5e0!3m2!1sen!2sus!4v1575085021350!5m2!1sen!2sus" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>

              <!-- Contact Details Column -->
              <div class="col-lg-4 mb-4">
              <h3>Contact Details</h3>
              <p>
                  170 Market Street
                  <br>
                  Paterson, NJ 07502
                  <br>
              </p>
              <p>
                  <abbr title="Phone">P</abbr>: (973) 619-8945
              </p>
              <p>
                  <abbr title="Email">E</abbr>:
                  <a href="mailto:info@silkcityplatters.com">info@silkcityplatters.com
                  </a>
              </p>
              <p>
                  <abbr title="Hours">H</abbr>: Monday - Saturday: 11:00 AM to 11:00 PM
              </p>
              </div>
          </div>
          <!-- /.row -->

          <!-- Contact Form -->
          <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
          <div class="row">
              <div class="col-lg-8 mb-4">
              <h3>Let's Talk</h3>
              <form name="sentMessage" id="contactForm" method="post" action="send_form_email.php">
                  <!-- Name -->
                  <div class="control-group form-group">
                      <div class="controls">
                          <label for="name"> Full Name:</label>
                          <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                          <p class="help-block"></p>
                      </div>
                  </div>

                  <!-- Email -->
                  <div class="control-group form-group">
                      <div class="controls">
                          <label for="email">Email Address:</label>
                          <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>

                  <!-- Message -->
                  <div class="control-group form-group">
                      <div class="controls">
                          <label for="message">Message:</label>
                          <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                      </div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-primary" id="sendMessageButton" value="submit">Send Message</button>
              </form>
              </div>
          </div> <!-- /.row Contact-->

      </div> <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
          <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; Silk City Platters</p>
          </div>
      </footer>

      <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>