<?php
// -----------------------------------------------------------[ authentication ]
//include("../include/session.php"); 
//if(!$session->logged_in){header("Location: "."../main.php?goto=".urlencode($_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']));exit;};
//if (isset($session)) $ui=$session->userinfo; else $ui=array("userlevel"=>0);
//if($ui["userlevel"]<5){ header("Location: main.php");exit;};
// -------------------------------------------------------------------------------
	$tpl["path"]="_tpl/";require_once $tpl["path"]."_tpl_library.php";
// -------------------------------------------------------------------------------


require_once '../concepts_[lib].php' ;
$datasource['type']='MySQL';
  $datasource['user']='qfreports';
  $datasource['password']='qfreports';
  $datasource['database']='data_qf';
  $datasource['server']='acepub.us.schneider-electric.com';

if ($_SERVER['SCRIPT_FILENAME']=='J:\#ACEPub\wwwroot\dce\concepts\CNS\CNS.php') {
	$cnsConfig["dbconnect"]=false;
	$key_attributes='
products=%all%
';
}
else {
	$cnsConfig["dbconnect"]=true;
	$link = mysqli_connect($datasource['server'], $datasource['user'], $datasource['password'],$datasource['database']);
	mysqli_set_charset($link,"utf8");
}



if (isset($_GET['prod'])) $prod=$_GET['prod']; else $prod='';
if (isset($_GET['app'])) $app=urldecode($_GET['app']); else $app='';


