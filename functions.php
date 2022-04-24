<?php
	//$mysqli = new mysqli('localhost','root','','kinomonster');
	/*$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","mediaplatformkm");
		$mysqli->query("SET NAMES 'utf-8");
	}

	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	function getNews(){
		global $mysqli;
		connectDB();
		$result=$mysqli->query("SELECT * FROM 'movie_info' ORDER BY 'id'DESC LIMIT $limit");
		closeDB();
		return resultToArray($result);
	}

	function resultToArray($result){
		$array = array();
		while (($row=$result->fetch_assoc()))!=false) {
			$array[]=$row;
		return $array;
			// code...
		}
	}*/
?>