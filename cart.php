<?php
//	$spimg=$_GET['spimg'];
//	$spname=$_GET['spname'];
//	$spprice=$_GET['spprice'];
	
	mysql_connect("localhost","root","root");
	mysql_select_db("jiae");
	$sql="select * from sp";
	$result=mysql_query($sql);
	
	$arr = array();
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$arr[] = $row;
	}
	echo json_encode($arr);
	
	mysql_close();
?>