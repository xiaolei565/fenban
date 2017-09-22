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
  </head>
  <body>
	<h3><img src="img/logo.jpg" alt="安徽理工大学">安徽理工大学分班查询<small>2017</small></h3>
	<?php
		//引入数据库操作文件
		require_once "mysql.func.php";
		if(isset($_POST["username"]))
		{
			$username=$_POST["username"];
			$useridnum=$_POST["useridnum"];	
			mysql_query("SET NAMES UTF8");
			$sql=mysql_query("SELECT * FROM test WHERE name='".$username."' AND idnum='".$useridnum."'");
			$rows = mysql_fetch_array($sql);
			if($rows)//如果不为空
			{
			echo "<div class='table-responsive'>";
			echo 	"<table class='table'>";
			echo	"<tr>";
			echo    "<th>学号</th>";
			echo    "<th>姓名</th>";
			echo    "<th>性别</th>";
			echo    "<th>身份证号</th>";
			echo    "<th>专业</th>";
			echo    "<th>班级</th>";
			echo    "<th>学院</th>";
		    echo	"</tr>";
			echo	"<tr>";
			echo   	"<td>" . $rows['stunum'] . "</td>";
			echo   	"<td>" . $rows['name'] . "</td>";
			echo 	"<td>" . $rows['sex'] . "</td>";
			echo 	"<td>" . $rows['idnum'] . "</td>";
			echo 	"<td>" . $rows['majorin'] . "</td>";
			echo 	"<td>" . $rows['class'] . "</td>";
			echo   	"<td>" . $rows['col'] . "</td>";
			echo	"</tr>";
			echo	"</table>";
			echo"</div>";			
			}else
			{
				echo "<div class='table-responsive'>";
				echo 	"<table class='table'>";
				echo	"<tr>";
				echo	"<h5>不好意思，查询不到，请确保数据输入正确，如需帮助，请加<strong>下方QQ</strong>进行咨询</h5>";
				echo	"</tr>";
				echo	"</table>";
				echo"</div>";
			}
			if($rows["majorin"]=="物联网工程")
			{
					echo "<div class='text-center'>";
					echo	"<a href='https://jq.qq.com/?_wv=1027&k=5zWjTYx' class='btn btn-danger' role='button'>点击加物联网新生群：330473929</a>";
					echo "</div>";
			}	
		}	
	?>
	<hr />
		<div class="text-center" >
		    <a href="#" onClick="javascript:history.back(-1);" class="btn btn-info" role="button">点此返回</a>
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