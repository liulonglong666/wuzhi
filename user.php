<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页-吾志</title>
		<link rel="stylesheet" type="text/css" href="css/calendar.css"/>
		<link rel="stylesheet" type="text/css" href="css/bottom.css"/>
		<link rel="stylesheet" type="text/css" href="css/top_logined.css"/>
		<link rel="stylesheet" type="text/css" href="css/user.css"/>
		
	</head>
	<body>
		<div class="header"></div>
		<div class="container">
			<div class="container-left">
				<h2>最近发表的日记</h2>
				<div class="index-list">
					<div class="date">
						<span id="manth">八月</span>
						11
					</div>
					<div class="days">
						<div class="diary-list">
							<span class="time">09:11</span>
							<p class="content">今天注册了吾志</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-right">
				<div id="calendar" class="calendar"></div>
		        <div class="wechat">
		        	<span>关注吾志微信帐号，用微信写日记</span>
		        	<a href=""><img src="img/weixin_qrcode.jpg"/></a>
		        </div>
  
				
			</div>
		</div>
		<div class="footer container"></div>
	</body>
	<script type="text/javascript" src="js/jquery.min.v1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/calendar.js"></script>
	
	
	<script type="text/javascript" src="js/model.js"></script>
</html>
