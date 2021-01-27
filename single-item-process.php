<?php

include "databaseconnect.php";

$ItemName = $_POST["ItemName"];
$Price = $_POST["Price"];
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$Quantity = $_POST["Quantity"];
$address = $_POST["address"];
$ItemId = $_POST["ItemId"];
$value = $_POST["value"];
$ItemImage=$_POST["ItemImage"]; 
$Notification=$_POST["Notification"]; 
$IpAddress = $_SERVER['REMOTE_ADDR'];

$addedDateTime		=	date("F j, Y, g:i a"); 



$stmt=$conn->prepare("insert into tblorders (ItemName,Price,name,email,mobile,Quantity,address,ItemId,value,IpAddress,addedDateTime,image,Notification)
values(:ItemName,:Price,:name,:email,:mobile,:Quantity,:address,:ItemId,:value,:IpAddress,:addedDateTime,:ItemImage,:Notification)");
$stmt->bindparam(":ItemName",$ItemName);
$stmt->bindparam(":Price",$Price);
$stmt->bindparam(":name",$name);
$stmt->bindparam(":email",$email);
$stmt->bindparam(":mobile",$mobile);
$stmt->bindparam(":Quantity",$Quantity);
$stmt->bindparam(":address",$address);
$stmt->bindparam(":ItemId",$ItemId);
$stmt->bindparam(":value",$value);
$stmt->bindparam(":IpAddress",$IpAddress);
$stmt->bindparam(":addedDateTime",$addedDateTime);
$stmt->bindparam(":ItemImage",$ItemImage);
$stmt->bindparam(":Notification",$Notification);
$stmt->execute();


		session_start();
		echo $_SESSION["mobile"] 	= $_POST["mobile"];
		header("location:my-order.php?msg=1");

		exit;

?>
