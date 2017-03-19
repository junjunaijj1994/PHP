<?php

if(isset($_GET['tj']))
{
	$xm=$_GET['xm'];
	$mm=$_GET['mm'];
	$xb=$_GET['xb'];
	$xq=$_GET['xq'];
	$num=count($xq);
	$xqbox="";
	for($i=0;$i<$num;$i++)
	{
		$xqbox=$xqbox."".$xq[$i];
	}
	echo "姓名：".$xm."<br>";
	echo "密码：".$mm."<br>";
	echo "性别：".$xb."<br>";
	echo "兴趣：".$xqbox;
}
?>
