<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_page_styles.css">
</head>
<body>
<div class="container space col-md-6" style="margin-top: 60px">
	<div class="card" style="width:550px">
		<div class="card-header" style="background-color:#CE007C; color:#fff; font-weight:bold;">LOG IN</div>
		<div class="card-body">
			<form method="POST" action="login.php">
				<div class="form-group">
					<label class="label-control">EMAIL</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label class="label-control">PASSWORD</label>
					<input type="password" name="password" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="submit_button" style="color:#fff; font-weight:bold;">LOGIN</button>
				</div>
				<div  style="color:#CE007C;font-size:20px">
					<a href="sign_up_page.php">don't have account? Sign up</a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>