<?php
	session_start();
	if($_SESSION["fname"] == "")
	{
		//header("Location: index.php");
	}
	else
	{
		header("Location: home.php");
	}
?>

<html>
<head>
	<title>Messaging</title>
	<script type="text/javascript">
		function redirr()
		{
			location.href = "index.php";
		}
	</script>
</head>

<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">Messenger</font>
		</h1>
		<h4>
			<?php
				if($_SESSION['reg-success'] == "yes" && $_SESSION['login-failed'] == "clear" )
				{
					echo("registration successful");
				}
				if($_SESSION['login-failed'] == "yes" && $_SESSION['reg-success'] = "clear")
				{
					echo("login failed. Username and password not found");
				}
			?>
		</h4>
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>Username</td><td>:</td><td><input type="text" placeholder="Enter Username" name="username" required name="username" /></td>
			</tr>
			<tr>
				<td>Password</td><td>:</td><td><input type="password" placeholder="Enter Password" name="password" required name="password" /></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="register.php"><input id="reg" type="button" value="register" /></a>
					<input id="login" type="submit" value="log-in" />
				</td> 
			</tr>
		</form>
	</div>
</center>
</body>

</html>

<style>

h2
{
	color:green;
}
.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
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
	background:powderblue;

}

#login
{
	background:lightgreen;
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
	background:ghostwhite;
	color:black;
}
</style>