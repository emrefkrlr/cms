<?php

	// user session started
	session_start();
	ob_start();
	
	// loaded class files
	function loadClasses($className){
		require __DIR__ . '/classes/' . strtolower($className) . '.php';

	}
	spl_autoload_register('loadClasses');
	
	// loaded config files
	$config = require __DIR__ . '/config.php';

	// connection database
	try{
		$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['password']);
	}catch(PDOException $e){
		die($e->getMessage());
	}

	// find matching files under disctionary
	// loaded all helper files
	foreach(glob(__DIR__ . '/helper/*.php') as $helperFile){
		require $helperFile;
	}



?>