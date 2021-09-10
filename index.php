<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
		#form{
			margin-top: 50px;
		}
		.error{
			color: red;
		}
		.error:focus{
			border-bottom-color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				<form id="form">
					<div class="form-group">
				    	<label for="name">Name:</label>
				    	<input type="text" name="name" class="form-control" id="name">
				  	</div>
				  	<div class="form-group">
				    	<label for="email">Email address:</label>
				    	<input type="email" name="email" class="form-control" id="email">
				  	</div>
				  	<div class="form-group">
				    	<label for="password">Password:</label>
				    	<input type="password" name="password" class="form-control" id="password">
				  	</div>
				  	<div class="form-group">
				    	<label for="cpassword">Confirm Password:</label>
				    	<input type="password" name="cpassword" class="form-control" id="cpassword">
				  	</div>
				  	<fieldset>
				  		<legend>Gender</legend>
				  		<input type="radio" name="gender[]" value="Male"> Male
				  		<input type="radio" name="gender[]" value="Female"> Female
				  		<label for="gender[]" class="error" style="display: none;"></label>
				  	</fieldset>
				  	<div class="checkbox">
				    	<label><input type="checkbox" name="remember"> Remember me</label>
				    	<label for="remember" class="error" style="display: none;"></label>
				  	</div>
				  	<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/additional-methods.min.js"></script>
	<script src="assets/js/validation.js"></script>
</body>
</html>