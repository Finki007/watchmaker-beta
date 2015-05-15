<?php	
	function load(){
		include '../components/watch-panel/watch-panel.php';
		echo "<div id=\"clock\" style=\"height: 200px; width: 200px;\">";
		loadWatchPanel();
		echo "</div>";
	}
?>