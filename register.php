<html>
<head>
	<title>Messaging</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script>
		function check()
		{
			var p1 = document.getElementById['p1'].value;
			var p2 = document.getElementById['p2'].value;

			if(p1 <> p2)
			{
				alert("Password not match.");
			}

		}
	</script>
</head>


<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">Messenger</font>
		</h1>
		<h4>REGISTER</h4>

		<?php
		Session_start();

		$_SESSION["login-success"] = 0;
		
		if($_SESSION["reg-failed"] == 1)
			{
				print("registration failed");
			}

		if($_SESSION["fname"] == "")
		{
			//header("Location: login.php");
		}
		else
		{
			header("Location: home.php");
		}
		?>

		<form action="confirm-reg.php" method="POST">
			<table>
			<tr>
				<td class="align-right">Username</td><td>:</td><td><input class="txt" type="text" placeholder="Enter Username" required name="username" /></td>
			</tr>
			<tr>
				<td class="align-right">Password</td><td>:</td><td><input  id="p1" class="txt" type="password" placeholder="Enter Password" required name="password" /></td>
			</tr>
			<tr>
				<td class="align-right">Confirm Password</td><td>:</td><td><input  id="p2" class="txt" type="password" placeholder="Confirm Password" required name="cpassword" /></td>
			</tr>
			<tr>
				<td class="align-right">First Name</td><td>:</td><td><input class="txt" type="text" placeholder="Enter First Name" required name="fname" /></td>
			</tr>
			<tr>
				<td class="align-right">Last Name</td><td>:</td><td><input class="txt" type="text" placeholder="Enter Last Name" required name="lname" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="index.php"><input id="login" type="button" value="log-in"/></a>
					<input id="reg" type="submit" value="register" onclick="return check()" />
				</td>
			</tr>
			</table>
		</form>
	</div>
</center>
</body>

</html>

<style>
.txt
{
	border-radius:4px;
	border:10px;
	height:30px;
	border:1px black solid;
}

.align-right
{
	text-align:right;
}
#a
{
	text-decoration:none;
}

#reg,#login
{
	width:110px;
	height:30px;
	border-radius:5px;
	border:10px;
	color:black;
}

#reg
{
	background:orange;
}

#login
{
	background:skyblue;
}


#main
{
	height:auto;
	width:400px;
	border:2px black solid;
	float:center;
	margin-top:120px;
}
body
{
	background:55a5ea94;
	color:block;
}
</style>