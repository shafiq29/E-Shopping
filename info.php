<!DOCTYPE html>
<html>
	<head>
		<title>Interface</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="structure/design.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="resimage/shopping.png" />
		<script type="text/javascript">
			function modified() { 
				var d = new Date(); 
				if (d.toLocalDateString) { 
					document.getElementById('boldStuff').innerHTML = d.toLocaleDateString(document.lastModified); 
				} 
				else { 
					document.getElementById('boldStuff').innerHTML = document.lastModified; 
				} 
			}
		</script>
		<script type="text/javascript" src="jsfile/cn.js"></script>
		<script type="text/javascript" src="jsfile/cont.js"></script>
		<script type="text/javascript" src="jsfile/update.js"></script>
		<script type="text/javascript" src="jsfile/ajaxhandle.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$(".not_reg").click(function (e) {
					//alert('kaka');
					$(".rgtab #un").focus();
				});
			});
		</script>
	</head>
	<body onload="slideIt()">
		<div id="headerme"><br>
			<p>Interface</p>
		</div>
		<div id="back"><br>
			<div id="goto">
				<p><b><i>The earth is huge and there is no end to the sky...</i></b></p>
				<p><b>Visit, Like & Buy Products</b></p>
				<a href="index.php"><b> Home |</b></a>
				<a href="#info" onclick="moveit('#info')"><b>Products Information |</b></a>
				<a href="#hob" onclick="moveit('#hob')"><b>Order |</b></a>
				
				<a href="#artit" onclick="moveit('#artit')"><b>Product Gallery |</b></a>
				<a href="#cont" onclick="moveit('#cont')"><b>Contact |</b></a>
				<a href="#fav" onclick="moveit('#fav')"><b>Register |</b></a>
				<a href="#pp" onclick="moveit('#pp')"><b>Login </b></a>				
			</div>
			<br>
			<div id="info"><br>
				<h3><u>Products Info:</u></h3>
				<img title="Shafiq" src="pic/pro.jpg" alt="Loading Image..." height="200" width ="200" />
				<p >Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...Description about quallity products will be here...
				</p>
				<p class="backtop"><a href="#" onclick="backing()"><i><b>Back to top...</b></i></a></p>
			</div>
			<br>
			<div id="hob"><br>
				<h3><u>Order: </u></h3>
				<p >This area will contain a search box which will enable searching and ordering products online.
					Seach will filter database and give desired products with ratings....
				</p>
				<p class="backtop"><a href="#" onclick="backing()"><i><b>Back to top...</b></i></a></p>
			</div>
			<br>
			<div id="fav"><br>
				<h3><u>Sign up please: </u></h3>
				<form action="register_user.php" method="post">
	<table class="rgtab">
		<tr>
			<td>
				Username:</td><td> <input type="text" size="51"  name="un" id="un"/><br>
			</td>
		</tr>
		<tr>
			<td>
				Password:</td><td> <input type="password" size="51" name="pa"/><br>
			</td>
		</tr>
		<tr>
			<td>
				E-mail:</td><td> <input type="text" size="51" name="em"/><br>
			</td>
		</tr>
		<tr>
			<td>
				Address:</td><td> <input type="text" size="51" name="ad"/><br>
			</td>
		</tr>
		<tr>
			<td>
				Mobile:</td><td> <input type="text" size="51" name="po"/><br>
			</td>
		</tr>
		<tr>
			<td></td><td>
				<input type="submit" value="Register" name="reg"/>
			</td></tr>
	</table>
	</form>
	<p class="backtop"><a href="#" onclick="backing()"><i><b>Back to top...</b></i></a></p>
			</div>
			<br>
			
			<div id="pp"><br>
				<h3><u>Log in here:</u></h3>
				<form action="user_login.php" method="post">
	<table>
		<tr>
			<td>
				Username:</td><td> <input type="text" size="51"  name="un"/><br>
			</td>
		</tr>
		<tr>
			<td>
				Password:</td><td> <input type="password" size="51" name="pa"/><br>
			</td>
		</tr>
		<tr>
			<td></td><td>
				<input type="submit" value="Login"/>
			</td></tr>
	</table>
	</form>
	<a href="info.php#fav" class="not_reg">Not registered yet? Please click here...</a><br>
	<a href="#" class="">Forgot password? </a>
	


				<p class="backtop"><a href="#" onclick="backing()"><i><b>Back to top...</b></i></a></p>
			</div>
			
			<br>
			<div id="artit"><br>
				<h3><u>Gallery: </u></h3>
				<img title="Art Work" src="art/img1.jpg" alt ="Loading arts..." id="swap"  width="500" height="300"/>
				<p class="backtop"><a href="#" onclick="backing()"><i><b>Back to top...</b></i></a></p>
				
			</div>
			
			<br>
			<div id="cont"><br>
				<h3><u>Contact Details: </u></h3>
				<p><b>Gmail: shafiqrobin9@gmail.com</b></p>
				<p><b>Phone: 01737534236</b></p>
				
				
			</div>
			<div class="modifyinfo">
 <span><a href="#" onclick="backing()"><img src="resimage/up.png" alt="up" height="20" width="20"/></a></span>Back to top

		</div>

		</div>
		<div class="footer">
	<p>This site is protected by copyright law. Copyright &copy; Shafiqul Islam 2014</p>
</div>
	</body>
</html>
