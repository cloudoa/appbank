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
		��������
	</div>
	<div class="body-box tip-msg">
		<ul>
			<li>ˮӡ����Ϊ����,һ����Ϊ�Լ�����վ��Ȩ��Ϊ����,��֧������.</li>
			<li>ͼƬ�ߴ�������Ҫ��ʹ��Ĭ��ֵΪ��ѳߴ�.</li>
		</ul>
	</div>
	<form method="post" action="baseSet.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td>ǰ̨��ʾ���</td>
				<td><?php
echo $_obj['selectStyle'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>��̨����ÿҳ��ʾ��Ŀ</td>
				<td><input type="text" class="text-box" name="articlePageSize" size="15" value="<?php
echo $_obj['articlePageSize'];
?>
" /> ��/ҳ				
				</td>
			</tr>
			<tr class="light-row">
				<td>��̨ͼƬÿҳ��ʾ��Ŀ</td>
				<td><input type="text" class="text-box" name="picturePageSize" size="15" value="<?php
echo $_obj['picturePageSize'];
?>
" />	��/ҳ				
				</td>
			</tr>
			<tr class="dark-row">
				<td>��̨ͼƬ��ʾ��ʽ</td>
				<td>
					<input type="radio" name="pictureShowType" value="list" /> �б�	<input type="radio" name="pictureShowType" value="thumb" /> ����ͼ	
				</td>
			</tr>
			<tr class="light-row">
				<td class="width-20percent">ˮӡ����</td>
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
				<td>����ͼ�ߴ�</td>
				<td>
					�� <input type="text" class="text-box" name="width" size="5" value="<?php
echo $_obj['width'];
?>
" /> px
					&nbsp;&nbsp;
					�� <input type="text" class="text-box" name="height" size="5" value="<?php
echo $_obj['height'];
?>
" /> px
				</td>
			</tr>
			<tr class="light-row">
				<td>ͼƬ�ϴ�������ߴ�</td>
				<td>
					�� <input type="text" class="text-box" name="maxWidth" size="5" value="<?php
echo $_obj['maxWidth'];
?>
" /> px
					&nbsp;&nbsp;
					�� <input type="text" class="text-box" name="maxHeight" size="5" value="<?php
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
<script type="text/javascript">
//����ͼƬ��ʾ��ʽ��Ŀǰ����
var checkValue = "<?php
echo $_obj['pictureShowType'];
?>
";
setRadioCheck("pictureShowType", checkValue);
</script>
</html>