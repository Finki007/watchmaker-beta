<?php
	function createDOM(){
		echo "<element name=\"x-test\">";
  		echo "<style>";
	  	echo ".container{";
		echo "width: 50px;";
		echo "height: 50px;";
		echo "background-color: #ffcc55;";
	  	echo "}</style><div id=\"container\" style=\"background-color: red; width: 50px; height: 50px;\">hallo<!--<content select=\"h1\"></content>--></div></element>";
	}	
?>