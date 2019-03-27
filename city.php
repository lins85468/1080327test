<?php
	//取得網址列的參數
	$name=$_REQUEST["name"];
	if($name=="taipei"){
		echo "3000000";
	}else if($name=="hsinchu"){
		echo "500000";
	}else{
		echo "No Data";
	}
	echo $name;
	
	/*
提供的服務
http://localhost:8080/city.php?name=城市名稱
例如
http://localhost:8080/city.php?name=taipei
http://localhost:8080/city.php?name=hsinchu
http://localhost:8080/city.php?name=tainan

	
	*/
?>