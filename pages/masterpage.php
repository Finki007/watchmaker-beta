<?php
	session_start();	
?>
<html>
	<head>
	</head>
	<body>
		<?php
			$session_id = $_SESSION["id"];
			if ($session_id != "hallo")
			{
				header("Location: ../indexindex.php");
			}
		?>
	</body>
</html>