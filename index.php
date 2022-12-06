<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sistem Informasi Pendataan Buku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="style.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<center>
			<form action="ceklogin_user.php" method="POST" class="form-horizontal" role="form">

				<div class="wrap-login100">
					<form class="login100-form validate-form">


						<span class="login100-form-title p-b-34 p-t-27">
							Login
						</span>

						<br>
						<div class="container-login100-form-btn"></div>
						<td> <a href="buku.php" class="login100-form-btn">Masuk Sebagai Guest</a> <br></td>
						<td> <a href="login_admin.php" class="login100-form-btn">Login Admin</a> <br> </td>
						<div class="container-login100-form-btn"></div>
				</div>
		</center>
	</div>

	</form>
	</div>
	</div>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main3.js"></script>

</body>

</html>