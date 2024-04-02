<?php
include("connection.php");

if(isset($_GET['sid']))
{
$sid=$_GET['sid'];	
mysql_query("delete from `add_categary` where `id`='$sid'");	
	header("location:add_categary.php");
}
if(isset($_GET['aid']))
{
$aid=$_GET['aid'];	
mysql_query("delete from `add_area` where `id`='$aid'");	
	header("location:add_area.php");
}
if(isset($_GET['pid']))
{
$pid=$_GET['pid'];	
mysql_query("delete from `add_party` where `id`='$pid'");	
	header("location:add_party.php");
}

if(isset($_GET['cid']))
{
$cid=$_GET['cid'];	
mysql_query("delete from `add_candidate` where `id`='$cid'");	
	header("location:add_candidate.php");
}


if(isset($_GET['prid']))
{
	$prid=$_GET['prid'];
	mysql_query("delete from `address_data` where `id`='$prid'");
	header("location:add_province.php");
}

if(isset($_GET['uid']))
{
	$uid=$_GET['uid'];
	mysql_query("delete from `address_data` where `id`='$uid'");
	header("location:add_uc.php");
}

if(isset($_GET['tid']))
{
	$tid=$_GET['tid'];
	mysql_query("delete from `address_data` where `id`='$tid'");
	header("location:add_tehsil.php");
	
	}
if(isset($_GET['did']))
{
	$did=$_GET['did'];
	mysql_query("delete from `address_data` where `id`='$did'");
	header("location:add_district.php");
}
if(isset($_GET['suid']))
{
	$suid=$_GET['suid'];
	mysql_query("delete from `signup` where `id`='$suid'");
	header("location:signup.php");
}

if(isset($_GET['orid']))
{
	$orid=$_GET['orid'];
	mysql_query("delete from `online_admission` where `id`='$orid'");
	header("location:addmisions.php");
}

if(isset($_GET['inid']))
{
	$inid=$_GET['inid'];
	mysql_query("delete from `inbox` where `id`='$inid'");
	header("location:inbox.php");
}
if(isset($_GET['mid']))
{
	$fmid=$_GET['mid'];
	mysql_query("delete from `merit_list` where `id`='$fmid'");
	header("location:merit_list.php");
}


?>