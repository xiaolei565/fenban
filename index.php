<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>分班查询</title>
    <!-- 加载Bootstrap层叠样式表 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--js执行非微信浏览器关闭-->
	<script>
		var useragent = navigator.userAgent;
		if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') 
		{
			// 这里警告框会阻塞当前页面继续加载 
			alert('对不起，请关注安徽理工大学官方微信（AUST1945）后，从微信端打开该页面');
			// 以下代码是用javascript强行关闭当前页面 
			var opened = window.open('about:blank', '_self');
			opened.opener = null;
			opened.close();
		}
	</script>
	<!-- 加载jQuery必须要在bootstrap.min.js前 -->
    <script src="js/jquery-1.11.3.min.js"></script>
	<!--隐藏分享等按钮,使用这个功能，必须先加载jq-->
	<script>
	function onBridgeReady() {
		WeixinJSBridge.call('hideOptionMenu');
	}
	if (typeof WeixinJSBridge == "undefined") {
		if (document.addEventListener) {
			document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
		} else if (document.attachEvent) {
			document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
			document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
		}
	} else {
		onBridgeReady();
	}
	</script>
	<!--js百度统计代码-->
	<script>
		var _hmt = _hmt || [];
		(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?b4fbc61a5dc2ab434251ea8d5dc919a1";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
		})();
	</script>
    <!--利用css，执行input输入框非空-->
	<style>
		input:required:invalid {
		background-color: lightyellow; 
		}
	</style>
  </head>
  <body>
    <form action="deal1.php" method="post">
	<h3><img src="img/logo.jpg" alt="安徽理工大学">安徽理工大学分班查询<small>2017</small></h3>
		<div class="form-group">
			<label for="username">姓名<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="username" id="username" placeholder="请输入姓名" required>
		</div>
		<div class="form-group">
			<label for="useridnum">身份证号<span style="color:red;">*</span></label>
			<input type="text" class="form-control" name="useridnum" id="useridnum" placeholder="请输入身份证号（若含字母，请大写）" required>
		</div>
		<div class="text-center" >
			<button type="submit" class="btn btn-info">点击查询</button>
			<a href="https://jq.qq.com/?_wv=1027&k=4EzNA6Q" class="btn btn-success" role="button">点此加新生群</a>
		</div>
	</form>
	<div>
    <p><img src="img/qq.jpg" alt="安徽理工大学" >QQ:<small><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3239470687&site=qq&menu=yes">3239470687</a></small></p>
	<p><img src="img/wechat.jpg" alt="安徽理工大学">微信:<small><a href="https://mp.weixin.qq.com/mp/profile_ext?action=home&__biz=MzI3MDA3MDM5NA==&scene=124#wechat_redirect" target="_blank" >AUST1945</a></small></p>
	<p><img src="img/weibo.jpg" alt="安徽理工大学" >微博:<small><a href="http://weibo.com/u/5727185183" target="_blank" >@安徽理工大学</a></small></p>
	<p><img src="img/zone.jpg" alt="安徽理工大学" >认证空间:<small><a href="http://url.cn/4EwYEKt" target="_blank" >安徽理工大学</a></small></p>
	<p><img src="img/qqcampus.jpg" alt="安徽理工大学" >认证校园号:<small><a href="https://post.mp.qq.com/tmpl/default/client/article/html/jump.html?action=accountCard&puin=3156989961" target="_blank" >安徽理工大学</a></small></p>
	</div>
	<div class="text-center" >
		<p>版权所有:安徽理工大学新媒体中心</p>
		<p>技术支持：<a href="http://weibo.com/fzyf1234" target="_blank" >@风筝有风1234</a></p>
	</div>
	
    <!-- 加载bootstrap核心库-->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>