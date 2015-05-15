<?php
	echo "<html>";
	if (isset($_POST['send']) and strlen($_POST['send']) >= 5){
		$name = $_POST['wmName'];
		$desc = $_POST['wmDesc'];
		
		include '../classes/classWatch.php';
		$watch = new WatchFace($name, $desc);
		echo "<title>Gesendet</title><body><p>" . $watch->faceName . "</p></body>";
	}else{
		echo "<title>Fehler</title><body><p> Fehler beim erstellen der Watch </p></body>";
	}
	echo "</html>";
?>