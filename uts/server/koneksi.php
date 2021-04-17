<?php
$dh = 'mysql:dbname=dbpegawai;host=localhost';
$user = 'root';
$password = '';


try{
	$db = new PDO($dh,$user,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE,
	                    PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,
		TRUE);
	echo "Berhasil";
}catch(PDOException $e){
	echo "gaggal :".$e->getMessage();
}