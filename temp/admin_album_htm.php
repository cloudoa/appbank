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
	<form method="post" action="album.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="width-20percent">�ϼ����</td>
				<td><?php
echo $_obj['parentNode'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">������</td>
				<td><input type="text" class="text-box" name="catTitle" size="20" value="<?php
echo $_obj['catTitle'];
?>
"/></td>
			</tr>
			<tr class="light-row">
				<td>�������</td>
				<td>
					<textarea class="text-box" name="description" cols="30" rows="5"><?php
echo $_obj['description'];
?>
</textarea>
				</td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="<?php
echo $_obj['action'];
?>
" />
					<input type="hidden" name="absPath" value="<?php
echo $_obj['absPath'];
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
