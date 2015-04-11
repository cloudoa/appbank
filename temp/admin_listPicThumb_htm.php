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
		图片管理
	</div>
	<div class="body-box tip-msg">
		如果想更改图片列表的显示方式请到基本设置中进行修改。
	</div>
	<div id="navigator">
		当前位置: <?php
echo $_obj['navigator'];
?>
  &nbsp;&nbsp;选择相册 <?php
echo $_obj['selectCat'];
?>

	</div>
	<form method="get" action="picture.php">
	<div class="white-box">
		<?php
if (!empty($_obj['picList'])){
if (!is_array($_obj['picList']))
$_obj['picList']=array(array('picList'=>$_obj['picList']));
$_tmp_arr_keys=array_keys($_obj['picList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['picList']=array(0=>$_obj['picList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['picList'] as $rowcnt=>$picList) {
$picList['ROWCNT']=$rowcnt;
$picList['ALTROW']=$rowcnt%2;
$picList['ROWBIT']=$rowcnt%2;
$_obj=&$picList;
?>
			<div class="thumb-div">
				<a href="javascript:void(null)" onclick="showImage(<?php
echo $_obj['id'];
?>
)">
					<img src="<?php
echo $_obj['picName'];
?>
" alt="点击查看" />
				</a>
				<input type="checkbox" name="idList[]" value="<?php
echo $_obj['id'];
?>
" />
				<a href="javascript:void(null)" onclick="showImage(<?php
echo $_obj['id'];
?>
)">
					<?php
echo $_obj['picTitle'];
?>

				</a>
				<br />
				[<a href="picture.php?action=editPic&id=<?php
echo $_obj['id'];
?>
">修改</a>]
				[<a href="picture.php?action=deletePic&id=<?php
echo $_obj['id'];
?>
">删除</a>]
			</div>
		<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
			<div class="body-box center <?php
echo $_obj['noChildClass'];
?>
">
				该相册暂时没有图片.
			</div>
			<div class="clear-both"></div>
	</div>
	<div class="white-box clear-both">
		<div class="tool-bar">
			<input type="checkbox" onclick="checkAll(this)" /> 全选
			选中项: <input type="image" src="../images/delete.gif" alt="删除" onclick="this.form.elements['action'].value='deletePic'" />
				   <input type="hidden" name="action" value="" />
		</div>
		<div class="page-bar">
			<?php
echo $_obj['pageParam'];
?>

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
