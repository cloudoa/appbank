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
		<?php
echo $_obj['title'];
?>

	</div>
	<div class="body-box tip-msg">
		��ʾ: �� <img src="../images/star.gif" alt="*" /> ����ĿΪ������Ϣ.
	</div>
	<form method="post" action="user.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="require-field width-20percent">�û�����</td>
				<td><input type="text" class="text-box" name="userName" size="20" value="<?php
echo $_obj['userName'];
?>
" <?php
echo $_obj['disabled'];
?>
/></td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">�� ��</td>
				<td><input type="password" class="text-box" name="pwd" size="20" /></td>
			</tr>
			<tr class="light-row">
				<td class="require-field">����ȷ��</td>
				<td><input type="password" class="text-box" name="pwd2" size="20" /></td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="<?php
echo $_obj['action'];
?>
" />
					<input type="hidden" name="userID" value="<?php
echo $_obj['userID'];
?>
" />
					</td>
				<td>
					<input type="submit" class="button" value="<?php
echo $_obj['buttonValue'];
?>
" />&nbsp;&nbsp;
					<input type="reset" class="button" value="�� ��" />
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