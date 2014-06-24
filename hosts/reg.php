<?php
	include '../inc/config/config.php';
	include ROOT . '/biz/User.php';

	if(isset($_REQUEST['action'])){
    	$action = $_REQUEST['action'];
    	if($action == 'add'){
    		$post = $_REQUEST;
			$res = User::add_user($post);
			$ct_error = 200;
			//exit;
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/reg.css">
  </head>
  <body>
    <div class="header">
        <div class="logo">
            <img src="http://www.baidu.com/img/baidu_sylogo1.gif" alt="">
        </div>
    </div>
    <div class="main">
        <div class="order">
            <div class="left">
                <div class="product">
                    <div class="img">
                        <img src="images/polo_02.png" alt="T恤图片">
                        <img src="images/polo_03.png" alt="T恤图片">
                        <img src="images/polo_04.png" alt="T恤图片">
                    </div>
                </div>
            </div>
            <div class="right">
                <h2>理财社团限量版Polo衫</h2>
                <p class="sub-title">5件T恤=1个月学费——有限的财融化成无限的爱</p>
                <div class="order-info">
                    <div class="reg">
                        <form name="regForm" id="regForm" class="reg-form" method="post">
                            <p><span>订购数量：</span><input type="text" class="order-num" id="order-num" name="order-num" value="1"></p>
                            <p><label>姓名：</label><input type="text" name="name" class="" placeholder="姓名"></p>
                            <div class="shirt-info">
                                <fieldset>
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
                                        <input type="radio" name="size" value="xxl">XXL
                                    </p>
                                </fieldset>
                            </div>
                            <p><label>邮箱：</label><input type="text" name="email" class="" placeholder="邮箱"></p>
                            <p><label>手机号：</label><input type="text" name="mobile" class="" placeholder="手机号"></p>
                            <p><label>地址：</label><input type="text" name="address" class="" placeholder="地址"></p>
                            <p><label>祝福语：</label><input type="text" name="blessings" class="" placeholder="祝福语"></p>
                            <input type="hidden" name="action" value="add">
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>

                        <div class="upload-avatar">
                            <iframe src="upload.php" allowtransparency="true" style="background-color=transparent" title="test" frameborder="0" width="100%" height="100%" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="detail">
            <h3>活动介绍</h3>
            <div class="detail-intro">
                <p>这个小朋友名叫马斌，今年5岁，全家租住在昌平区南口镇后桃洼村一个10平米的小屋内，父母均是智障人士，没有固定收入来源。马斌是一个聪明爱笑又孝顺的孩子，因为妈妈没有能力给他做符合孩子营养的饭菜，刚上幼儿园的他非常瘦弱。目前幼儿园已暂免了马斌7个月的费用，但下个学年，马斌要上幼儿园大班学习和生活了，每个月480元的费用还没有着落。</p>

                <p>百度理财社团联合du公益，发起“献爱心，送T恤”活动：您只要进入捐款页面捐助88元，小小的举动很可能影响孩子的一生！为感谢您的大爱无疆，财社将赠送每位爱心人士每人一件理财社团限量版Polo衫！ </p>

                <p>5份爱心就可以改变孩子一个月的生活，让他能和其他小朋友一样，在幼儿园尽情学习、玩耍。</p>
            </div>
            <h3>百度财团介绍</h3>
            <div class="detail-intro">
                <p>诞生于2012年1月1日的百度理财社团，为团员举办和分享了多场关于个人股票投资、宏观政策、家庭理财、融资融券等方方面面的知识讲座。当你跟随理财社团，通过股票、理财产品、期货各种渠道迈向理财、收获第一桶金的时候，你知道仅仅几天的收益就相当于马斌小朋友一个月的幼儿园学费和生活费吗？ “财”理不到尽头，而“爱”才是不变的源泉！百度理财社团致力于带领同学们理财，走上财务自由之路的同时，更愿意在路上能帮到需要帮助的人。</p>

                <p>du公益将和百度理财社团一起，把您的祝福带给孩子。请务必在捐款时登记个人信息，便于我们制作和发放T恤。善款的捐助跟踪事宜，后续将持续在内网报道，敬请关注。</p>

                <p>更多问题，请加入百度理财HI群：1386921咨询</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="join-us">
            <p class="footer-title">加入我们</p>
            <p>
                百度财团-总群：1386921 <br>
                百度财团-股票分群：1414781 <br>
                百度财团-贵金属分群：1402816 <br>
                百度财团-基金分群：1424540 <br>
            </p>
        </div>
        <div class="links">
            <p class="footer-title">友情链接</p>
            <p>
            </p>
        </div>
    </div>
    <div class="wx-focus">
        <img src="images/bdcaituan_weixin.png" alt="">
    </div>

    <?php if($ct_error == '200') { ?>
        <div id="overlay"></div>
        <div id="win">
            <p>报名成功，感谢您的积极参与！</p>
        </div>
    <?php } ?>

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/reg.js"></script>
  </body>
</html>