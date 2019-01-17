<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/register.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <title>Usku | Be an Usker</title>
  </head>
  <body>
    <header>
      <a href="index.html"><img src="pic/usku_transparentlogo.png" alt="logo"></a>
    </header>

    <div id="usker-register-form">
      <h1 class="center">Be an Usker Today!</h1>
      <div class="row">
        <form class="col s12" action="process-usku.php" method="post">
          <div class="row">
            <div class="input-field col s4 offset-s2">
              <input type="text" name="fname" id="fname" class="validate" required="required" pattern="[A-Za-z-]{2,}">
              <label for="fname">First Name</label>
              <span class="helper-text" data-error="Must only contain letters" data-success="Perfect"></span>
            </div>
            <div class="input-field col s4">
              <input type="text" name="lname" id="lname" class="validate" required="required" pattern="[A-Za-z-]{2,}">
              <label for="lname">Last Name</label>
              <span class="helper-text" data-error="Must only contain letters" data-success="Perfect"></span>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8 offset-s2">
              <input type="email" name="email" id="email" class="validate" required="required">
              <label for="email">Email Address</label>
              <span class="helper-text" data-error="Incorrect email format" data-success="Perfect"></span>
            </div>
          </div>
          <div class="row">
            <div class="col offset-s2">
              <label>
                <p>
                  <input type="checkbox" id="over18" value="over18" required="required">
                  <span for="over18">Are you over the age of 18</span>
                </p>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col offset-s2">
              <label>
                <p>
                  <input type="checkbox" id="agreement" value="agree" required="required"/>
                  <span for="agreement">Agree to the <a href="">terms and conditions</a></span>
                </p>
              </label>
            </div>
          </div>
          <div class="center">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
    <?php
      if (isset($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == 'success') {
          echo "
            <div class='container'>
              <div class='card-panel center'>
                <span>Your registration is successful. You will be contacted through your email</span>
              </div>
            </div>
            <br /><br />
          ";
        } else if ($status == 'fail') {
          echo "
            <div class='container'>
              <div class='card-panel center'>
                <span>Your registration failed. Please try again</span>
              </div>
            </div>
            <br /><br />
          ";
        }
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
