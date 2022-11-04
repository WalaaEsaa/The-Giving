<?php
	
	
	$con = mysql_connect("localhost", "root","");
	if(!$con) {
		die('Failed to connect to the server: ' . mysql_error());
	}
	$db = mysql_select_db('giving');
	if(!$db) {
		die("Unable to find database");
	}
	

	$uid = $_POST['username'];
	$p = $_POST['password'];
	$qry="SELECT * FROM admin WHERE A_ID='$uid' AND A_Password='$p'";
	$result=mysql_query($qry,$con);
	

	if($result) {
		if(mysql_num_rows($result) == 1) {
				echo "<h1>hi ".$uid."</h1>";
				if($uid=='admin'){
				header("location:controla.html");}
				else{
				header("location:index.html");}
		}else {
			die("error".mysql_error());
		}
	}else {
		die("Query failed");
	}
?>