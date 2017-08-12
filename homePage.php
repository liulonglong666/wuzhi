<?php  
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>吾志-记录生活点滴</title>
	<link rel="stylesheet" href="css/top.css">
	<link rel="stylesheet" href="css/bottom.css">
	<link rel="stylesheet" href="css/homePage.css">
</head>
<body>
	<div class="top"></div>
	<div class="content">
		<div class="t1">
			<div class="introduce">
				<div class="wz">吾志是一个简单、私密的日记本。</div>
				<div class="int"><span class="title">私密</span> ：完全私密的个人空间，在这里你可以安心的记录最真实的自己。</div>
				<div><span class="title">简单</span> ：去繁就简，专注于提供简洁、纯粹的日记功能。</div>
				<a class="reg" href="#">立即注册</a>
			</div>
			<div class="login">
				<form action="homePage.php">
					<span class="email">邮 箱</span><input type="text" class="sr sr1"><br>
					<span class="email">密 码</span><input type="password" class="sr">
					<div class="pass">
						<input type="checkbox">7天内自动登录<span class="division">|</span><a class="findPass">找回密码</a>
					</div>
					<button>登录</button>
				</form>
			</div>
		</div>
		<div class="t2">
			<a><img src="img/116576.1426410354.jpg" alt=""></a>
			<a><img src="img/116576.1426410354.jpg" alt=""></a>
			<a><img src="img/116576.1426410354.jpg" alt=""></a>
			<a><img src="img/116576.1426410354.jpg" alt=""></a>
			<a><img src="img/116576.1426410354.jpg" alt=""></a>
		</div>
	</div>
	<div class="bottom"></div>

	<script src="js/jquery.min.v1.9.1.js"></script>
	<script>
		$(".top").load("top.html");
		$(".bottom").load("bottom.html");
	</script>
</body>
</html>