<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <title>Usku | Contact Us</title>
  </head>
  <body>
    <header>
      <a href="index.html"><img src="pic/usku_transparentlogo.png" alt="logo"></a>
    </header>

    <div class="container">
      <h1 class="center">Contact Us</h1>
      <h5 class="center">Hit us a message and we will be sure to get back to you soon!</h5>
    </div>

    <div class="inquiry">
      <div class="row">
        <form action="contact.php" method="post" id="inquiry-form" class="col s12">
          <div class="row">
            <div class="input-field col s4 offset-s2">
              <input type="text" name="fname" id="fname" class="validate" required="required" pattern="[A-Za-z-]{2,}"/>
              <label for="fname">First Name</label>
              <span class="helper-text" data-error="Must only contain letters" data-success="Perfect"></span>
            </div>
            <div class="input-field col s4">
              <input type="text" name="lname" id="lname" class="validate" required="required" pattern="[A-Za-z-]{2,}"/>
              <label for="lname">Last Name</label>
              <span class="helper-text" data-error="Must only contain letters" data-success="Perfect"></span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8 offset-s2">
              <input type="email" name="email" id="email" class="validate" required="required" />
              <label for="email">Email Address</label>
              <span class="helper-text" data-error="Invalid email format" data-success="Perfect"></span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8 offset-s2">
              <textarea name="inquiry" id="inquiry" class="materialize-textarea"></textarea>
              <label for="inquiry">Tell us your inquiry here</label>
            </div>
          </div>
          <div class="row center">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>

    <?php
      if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['inquiry'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $inquiry = $_POST['inquiry'];

        $to = "brian@uskutech.com";
        $subject = "Usku Customer Inquiry - Website";
        $message = "From $fname $lname, $email \n$inquiry";
        $message = wordwrap($message, 70);

        mail($to, $subject, $message);

        echo "
        <div class='container'>
          <div class='card-panel center'>
            <span>Your inquiry has been sent.</span>
          </div>
        </div>
        <br /><br />
        ";
      }
    ?>

    <footer>
      <h6>STAY CONNECTED</h6>
      <section>
        <a href="https://www.facebook.com" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram"></a>
      </section>
      <hr>
      <ul>
        <li id="copyright">&copy 2019 USKU TECHNOLOGIES.</li>
        <li><a href="terms.html">Terms of Use</a></li>
        <li><a href="privacy-policy.html">Privacy Policy</a></li>
      </ul>
    </footer>

  </body>
</html>
