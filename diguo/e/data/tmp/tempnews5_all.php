<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/diguo/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/diguo/skin/default/js/tabs.js"></script>
</head>
<body class="showpage news">
<div id="header">
		<div id="logo">
			<strong>语文教师网</strong>
		</div>
		<!-- logo结束 -->

		<div id="search">
			<form name="searchform" action="/e/search/index.php" method="post">
            <input type="hidden" name="show" value="title,softsay">
            <input type="hidden" name="tbname" value="download">
            <input type="hidden" name="tempid" value="1">
			<input name="keyboard" type="text" class="input"/><input name="submit" type="image" src="/images/btn_search.gif" alt="搜索" />
			</form>
			<p>热门关键词：<a href="#">分类浏览</a><a href="#">阅读</a><a href="#">作者</a><a href="#">书评</a></p>
		</div>
		<!-- search结束 -->

		<span class="clear"></span>
		<!-- 清除浮动 -->
	</div>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title_info">
							<tr>
								<td><h1><?=$ecms_gr[title]?></h1></td>
							</tr>
							<tr>
								<td class="info_text">时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?>&nbsp;&nbsp;作者：<?=$ecms_gr[flashwriter]?>&nbsp;&nbsp;大小：<?=$ecms_gr[filesize]?></td>
							</tr>
						</table>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td id="text"><p align="center">
										<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" name="top10movie" width="<?=$ecms_gr[width]?>" height="<?=$ecms_gr[height]?>" id="top10movie">
											<param name="movie" value="<?=$ecms_gr[flashurl]?>" />
											<param name="quality" value="high" />
											<param name="menu" value="false" />
											<embed src="<?=$ecms_gr[flashurl]?>" width="<?=$ecms_gr[width]?>" height="<?=$ecms_gr[height]?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" id="top10movie" name="top10movie" menu="false"></embed>
										</object>
									</p>
									<p><strong>作品简介：</strong><?=nl2br($ecms_gr[flashsay])?></p></td>
							</tr>
						</table></td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/diguo/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/diguo/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/diguo/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/diguo/e/ShowKey/?v=pl" align="absmiddle" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/diguo/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>推荐下载</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
				<tr>
					<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>最后更新</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/diguo/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>热门点击</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/diguo/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
				</tr>
			</table></td>
	</tr>
</table>
<div id="copyright">
		<p>中央人民广播电台 版权所有(C) 京ICP备05065762号</p>
		<ul>
			<li><a href="#">关于豆瓣</a></li>
			<li><a href="#">在豆瓣工作</a></li>
			<li><a href="#">联系我们</a></li>
			<li><a href="#">免责声明</a></li>
			<li><a href="#">帮助中心</a></li>
			<li><a href="#">API</a></li>
			<li><a href="#">图片馆合作</a></li>
			<li><a href="#">手机读书</a></li>
			<li><a href="#">豆瓣广告</a></li>
		</ul>
	</div> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>