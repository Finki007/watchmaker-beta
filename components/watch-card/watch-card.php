<?php	
	function loadCard($text, $image, $description, $access, $smarttype){
		echo "<link rel=\"stylesheet\" href=\"../components/watch-card/watch-card-style.css\">";
		echo "<script src=\"../components/watch-card/watch-card-script.js\"></script>";
		echo "<abbr title=\"" . $description . " " . $smarttype . "\">";
		echo "<div class=\"watch-card\" onclick=\"watchcardclick()\">";
		if($access == '0'){
			echo "<abbr title=\"private\"><img id=\"public\" src=\"http://icons.iconarchive.com/icons/hopstarter/soft-scraps/128/Lock-Lock-icon.png\"></img></abbr>";
		}else{
			echo "<abbr title=\"public\"><img id=\"public\" src=\"http://icons.iconarchive.com/icons/hopstarter/soft-scraps/128/Lock-Unlock-icon.png\"></img></abbr>";
		}
		echo "<div id=\"watch-name\">";
		echo $text;
		echo "</div>";
		echo "</div>";
		echo "</abbr>";
	}
?>