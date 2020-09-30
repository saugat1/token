<?php 
	session_start();
	require 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([
	  'app_id' => '327021888364464', // Replace {app-id} with your app id
	  'app_secret' => '921a5ab627e492bcd56f80693a5aa02d', // Replace {app_secret} with your app secret
	  'default_graph_version' => 'v8.0',
	]);

?>
