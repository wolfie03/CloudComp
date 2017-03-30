
<html>
<style>
body{
background-color: lightgrey;
}
</style>
<h1> Result Page </h1>
</html>
<?php

$search = $_GET['query'];

$hostname ='130.211.84.105';
$db_user='jamal';
$db_pw='cloud123';
$db='moviedb';


$conn = new mysqli($hostname, $db_user, $db_pw, $db) or die("could not connect");
$sql = "SELECT * FROM Films WHERE category ='$search'";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<a href='" .$row['url']."'>".$row['title']."</a><p>".$row['description']."</p><hr/>";
		}
	}else{
		echo "No results found. Try again";
	}


?>﻿
 

