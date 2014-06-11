<?php
	include '../inc/config/config.php';
	include ROOT . '/biz/User.php';

	if(isset($_REQUEST['action'])){
    	$action = $_REQUEST['action'];
    	if($action == 'add'){
    		$post = $_REQUEST;
			$res = User::add_user($post);
			echo '提交成功！';
			exit;
    	}
	}
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>百度财团公益活动</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
    	.reg-form{
    		width: 500px;
    		margin: 0 auto;
    	}
    	.reg-form p{

    	}
    	.reg-form p label{
    		
    	}
		.reg-form input{
		}
    </style>
  </head>
  <body>
    <div class="reg">
    	<form name="regForm" id="regForm" class="reg-form" method="post">
			<p><label>姓名：</label><input type="text" name="name" class="" placeholder="姓名"></p>
			<p>
				<label>性别：</label>
				<input type="radio" name="sex" value="1">男
				<input type="radio" name="sex" value="2">女
			</p>
		    <p><label>身高：</label><input type="text" name="height" class="" placeholder="身高"></p>
			<p><label>体重：</label><input type="text" name="weight" class="" placeholder="体重"></p>
			<p>
				<label>尺寸：</label>
				<input type="radio" name="size" value="s">S
				<input type="radio" name="size" value="l">L
				<input type="radio" name="size" value="m">M
				<input type="radio" name="size" value="xl">XL
			</p>
			<p><label>邮箱：</label><input type="text" name="email" class="" placeholder="邮箱"></p>
			<p><label>手机号：</label><input type="text" name="mobile" class="" placeholder="手机号"></p>
			<p><label>地址：</label><input type="text" name="address" class="" placeholder="地址"></p>
			<p><label>祝福语：</label><input type="text" name="blessings" class="" placeholder="祝福语"></p>
		  	<input type="hidden" name="action" value="add">
		  	<button type="submit" class="btn btn-default">提交</button>
		</form>
    </div>

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>