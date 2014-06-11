<?php
	include '../inc/config/config.php';
	include ROOT . '/biz/User.php';

	$user_list = User::get_user_list();
	var_dump($user_list);
?>