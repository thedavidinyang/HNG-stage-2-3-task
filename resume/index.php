<?php

# HNGi8 STAGE 2 => 3 PROJECT
# Author: David Inyang
# Email: davidinyang01@gmail.com
# phone: +2348182412241
# Language: English

include("conf/conf.php");


if(!isset($_REQUEST['u'])){
	include("inc/head.php") ;
	require_once("pages/home.php");
	include("inc/foot.php") ;
} else {
	if (file_exists("loaders/".$_REQUEST["u"].".php")) {
		require_once("loaders/".$_REQUEST["u"].".php");
	} else {
		require_once("loaders/404.php");
	}
}
?>