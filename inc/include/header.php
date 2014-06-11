<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="js/util.js"></script>
        <link type="text/css" rel="stylesheet" href="css/affairs.css" />
    </head>
    <script language="JavaScript">
        function myrefresh()
        {
            var args = "act=refresh&id=" + Math.random();
            $.ajax({
                type: "POST",
                url: "photoajax.php",
                data: args,
                success: function() {

                }
            });
        }
        setInterval('myrefresh()', 1000 * 60 * 5); //5分钟刷新一次
    </script>
    <body>
        <div class="header">
            <div class="logo fl"><a href="#"></a></div>
            <?php if (!$loginUrl): ?>
                <div class="logout fr">
                    【<a href="logout.php">安全退出</a>】
                </div>
            <?php endif ?>
        </div>