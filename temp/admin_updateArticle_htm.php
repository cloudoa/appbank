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
		������������
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>ѡ����ҳ�������������.</li>
			<li>Ϊ��ȷ�����»���������ȷ����������ʱ��������ļ���.</li>
		</ul>
	</div>
	<form method="post" action="updateArticle.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="dark-row">
				<td class="width-20percent">��ѡ��Ҫ���µ����·���</td>
				<td><?php
echo $_obj['catPath'];
?>
</td>
			</tr>
			<tr class="light-row">
				<td>��ѡ������ģ��</td>
				<td><?php
echo $_obj['template'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="updateArticle" />
				</td>
				<td>
					<input type="submit" class="button" value="��������" />&nbsp;&nbsp;
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