<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>ERP-Login</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!--Jquery Plugin-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!--Custom Css-->
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div >
				<h1 class="text-center main-heading">Company Name</h1>
			</div>
			<div class="jumbotron jumbotron-custom">	
				
				<div class="row center-block">
					<form name="loginform" action="login_handle.php"class="form-horizontal" role="form" method="post">
						<div class="form-group ">
							<label class="control-label col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2 col-lg-2 col-lg-offset-2" for="username">Username</label>
								<div class="col-sm-6 col-xs-6 col-lg-6">
									<input type="text" class="form-control" placeholder="Enter Username" name="username" id="username">
								</div>
						</div>
						<div class="form-group ">
							<label class="control-label col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2 col-lg-2 col-lg-offset-2" for="password">Password</label>
								<div class="col-sm-6 col-xs-6 col-lg-6">
									<input type ="password" name="password" id="password"  class="form-control" placeholder="Enter Password"></input>
								</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-1 col-md-1 col-xs-1 col-lg-1 col-xs-offset-4 col-md-offset-4 col-lg-offset-4">
								<button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
							</div>
						</div>
						<div >
								<a href="register.php"><h3 class="text-right register-link">Register</h3></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
