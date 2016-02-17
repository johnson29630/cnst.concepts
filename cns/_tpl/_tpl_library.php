<?php

require_once 'mobile_detect.php';

$tpl["mobile_detect"]=new Mobile_Detect;

function _tpl_header_cache($cache_expire) {
	/* ------ caching reference: http://www.php.net/manual/en/function.header.php */
	header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
	header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
	header( "Cache-Control: no-cache, must-revalidate" );
	header( "Pragma: no-cache" );
}

function _tpl_load($tpl_file) {
	global $tpl;
	$tpl["tpl_file"]=$tpl_file;
	$tpl["template"]=file_get_contents($tpl_file);
}

function _tpl_set_block($block_name,$block_content) {
	global $tpl;
	$tpl["template"]=str_replace($block_name,$block_content,$tpl["template"]);
}

?>