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
		基本设置
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>水印文字为两行,一般设为自己的网站版权较为合适,不支持中文.</li>
			<li>图片尺寸无特殊要求使用默认值为最佳尺寸.</li>
		</ul>
	</div>
	<form method="post" action="baseSet.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td>前台显示风格</td>
				<td><?php
echo $_obj['selectStyle'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>后台文章每页显示数目</td>
				<td><input type="text" class="text-box" name="articlePageSize" size="15" value="<?php
echo $_obj['articlePageSize'];
?>
" /> 条/页				
				</td>
			</tr>
			<tr class="light-row">
				<td>后台图片每页显示数目</td>
				<td><input type="text" class="text-box" name="picturePageSize" size="15" value="<?php
echo $_obj['picturePageSize'];
?>
" />	条/页				
				</td>
			</tr>
			<tr class="dark-row">
				<td>后台图片显示方式</td>
				<td>
					<input type="radio" name="pictureShowType" value="list" /> 列表	<input type="radio" name="pictureShowType" value="thumb" /> 缩略图	
				</td>
			</tr>
			<tr class="light-row">
				<td class="width-20percent">水印文字</td>
				<td><input type="text" class="text-box" name="waterText1" size="25" value="<?php
echo $_obj['waterText1'];
?>
" />
					&nbsp;&nbsp;
					<input type="text" class="text-box" name="waterText2" size="25" value="<?php
echo $_obj['waterText2'];
?>
"/></td>
			</tr>
			<tr class="dark-row">
				<td>缩略图尺寸</td>
				<td>
					宽 <input type="text" class="text-box" name="width" size="5" value="<?php
echo $_obj['width'];
?>
" /> px
					&nbsp;&nbsp;
					高 <input type="text" class="text-box" name="height" size="5" value="<?php
echo $_obj['height'];
?>
" /> px
				</td>
			</tr>
			<tr class="light-row">
				<td>图片上传后的最大尺寸</td>
				<td>
					宽 <input type="text" class="text-box" name="maxWidth" size="5" value="<?php
echo $_obj['maxWidth'];
?>
" /> px
					&nbsp;&nbsp;
					高 <input type="text" class="text-box" name="maxHeight" size="5" value="<?php
echo $_obj['maxHeight'];
?>
" /> px
				</td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="baseSet" />
				</td>
				<td>
					<input type="submit" class="button" value="提 交" />&nbsp;&nbsp;
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
<script type="text/javascript">
//设置图片显示方式的目前设置
var checkValue = "<?php
echo $_obj['pictureShowType'];
?>
";
setRadioCheck("pictureShowType", checkValue);
</script>
</html>
