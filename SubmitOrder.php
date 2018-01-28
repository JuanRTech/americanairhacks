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
    <link rel="shortcut icon" href="aa.png" />

  </head>
  <body>
    <div class="row align-items-center">
        <div class="col-md-12 align-items-center">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Are you sure you want to order?</h2>
                </div>
                <div class="card-body">
                    <form action="OrderSQL.php" method="post">
                        <input type="hidden" name="id" value= <?php if (!empty($_GET['id'])) {echo $_GET['id'];}?>>
                        <input type="submit" class="btn btn-success btn-block" value="YES">
                        <a href="menu.php"><button type="button" class="btn btn-failure btn-block">NO</button></a>
                    </form>
                </div>
            </div>
        </div>
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