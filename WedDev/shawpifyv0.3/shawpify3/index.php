<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Shawpify Home</title>
	<!--CSS-->
	<!--Bootstrap-->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
	<!--Optional Bootstrap Theme-->
	
	<!--FontAwesome-->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	
	<!--Custom CSS-->
	<link rel='stylesheet' href='css/style.css'>
</head>
<body>
	<!--HEADER-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Shawpify</h1>
				<p>Offering a wide range of products from consumer electronics to cars</p>
			</div>
		</div>
	</header>
	
	<nav class='navbar navbar-inverse navbar-fixed-top'>
		<div class='container-fluid'>
			<header class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='index.php'>Shawpify Home</a>
			</header>
			<div class='collapse navbar-collapse' id='myNavbar'>
				<ul class='nav navbar-nav'>
					<li><a href='#'>Products</a></li>
					<li><a href='#'>Deals</a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'><span class='glyphicon glyphicon-user'></span>Sign In</a></li>
					<li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span>Cart</a></li>
					<li>
						<form class='navbar-form' action='#' method='POST'>
							<input type='text' class='form-control' placeholder='Search for a Product'>
							<button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-search'></span></button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--MAIN-->
	<main class='container'>
		<div class='row'>
			<div class="col-md-3"><!--SECONDARY NAV MENU - COULD ANOTHER TAG BE USED INSTEAD OF DIV HERE? -->
				<p class="lead">Product Range</p>
				<p>Computers</p>
				<div class='list-group'>
					<a href="#" class="list-group-item">Category 1</a>
					<a href="#" class="list-group-item">Category 2</a>
					<a href="#" class="list-group-item">Category 3</a>
				</div>
				<p>Cars</p>
				<div class='list-group'>
					<a href="#" class="list-group-item">Category 4</a>
					<a href="#" class="list-group-item">Category 5</a>
					<a href="#" class="list-group-item">Category 6</a>
				</div>
			</div>
			<div class="col-md-9"><!--PRIMARY INFORMATION ON PAGE - UPGRADE TO HTML5 -->
				<div class="row carousel-holder">
					<div class="col-md-12">	  <!--FIX: NOT class='carousel-slide'-->
						<div id="carousel" class='carousel slide' data-ride='carousel'>
							<ol class='carousel-indicators'>
								<li data-target='#carousel' data-slide-to='0' class='active'></li>
								<li data-target='#carousel' data-slide-to='1'></li>
								<li data-target='#carousel' data-slide-to='2'></li>
							</ol>

							<div class='carousel-inner'><!-- IMG SOURCE FOR SLIDER -->
								<div class='item active'>
									<img class='slide-image' src='img/car1.jpg' alt=''>
								</div>
								<div class='item'>
									<img class='slide-image' src='img/car2.jpg' alt=''>
								</div>
								<div class='item'>
									<img class='slide-image' src='img/car3.jpg' alt=''>
								</div>
							</div><!--ACTION FOR SLIDER -->
							<a class='left carousel-control' href='#carousel' data-slide='prev'>
								<span class='glyphicon glyphicon-chevron-left'></span>
							</a>

							<a class='right carousel-control' href='#carousel' data-slide='next'>
								<span class='glyphicon glyphicon-chevron-right'></span>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$24.99</h4>
								<h4><a href="inc/productimages.php">First Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">15 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$64.99</h4>
								<h4><a href="inc/productimages.php">Second Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">12 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">


							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$74.99</h4>
								<h4><a href="inc/productimages.php">Third Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">31 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$84.99</h4>
								<h4><a href="inc/productimages.php">Fourth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">6 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$94.99</h4>
								<h4><a href="inc/productimages.php">Fifth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">18 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-lg-4 col-md-4">
						<div class="thumbnail">
							<img src="http://placehold.it/320x150" alt="">
							<div class="caption">
								<h4 class="pull-right">$74.99</h4>
								<h4><a href="inc/productimages.php">Sixth Product</a>
								</h4>
								<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="ratings">
								<p class="pull-right">31 reviews</p>
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star-empty"></span>
								</p>
							</div>
						</div>
					</div>
					<div class="text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>	
	</main>
	<!--FOOTER-->
	<footer class='text-center'>
		<nav class='navbar navbar-inverse'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav'>
					<li class='navbar-text'>Copyright &copy; Shaw Academy</li>
					<li><a href='#'><i class='fa fa-facebook'></i></a></li>
					<li><a href='#'><i class='fa fa-google'></i></a></li>
					<li><a href='#'><i class='fa fa-twitter'></i></a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'>Site Map</a></li>
					<li><a href='#'>Contact Us</a></li>
					<li><a href='#'>Terms &amp; Conditions</a></li>
				</ul>
			</div>
		</nav>
	</footer>
	<!--JAVASCRIPT-->
	<!--JQuery-->
	<script src='https://code.jquery.com/jquery-3.1.0.min.js' integrity='sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=' crossorigin='anonymous'></script>
	
	<!--Bootstrap JS-->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
	
	<!--Custom JS-->
	<script src="js/dynamicimageloading.js"></script>
</body>
</html>