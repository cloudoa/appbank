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
			<li>文章根分类不能删除.</li>
			<li>删除分类时会删除该分类下所有子分类和文章,请慎重操作.</li>
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
				<td>标题</td>
				<td>描述</td>
				<td>操作</td>
			</tr>
		<?php
if (!empty($_obj['catList'])){
if (!is_array($_obj['catList']))
$_obj['catList']=array(array('catList'=>$_obj['catList']));
$_tmp_arr_keys=array_keys($_obj['catList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['catList']=array(0=>$_obj['catList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['catList'] as $rowcnt=>$catList) {
$catList['ROWCNT']=$rowcnt;
$catList['ALTROW']=$rowcnt%2;
$catList['ROWBIT']=$rowcnt%2;
$_obj=&$catList;
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
					[<a href="articleCat.php?action=editCat&absPath=<?php
echo $_obj['absPath'];
?>
">修改</a>]
					[<a href="articleCat.php?action=deleteCat&absPath=<?php
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
				<td>该分类下暂时没有子分类.</td>
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