if ($prod=='VC.0000') {
	
	/*
	Drives & Soft Starts Visual Product Configurator
	VC.PB16 16mm Push Button Visual Product Configurator
	VC.PB22 22mm Push Button Visual Product Configurator
	VC.PB30 30mm Push Button Visual Product Configurator
	VC.CTRL 22mm & 30mm Control Stations Visual Product Configurator
	VC.TBSL Tower Lights, Beacons, & Sirens Visual Configurator
	VC.ENCL Universal Enclosures Visual Product Configurator
	VC.ZLIO Zelio Relays Visual Product Configurator
	VC.DISW Disconnect Switch Visual Product Configurator
	*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head></head>
<body>
	<p>test</p>
</body>
</html>	
<?php
}
elseif ($prod=='V0000') {
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head></head>
<body>
	<p>test <?php echo $prod; ?></p>
</body>
</html>	
<?php
}
elseif ($prod=='xV0000') {

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>22mm Web Visual Configurator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css" media="screen">
		html, body { height:100%; background-color: #ffffff;}
		body { margin:0; padding:0; overflow:hidden; }
		#flashContent { width:100%; height:100%; }
		</style>
		<script language="JavaScript">
			// Function called from SWF to handle receiving messages
			function swfMessageHandler(data)
			{
				parent.postMessage(data, "*");
			}
		</script>
	</head>
	<body style="background-color:#009530;">
		<div id="flashContent">
			<!-- origional width="895" height="615", changed to 100% to be more adaptive to host's allocation -->
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="90%" id="22mm Web Visual Configurator" align="top">
				<param name="movie" value="22mm Web Visual Configurator.swf" />
				<param name="FlashVars" value="useQuoteFast=true" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="22mm Web Visual Configurator.swf" width="100%" height="100%">
					<param name="movie" value="22mm Web Visual Configurator.swf" />
					<param name="FlashVars" value="useQuoteFast=true" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
		<div>
			<p>old integration: pending update...</p>
			<p><br/><br/><br/><br/></p>
		</div>
	</body>
</html>

<?php

}
else {
/*
* start of CNS selector ==================================================================================================================================
*/	

/* verify api_key */
$apiKey='';
if (isset($_GET['apiKey'])) $apiKey=$_GET['apiKey'];
if (isset($_GET['apikey'])) $apiKey=$_GET['apikey'];
$qtmp="select mdb_attributes from data_es.api_keys where auth_key='".$apiKey."';";
if ($cnsConfig["dbconnect"]==true) {$key_attributes=query2str1x($link,"select mdb_attributes from data_es.api_keys where auth_key='".$apiKey."';");}
$tmp=array_search('%all%',explode(",",get_line_ini($key_attributes,'products')));
$activity="";
/* basic access validation */
$fwerrors="";
if ($prod=='') {$fwerrors.="product selection not provided,";}
if ((array_search($prod,explode(",",get_line_ini($key_attributes,'products')))===false) and (array_search("%all%",explode(",",get_line_ini($key_attributes,'products')))===false)) {$fwerrors.="[".$prod."] product access not authorized,".get_line_ini($key_attributes,'products').",";}
if ($fwerrors!="") {
	$prod="ERROR";
	/*$fwerrors.=get_line_ini($key_attributes,'products').",";*/
}

require_once $prod."/cns_".$prod."_pd.php";

$classNavBtnE="tpl_menubar_btn";$classNavBtnS="tpl_menubar_btn";$classNavBtnU="tpl_menubar_btn";$classNavBtnO="tpl_menubar_btn";



_tpl_header_cache(0);
_tpl_load($tpl["path"]."_tpl_cns.htm");
$tpl_head_link_href='
	<script type="text/javascript" src="cns.js?v='.filemtime("cns.js").'"></script>
	<link rel="stylesheet" type="text/css" href="cns.css?v='.filemtime("cns.css").'"></link>
	<script type="text/javascript" src="'.$prod.'/cns_'.$prod.'_pd.js?v='.filemtime($prod.'/cns_'.$prod."_pd.js").'"></script>
';
if (file_exists($tpl["path"].$apiKey.'/_tpl_cns.css')) {
	$tpl_head_link_href.='	<link rel="stylesheet" type="text/css" href="'.$tpl["path"].$apiKey.'/_tpl_cns.css?v='.filemtime($tpl["path"].$apiKey.'/_tpl_cns.css').'"></link>
';
}
else {
	$tpl_head_link_href.='	<link rel="stylesheet" type="text/css" href="'.$tpl["path"].'_tpl_cns.css?v='.filemtime($tpl["path"].'_tpl_cns.css').'"></link>
';
}
_tpl_set_block('<!-- tpl_head_link_href -->',$tpl_head_link_href);


_tpl_set_block('<!-- page_head_title -->',$cnsConfig["prod_name"].' Solution Selector');
_tpl_set_block('<!-- tpl_banner_c -->',$cnsConfig["prod_name"]);


_tpl_set_block("<!-- tpl_menubar -->",'
<div class="'.$classNavBtnE.'" id="b1" onclick="location.href=&quot;?stat=E&quot;;"><i class="fa fa-edit istat" style="background-color:#000000;"></i>Edit</div>
<div class="'.$classNavBtnS.'" id="b1" onclick="location.href=&quot;?stat=S&quot;;"><i class="fa fa-exchange istat" style="background-color:#ff0000;"></i>Share</div>
<div class="'.$classNavBtnU.'" id="b1" onclick="location.href=&quot;?stat=U&quot;;"><i class="fa fa-upload istat" style="background-color:#0000ff;"></i>Upload</div>
<div class="'.$classNavBtnO.'" id="b1" onclick="location.href=&quot;?stat=O&quot;;"><i class="fa fa-thumbs-o-up istat" style="background-color:#009530;"></i>Order</div>
');


//die; 

//	require_once 'cdw4qf_[lib].php';

//$tmp=$tpl["global_script_variables"];
//_tpl_set_block("<!-- test -->",'<pre>'.$tpl["global_script_variables"].'</pre>');
_tpl_set_block("/* global_script_variables */",'
var cns_prod="'.$prod.'";
var cns_app="'.$app.'";
var cns_sel=["","",""]; /* empty selection array */
var cns_fwerrors="'.$fwerrors.'";
');



if (isset($cnsConfig["cns_prod_overview"])) {
	_tpl_set_block("<!-- cns_prod_overview -->",$cnsConfig["cns_prod_overview"]);
}

  //----------------------------[ establish database connection ]




if (isset($_GET['territory'])) $fterr=$_GET['territory']; else $fterr='';


//$territory=get_line_ini($ui["attribs"],"territory");
$random=rand(10000,99999);

$styleLeftMargin="";
$leftMenu= '';
$leftMenuStyle='';


$detect = new Mobile_Detect;
if( $detect->isMobile() && !$detect->isTablet() ){
	// smart phone
	$styleLeftMargin="";
	$leftMenu= '';
	$leftMenuStyle='';
}
else {
	//$styleLeftMargin="margin-left:250px;width:640px";
	//$leftMenu= '<div  style="float:left;width:240px;border:1px solid red;">'.menuNavLeft().'</div>';
	////////////////////////////////////////////$leftMenuStyle='<link rel="stylesheet" type="text/css" href="../[lib].css" />';
}


$rpt="<p>x</p>";

if ($fwerrors=='') {
	_tpl_set_block("<!-- tpl_page_content -->",$rpt);
}
else {
	_tpl_set_block("<!-- tpl_page_content -->","critical errors: ".$fwerrors);
}


/**
* 
* end of CNS selector =======================================================================================================================
* 
*/
}


echo $tpl["template"];



/* activity log */
if ($cnsConfig["dbconnect"]==true) {act_log($link,$_SERVER["SCRIPT_NAME"],$activity);};


/* close database */
if ($cnsConfig["dbconnect"]==true) {mysqli_close($link);};


?>