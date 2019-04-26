<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> E-Commerce | Register </title>
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
					<div class="col-sm-6 white-text text-center text-md-left">
						<h1 class="display-3 font-weight-bold">Hello,</h1>
						<h1 class="display-5">Welcome to Grave...</h1>
						<hr class="hr-light">
					</div>

					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<form role="form" method="post" action="<?= base_url('Authentication/register_user');?>" name="register">
									<h3 class="card-header blue white-text text-center py-auto z-depth-1">
										<strong>Sign up</strong>
									</h3>

									<div class="md-form md-outline" style="display: none;">
										<input type="text" id="user_id" name="user_id" class="form-control"
											required>
										<label for="user_id">Enter Full Name</label>
									</div>

									<div class="md-form md-outline">
										<input type="text" id="user_name" name="user_name" class="form-control"
											required>
										<label for="user_name">Enter Full Name</label>
									</div>

									<div class="md-form md-outline">
										<input type="email" id="user_email" name="user_email" class="form-control" required>
										<label for="user_email" data-error="wrong" data-success="right">Enter Email
											Address</label>
									</div>

									<div class="md-form md-outline">
										<input type="password" id="user_password" name="user_password" class="form-control" placeholder=""
											required>
										<label for="user_password">Enter Password</label>
									</div>

									<div class="md-form md-outline">
										<input type="password" id="passwordSubmit" class="form-control" placeholder=""
											required>
										<label for="passwordSubmit">Confirm password</label>
									</div>

									<div class="md-form md-outline">
										<textarea type="text" id="user_address" name="user_address" rows="2"
											class="form-control md-textarea" required></textarea>
										<label for="user_address">Enter Address</label>
									</div>

									<div class="text-center container">
										<button
											class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-1 col-6"
											type="submit">Sign up</button>

										<p>Already have an account ?
											<a href="<?=site_url('pages/view');?>">Sign in</a>
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
