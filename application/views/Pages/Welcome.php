<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> E-Commerce | Login </title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/mdb.css');?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
</head>

<body>
	<div class="view full-page-intro">
		<div class="mask rgba-black-light d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row wow fadeIn">

					<div class="col-md-6 mb-4 white-text text-center text-md-left">
						<h1 class="display-3 font-weight-bold">Hello,</h1>
						<h1 class="display-5">Welcome to <b class="display-4 font-weight-bold">Grave</b> ...</h1>
						<hr class="hr-light">
					</div>

					<div class="col-md-6 col-xl-5 mb-4">
						<div class="card">
							<div class="card-body">

								<form name="" action="<?= base_url();?>Pages/login">
									<h3 class="card-header blue white-text text-center py-auto">
										<strong>Sign in</strong>
									</h3>

									<!-- Outline validation input -->
									<div class="md-form md-outline dark">
										<i class="fas fa-user prefix grey-text"></i>
										<input type="email" id="emailValidation" class="form-control validate" required>
										<label for="emailValidation" data-error="wrong" data-success="right">Type your
											email</label>
									</div>

									<div class="md-form md-outline">
										<i class="fas fa-lock prefix grey-text"></i>
										<input type="password" id="passwordValidation" class="form-control validate"
											placeholder="" required>
										<label for="passwordValidation">Type your password</label>
									</div>

									<div class="text-center container">
										<button
											class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-1 col-6"
											type="submit">Sign in</button>

										<p>Not a member?
											<a href="<?= site_url('pages/register');?>">Register</a>
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--!Masterhead-->

	<script>

	</script>
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

	<script type="text/javascript" src="<?= base_url('assets/js/custom.js');?>"> </script>
</body>

</html>
