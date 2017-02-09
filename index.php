<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Victor Adams | Assignment 1 - CSCI E-15 (24574)</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="carousel.css" rel="stylesheet">
	</head>

	<!-- Marketing messaging and featurettes
	================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-3">
				<img class="img-responsive" src="images/victor.jpg" alt="Victor Adams">
			</div>
			<div class="col-md-9">
				<h2>Victor Adams</h2>
				<h3 class="featurette-heading">Manager, Web &amp; Database Systems at American Fuel &amp; Petrochemical Manufacturers</h3>
				<p>
					I have over a decade of experience in management, marketing, graphic design and web development.
				</p>
			</div>
			<div class="clear"></div>
			<div class="col-md-12">
				<h2 class="quote">Quote</h2>
				<p class="quote"><?php $file= "quotes.txt";
					$quotes = file($file);
					srand((double)microtime()*1000000);
					$randomquote = rand(0, count($quotes)-1);
					echo $quotes[$randomquote];
				?></p>
			</div>
		</div>
	</div><!-- /.container -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')
	</script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="js/vendor/holder.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
