<?php 
	require 'config.php';

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email', 'publish_actions']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('https://getttoken02.herokuapp.com/callback.php', $permissions);

	header("location:" . $loginUrl);
 ?>
