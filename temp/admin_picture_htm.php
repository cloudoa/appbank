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
<script type="text/javascript" src="../javascript/function.js"></script>
</head>

<body>
<div class="main-box">
	<div class="head-dark-box">
		添加图片
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>带 <img src="../images/star.gif" alt="*" /> 的项目为必填信息.</li>
			<li>可以上传的图片格式为GIF,JPEG和PNG,大小不能超过2M.</li>
			<li>GD2.0以前版本对图片处理不支持真彩色，可以选择不使用GD库处理图片来保持图片原来的质量.</li>
			<li>如不使用GD库处理，图片不能被加水印，图片尺寸不被处理，请使用PhotoShop等软件处理好再上传.</li>
		</ul>
	</div>
	<form method="post" action="picture.php" class="white-box" enctype="multipart/form-data">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="width-20percent">添加到相册</td>
				<td><?php
echo $_obj['catPath'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">图片标题</td>
				<td><input type="text" class="text-box" name="picTitle" size="20" /></td>
			</tr>
			<tr class="light-row">
				<td>图片描述</td>
				<td>
					<textarea class="text-box" name="description" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr class="dark-row">
				<td>&nbsp;</td>
				<td><input type="checkbox" name="hasThumb" value="1" checked="checked" /> 生成缩略图 
					<input type="checkbox" name="hasMark" value="1" checked="checked"  onclick="setGDState(this.checked)" /> 加水印 
					<input type="checkbox" name="noGD" id="noGD" value="1" disabled="disabled" />不使用GD库处理图片
				 </td>
			</tr>
			<tr class="light-row">
				<td>上传图片</td>
				<td><input type="file" name="uploadPic"  onpropertychange="previewPic.src=this.value" /></td>
			</tr>
			<tr class="light-row">
				<td>图片预览</td>
				<td><img src="../gallery/no_image.gif" alt="图片预览" class="preview-pic" id="previewPic"/></td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="addPic" />
					</td>
				<td>
					<input type="submit" class="button" value="添 加" />&nbsp;&nbsp;
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
