<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>Awake Birmingham</title>
  <meta name="description" content="We support parents, students and schools to resolve issues that negatively impact on the students' education including: Fixed Term or Permanent Exclusions, Managed Moves, Pastoral Support, Reviews, School Meetings and Special Educational Needs.
">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">

  <!-- Place favicon.ico in the root directory -->
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!--Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">

  <!-- Stylesheer -->
  <link rel="stylesheet" href="../sass/pages.css">


</head>

<body>
  <header>
    <nav id="mobnav" class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" alt="Awake Birmingham logo">Awake
        Birmingham</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="../index.php">Home</a>
          <a class="nav-item nav-link" href="../who-we-are.php">Who We Are</a>
          <a class="nav-item nav-link" href="../what-we-do.php">What We Do</a>
          <a class="nav-item nav-link active" href="contact-us.php">Contact Us <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="p-content">
      <div class="p-left">
      <img id="contact-left" class="p-img" src="../img/contact-us.jpg" alt="boy with his hand in the air">
      </div>
      
      <div class="p-text">
        <h1>Contact Us</h1>
        <p>We hold initial Education Consultancy Drop-In Sessions* on the first and third Saturday of every month! This takes place between 10:00-13:00 at the <a href="#map">Afro Caribbean Millennium Centre, 339 Dudley Road, Birmingham, B18 4HB.</a></p><br>

        <p>Following the initial consultation a plan will be devised and further meetings and referrals may be arranged with the school and other relevant third party organisations such as mentors and family support workers.</p><br>

        <img class="p-img" src="../img/contact-us.jpg" alt="boy with his hand in the air">

        <!-- Contact Form-->
        <div id="form-container">
          <form id="contact-form" method="post" action="contact.php" role="form">

            <div class="messages"></div>

            <div class="controls">

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required"
                      data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required"
                      data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_number" type="tel" name="number" class="form-control" placeholder="Phone Number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Type your message here..."
                      rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col form-group" id="recaptcha-container">
                  <div id="recaptcha" class="g-recaptcha" data-sitekey="6LfmCpEUAAAAAIMoxnb6CYtG32jOXUJhmxR0B-pG"
                    data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback" style="width: 304px; margin: 0 auto; padding: 15px 0 20px 0;"></div>
                  <input class="form-control d-none" data-recaptcha="true" required data-error="reCaptcha is required.">
                  <div class="help-block with-errors"></div>
                </div>
                <br>
                <div class="col form-button">
                  <input type="submit" id="send-button" class="btn btn-success btn-send" value="Send message">
                </div>
              </div>
            </div>
          </form>

        </div><br>
        <p style="text-align: center;font-size: 0.9em; margin-bottom: 30px;">*Please note that there is an initial consultation fee of £10 payable on the day.</p>
        <div id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.582000864445!2d-1.9451623847224935!3d52.48670364644956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bd1a623fe11b%3A0x3b8cc3440a4ea649!2sAfro+Caribbean+Millenium+Centre!5e0!3m2!1sen!2suk!4v1550427914020"
          width="100%" height="250" frameborder="0" with style="border:0 align" allowfullscreen></iframe>
      </div>
      </div>
      
    </section>
  </main>



  <footer class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <a href="mailto:infoawake16@gmail.com">infoawake16@gmail.com</a>
    </div>
    <div class="col-12 col-md-4 col-lg-4 contact-links jalika">
      Jalika: <a href="tel:+447538606045">(+44) 7538 606045</a>
    </div>
    <div class="col-12 col-md-4 col-lg-4 contact-links">
      Imani: <a href="tel:+447828778484">(+44) 7828 778484</a>
    </div>
    <div class="col-12 col-md-4 col-lg-4 contact-links shennice">
      Shennice: <a href="tel:+447999731982">(+44) 7999 731982</a>
    </div>
    <div class="col-12">
      <a href="https://www.facebook.com/awa.ke.31" target="_blank"> <i class="fab fa-facebook-square"></i></a>

      <a href="https://www.instagram.com/bhamawake/" target="_blank"><i class="fab fa-instagram"></i></a>

      <a href="https://www.linkedin.com/in/awake-birmingham-5a9849174" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div>
    <div class="col-12">
      <p>&copy;
        <?php echo date("Y");?> Awake</p>
    </div>
  </footer>


  <!--Bootstrap JS-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8="
    crossorigin="anonymous"></script>
  <script src="contact.js"></script>

  <!-- reCAPTCHA -->
  <script src='https://www.google.com/recaptcha/api.js'></script>



</body>

</html>