<?php 
	session_start();
	require 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([
	  'app_id' => '327021888364464', // Replace {app-id} with your app id
	  'app_secret' => '22209a5f028dc511317bb151e55cab76', // Replace {app_secret} with your app secret
	  'default_graph_version' => 'v8.0',
	]);

?>
