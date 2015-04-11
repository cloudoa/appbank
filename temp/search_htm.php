<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
echo $_obj['appName'];
?>
</title>
<meta http-equiv="content-type" content="text/html;charset=GB2312" />
<meta name="Generator" content="EditPlus" />
<meta name="Author" content="CMS" />
<meta name="Keywords" content="CMS,iceberg" />
<link rel="stylesheet" href="<?php
echo $_obj['stylePath'];
?>
/main.css" type="text/css" />
<script type="text/javascript" src="javascript/function.js"></script>
</head>

<body>

<!-- ͷ���� -->
<div id="head">
	<div id='logo'><img src="<?php
echo $_obj['stylePath'];
?>
/images/logo.gif"/></div>
	<div id='text'>CMS����ϵͳ<br/>version 1.0</div>
</div>
<!-- �������� -->
<div id="navigator">
	<ul>
		<li><a href="index.php">�� ҳ</a></li>
	<?php
if (!empty($_obj['navList'])){
if (!is_array($_obj['navList']))
$_obj['navList']=array(array('navList'=>$_obj['navList']));
$_tmp_arr_keys=array_keys($_obj['navList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['navList']=array(0=>$_obj['navList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['navList'] as $rowcnt=>$navList) {
$navList['ROWCNT']=$rowcnt;
$navList['ALTROW']=$rowcnt%2;
$navList['ROWBIT']=$rowcnt%2;
$_obj=&$navList;
?>
		<li><a href="listArticle.php?catPath=<?php
echo $_obj['absPath'];
?>
"><?php
echo $_obj['catTitle'];
?>
</a></li>
	<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
	</ul>
</div>

<!-- ���岿�� -->
<div id="body">
	<!-- ���п� -->
	<div id="right-col">
		<!-- �������¿�� -->
		<div class="right-cat">
			<div class="title">��������</div>
			<form method="get" action="search.php">
				<div class="body">
					<input type="hidden" name="action" value="search" />
					����
					<select name="type">
						<option value="title" selected="selected">����</option>
						<option value="content">����</option>
						<option value="keyword">�ؼ���</option>
					</select>
					<input type="text" class="text-box" name="keyword" size="12" />
					<input type="submit" class="button" value="����" />
				</div>
			</form>
		</div>
		<!-- banner�� -->
		<div class="right-cat">
			<img src="<?php
echo $_obj['stylePath'];
?>
/images/right_banner.jpg" alt="banner" />
		</div>
		<div class="right-cat">
			<div class="title">��Ŀ����</div>
			<div class="body">
				<ul id="sub-cat">
				<?php
if (!empty($_obj['childCat'])){
if (!is_array($_obj['childCat']))
$_obj['childCat']=array(array('childCat'=>$_obj['childCat']));
$_tmp_arr_keys=array_keys($_obj['childCat']);
if ($_tmp_arr_keys[0]!='0')
$_obj['childCat']=array(0=>$_obj['childCat']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['childCat'] as $rowcnt=>$childCat) {
$childCat['ROWCNT']=$rowcnt;
$childCat['ALTROW']=$rowcnt%2;
$childCat['ROWBIT']=$rowcnt%2;
$_obj=&$childCat;
?>
					<li><a href="listArticle.php?catPath=<?php
echo $_obj['absPath'];
?>
"><?php
echo $_obj['catTitle'];
?>
</a></li>
				<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
				</ul>
			</div>
		</div>
		<div class="right-cat">
			<div class="title">�����Ƽ�</div>
			<div class="body">
				<ul>
					<?php
if (!empty($_obj['goodArtList'])){
if (!is_array($_obj['goodArtList']))
$_obj['goodArtList']=array(array('goodArtList'=>$_obj['goodArtList']));
$_tmp_arr_keys=array_keys($_obj['goodArtList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['goodArtList']=array(0=>$_obj['goodArtList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['goodArtList'] as $rowcnt=>$goodArtList) {
$goodArtList['ROWCNT']=$rowcnt;
$goodArtList['ALTROW']=$rowcnt%2;
$goodArtList['ROWBIT']=$rowcnt%2;
$_obj=&$goodArtList;
?>
					<li>��<a href="<?php
echo $_obj['linkPath'];
?>
"><?php
echo $_obj['title'];
?>
</a></li>
					<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
				</ul>
			</div>
		</div>
	</div>
	<!--��������б� -->
	<div id="left-col">
		<div class="cat-box">
			<div class="title">�����������</div>
			<div class="body">
				<?php
if (!empty($_obj['artList'])){
if (!is_array($_obj['artList']))
$_obj['artList']=array(array('artList'=>$_obj['artList']));
$_tmp_arr_keys=array_keys($_obj['artList']);
if ($_tmp_arr_keys[0]!='0')
$_obj['artList']=array(0=>$_obj['artList']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['artList'] as $rowcnt=>$artList) {
$artList['ROWCNT']=$rowcnt;
$artList['ALTROW']=$rowcnt%2;
$artList['ROWBIT']=$rowcnt%2;
$_obj=&$artList;
?>
				<div class="article-title"><a href="<?php
echo $_obj['linkPath'];
?>
"><?php
echo $_obj['title'];
?>
</a>
				<span class='article-time'>----- <?php
echo $_obj['postTime'];
?>
</span></div>
				<div class="article-summary"><?php
echo $_obj['summary'];
?>
</div>
				<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
				<div class="<?php
echo $_obj['noArticle'];
?>
">
					û�з�������������.
				</div>
				<div class="page-bar">
					<?php
echo $_obj['pageParam'];
?>

				</div>
			</div>
			<div class="bottom"></div>
		</div>
	</div>
	<div class="clear-both"></div>
</div>

<!-- ��Ȩ���� -->
<div id="foot">
	<div id="adv">
		<a href="admin/">�����¼</a>
	</div>
	<div id="sql">
		Query Times: <?php
echo $_obj['queryTime'];
?>
 <br />Execute Time: <?php
echo $_obj['executeTime'];
?>
 ms
	</div>
</div>

</body>
</html>
