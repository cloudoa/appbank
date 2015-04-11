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
		<ul>
			<li>根相册不能删除.</li>
			<li>删除相册时会删除该相册下所有子相册和图片,请慎重操作.</li>
		</ul>
	</div>
	<div id="navigator">
		当前位置: <?php
echo $_obj['navigator'];
?>

	</div>
	<div class="white-box">
		<table class="alt-table" cellspacing="0">
			<tr class='head-light-box'>
				<td>名称</td>
				<td>描述</td>
				<td>操作</td>
			</tr>
		<?php
if (!empty($_obj['albumList'])){
if (!is_array($_obj['albumList']))
$_obj['albumList']=array(array('albumList'=>$_obj['albumList']));
$_tmp_arr_keys=array_keys($_obj['albumList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['albumList']=array(0=>$_obj['albumList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['albumList'] as $rowcnt=>$albumList) {
$albumList['ROWCNT']=$rowcnt;
$albumList['ALTROW']=$rowcnt%2;
$albumList['ROWBIT']=$rowcnt%2;
$_obj=&$albumList;
?>
			<tr class="row-bg<?php
echo $_obj['ROWBIT'];
?>
">
				<td><?php
echo $_obj['catTitle'];
?>
</td>
				<td><?php
echo $_obj['description'];
?>
</td>
				<td>
					[<a href="album.php?action=editAlbum&absPath=<?php
echo $_obj['absPath'];
?>
">修改</a>]
					[<a href="album.php?action=deleteAlbum&absPath=<?php
echo $_obj['absPath'];
?>
">删除</a>]
				</td>
			</tr>
		<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
			<tr class="<?php
echo $_obj['noChildClass'];
?>
">
				<td>&nbsp;</td>
				<td>该相册下暂时没有子相册.</td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</div>
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
