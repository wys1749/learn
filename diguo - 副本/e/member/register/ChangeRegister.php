<?php
require("../../class/connect.php");
require("../class/user.php");
require("../../class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
//关闭
if($public_r[register_ok])
{
	printerror("CloseRegister","history.go(-1)",1);
}
//验证时间段允许操作
eCheckTimeCloseDo('reg');
//验证IP
eCheckAccessDoIp('register');
$tobind=(int)$_GET['tobind'];
//转向注册
if(!empty($ecms_config['member']['registerurl']))
{
	Header("Location:".$ecms_config['member']['registerurl']);
	exit();
}
//已经登陆不能注册
if(getcvar('mluserid'))
{
	printerror("LoginToRegister","history.go(-1)",1);
}
$sql=$empire->query("select groupid,groupname from {$dbtbpre}enewsmembergroup where canreg=1 order by level,groupid");
//导入模板
require(ECMS_PATH.'e/template/member/ChangeRegister.php');
db_close();
$empire=null;
?>