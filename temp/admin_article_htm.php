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
<link rel="stylesheet" href="../editor/editor.css" type="text/css" />
<script type="text/javascript" src="../javaScript/function.js" ></script>
<script type="text/javascript" src="../editor/edit.js"></script>
</head>

<body onload="InitDocument();">
<div class="main-box">
	<div class="head-dark-box">
		<?php
echo $_obj['title'];
?>

	</div>
	<div class="body-box tip-msg">
		��ʾ: �� <img src="../images/star.gif" alt="*" /> ����ĿΪ������Ϣ.
	</div>
	<form method="post" action="article.php" class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class="light-row">
				<td class="width-20percent">���·���</td>
				<td><?php
echo $_obj['catPath'];
?>
</td>
			</tr>
			<tr class="dark-row">
				<td>ͼƬ����</td>
				<td><input type="radio" name="isImg" value="1"  onclick="showObj('imgTR', 'show')"/> ��
					<input type="radio" name="isImg" value="0"   onclick="showObj('imgTR', 'hide')"/> ��
				</td>
			</tr>
			<tr class="<?php
echo $_obj['imgShow'];
?>
" id="imgTR">
				<td class="require-field">����ͼ</td>
				<td>
					<img src="<?php
echo $_obj['imgName'];
?>
" alt="��������ͼ" class="thumbnail" id="selectedThumb" />
					<input type="button" class="button" value="�����������" onclick="showThumbWindow()" />
					<input type="hidden" name="imgName" id="imgName" value="<?php
echo $_obj['imgName'];
?>
" />
				</td>
			</tr>
			<tr class="light-row">
				<td class="require-field">���±���</td>
				<td><input type="text" class="text-box" name="title" size="30" value="<?php
echo $_obj['artTitle'];
?>
" maxlength="40" /></td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">����ʱ��</td>
				<td><input type="text" class="text-box" name="postTime" size="20" value="<?php
echo $_obj['postTime'];
?>
" />
					���Լ�������ע���ʽ.
				</td>
			</tr>
			<tr class="light-row">
				<td>����ժҪ</td>
				<td><textarea class="text-box" name="summary" cols="40" rows="4"><?php
echo $_obj['summary'];
?>
</textarea>
					С��100������.
				</td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">��������</td>
				<td><input type="text" class="text-box" name="author" size="15" value="<?php
echo $_obj['author'];
?>
" maxlength="20"/></td>
			</tr>
			<tr class="light-row">
				<td>������Դ</td>
				<td><input type="text" class="text-box" name="comeFrom" size="25" value="<?php
echo $_obj['comeFrom'];
?>
" maxlength="25"/></td>
			</tr>
			<tr class="dark-row">
				<td class="require-field">�ؼ���</td>
				<td><input type="text" class="text-box" name="keyword" size="20" value="<?php
