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
		文章批量更新
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>选择首页则更新所有文章.</li>
			<li>为了确保文章互相链接正确，更新文章时不会更新文件名.</li>
		</ul>
	</div>
	<form method="post" action="updateArticle.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="dark-row">
				<td class="width-20percent">请选择要更新的文章分类</td>
				<td><?php
echo $_obj['catPath'];
?>
</td>
			</tr>
			<tr class="light-row">
				<td>请选择文章模板</td>
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
					<input type="submit" class="button" value="立即更新" />&nbsp;&nbsp;
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
