<?php
include "../includes/dhims2.php";
$return=DHIMS2API::getDataSets($_REQUEST['orgunitid'],$_REQUEST['dhims2username'],$_REQUEST['dhims2password']);
//file_put_contents("dhims2.txt", $_REQUEST['orgunitid']);
if($return === 404 || empty($return))
{
	echo "404";
}
else if($return === 401)
{	
	echo "false";
}
else
{
	echo $return;	
}
?>