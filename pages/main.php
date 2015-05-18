<?php
	include 'masterpage.php';
?>
<html>
	<head>
		<title>
			My WatchFaces
		</title>
		<link rel="stylesheet" href="../style/style.css">
		<link rel="stylesheet" href="../style/main.css">
		<link rel="import" href="../components/test/test.html">
		<?php
			$offline = false;
			//author 	Pierre-Henry Soria <ph7software@gmail.com>
			//copyright (c) 2012-2013, Pierre-Henry Soria.
			if ($offline and (bool)@fsockopen('www.google.com', 80, $iErrno, $sErrStr, 5)){
				echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>";
			} else {
				echo "<script src=\"../script/jquery1_9.js\"></script>";
			}
		?>
		<script>
			function myFunction(elmnt) {
				if(elmnt != null) {
					window.location= "../pages/main.php?selected=" + elmnt.id + "";
 					end();
				}
			}					
		</script>
	</head>
	<body>
	<div id="workspace">
		<?php
			echo "<br>";
			if(isset($_GET['selected'])){
				if($_GET['selected'] != ''){
					include "workspace/" . $_GET['selected'] . "/" . $_GET['selected'] . "-workspace.php";
					load();
				}
			}else{
				echo "";
			}
		?>
	</div>
		
  	<nav id="container" onselect="<?php if(isset($_GET['selected'])){ if($_GET['selected'] == ''){ echo "myFaces"; }else{ echo $_GET['selected']; } }else{ echo ""; } ?>">
		<div id="myfaces" class="nav-item" onclick="myFunction(this)" <?php if(isset($_GET['selected'])){ if($_GET['selected'] == "myfaces"){ echo "style=\"font-weight: bold;font-size: 20px;\""; } } ?>>
			My Faces
		</div>
		<div id="newface" class="nav-item" onclick="myFunction(this)" <?php if(isset($_GET['selected'])){ if($_GET['selected'] == "newface"){ echo "style=\"font-weight: bold;font-size: 20px;\""; } } ?>>
			Create new Face
		</div>
		<div id="settings" class="nav-item" onclick="myFunction(this)" <?php if(isset($_GET['selected'])){ if($_GET['selected'] == "settings"){ echo "style=\"font-weight: bold;font-size: 20px;\""; } } ?>>
			Setting
		</div>
  	</nav>
	</body>
</html>