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
<script type="text/javascript" src="../javascript/function.js"></script>
</head>

<body>
<div class="main-box">
	<div class="head-dark-box">
		����ͼƬ
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>�� <img src="../images/star.gif" alt="*" /> ����ĿΪ������Ϣ.</li>
			<li>�����ϴ���ͼƬ��ʽΪGIF,JPEG��PNG,��С���ܳ���2M.</li>
			<li>GD2.0��ǰ�汾��ͼƬ������֧�����ɫ������ѡ��ʹ��GD�⴦��ͼƬ������ͼƬԭ��������.</li>
			<li>�粻ʹ��GD�⴦����ͼƬ���ܱ���ˮӡ��ͼƬ�ߴ粻����������ʹ��PhotoShop���������������ϴ�.</li>
		</ul>
	</div>
	<form method="post" action="picture.php" class="white-box" enctype="multipart/form-data">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="width-20percent">���ӵ����</td>
				<td><?php
echo $_obj['catPath'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">ͼƬ����</td>
				<td><input type="text" class="text-box" name="picTitle" size="20" /></td>
			</tr>
			<tr class="light-row">
				<td>ͼƬ����</td>
				<td>
					<textarea class="text-box" name="description" cols="30" rows="5"></textarea>
				</td>
			</tr>
			<tr class="dark-row">
				<td>&nbsp;</td>
				<td><input type="checkbox" name="hasThumb" value="1" checked="checked" /> ��������ͼ 
					<input type="checkbox" name="hasMark" value="1" checked="checked"  onclick="setGDState(this.checked)" /> ��ˮӡ 
					<input type="checkbox" name="noGD" id="noGD" value="1" disabled="disabled" />��ʹ��GD�⴦��ͼƬ
				 </td>
			</tr>
			<tr class="light-row">
				<td>�ϴ�ͼƬ</td>
				<td><input type="file" name="uploadPic"  onpropertychange="previewPic.src=this.value" /></td>
			</tr>
			<tr class="light-row">
				<td>ͼƬԤ��</td>
				<td><img src="../gallery/no_image.gif" alt="ͼƬԤ��" class="preview-pic" id="previewPic"/></td>
			</tr>
			<tr class="dark-row">
				<td>
					<input type="hidden" name="action" value="addPic" />
					</td>
				<td>
					<input type="submit" class="button" value="�� ��" />&nbsp;&nbsp;
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