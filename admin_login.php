<!DOCTYPE html>
<html>
	<head>
		<title>E-Shopping Admin</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<link rel="stylesheet" type="text/css" href="structure/admin.css"/>
		<script type="text/javascript">
		foc();
		function foc(){
			document.getElementById('user').focus();
		}

		</script>
	</head>
	<body onload="foc()">
		<div id="holder">
			<div class="lookup">
					<div class="posthere">
						<p><img src="resimage/shopping.png" alt="shop" height="20" width="20"/><strong> Welcome dear Admin. Please login...</strong></p>
						<form action="checkadmin.php" method="post">
						<table>
					
							<tr>
								<td>
								<strong>Username: </strong></td><td> <input type="text" size="51" id="user" name="user"/><br>
								</td>
							</tr>
							<tr>
								<td>
								<strong>Password: </strong> </td><td><input type="password" size="51" name="pass" />
								</td>
							</tr>
							<tr>
								<td></td><td>
								<input type="submit" value="Login" name="log"/>
								</td></tr>
						</table>
					</form>

					</div>
					</div>


			</div>
	</body>
</html>
