<!DOCTYPE html>
<html lang="en">

  <head>
	<!-- <?php 
	$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
	echo '<meta http-equiv="refresh" content="3;URL=' . $url . '">';
	 ?> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>American Airlines</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">


    <!-- Order Menu Grid Section -->
    <div class="mobileHide">
    <a name="menu">
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Method Of Payment</h2>
        </div>
        <body>
		<a class="coinbase-button" data-code="4d4b84bbad4508b64b61d372ea394dad" data-button-style="custom_large" data-button-text="Checkout With Bitcoin" data-custom="order1234" href="https://www.coinbase.com/checkouts/4d4b84bbad4508b64b61d372ea394dad">Checkout With Bitcoin</a>
        <script src="https://www.coinbase.com/assets/button.js" type="text/javascript"></script>
		</body>
		<body class="buttons allow_iframe" style="padding: 0; display: inline-block; background-color: transparent;" data-env="production">
			<a href="debitpay.php" class="btn btn-primary  coinbase-button2" style="" data-code="2b30a03995ec62f15bdc54e8428caa87">
			<i class="icon-basket"></i> Pay With Debit/Credit
			</a>
		</body>
		<body class="buttons allow_iframe" style="padding: 0; display: inline-block; background-color: transparent;" data-env="production">
			<a href="#" class="btn btn-primary  coinbase-button2" style="" data-code="2b30a03995ec62f15bdc54e8428caa87">
			<i class="icon-basket"></i> Pay With Capital One Rewards
			</a>
		</body>
    </section>
</div>

    <!-- Order Menu Grid Section -->
<div class="mobileShow">
    <a name="menu">
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Method Of Payment</h2>
		<body>
			<a class="coinbase-button" data-code="4d4b84bbad4508b64b61d372ea394dad" data-button-style="custom_large" data-button-text="Checkout With Bitcoin" data-custom="order1234" href="https://www.coinbase.com/checkouts/4d4b84bbad4508b64b61d372ea394dad">Checkout With Bitcoin</a>
        	<script src="https://www.coinbase.com/assets/button.js" type="text/javascript"></script>
		</body>		
		<body class="buttons allow_iframe" style="padding: 0; display: inline-block; background-color: transparent;" data-env="production">
			<a href="debitpay.php" class="btn btn-primary  coinbase-button2" style="" data-code="2b30a03995ec62f15bdc54e8428caa87">
			<i class="icon-basket"></i> Pay With Debit/Credit
			</a>
		</body>
		<body class="buttons allow_iframe" style="padding: 0; display: inline-block; background-color: transparent;" data-env="production">
			<a href="#" class="btn btn-primary  coinbase-button2" style="" data-code="2b30a03995ec62f15bdc54e8428caa87">
			<i class="icon-basket"></i> Pay With Capital One Rewards
			</a>
		</body>
        </div>
      </div>
    </section>
    <form action="OrderSQL.php" method="post">
      
    </form>
</div>


    <!-- Contact Section
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Feedback</h2>
        <hr class="star-dark mb-5">
        <h3 class="font-weight-light mb-0">Was This Website Helpful?</h3>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. 
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    <!-- <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">American Airsnacks</h4>
            <p class="lead mb-0">We Know De Way
              <br>To A Happy Customer!</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Follow Us!</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer> -->

    <!-- <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div> -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="index.php">
        <i class="fa fa-house"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.js"></script>

  </body>

</html>
