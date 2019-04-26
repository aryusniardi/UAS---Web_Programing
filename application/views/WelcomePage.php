<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>E-Commerce</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/mdb.css');?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
</head>

<body>
	<!--Masterhead-->
	<section id="masterhead">
		<div class="container">
			<div id="carousel-example-1z" class="carousel slide carousel-fade py-2" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-1z" data-slide-to="1"></li>
					<li data-target="#carousel-example-1z" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
							alt="First slide">
					</div>
					
					<div class="carousel-item">
						<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
							alt="Second slide">
					</div>

					<div class="carousel-item">
						<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
							alt="Third slide">
					</div>
				</div>
				
				<!--Controls-->
				<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!--!Controls-->
			</div>
		</div>
	</section>
	<!--!Masterhead-->

	<!--Category-->
	<section>
		<div class="container">
			<h3>Category</h3>
			<!--Table Category-->
				<table id="categoryHorizontal" class="table table-sm blue darken-4 white-text" cellspacing="0" width="100%">
					<thead>
						<tr>

							<td>
							<br>
								<!--Category_Title-->
								askjdn
								<!--!Category_Title-->
							</td>
						</tr>
					</thead>
				</table>
			<!--!Table Category-->
		</div>
	</section>
	<!--!Category-->

	<div class="container">
		<h1 class="">Welcome to CodeIgniter!</h1>

		<div id="body">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a
					href="user_guide/">User Guide</a>.</p>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
			<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
		</p>
	</div>

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
	</script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
	</script>
</body>

</html>
