function watchcardclick(){
	alert("hey");
	var test = "<Watch name=\"Braun Clock\" description=\"hallo\" author=\"\" web_link=\"\" bg_color=\"000000\" ind_loc=\"tc\" ind_bg=\"Y\" hotword_loc=\"tc\" hotword_bg=\"Y\">"+
				    	"<Layer type=\"image\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"0\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"cc\" path=\".img4.png\" width=\"520\" height=\"520\" color=\"ffffff\" display=\"bd\" protected=\"y\"/>"+
    					"<Layer type=\"shape\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drm}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"bc\" shape=\"Square\" width=\"10\" height=\"235\" color=\"e1e1e1\" display=\"bd\" protected=\"y\"/>"+
    					"<Layer type=\"shape\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drh}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"bc\" shape=\"Square\" width=\"15\" height=\"196\" color=\"e1e1e1\" display=\"bd\" protected=\"y\"/>"+
    					"<Layer type=\"image\" x=\"0\" y=\"0\" gyro=\"0\" rotation=\"{drs}\" skew_x=\"0\" skew_y=\"0\" opacity=\"100\" alignment=\"cc\" path=\".img6.png\" width=\"40\" height=\"503\" color=\"ffffff\" display=\"bd\" protected=\"y\"/>"+
						"</Watch>";
	window.location= "../pages/watchinedit.php?test=" + test;
}