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
		<?php
echo $_obj['title'];
?>

	</div>
	<div class="body-box tip-msg">
		提示: 带 <img src="../images/star.gif" alt="*" /> 的项目为必填信息.
	</div>
	<form method="post" action="articleCat.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="dark-row">
				<td class="width-20percent">上级分类</td>
				<td><?php
echo $_obj['parentNode'];
?>
</td>
			</tr>
			<tr class="light-row">
				<td class="require-field">分类标题</td>
				<td><input type="text" class="text-box" name="catTitle" size="20" value="<?php
echo $_obj['catTitle'];
?>
"/></td>
			</tr>
			<tr class="dark-row">
				<td>分类描述</td>
				<td>
					<textarea class="text-box" name="description" cols="30" rows="5"><?php
echo $_obj['description'];
?>
</textarea>
				</td>
			</tr>
			<tr class="light-row">
				<td>分类图片</td>
				<td>
					<img src="<?php
echo $_obj['imgName'];
?>
" alt="分类图片" class="thumbnail" id="selectedThumb" />
					<input type="button" class="button" value="从相册中选择" onclick="showThumbWindow()"/>
					<input type="hidden" name="catImage" id="imgName" value="<?php
echo $_obj['imgName'];
?>
" />
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
<script>
//显示选择文章缩略图的窗口
function showThumbWindow()
{
	var feature = "width=500,height=520px,menubar=no,location=no,status=yes,toolbar=no,resizable=no";
	window.open("listImage.php?action=selectThumb", "",feature);
}
</script>
</body>
</html>
