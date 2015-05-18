<html>
<head>
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
	<script src="../script/xmlDecoder.js"></script>
	<script type="text/javascript">
$(document).ready( xmltest );
		var style = ["hallo","wie","gehts"];
	function xmltest(){
		var test = "<Watch name=\"Braun Clock\" description=\"hallo\" author=\"\" web_link=\"\" bg_color=\"000000\" ind_loc=\"tc\" ind_bg=\"Y\" hotword_loc=\"tc\" hotword_bg=\"Y\">"+
    					"<Layer type=\"shape\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drm}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"bc\" shape=\"Square\" width=\"10\" height=\"235\" color=\"e1e1e1\" display=\"bd\" protected=\"y\"/>"+
    					"<Layer type=\"shape\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drh}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"bc\" shape=\"Square\" width=\"15\" height=\"196\" color=\"e1e1e1\" display=\"bd\" protected=\"y\"/>"+
    					"<Layer type=\"image\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drs}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"cc\" path=\".img6.png\" width=\"40\" height=\"503\" color=\"ffffff\" display=\"bd\" protected=\"y\"/>"+
						"</Watch>";
		var temp = loadXMLString(test);
		var temparray = getElements('Layer', temp);
		var bodybg = getValueOf('Watch', 'bg_color', temp);
		
		
		var tempi = 0;	
		
		document.write("</head>");
		document.write("<body style=\"background-color: #" + bodybg + "; margin: 0px;\">");
		
		for (i=0;i<temparray.length;i++)
  		{
		  	tempi = i;
			
			document.write("<div id=\"Layer" + tempi + "\" style=\"\"></div>");
			
			i = tempi;
			
			var color = "#" + getValueOf('Layer', 'color', loadXMLString(temparray[tempi].outerHTML));
			var x = 500; //getValueOf('Layer', 'x', loadXMLString(temparray[tempi].outerHTML));
			var y = 0; //getValueOf('Layer', 'y', loadXMLString(temparray[tempi].outerHTML));
			var width = getValueOf('Layer', 'width', loadXMLString(temparray[tempi].outerHTML));
			var height = getValueOf('Layer', 'height', loadXMLString(temparray[tempi].outerHTML));
			var rotation = getValueOf('Layer', 'rotation', loadXMLString(temparray[tempi].outerHTML));
			var align = getValueOf('Layer', 'alignment', loadXMLString(temparray[tempi].outerHTML));
			var path = getValueOf('Layer', 'path', loadXMLString(temparray[tempi].outerHTML));
			
			if (path != null){
				color = "transparent";
				path = "background-size: " + width + "px " + height + "px; background-image: url(../test-images/" + path + ");";
			}else{
				path = "";
			}
			
				align = (solveAlignment(align));
				
				i = tempi;
	
				style[tempi] = "position: absolute; top: " + y + "px; left: " + x + "px; width: " +
								width + "px; height: " + height + "px; background-color: " + color + "; transform: rotate(" +
								rotation + "); transform-origin: " + align + "; " + path;
								
			i = tempi;
			tempi = tempi+1;  
		}
	}
	
	function solveAlignment(align){
		var txt = "";
		switch (align){
			case "bc":
				txt = "bottom center";
			break;
			case "cc":
				txt = "center center";
			break;
			default:
			break;
		}
		return txt;
	}
	
	$(document).ready(function () {
	setInterval(function () {
		//var dt = new Date();
		var dt = new Date("October 13, 2014 12:00:00");
		for (i = 0; i < style.length; i++){
			$("#" + 'Layer' + i).attr('style', style[i].replace('{drm}', (dt.getMinutes() * 6) - 0 + "deg").replace('{drs}', (dt.getSeconds() * 6) - 180 + "deg").replace('{drh}', (dt.getHours() * 30) - 0 + "deg"));
		}
	}, 1000);
});
	</script>
		hello!
		</body>
</htmml>