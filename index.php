<?php

$mes="";
$nam="";
$mai="";
if(isset($_POST['send'])){
		if(!empty($_POST['message']) && !empty($_POST['name']) && !empty($_POST['mail']) ){
			$mes=$_POST['message'];
			$nam=$_POST['name'];
			$mai=$_POST['mail'];
			include("connection.php");
			$ins=mysql_query("INSERT INTO feedback(nam,mail,com) values('$nam','$mai','$mes')");
			mysql_close();
		}
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>E-Shopping</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="structure/design.css">
		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<script type="text/javascript" src="jsfile/album.js"></script>
		<script type="text/javascript" src="jsfile/slide.js"></script>

	</head>
	<body onload="slideIt(),slideIt2()">

		<div id="headerme">

			<p > E-SHOPPING</p>

		</div>

		<div id="holder">
			<div id="left">
						<a href="products.php" ><img src="resimage/shopping.png" alt="shop" height="20" width="20"/>Products</a>
						<a href="info.php#fav" title="Signup if new user" ><img src="resimage/bullet_key.png" alt="sign" height="25" width="25"/>  Sign Up</a>
						<a href="info.php#pp" ><img src="resimage/log.png" alt="log" height="25" width="25"/>  Log In</a>
						<a href="info.php" ><img src="resimage/information.png" alt="info" height="20" width="20"/> Interface</a>
						<a href="links.php" > About E-Shopping</a>
						<a href="support.php" >Customer Support</a>
						
						
						
			</div>
			<div class="showup">
				<img src="profile/me1.jpg" alt="loading..." height="200" width="200" id="swap"/>
				<img src="profile/me2.jpg" alt="loading..." height="200" width="200" id="gap"/>
				<img src="profile/me3.jpg" alt="loading..." height="200" width="200" id="tap"/>
				<img src="profile/me4.jpg" alt="loading..." height="200" width="200" id="lap"/>
			</div>
			<br>

			<div class="lookup">
					<div class="posthere">
						<p>Any feedback? Feel free to inform us...</p>
						<form action="index.php" method="post">
						<table>
							<tr>
								<td>
									Comment:</td><td> <textarea placeholder="Type your feedback here..." rows="10" cols="40" name="message"></textarea><br>
								</td>
							</tr>
							<tr>
								<td>
								Subject:</td><td> <input type="text" size="51" name="name" /><br>
								</td>
							</tr>
							<tr>
								<td>
								Email: </td><td><input type="text" size="51" name="mail" />
								</td>
							</tr>
							<tr>
								<td></td><td>
								<input type="submit" value="POST" name="send"/>
								</td></tr>
						</table>
						</form>
					</div>
					</div>


			</div>
			
		<div class="footer">
	<p>This site is protected by copyright law. Copyright &copy; Shafiqul Islam 2014</p>
</div>
	</body>
</html>
