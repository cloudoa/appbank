<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CMS����ϵͳ </title>
<meta http-equiv="content-type" content="text/html;charset=GB2312" />
<meta name="Generator" content="EditPlus" />
<meta name="Author" content="CMS" />
<meta name="Keywords" content="CMS" />
<link rel="stylesheet" href="../style/global.css" type="text/css" />
</head>

<body>
<div class="main-box">
	<div class="head-dark-box">
		������������Ϣ
	</div>
	<div class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td>����������:</td>
				<td><?php
echo $_obj['webServer'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>����:</td>
				<td><?php
echo $_obj['domain'];
?>
</td>
			</tr>
			<tr class="light-row">
				<td>PHP�汾:</td>
				<td><?php
echo $_obj['phpVer'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>MYSQL�汾:</td>
				<td><?php
echo $_obj['mysqlVer'];
?>
</td>
			</tr>
			<tr class="light-row">
				<td>�ļ��ϴ�:</td>
				<td><?php
echo $_obj['upload'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>���ݿ�ʹ��:</td>
				<td><?php
echo $_obj['dbsize'];
?>
</td>
			</tr>
		</table>
	</div>
</div>
<div class="main-box">
	<div class="foot-sql">
		Query Times: <?php
echo $_obj['queryTime'];
?>
  Execute Time: <?php
echo $_obj['executeTime'];
?>
 ms
	</div>
</div>
</body>
</html>