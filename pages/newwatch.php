<?php
	include 'masterpage.php';
?>
<html>
	<head>
		<title>
			Watchmaker Version 1.0 Beta
		</title>
		
		<link rel="import" href="../components/test/test.html">
		<link rel="stylesheet" href="style/style.css">
		
	</head>
	<body style="text-align: center;">
		<div class="wrapper">
		<form id="main-form" action="script/create.php" method="post">
			<p class="label">Name:</p>
			<p style="font-size: 12px;color: gray;"> (muss mindestens 5 Zeichen lang sein!)</p>
			<input type="text" name="wmName" size= 30>
			<br>
			<p class="label">Description:</p>
			<input type="text" name="wmDesc" size= 30>
			<br>
			<br>
			<br>
			<input type="submit" name="send">
		</form>
		</div>
	</body>
</html>