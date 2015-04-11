<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CMS发布系统 </title>
<meta http-equiv="content-type" content="text/html;charset=GB2312" />
<meta name="Generator" content="EditPlus" />
<meta name="Author" content="CMS" />
<meta name="Keywords" content="CMS" />
<link rel="stylesheet" href="../style/global.css" type="text/css" />
</head>

<body>
<div class="main-box">
	<div class="head-dark-box">
		密码修改
	</div>
	<form method="post" action="setPwd.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="width-20percent">原始密码</td>
				<td><input type="password" class="text-box" name="oriPwd" size="15" /></td>
			</tr>
			<tr class="dark-row">
				<td>新 密 码</td>
				<td><input type="password" class="text-box" name="newPwd" size="15" /></td>
			</tr>
			<tr class="light-row">
				<td>密码确认</td>
				<td><input type="password" class="text-box" name="cfmPwd" size="15" /></td>
			</tr>
			<tr class="dark-row">
				<td><input type="hidden" name="action" value="setPwd" /> </td>
				<td>
					<input type="submit" class="button" value="修 改" />&nbsp;&nbsp;
					<input type="reset" class="button" value="重 设" />
				</td>
			</tr>
		</table>
	</form>
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
