<?php
	session_start();
	if($_SESSION['fname'] == "")
	{
		header("Location: index.php");
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

<?php
	$_SESSION["login-failed"] = 0;
?>

<body>
<center>
	<div id="main">
		<h1>
			<font style="color:black; font-family:Calibri;">Messenger<hr>
		</h1>
		<table width="100%" style="background:">
			<tr>
				<td >
					<h3 style="color:red; margin-left:76%; align:center; font-family:Comic Sans Ms">Welcome <?php echo $_SESSION["fname"]; ?> </h3>
					<!--<p><a href="choose-color.php" style="text-decoration:none; color:skyblue; margin-left:10px; padding-top:-40px; font-family:tahoma;">(Customize)</a></p>-->
				</td>
				<td align="right">
					<a href="logout.php"><div id="lo-but"><p style="font-family:Comic Sans Ms; font-size:18px;"><button style="background-color:#55e2c8; border: 1px green groove;">logout</button></p></div></a>
				</td>
			</tr>
		</table>

		<iframe id="chatbox" src="home-auto.php"></iframe>
		
		<br/>
		<form action="send.php" method="POST">
		<table width="80%" align="center">
			<tr>
				<td align="right"><textarea id="txtarea" name="txtarea" required></textarea></td><td width="auto"><input type="submit" value="send" id="send"></div></td>
			</tr>
		</table>
		</form>
	</div>
</center>
</body>

</html>

<style>
.names
{
	padding-top:5px;
}
a
{
	text-decoration:none;
}
#lo-but
{
	color:red;
	height:auto;
	width:80px;
	background:none;
	
	border-radius:2px;
	text-align:center;
	display:block;

}

#send
{
	width:50px;
	height:50px;
	border-radius:5px;
	border:0px;
	color:white;
	background:skyblue;
	font-size:18px;
}

#txtarea
{
	height:50px;
	width:85%;
	border-radius:5px;
	border:2px black solid;
}

.item
{
	color:white;
	text-align:left;
	background:gray;
	width:95%;
	min-height:25px;
	margin-top:17px;
	padding:5px;
	padding-top:-10px;
	border-radius:5px;
}

.item2
{
	color:white;
	text-align:left;
	background:purple;
	width:95%;
	min-height:25px;
	margin-top:17px;
	padding:5px;
	border-radius:5px;
}

#chatbox
{
	max-width:80%;
	min-width:80%;
	height:400px;
	border-radius:5px;
	background-color: black;
	overflow:scroll;

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
}

#reg
{
	background:lightgreen;
}

#login
{
	background:skyblue;
}


#main
{
	height:auto;
	max-width:800px;
	border:2px black solid;
	float:center;
	margin-top:40px;
	border-radius:10px;
}
body
{
	background:white;
	background-repeat:none;
	color:black;
}

</style>