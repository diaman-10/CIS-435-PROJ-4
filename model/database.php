<?php
	$dataSourceName = 'mysql:host=localhost;dbname=weight_tracker';
	$username = 'randomuser';
	$password = 'pa55word';

	//try connecting to DB
	try {
		$db = new PDO($dataSourceName, $username, $password);
	}
	catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'You done muffed up, Mr. Database';
		exit();  //STAAAAHPP
	}
?>