echo $_obj['keyword'];
?>
" maxlength="20"/>
					������������,�������","����.
				</td>
			</tr>
			<tr class="light-row">
				<td>�Ƿ��Ƽ�</td>
				<td>
					<input type="radio" name="recommend" value="1" /> �Ƽ�
					<input type="radio" name="recommend" value="0" /> ���Ƽ�
				</td>
			</tr>
		</table>
		<!-- ��ʼ HTML�༭�� -->
		<div class="toolbar-box">
			<div class="toolbar">
				<img class="toolbarItem" src="../editor/delete.gif" alt="ɾ��" onclick="format1('delete')"/>
				<img class="toolbarItem" src="../editor/cut.gif" alt="����" onclick="format1('cut')" />
				<img class="toolbarItem" src="../editor/copy.gif" alt="����" onclick="format1('copy')" />
				<img class="toolbarItem" src="../editor/paste.gif" alt="ճ��" onclick="format1('paste')" />
				<img class="toolbarItem" src="../editor/removeformat.gif" alt="ɾ�����и�ʽ"  onclick="format1('RemoveFormat')" />
				<img class="toolbarItem" src="../editor/undo.gif" alt="����" onclick="format1('undo')" />
				<img class="toolbarItem" src="../editor/redo.gif" alt="�ָ�" onclick="format1('redo')" />
				<img class="toolbarItem" src="../editor/table.gif" alt="�������" onclick="fortable()" />
				<img class="toolbarItem" src="../editor/wlink.gif" alt="���볬������" onclick="UserDialog('CreateLink')" />
				<img class="toolbarItem" src="../editor/img.gif" alt="����ͼƬ" onclick="insertImg()" />
				<img class="toolbarItem" src="../editor/hr.gif" alt="����ˮƽ��" onclick="format('InsertHorizontalRule')" />
				<img class="toolbarItem" src="../editor/br.gif" alt="���뻻�з�" onclick="insertBR()" />
			</div>
			<div class="toolbar">
				<select onchange="doSelectClick('FormatBlock',this)">
                    <option selected="selected">�����ʽ</option>
                    <option value="&lt;P&gt;">��ͨ</option>
		            <option value="&lt;PRE&gt;">�ѱ��Ÿ�ʽ</option>
		            <option value="&lt;H1&gt;">����һ</option>
		            <option value="&lt;H2&gt;">�����</option>
		            <option value="&lt;H3&gt;">������</option>
		            <option value="&lt;H4&gt;">������</option>
		            <option value="&lt;H5&gt;">������</option>
		            <option value="&lt;H6&gt;">������</option>
                    <option value="&lt;H7&gt;">������</option>
				</select>
				<select onchange="doSelectClick('FormatBlock',this)">
                    <option selected="selected">���������ʽ</option>
                    <option value="SUP">�ϱ�</option>
		            <option value="SUB">�±�</option>
		            <option value="DEL">ɾ����</option>
		            <option value="BLINK">��˸</option>
		            <option value="BIG">��������</option>
		            <option value="SMALL">��С����</option>
				</select>
				<img class="toolbarItem" src="../editor/fgcolor.gif" alt="������ɫ" onclick="foreColor()" />
				<img class="toolbarItem" src="../editor/bold.gif" alt="�Ӵ�" onclick="format('bold')"/>
				<img class="toolbarItem" src="../editor/italic.gif" alt="б��" onclick="format('italic')" />
				<img class="toolbarItem" src="../editor/underline.gif" alt="�»���" onclick="format('underline')" />
				<img class="toolbarItem" src="../editor/justifyleft.gif" alt="�����" onclick="format('justifyleft')" />
				<img class="toolbarItem" src="../editor/justifycenter.gif" alt="����" onclick="format('justifycenter')" />
				<img class="toolbarItem" src="../editor/justifyright.gif" alt="�Ҷ���" onclick="format('justifyright')" />
				<img class="toolbarItem" src="../editor/insertorderedlist.gif" alt="���" onclick="format('insertorderedlist')" />
				<img class="toolbarItem" src="../editor/insertunorderedlist.gif" alt="��Ŀ����" onclick="format('insertunorderedlist')" />
				<img class="toolbarItem" src="../editor/outdent.gif" alt="����������" onclick="format('outdent')" />
				<img class="toolbarItem" src="../editor/indent.gif" alt="����������" onclick="format('indent')"/>
				<img class="toolbarItem" src="../editor/help.gif" alt="ʹ�ð���" onclick="help()"/>
			</div>
			<div class="toolbar">
				<select onchange="format('fontname',this.value)">
                    <option selected="selected">����</option>
                    <option value="����">����</option>
                    <option value="����">����</option>
                    <option value="����_GB2312">����</option>
                    <option value="����_GB2312">����</option>
                    <option value="����">����</option>
                    <option value="��Բ">��Բ</option>
                    <option value="������">������</option>
                    <option value="ϸ����">ϸ����</option>
                    <option value="Arial">Arial</option>
                    <option value="Arial Black">Arial Black</option>
                    <option value="Arial Narrow">Arial Narrow</option>
                    <option value="Bradley Hand	ITC">Bradley Hand ITC</option>
                    <option value="Brush Script	MT">Brush Script MT</option>
                    <option value="Century Gothic">Century Gothic</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
                    <option value="Courier">Courier</option>
                    <option value="Courier New">Courier New</option>
                    <option value="MS Sans Serif">MS Sans Serif</option>
                    <option value="Script">Script</option>
                    <option value="System">System</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Viner Hand ITC">Viner Hand ITC</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Wide	Latin">Wide Latin</option>
                    <option value="Wingdings">Wingdings</option>
                  </select>
                  <select onchange="format('fontsize',this.value)">
                    <option selected="selected">�ֺ�</option>
                    <option value="7">һ��</option>
                    <option value="6">����</option>
                    <option value="5">����</option>
                    <option value="4">�ĺ�</option>
                    <option value="3">���</option>
                    <option value="2">����</option>
                    <option value="1">�ߺ�</option>
                  </select>
				  <input type="checkbox" onclick="setMode(this.checked)" />
                  �鿴 HTML Դ����
			</div>
			<iframe name="Composition" id="Composition" frameborder="0"></iframe>
		</div>
		<!-- ���� HTML�༭�� -->
		<div class="dark-row center">
				<input name="content" id="content "type="hidden" value="" />
				<input type="hidden" name="action" value="<?php
echo $_obj['action'];
?>
" />
				<input type="hidden" name="id" value="<?php
echo $_obj['artID'];
?>
" />
				<input type="hidden" name="linkPath" value="<?php
echo $_obj['linkPath'];
?>
" />
				<input type="hidden" name="oldPath"	value="<?php
echo $_obj['oldPath'];
?>
" />
				<input type="button" class="button" value="<?php
echo $_obj['buttonValue'];
?>
" onclick="submitPost(this.form)" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" class="button" value="Ԥ ��" onclick="previewArt()" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" class="button" value="�� ��" onclick="clearContent()" />

		</div>
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
<script>
var artContent = "<?php
echo $_obj['artContent'];
?>
";
//������ѡ��ť��Ĭ��ֵ
var isImgCheck = "<?php
echo $_obj['isImg'];
?>
";
var recommendCheck = "<?php
echo $_obj['recommend'];
?>
";
setRadioCheck("isImg", isImgCheck);
setRadioCheck("recommend", recommendCheck);
//��ʾѡ����������ͼ�Ĵ���
function showThumbWindow()
{
	var feature = "width=500,height=520px,menubar=no,location=no,status=yes,toolbar=no,resizable=no";
	window.open("listImage.php?action=selectThumb", "",feature);
}
</script>
</html>