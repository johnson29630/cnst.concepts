<?php
/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 * 
 * modified paul@johnsonville.org
 */
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once('../auth/libraries/password_compatibility_library.php');
}
require_once('../auth/config/config.php');
require_once('../auth/translations/en.php');
require_once('../auth/libraries/PHPMailer.php');
require_once('../auth/classes/Login.php');
$login = new Login();

if ($login->isUserLoggedIn() == true) {
/* primary content for logged in users follows */ ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701020_90185 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="shortcut icon" href="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/favicon.ico" mce_href="/portals/ui/_theme/digest/favicon.ico" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=11">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<title>Rainproof, All-In-Ones, 100 to 225 A Maximum - Schneider Electric Digest Plus</title>

<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/scripts/libs/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/bannerfix.js"></script>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/scripts/harp-sdk.js"></script><link rel="stylesheet" href="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/style/harp-portals.less"></link>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://www.productinfo.schneider-electric.com/portals/resources/cm/cm.css"></link>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/scripts/libs/moment.min.js"></script>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/cm/cm.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39869895-2', 'auto');
  ga('send', 'pageview');

</script>

<style>
/* Offset anchors to account for the header. */
a.xmlId {
  position: relative;
  top: -150px;
  display: block;
  visibility: hidden;
}
.fnlist a.xmlId {
  display: inline-block;
}
</style>

<script>
window.refId = "_17701020_90185";
window.urlRefId = "";
window.publicationLandingPage = "/portals/ui/digest/pages/landingPages/digest177";
window.publicationName = "Digest 177";
</script>

<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/viewer.js"></script>
<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/table-watermarks.js"></script>

<!-- d+ext extensions -->
<script src="../d+ext/extend.js"></script>
<link rel="stylesheet" href="../d+ext/extend.css"></link>
</head>


<body class="readerPage" data-pageId=1c72ecc6-e200-4542-8d5d-1a929d64dcce>



<!-- BEGIN HEADER -->
<header class="navbar navbar-default" id="harp-header-bar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="padding: 0 50px 0 0" href="http://www.schneider-electric.com/us/en" target="_blank">
  			<img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Logo_SE_White_Transparent_RGB.PNG" style="width: 226px; height: 52px;" class="hidden-xs">
			<img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Logo_SE_White_Transparent_RGB.PNG" style="width: 170px; height: 39px; margin-top: 3px;" class="visible-xs">
            </a>

              <!-- <a href='/portals/ui/digest/'
	               class="header-logo-link">
	                <img src="/portals/ui/_theme/digest/images/se_logo.gif" class="header-logo">
	           	</a> -->
	            <!-- <a href='/portals/ui/digest/'>
	             Digest 177
	            </a> -->
			<!-- </span>  -->
		</div>

		<div class="navbar-collapse collapse" id="headerMenu">

				<form role="search" action='http://www.productinfo.schneider-electric.com/portals/ui/digest/search' class="navbar-form navbar-right hidden-xs">
					<div class="form-group">
						<label class="sr-only" for="headerTerm">Search Term</label> <input
							type="text" placeholder="Search" class="form-control"
							id="headerTerm" name="term">
					</div>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
				</form>
				<form role="search" action='http://www.productinfo.schneider-electric.com/portals/ui/digest/search' class="navbar-form navbar-right navbar-input-group visible-xs">
				    <div class="form-group">
				        <label class="sr-only" for="headerTerm">Search Term</label>
				        <div class="input-group">
				            <input type="text" placeholder="Search" class="form-control"
				                id="headerTerm" name="term">
				            <span class="input-group-btn">
				                <button type="submit" class="btn btn-primary">
				                    <span class="glyphicon glyphicon-search"></span>
				                </button>
				            </span>
				        </div>
				    </div>
				</form>

			<ul class="nav navbar-nav">
                <li><a href="http://www.digestplus-us.schneider-electric.com/" target="_blank">DigestPLUS</a></li>
              	<li><a href='digest177.html'>Digest 177</a></li>
                <li><a href='digest177_supplement.html'>Supplemental Digest 177</a></li>
				        <li class="visible-xs"><a href="#" id="tocHeaderLink">Table of Contents</a>

			</ul>
		</div>
	</div>
</header>

<div id="docTitle" class="sectionColor1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>        <a class="context-title"
           href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/">
          Section 1: Load Centers
        </a>
</h3>
      </div>
    </div>
  </div>
</div>

  <div id="floatingDocTitle" class="sectionColor1">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3>        <a class="context-title"
           href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/">
          Section 1: Load Centers
        </a>
</h3>
        </div>
      </div>
    </div>
  </div>

<!-- END HEADER -->

    <div class="container" id="bodyWrapper">


        <div class="row">
            <div class="col-sm-4 col-xs-12 hidden-xs" id="readertoc">
                <div id="tocPortal">
                   <div class="readertoc-image">
                     <img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Square_D_logo.png" data-brand="pl">
                     <img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Square_D_logo.png" data-brand="rr">
                     <img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Square_D_logo.png" data-brand="sd">
                     <img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Schneider_Electric_logo.png" data-brand="se">
                     <img src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/images/Telemecanique_Sensors_logo.png" data-brand="ts">
                   </div>
				   <?php require("_17701_navigate.php");/* d+ext include section navigation */ ?>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12" id="topicView">
                <div class="row" id="breadcrumb"></div>
                  <div class="row nextPrevLinks">
    <div class="col-xs-6">
      <a href="#" class="prevLink">&lt; Previous</a>
    </div>
    <div class="col-xs-6 text-right">
      <a href="#" class="nextLink">Next &gt;</a>
    </div>
  </div>


 
                <div class="row" id="viewerContent"
                    data-portalKey="562794fee4b05736848a7cb4"
                    data-itemKey="561d600ce4b0c5c41a247a50"
                    data-projectKey="561d5d65e4b0c5c41a243bf2"
                    data-parentKey="561d5f9ae4b0c5c41a2447fa">
                    <div class="col-xs-12 content-container">
<div class="itemPreview"><a name="_17701020_901852" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Rainproof,%20All-In-Ones,%20100%20to%20225%20A%20Maximum%20(CPT)_0000056573.xml">
      <h1 class="title" data-xtrc="title:1" lang="English_en">Rainproof, All-In-Ones, 100 to 225 A Maximum</h1>
      <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701020_877172" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Class%204120%20(CPT)_0000056572.xml">
         <h2 class="title" data-xtrc="title:1" lang="English_en">Class <b class="ph b" data-xtrc="b:1" lang="English_en">4120</b></h2>
         <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701020_801322" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Meter%20Mains%20and%20All-In-Ones%20(100%20to%20225%20A%20Maximum)%20(CPT)_0000056571.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Meter Mains and All-In-Ones (100 to 225 A Maximum)</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <ul class="ul" data-xtrc="ul:1" lang="English_en">
                                 <li class="li" data-xtrc="li:1" lang="English_en">
                                    <p class="p" data-xtrc="p:1" lang="English_en">Ring or ringless type meter socket designs available</p>
                                 </li>
                                 <li class="li" data-xtrc="li:2" lang="English_en">
                                    <p class="p" data-xtrc="p:2" lang="English_en">UL Listed, suitable only for use as service equipment</p>
                                 </li>
                                 <li class="li" data-xtrc="li:3" lang="English_en">
                                    <p class="p" data-xtrc="p:3" lang="English_en">Meets EUSERC standards</p>
                                 </li>
                              </ul>
                           </td>
                           <td style="padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <ul class="ul" data-xtrc="ul:2" lang="English_en">
                                 <li class="li" data-xtrc="li:4" lang="English_en">
                                    <p class="p" data-xtrc="p:4" lang="English_en">Service disconnect(s) are supplied factory-installed, except
                                       where noted
                                    </p>
                                 </li>
                                 <li class="li" data-xtrc="li:5" lang="English_en">
                                    <p class="p" data-xtrc="p:5" lang="English_en">Semiflush-reverse design available, supplied with load center
                                       (indoor access)
                                    </p>
                                 </li>
                              </ul>
                           </td>
                           <td style="padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <ul class="ul" data-xtrc="ul:3" lang="English_en">
                                 <li class="li" data-xtrc="li:6" lang="English_en">
                                    <p class="p" data-xtrc="p:6" lang="English_en">Supplied with 100% branch neutrals, all unused terminals may
                                       be used for equipment grounding wires.
                                    </p>
                                 </li>
                                 <li class="li" data-xtrc="li:7" lang="English_en">
                                    <p class="p" data-xtrc="p:7" lang="English_en">Meets Federal Specification W-P-115c as Type 1, Class 2</p>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701020_84826" class="xmlId"></a><div class="table data" data-srcid="_17701020_84826" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">All-In-One Combination Service Entrance Devices</h4>
                  <table style="border-collapse: collapse; ">
                     <colgroup>
                        <col style="width: 21px; ">
                        <col style="width: 23px; ">
                        <col style="width: 40px; ">
                        <col style="width: 20px; ">
                        <col style="width: 70px; ">
                        <col style="width: 28px; ">
                        <col style="width: 54px; ">
                        <col style="width: 30px; ">
                        <col style="width: 14px; ">
                        <col style="width: 28px; ">
                        <col style="width: 29px; ">
                        <col style="width: 27px; ">
                        <col style="width: 18px; ">
                        <col style="width: 26px; ">
                        <col style="width: 27px; ">
                        <col style="width: 25px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="4" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:8" lang="English_en">Ampere Rating</p>
                           </th>
                           <th rowspan="4" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:9" lang="English_en"> Bypass Type</p>
                           </th>
                           <th rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:10" lang="English_en">Service<br class="empty">(Type <br class="empty">of Feed)<br class="empty">UL and <br class="empty">EUSERC
                              </p>
                           </th>
                           <th rowspan="4" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:11" lang="English_en">Short Circuit <br class="empty">Current Rating
                              </p>
                           </th>
                           <th rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:12" lang="English_en">Cat. No.</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:13" lang="English_en">(DE3A)</p>
                           </th>
                           <th rowspan="3" colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:14" lang="English_en">Service Disconnect(s)</p>
                           </th>
                           <th rowspan="1" colspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:15" lang="English_en">Load Center and
                                 Branch<br class="empty">Circuit Breakers <br class="empty">(Order separately <sup class="fnref"><a href="#fn1">[1]</a></sup>) 
                              </p>
                           </th>
                           <th rowspan="4" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:16" lang="English_en">Hub Type <sup class="fnref"><a href="#fn2">[2]</a></sup><br class="empty">(Order separately )
                              </p>
                           </th>
                           <th rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:17" lang="English_en"> Line <br class="empty">Side
                              </p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:18" lang="English_en">Main <br class="empty">Lugs<br class="empty">AWG/<br class="empty">kcmil<br class="empty">(Al/Cu)
                              </p>
                           </th>
                           <th rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:19" lang="English_en">Service</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:20" lang="English_en">Ground</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:21" lang="English_en">Lug<br class="empty">AWG/<br class="empty">kcmil
                              </p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:22" lang="English_en">(Al/Cu)</p>
                           </th>
                           <th rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:23" lang="English_en">Weight</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:24" lang="English_en">Each</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:25" lang="English_en">(Lbs)</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:26" lang="English_en">and</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:27" lang="English_en">Pallet</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:28" lang="English_en">Qty.</p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:29" lang="English_en">Max. Quantity</p>
                           </th>
                           <th rowspan="3" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:30" lang="English_en">Ampere <br class="empty">Rating Max.
                              </p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="2" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff};rotated" data-xtrc="p:31" lang="English_en">Spaces </p>
                           </th>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:32" lang="English_en">1P</p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:33" lang="English_en">2P</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:34" lang="English_en">Circuits</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:35" lang="English_en"> (Max.)</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:36" lang="English_en">   Type <br class="empty">(Factory <br class="empty">Installed)
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">Ampere <br class="empty">Rating <br class="empty">Max.
                              </p>
                           </th>
                           <th style="text-align: left; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:38" lang="English_en">Circuits</p>
                           </th>
                           <th style="text-align: left; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:39" lang="English_en">Tandems</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="spruce40" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:40" lang="English_en"><b class="ph b" data-xtrc="b:1" lang="English_en">Ring Type, Homeline<span class="tm" data-xtrc="tm:1" lang="English_en">™</span></b></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:41" lang="English_en"><b class="ph b" data-xtrc="b:2" lang="English_en">Surface Mount
                                    Only</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:42" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:44" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:46" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC1624M100S" class="xref" target="_blank">SC1624M100S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:47" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">HOM2100</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:49" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:50" lang="English_en">16</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:51" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:52" lang="English_en">8</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:54" lang="English_en">A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:55" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:56" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:57" lang="English_en">32,
                                 24
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:58" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:59" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:61" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:62" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC1624M125S" class="xref" target="_blank">SC1624M125S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:64" lang="English_en">HOM2125</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:66" lang="English_en">16</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en">8</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:69" lang="English_en">125 A  <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:70" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:71" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:72" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:73" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:74" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2040M200S" class="xref" target="_blank">SC2040M200S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:75" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:76" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:77" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:78" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:79" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:80" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:81" lang="English_en">200 A <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:82" lang="English_en">A-L</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:83" lang="English_en">4–250</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:84" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:85" lang="English_en">45,
                                 10
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:86" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:87" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:88" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:89" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:90" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2040M200C" class="xref" target="_blank">SC2040M200C  </a> <sup class="fnref"><a href="#fn5">[5]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:91" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:92" lang="English_en">HOM2200</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:93" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:94" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:95" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:96" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:97" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:98" lang="English_en">A or A-L</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:99" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:100" lang="English_en">8–1/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:101" lang="English_en">47,
                                 18
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:102" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:103" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:104" lang="English_en">UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:105" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:106" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SU2040M200C" class="xref" target="_blank">SU2040M200C</a> <sup class="fnref"><a href="#fn5">[5]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:107" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:108" lang="English_en">HOM2200</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:109" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:110" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:111" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:112" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:113" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:114" lang="English_en">A or A-L</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:115" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:116" lang="English_en">8–1/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:117" lang="English_en">47, 18</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:118" lang="English_en">Semiflush Mount
                                 Only
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:119" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:120" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:121" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:122" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:123" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC1624M100F" class="xref" target="_blank">SC1624M100F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:124" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:125" lang="English_en">HOM2100</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:126" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:127" lang="English_en">16</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:128" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:129" lang="English_en">8</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:130" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:131" lang="English_en">A or <br class="empty">B300
                              </p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:132" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:133" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:134" lang="English_en">44,
                                 20
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:135" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:136" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:137" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:138" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:139" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC1624M125F" class="xref" target="_blank">SC1624M125F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:140" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:141" lang="English_en">HOM2125</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:142" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:143" lang="English_en">16</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:144" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:145" lang="English_en">8</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:146" lang="English_en">110 A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:147" lang="English_en">   OH<sup class="fnref"><a href="#fn6">[6]</a></sup>/UG
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:148" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:149" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2040M125F" class="xref" target="_blank">SC2040M125F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:150" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:151" lang="English_en">QOM2125VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:152" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:153" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:154" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:155" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:156" lang="English_en">110 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:157" lang="English_en">A-L</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:158" lang="English_en">4–250</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:159" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:160" lang="English_en">51,
                                 10
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:161" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:162" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:163" lang="English_en">OH<sup class="fnref"><a href="#fn6">[6]</a></sup>/UG
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:164" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:165" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2040M200F" class="xref" target="_blank">SC2040M200F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:166" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:167" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:168" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:169" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:170" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:171" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:172" lang="English_en">200 A <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:173" lang="English_en">OH<sup class="fnref"><a href="#fn7">[7]</a></sup>/UG
                              </p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:174" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:175" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2636M200FPV" class="xref" target="_blank">SC2636M200FPV</a> <sup class="fnref"><a href="#fn8">[8]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:176" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:177" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:178" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:179" lang="English_en">26</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:180" lang="English_en">36</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:181" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:182" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:183" lang="English_en">A-L</p>
                           </td>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:184" lang="English_en">4–250</p>
                           </td>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:185" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:186" lang="English_en">56, 10</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:187" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC3040M200F" class="xref" target="_blank">SC3040M200F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:188" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:189" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:190" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:191" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:192" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:193" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:194" lang="English_en">200 A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:195" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:196" lang="English_en">None</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:197" lang="English_en">OH<sup class="fnref"><a href="#fn7">[7]</a></sup>/UG
                              </p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:198" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:199" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC3040M225F" class="xref" target="_blank">SC3040M225F</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:200" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:201" lang="English_en">QOM2225VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:202" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:203" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:204" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:205" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:206" lang="English_en">200 A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:207" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC2636M225FPV" class="xref" target="_blank">SC2636M225FPV</a> <sup class="fnref"><a href="#fn8">[8]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:208" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:209" lang="English_en">QOM2225VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:210" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:211" lang="English_en">26</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:212" lang="English_en">36</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:213" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:214" lang="English_en">100 A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:215" lang="English_en"><b class="ph b" data-xtrc="b:3" lang="English_en">Surface Mount
                                    Only</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:216" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:217" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:218" lang="English_en">OH<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:219" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:220" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SO1020M100S" class="xref" target="_blank">SO1020M100S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:221" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:222" lang="English_en">HOM2100</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:223" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:224" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:225" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:226" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:227" lang="English_en">80 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:228" lang="English_en">A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:229" lang="English_en">6–1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:230" lang="English_en">8–4</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:231" lang="English_en">20,
                                 42
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:232" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:233" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:234" lang="English_en">OH<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:235" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:236" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SO2040M200S" class="xref" target="_blank">SO2040M200S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:237" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:238" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:239" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:240" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:241" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:242" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:243" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:244" lang="English_en">A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:245" lang="English_en">6–350</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:246" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:247" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:248" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:249" lang="English_en">None</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:250" lang="English_en">OH/UG</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:251" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:252" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC3040M200S" class="xref" target="_blank">SC3040M200S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:253" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:254" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:255" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:256" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:257" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:258" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:259" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:260" lang="English_en">A-L</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:261" lang="English_en">4–250</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:262" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:263" lang="English_en">50,
                                 10
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:264" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SC40M200S" class="xref" target="_blank">SC40M200S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:265" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:266" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:267" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:268" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:269" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:270" lang="English_en">0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:271" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:272" lang="English_en">4–250</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:273" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:274" lang="English_en">52, 10</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:275" lang="English_en"><b class="ph b" data-xtrc="b:4" lang="English_en">REVERSE All-In-One—Semiflush
                                    Mount with Service Disconnect (outdoor access) and Load Center (indoor
                                    access) </b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:276" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:277" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:278" lang="English_en">UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:279" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:280" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SU3040M200R" class="xref" target="_blank">SU3040M200R</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:281" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:282" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:283" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:284" lang="English_en">30</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:285" lang="English_en">40</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:286" lang="English_en">10</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:287" lang="English_en">200 A <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:288" lang="English_en">A or <br class="empty">B300
                              </p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:289" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:290" lang="English_en">12–1/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:291" lang="English_en">60, 15</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:292" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:293" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:294" lang="English_en">UG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:295" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:296" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SU3040M225R" class="xref" target="_blank">SU3040M225R</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:297" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:298" lang="English_en">QOM2225VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:299" lang="English_en">225 A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:300" lang="English_en"><b class="ph b" data-xtrc="b:5" lang="English_en">Ringless, Homeline</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:301" lang="English_en"><b class="ph b" data-xtrc="b:6" lang="English_en">Surface Mount
                                    Only</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:302" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:303" lang="English_en">None</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:304" lang="English_en">      OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:305" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:306" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC1624M100S" class="xref" target="_blank">RC1624M100S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:307" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:308" lang="English_en">HOM2100</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:309" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:310" lang="English_en">16</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:311" lang="English_en">24</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:312" lang="English_en">8</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:313" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="13" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:314" lang="English_en">A</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:315" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:316" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:317" lang="English_en">32,
                                 24
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:318" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:319" lang="English_en"><span class="ph orderable" data-xtrc="ph:21" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC1624M125S" class="xref" target="_blank">RC1624M125S</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:320" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:321" lang="English_en">HOM2125</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:322" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:323" lang="English_en"> 125 A  <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:324" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:325" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:326" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:327" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:328" lang="English_en"><span class="ph orderable" data-xtrc="ph:22" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M125CH" class="xref" target="_blank">RC2040M125SH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup>  <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:329" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:330" lang="English_en">QOM2125VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:331" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:332" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:333" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:334" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:335" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="11" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:336" lang="English_en">6–350</p>
                           </td>
                           <td rowspan="11" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:337" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:338" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:339" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:340" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:341" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:342" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:343" lang="English_en"><span class="ph orderable" data-xtrc="ph:23" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M125CHg" class="xref" target="_blank">RC2040M125CH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup><sup class="fnref"><a href="#fn12">[12]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:344" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:345" lang="English_en">QOM2125VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:346" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:347" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:348" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:349" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:350" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:351" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:352" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:353" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:354" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:355" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:356" lang="English_en"><span class="ph orderable" data-xtrc="ph:24" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M150CH" class="xref" target="_blank">RC2040M150SH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:357" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:358" lang="English_en">QOM2150VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:359" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:360" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:361" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:362" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:363" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:364" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:365" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:366" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:367" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:368" lang="English_en"><span class="ph orderable" data-xtrc="ph:25" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M150CH" class="xref" target="_blank">RC2040M150CH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup><sup class="fnref"><a href="#fn12">[12]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:369" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:370" lang="English_en">QOM2150VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:371" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:372" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:373" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:374" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:375" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:376" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:377" lang="English_en">Lever</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:378" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:379" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:380" lang="English_en"><span class="ph orderable" data-xtrc="ph:26" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC3040M150SL" class="xref" target="_blank">RC3040M150SL</a> <sup class="fnref"><a href="#fn13">[13]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:381" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:382" lang="English_en">QOM2150VH <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:383" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:384" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:385" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:386" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:387" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:388" lang="English_en">76
                                 / 12
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:389" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:390" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:391" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:392" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:393" lang="English_en"><span class="ph orderable" data-xtrc="ph:27" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M200C" class="xref" target="_blank">RC2040M200S</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:394" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:395" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:396" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:397" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:398" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:399" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:400" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:401" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:402" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:403" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:404" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:405" lang="English_en"><span class="ph orderable" data-xtrc="ph:28" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M200C" class="xref" target="_blank">RC2040M200C</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:406" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:407" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:408" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:409" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:410" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:411" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:412" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:413" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:414" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:415" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:416" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:417" lang="English_en"><span class="ph orderable" data-xtrc="ph:29" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M200CH" class="xref" target="_blank">RC2040M200SH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:418" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:419" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:420" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:421" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:422" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:423" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:424" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:425" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:426" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:427" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:428" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:429" lang="English_en"><span class="ph orderable" data-xtrc="ph:30" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M200CH" class="xref" target="_blank">RC2040M200CH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:430" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:431" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:432" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:433" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:434" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:435" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:436" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:437" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:438" lang="English_en">Lever</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:439" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:440" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:441" lang="English_en"><span class="ph orderable" data-xtrc="ph:31" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC3040M200SL" class="xref" target="_blank">RC3040M200SL</a> <sup class="fnref"><a href="#fn13">[13]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:442" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:443" lang="English_en">QOM2200VH <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:444" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:445" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:446" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:447" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:448" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:449" lang="English_en">76
                                 / 12
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:450" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:451" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:452" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:453" lang="English_en"><span class="ph orderable" data-xtrc="ph:32" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/RC2040M200CGP" class="xref" target="_blank">RC2040M200CGP</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:454" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:455" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:456" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:457" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:458" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:459" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:460" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:461" lang="English_en">48 / 21</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:462" lang="English_en"><b class="ph b" data-xtrc="b:7" lang="English_en">Ringless, QO</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="lightgray30" rowspan="1" colspan="16" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:lightgray30" data-xtrc="p:463" lang="English_en"><b class="ph b" data-xtrc="b:8" lang="English_en">Surface Mount
                                    Only</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:464" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:465" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:466" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:467" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:468" lang="English_en"><span class="ph orderable" data-xtrc="ph:33" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC2442M150CH" class="xref" target="_blank">QC2442M150SH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:469" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:470" lang="English_en">QOM2150VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:471" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:472" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:473" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:474" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:475" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:476" lang="English_en">A</p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:477" lang="English_en">6–350</p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:478" lang="English_en">8–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:479" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:480" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:481" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:482" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:483" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:484" lang="English_en"><span class="ph orderable" data-xtrc="ph:34" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC2442M200C" class="xref" target="_blank">QC2442M200S</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:485" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:486" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:487" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:488" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:489" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:490" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:491" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:492" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:493" lang="English_en">None</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:494" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:495" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:496" lang="English_en"><span class="ph orderable" data-xtrc="ph:35" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC2442M200C" class="xref" target="_blank">QC2442M200C</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:497" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:498" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:499" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:500" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:501" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:502" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:503" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:504" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:505" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:506" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:507" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:508" lang="English_en"><span class="ph orderable" data-xtrc="ph:36" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC2442M200CH" class="xref" target="_blank">QC2442M200SH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:509" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:510" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:511" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:512" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:513" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:514" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:515" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:516" lang="English_en">43,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:517" lang="English_en">Horn</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:518" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:519" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:520" lang="English_en"><span class="ph orderable" data-xtrc="ph:37" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC2442M200CH" class="xref" target="_blank">QC2442M200CH</a> <sup class="fnref"><a href="#fn10">[10]</a></sup><sup class="fnref"><a href="#fn12">[12]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:521" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:522" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:523" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:524" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:525" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:526" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:527" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:528" lang="English_en">40,
                                 21
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:529" lang="English_en">200
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:530" lang="English_en">Hom</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:531" lang="English_en">OH/UG<sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:532" lang="English_en">22 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:533" lang="English_en"><span class="ph orderable" data-xtrc="ph:38" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QC3040M200SH" class="xref" target="_blank">QC3040M200SH</a> <sup class="fnref"><a href="#fn11">[11]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:534" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:535" lang="English_en">QOM2200VH</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:536" lang="English_en">200
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:537" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:538" lang="English_en">40</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:539" lang="English_en">10</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:540" lang="English_en">200
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:541" lang="English_en">40, 21</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="fnContainer" style="font-size: .8em;">
      <h4 style="color: black;">Footnotes</h4>
      <ol class="fnlist">
         <li class="fn"><a name="fn1" class="xmlId"></a>To order branch circuit breakers, see <a href="_17701002_64045.html#_17701002_640452" class="xref">QO Plug-On Circuit
               Breakers</a></li>
         <li class="fn"><a name="fn2" class="xmlId"></a>To order hubs, see <a href="_17701023_heading2_3.html#AccessoriesAndHubsForCSEDs-1EFD73C12" class="xref">Accessories
               and Hubs for CSEDs</a></li>
         <li class="fn"><a name="fn3" class="xmlId"></a>125 A Homeline<sup class="ph sup" data-xtrc="sup:10" lang="English_en">™</sup> 2P circuit
            breaker can be installed in top position only. All other positions
            are limited to 100 A max.
         </li>
         <li class="fn"><a name="fn4" class="xmlId"></a>Use only 15–110 A and 150–200
            A circuit breakers.
         </li>
         <li class="fn"><a name="fn5" class="xmlId"></a>Convertible to semiflush with SC200F flange
            kit (order separately).
         </li>
         <li class="fn"><a name="fn6" class="xmlId"></a>Suitable for OH service with addition
            of tunnel kit (SCTK20). Order separately.
         </li>
         <li class="fn"><a name="fn7" class="xmlId"></a>Suitable for OH service with addition
            of tunnel kit (SCTK30). Order separately.
         </li>
         <li class="fn"><a name="fn8" class="xmlId"></a>For use with Photovoltaic Systems. Provisions
            for field-installed CT. If required by adopted code, order retaining
            kit PK2SCPV separately, see <a href="_17701023_heading2_3.html#AccessoriesAndHubsForCSEDs-1EFD73C12" class="xref">Accessories</a>.
         </li>
         <li class="fn"><a name="fn9" class="xmlId"></a>Device does not meet EUSERC Specifications.
         </li>
         <li class="fn"><a name="fn10" class="xmlId"></a>Device supplied with barrel lock provisions
            factory-installed.
         </li>
         <li class="fn"><a name="fn11" class="xmlId"></a>Suitable for load wires to exit top endwall
            with addition of Tunnel Kit OHBS, (see <a href="_17701023_heading2_3.html#AccessoriesAndHubsForCSEDs-1EFD73C12" class="xref">Accessories</a>, check with local utility for approval.
         </li>
         <li class="fn"><a name="fn12" class="xmlId"></a>5th jaw factory-installed.
         </li>
         <li class="fn"><a name="fn13" class="xmlId"></a>Suitable for load wires to exit top endwall
            with addition of Tunnel Kit OHBL, (see <a href="_17701023_heading2_3.html#AccessoriesAndHubsForCSEDs-1EFD73C12" class="xref">Accessories</a>, check with local utility for approval.
         </li>
      </ol>
   </div>
</div>                    </div>
                </div>
                  <div class="row nextPrevLinks">
    <div class="col-xs-6">
      <a href="#" class="prevLink">&lt; Previous</a>
    </div>
    <div class="col-xs-6 text-right">
      <a href="#" class="nextLink">Next &gt;</a>
    </div>
  </div>

<script type="text/javascript">
  var refId = '_17701020_90185';
  $(document).ready(function() {
    
    function sendFeedback(feedback, type) {
      $.ajax({
        url : HARPPortal.getPortalRpcUrl('feedback'),
        type : type,
        data : JSON.stringify(feedback),
        contentType : 'application/json',
      });
    }

    function confirmFeedback(fromNegative) {
      $('#feedbackComponent').children().fadeOut(500);
      if (fromNegative) {
        $('#feedbackContainer').removeClass('col-xs-12 col-sm-6').addClass('col-sm-3');    
      }
      $('#feedbackComponent').html($('#feedbackConfirm').fadeIn(500));
    }

    $('.feedbackButton').click(function(event) {
      var feedback = {}, contentElement = $("#viewerContent");

      feedback.id = $('body').attr('data-pageId');
      feedback.topicUseful = this.value;
      feedback.portalKey = contentElement.attr("data-portalKey");
      feedback.topicKey = contentElement.attr("data-itemKey");
      feedback.projectKey = contentElement.attr("data-projectKey");
      feedback.parentKey = contentElement.attr("data-parentKey");
      feedback.refId = refId;

      sendFeedback(feedback, 'POST');
      
      $('#feedbackCommentLabel').text(this.value === 'true' ? 'Why do you think this was helpful?' : 'Why do you think this was not helpful?');

      $('#feedbackComponent').children().fadeOut(500);
      $('#feedbackContainer').removeClass('col-sm-3').addClass('col-xs-12 col-sm-6');
      $('#feedbackComponent').html($('#feedbackComment').fadeIn(500));

      $('#commentButton').click(function() {
        $('#feedbackComponent').off('keypress');
        var comment = $("#feedbackInput").val().trim();
        if (comment !== "") {
          feedback.comment = comment;
          sendFeedback(feedback, 'PUT');
        }
        confirmFeedback(true);
      });

      $('#feedbackInput').focus();

      $('#feedbackComponent').on('keypress', function(e) {
        if (e.which === 13) {
          $('#commentButton').trigger('click');
        }
      });

    });
  });   
</script>

<div class="row">
  <div class="col-sm-3 pull-right" id="feedbackContainer">
    <div id="feedbackComponent">
      <div id="feedbackHelpful">
        <p>Was this helpful?</p>
        <div id="buttonDiv">
          <button class="btn btn-primary btn-xs feedbackButton" value="true">Yes</button>
          <button class="btn btn-primary btn-xs feedbackButton" value="false">No</button>
        </div>
      </div>
    </div>
  </div>
  <div id="feedbackConfirm" style="display: none">Thanks!</div>
  <div id="feedbackComment" style="display: none">
    <label for="feedbackInput" id="feedbackCommentLabel">Tell us why!</label><br>
    <textarea rows="4" id="feedbackInput"></textarea><br>
    <button class="btn btn-primary btn-xs" id="commentButton">Send</button>
  </div>
</div>

         </div>
    </div>
  </div>
    <!--/container -->
<!-- BEGIN footer -->
<footer class="navbar navbar-default harp-portal-footer" style="width: 100%; margin: 20px 0 0 0;"> <!-- navbar-fixed-bottom  -->
	<div class="container">
  <p class="navbar-text navbar-left hidden-xs">
    <span class="glyphicon glyphicon-qrcode" id="qrcodeLink"
          title="Show QR code for this page"></span>
  </p>
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2F561d5f9ae4b0c5c41a2447fa%2Fr%2F_17701020_90185&amp;size=180"
       id="qrcode"
       style="width: 180px; height: 180px;"
       alt="QR code for this page"
       title="QR code for this page">
<script>
  $(function() {
    var $qr = $('#qrcode')
    , $link = $('#qrcodeLink')
    , on = $qr.is('visible')
    , shown = false;
    ;

    function show() {
      var pos = $link.position();
      $qr.css({
        left: pos.left + 'px',
        bottom: ($link.outerHeight() + 20) + 'px'
      });
      $qr.fadeIn();
      on = true;
      shown = true;
    }

    function toggle() {
      if (on) {
        $qr.fadeOut();
        on = false;
      } else {
        show();
      }
    }

    $link.click(toggle);
    $qr.click(toggle);
    $link.mouseover(function() {
      if (!shown) {
        show();
      }
    });
  });
</script>
<!--		<p class="navbar-text navbar-right">
			<a href="https://td-demo.titaniasoftware.com/portals/ui/website/pages/product/delivery"
				class="navbar-link harp-footer-link" target="_blank">Powered by Titania Delivery</a>
		      <a id="footerLogo" href="http://www.titaniasoftware.com"
                class="navbar-link harp-footer-link" target="_blank">
                <img src="/portals/ui/_theme/digest/images/titania-logo_128w.png"
                        style="width: 43px; height: 16px;" alt="Titania Delivery" title="Titania Delivery">
             </a>
		</p>-->
	</div>
</footer>
<!-- END footer --></body>

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701020_90185 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:44 GMT -->
</html>
<?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("auth/views/not_logged_in.php");
}
?>