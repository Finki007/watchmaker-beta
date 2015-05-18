<?php
	session_start();
?>
<html>
	<head>
		<title>
			Watchmaker Version 1.0 Beta
		</title>
		
		<link rel="import" href="components/test/test.html">
		<link rel="stylesheet" href="style/style.css">
		<?php
			$offline = false;
			//author 	Pierre-Henry Soria <ph7software@gmail.com>
			//copyright (c) 2012-2013, Pierre-Henry Soria.
			if ($offline and (bool)@fsockopen('www.google.com', 80, $iErrno, $sErrStr, 5)){
				echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>";
			} else {
				echo "<script src=\"script/jquery1_9.js\"></script>";
			}
		?>
		
	</head>
	<body style="text-align: center; background-color: lightsteelblue;">
		<div class="wrapper">
		<form id="main-form" action="script/login.php" method="post">
			<h1>Web Watchmaker (Version 1)</h1>
			<h2>Login</h2>
			<p class="label">Username:</p>
			<input type="text" name="wmUserName" value="<?php if(isset($_GET['username'])){ echo $_GET['username']; } ?>" size= 30>
			<p class="label">Password:</p>
			<input type="password" name="wmPassword" size= 30>
			<?php
				if(isset($_GET['login'])){
					if($_GET['login'] == 'false'){
						echo "<p style=\"color: red; font-size: 12px;\">
								Benutzername oer Kennwort ist falsch!<br>
							  	<a href=\"url('.....')\">
							  		Passwort vergessen?
							  	</a>
							  </p>";
					}else{
						$_SESSION["id"] = "hallo";
						header("Location: pages/main.php?username=" . $_GET['username'] . "&selected=myFaces");
					}
				}
			?>
			<br>
			<input type="submit" name="send" value="Login">
		</form>
		</div>
	</body>
</html>