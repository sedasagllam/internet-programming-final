<?php
	try{
		$db =new PDO("mysql:host=localhost; dbname=blog; charse=utf8",'root', '');
	// echo "Veritabanı bağlantısı başarılı "
	}
	catch(Exception $e){
		echo $e ->getMessage();
	}
?>