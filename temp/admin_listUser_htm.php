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
		�ʻ�����
	</div>
	<div class="body-box tip-msg">
		ɾ���û�ʱӦ���ٱ���һ���û����ڣ����򽫲��ܵ�¼ϵͳ.
	</div>
	<form method="get" action="user.php">
	<div class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class='head-light-box'>
				<td>&nbsp;</td>
				<td>�û�����</td>
				<td>����</td>
			</tr>
		<?php
if (!empty($_obj['userList'])){
if (!is_array($_obj['userList']))
$_obj['userList']=array(array('userList'=>$_obj['userList']));
$_tmp_arr_keys=array_keys($_obj['userList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['userList']=array(0=>$_obj['userList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['userList'] as $rowcnt=>$userList) {
$userList['ROWCNT']=$rowcnt;
$userList['ALTROW']=$rowcnt%2;
$userList['ROWBIT']=$rowcnt%2;
$_obj=&$userList;
?>
			<tr class="row-bg<?php
echo $_obj['ROWBIT'];
?>
">
				<td><input type="checkbox" name="idList[]" value="<?php
echo $_obj['id'];
?>
" /></td>
				<td><?php
echo $_obj['userName'];
?>
</td>
				<td>
					[<a href="user.php?action=editUser&id=<?php
echo $_obj['id'];
?>
">�޸�</a>]
					[<a href="user.php?action=delUser&id=<?php
echo $_obj['id'];
?>
">ɾ��</a>]
				</td>
			</tr>
		<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
		</table>
	</div>
	<div class="white-box clear-both">
		<div class="tool-bar">
			<input type="checkbox" onclick="checkAll(this)" /> ȫѡ
			ѡ����: <input type="image" src="../images/delete.gif" alt="ɾ��" onclick="this.form.elements['action'].value='delUser'" />
				   <input type="hidden" name="action" value="" />
		</div>
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
</html>
