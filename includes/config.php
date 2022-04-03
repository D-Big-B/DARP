<?php 
ob_start(); //Turns on output buffering
session_start();
 
date_default_timezone_set("Asia/Kolkata");

try {
		$con = new PDO("mysql:dbname=darp;host=localhost;charset=utf8mb4;","bigb","root");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$ipfsNodeArray = array(
			"1" => "http://localhost/darp/uploads/videos/",
			"2" => "http://localhost/darp/uploads/videos/",
			"3" => "http://localhost/darp/uploads/videos/"
			// "4" => "https://43016f9a4524.ngrok.io/ipfs/"
			
			// "2" => "https://gateway.temporal.cloud/ipfs/"
			//https://gateway.pinata.cloud/ipfs/
			);
}
catch (PDOException $e) {
		echo "Connection Failed: ".$e->getMessage();
}
?>