<?php	
	function load(){
		$array = [
    		"foo" => "bar",
    		"bar" => "foo",
		];
		include '../../WatchMaker/components/watch-card/watch-card.php';
		include '../../WatchMaker/classes/database.php';
		
		echo "<div style=\"display: block;\">";
		$data = new clsDBAccess('root', '', 'localhost');
		$test = $data->GetData("watchmaker", "Select * From watchmaker.watch Inner Join watchmaker.user on watch.user_ID = user.user_ID inner join watchmaker.smart on watch.smart_ID = smart.smart_ID");
		
		while($row = mysqli_fetch_array($test)){
			loadCard($row['watch_name'],"",$row['watch_description'], $row['watch_public'], $row['smart_name']);
		}	
		echo "</div>";
	}
?>