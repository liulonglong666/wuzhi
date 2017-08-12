<?php  
	/**
	 * 初始化数据库连接
	 * @param  string $dbms     数据库类型
	 * @param  string $host     数据库主机名
	 * @param  string $dbname   数据库名
	 * @param  string $username 数据库连接用户名
	 * @param  string $password 密码
	 * @return object $pdo      PDO对象
	 */
	function mysqlInit($dbms,$host,$dbname,$username,$password){
		$dsn="{$dbms}:host={$host};dbname={$dbname}";
		$pdo=new PDO($dse,$username,$password);
		$pdo->query("set names utf8");
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		return $pdo;
	}
?>