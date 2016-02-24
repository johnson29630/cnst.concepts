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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701014_78898 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:38 GMT -->
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

<title>Plug-On Circuit Breakers - Schneider Electric Digest Plus</title>

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
window.refId = "_17701014_78898";
window.urlRefId = "";
window.publicationLandingPage = "/portals/ui/digest/pages/landingPages/digest177";
window.publicationName = "Digest 177";
</script>

<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/viewer.js"></script>
<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/table-watermarks.js"></script>

<!-- d+ext extensions -->
<script src="../ext/extend.js"></script>
<link rel="stylesheet" href="../ext/extend.css"></link>
</head>


<body class="readerPage" data-pageId=de1eb07c-7747-4ff4-a8e8-24a8bdf4d243>



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
                    data-itemKey="561d6007e4b0c5c41a24776f"
                    data-projectKey="561d5d65e4b0c5c41a243bf2"
                    data-parentKey="561d5f9ae4b0c5c41a2447fa">
                    <div class="col-xs-12 content-container">
<div class="itemPreview"><a name="_17701014_788982" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Plug-On%20Circuit%20Breakers%20(CPT)_0000056532.xml">
      <h1 class="title" data-xtrc="title:1" lang="English_en">Plug-On Circuit Breakers</h1>
      <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701014_771662" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Class%201170%20_%20Refer%20to%20Catalog%201100CT0501%20(CPT)_0000056531.xml">
         <h2 class="title" data-xtrc="title:1" lang="English_en">Class <b class="ph b" data-xtrc="b:1" lang="English_en">1170</b> / Refer to Catalog <span class="ph" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/downloads/us/en/document/1100CT0501" class="xref" target="_blank"><b class="ph b" data-xtrc="b:2" lang="English_en">1100CT0501</b></a></span></h2><a name="HOMELINEPlug-OnCircuitBreaker-1E239C3C2" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Plug-On%20Circuit%20Breakers%20(CPT)_0000056530.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Plug-On Circuit Breakers</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 240px; ">
                        <col style="width: 240px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr style="vertical-align: bottom; ">
                           <td style="text-align: center; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-a_0000056513.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-a_0000056513.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">HOM 1P<br class="empty">1 Space Required
                              </p>
                           </td>
                           <td style="text-align: center; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-b_0000056512.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-b_0000056512.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:2" lang="English_en">HOM 2P<br class="empty">2 Spaces Required
                              </p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table noheader" data-xtrc="table:2" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 480px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom2200bb_0000056511.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom2200bb_0000056511.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:3" lang="English_en">HOM2200BB</p>
                              <p class="p" data-xtrc="p:4" lang="English_en">Branch Circuit Breaker</p>
                              <p class="p" data-xtrc="p:5" lang="English_en">4 Spaces Required</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701014_19728" class="xmlId"></a><p class="p" data-xtrc="p:6" lang="English_en">The Square D Homeline circuit breakers are
                  in a 1 in. wide format for 1-pole circuit breakers. They are designed
                  to plug into Homeline load centers.
               </p><a name="_17701014_28662" class="xmlId"></a><div class="table data" data-srcid="_17701014_28662" data-xtrc="table:3" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 87px; ">
                        <col style="width: 79px; ">
                        <col style="width: 131px; ">
                        <col style="width: 184px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:7" lang="English_en">Ampere <br class="empty">Rating 
                              </p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:8" lang="English_en">AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:9" lang="English_en">1P—120/240
                                 Vac<br class="empty">Cat. No.
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:10" lang="English_en">2P—120/240
                                 Vac Common Trip<br class="empty">Cat. No.
                              </p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en"> 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115" class="xref" target="_blank">HOM115</a></span> <sup class="fnref"><a href="#fn1">[1]</a></sup><sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:14" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM215" class="xref" target="_blank">HOM215</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en"> 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:17" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120" class="xref" target="_blank">HOM120</a></span> <sup class="fnref"><a href="#fn1">[1]</a></sup><sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:18" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM220" class="xref" target="_blank">HOM220</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en"> 25 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:21" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM125" class="xref" target="_blank">HOM125</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:22" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM225" class="xref" target="_blank">HOM225</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:23" lang="English_en"> 30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:24" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:25" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM130" class="xref" target="_blank">HOM130</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:26" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM230" class="xref" target="_blank">HOM230</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en"> 35 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:29" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:30" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM235" class="xref" target="_blank">HOM235 </a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en"> 40 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:33" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM140" class="xref" target="_blank">HOM140</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:34" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM240" class="xref" target="_blank">HOM240</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en"> 45 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:38" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM245" class="xref" target="_blank">HOM245</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:39" lang="English_en"> 50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:41" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM150" class="xref" target="_blank">HOM150</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:42" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM250" class="xref" target="_blank">HOM250</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en"> 60 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:44" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:46" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM260" class="xref" target="_blank">HOM260</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:47" lang="English_en"> 70 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:49" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:50" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM270" class="xref" target="_blank">HOM270</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:51" lang="English_en"> 80 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:52" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:54" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM280" class="xref" target="_blank">HOM280</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:55" lang="English_en"> 90 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:56" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:57" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:58" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM290" class="xref" target="_blank">HOM290</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:59" lang="English_en">100 A </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:61" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:62" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2100" class="xref" target="_blank">HOM2100</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">110 A </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:64" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:66" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2110" class="xref" target="_blank">HOM2110</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:69" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:70" lang="English_en"><span class="ph orderable" data-xtrc="ph:21" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2125" class="xref" target="_blank">HOM2125</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:71" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:72" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:73" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:74" lang="English_en"><span class="ph orderable" data-xtrc="ph:22" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2150BB" class="xref" target="_blank">HOM2150BB</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup><sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:75" lang="English_en">175 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:76" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:77" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:78" lang="English_en"><span class="ph orderable" data-xtrc="ph:23" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2175BB" class="xref" target="_blank">HOM2175BB</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup><sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:79" lang="English_en">200
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:80" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:81" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:82" lang="English_en"><span class="ph orderable" data-xtrc="ph:24" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2200BB" class="xref" target="_blank">HOM2200BB</a> </span> <sup class="fnref"><a href="#fn2">[2]</a></sup><sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineHighMagneticHMCircuitBreake-1E2419092" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20High%20Magnetic%20(HM)%20Circuit%20Breakers%20(CPT)_0000056529.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline High Magnetic (HM) Circuit Breakers</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <p class="p" data-xtrc="p:1" lang="English_en">High magnetic trip circuit breakers are recommended for applications
                  where high initial inrush current may occur.
               </p><a name="_17701014_72272" class="xmlId"></a><div class="table data" data-srcid="_17701014_72272" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM-HM </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 141px; ">
                        <col style="width: 191px; ">
                        <col style="width: 147px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Amperes</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">1P—120/240
                                 Vac
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">2Ps</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:5" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:6" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115HM" class="xref" target="_blank">HOM115HM</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:7" lang="English_en">—</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:9" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120HM" class="xref" target="_blank">HOM120HM</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:10" lang="English_en">—</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineCombinationArcFaultCircuitI-1E2457802" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Combination%20Arc%20Fault%20Circuit%20Interruptors%20(HOM-CAFI)%20(CPT)_0000056548.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Combination Arc Fault Circuit Interruptors (HOM-CAFI)</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 240px; ">
                        <col style="width: 240px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom+cafi+pon_0000061423.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom+cafi+pon_0000061423.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">HOM 1P CAFI</p>
                              <p class="p" data-xtrc="p:2" lang="English_en">Plug-on
                                 Neutral
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1p+hom-cafi_0000061940.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1p+hom-cafi_0000061940.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:3" lang="English_en">HOM 1P CAFI</p>
                              <p class="p" data-xtrc="p:4" lang="English_en">Pigtail</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <p class="p" data-xtrc="p:5" lang="English_en">Homeline Combination Arc Fault Circuit Interrupters—Provide
                  overload and short circuit protection, plus arc fault protection in
                  accordance with the NEC and UL1699.
               </p><a name="_17701014_74633" class="xmlId"></a><div class="table data" data-srcid="_17701014_74633" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM-CAFI </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 172px; ">
                        <col style="width: 97px; ">
                        <col style="width: 74px; ">
                        <col style="width: 137px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:6" lang="English_en">Circuit Breaker
                                 Type
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:7" lang="English_en">Ampere Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:8" lang="English_en">Poles <br class="empty">120 Vac
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:9" lang="English_en">Cat. No.</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="spruce40" rowspan="1" colspan="4" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:10" lang="English_en"><b class="ph b" data-xtrc="b:1" lang="English_en">One-Pole</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">Combination Arc-Fault Circuit Interrupter
                                 with Pigtail Neutral
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:14" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM115CAFI" class="xref" target="_blank">HOM115CAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:17" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM120CAFI" class="xref" target="_blank">HOM120CAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">Plug-On Neutral Combination <br class="empty">Arc-Fault Interrupter
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:21" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM115CAFI" class="xref" target="_blank">HOM115PCAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:23" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:24" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM120CAFI" class="xref" target="_blank">HOM120PCAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" rowspan="1" colspan="4" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:25" lang="English_en"><b class="ph b" data-xtrc="b:2" lang="English_en">Two-Pole</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:26" lang="English_en">Combination
                                 Arc-Fault Circuit Interrupter with Pigtail Neutral
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">2</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:29" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM115CAFI" class="xref" target="_blank">HOM215CAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup> <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:30" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en">2</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:32" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"> <a href="http://www.schneider-electric.com/products/US/en/products/HOM120CAFI" class="xref" target="_blank">HOM220CAFI</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup> <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineDualFunctionCircuitBreakerH-1E24BDF82" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Dual%20Function%20Circuit%20Breaker%20(HOM-DF)%20(CPT)_0000056547.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Dual Function Circuit Breaker (HOM-DF)</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 240px; ">
                        <col style="width: 240px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom+df+pon_0000061939.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/hom+df+pon_0000061939.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">HOM 1P DF</p>
                              <p class="p" data-xtrc="p:2" lang="English_en">Plug-on
                                 Neutral
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1p+hom-df-purple_0000061938.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1p+hom-df-purple_0000061938.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:3" lang="English_en">HOM 1P DF</p>
                              <p class="p" data-xtrc="p:4" lang="English_en">Pigtail</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <p class="p" data-xtrc="p:5" lang="English_en">Homeline Combination Arc Fault and Ground Fault Circuit Interrupters
                  (Dual Function)—Provide overload and short circuit protection,
                  plus arc fault and ground fault protection in a single device in accordance
                  with the NEC, UL1699 and UL943.
               </p><a name="_17701014_77473" class="xmlId"></a><div class="table data" data-srcid="_17701014_77473" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM-DF </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 229px; ">
                        <col style="width: 74px; ">
                        <col style="width: 69px; ">
                        <col style="width: 108px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:6" lang="English_en">Circuit Breaker
                                 Type
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:7" lang="English_en">Ampere Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:8" lang="English_en">Poles <br class="empty">120 Vac
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:9" lang="English_en">Cat. No.</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:10" lang="English_en">Combination Arc-Fault and Ground Fault
                                 Circuit Interrupter with Pigtail Neutral
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115CAFI" class="xref" target="_blank">HOM115DF</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:16" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120CAFI" class="xref" target="_blank">HOM120DF</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">Plug-On Neutral Combination <br class="empty">Arc-Fault and Ground Fault <br class="empty">Circuit Interrupter
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:20" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115CAFI" class="xref" target="_blank">HOM115PDF</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">1</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:23" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120CAFI" class="xref" target="_blank">HOM120PDF</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineGFIHOM-GFI-1E256C822" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20GFI%20(HOM-GFI)%20(CPT)_0000056546.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline GFI (HOM-GFI)</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 240px; ">
                        <col style="width: 240px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-f_0000056558.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-f_0000056558.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">HOM 1P GFI <br class="empty">(With Ground Fault <br class="empty">Circuit Interrupter)<br class="empty">1 Space Required 
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-g_0000056557.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-g_0000056557.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:2" lang="English_en">HOM 2P GFI <br class="empty">(With Ground Fault <br class="empty">Circuit Interrupter)<br class="empty">2 Spaces Required 
                              </p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <p class="p" data-xtrc="p:3" lang="English_en">HOM-GFI circuit breakers provide overload and short circuit protection,
                  combined with Class A ground fault protection. Class A denotes a ground
                  fault circuit interrupter that will trip when a fault current to ground
                  is 6 milliamperes or more.
               </p><a name="_17701014_74167" class="xmlId"></a><div class="table data" data-srcid="_17701014_74167" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM-GFI</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 107px; ">
                        <col style="width: 84px; ">
                        <col style="width: 144px; ">
                        <col style="width: 144px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">Ampere <br class="empty">Rating 
                              </p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:5" lang="English_en">AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:6" lang="English_en">1P—120 Vac<br class="empty">1 Space Required
                              </p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:7" lang="English_en">2P—120/240
                                 Vac<br class="empty">Common Trip <br class="empty">2 Spaces Required
                              </p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:9" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115GFI" class="xref" target="_blank">HOM115GFI</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:11" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM215GFI" class="xref" target="_blank">HOM215GFI</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:14" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120GFI" class="xref" target="_blank">HOM120GFI</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:15" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM220GFI" class="xref" target="_blank">HOM220GFI</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:19" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM230GFI" class="xref" target="_blank">HOM230GFI</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">40 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:23" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM240GFI" class="xref" target="_blank">HOM240GFI</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:24" lang="English_en">50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:25" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:26" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:27" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM250GFI" class="xref" target="_blank">HOM250GFI</a></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineEquipmentProtectionDeviceHO-1E25B9472" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Equipment%20Protection%20Device%20(HOM-EPD)%20(CPT)_0000056545.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Equipment Protection Device (HOM-EPD)</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <p class="p" data-xtrc="p:1" lang="English_en">Homeline Equipment Protection Device—Circuit Breakers with
                  30 mA Equipment Ground Fault Protection (UL Listed).
               </p><a name="_17701014_78090" class="xmlId"></a><div class="table data" data-srcid="_17701014_78090" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOM-EPD—10 k AIR </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 122px; ">
                        <col style="width: 179px; ">
                        <col style="width: 179px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Amperes</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">1P—120 Vac</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">2P—120/240
                                 Vac<br class="empty">Common Trip 
                              </p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:5" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:6" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM115EPD" class="xref" target="_blank">HOM115EPD</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:7" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM215EPD" class="xref" target="_blank">HOM215EPD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:9" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM120EPD" class="xref" target="_blank">HOM120EPD</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM220EPD" class="xref" target="_blank">HOM220EPD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">25 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM225EPD" class="xref" target="_blank">HOM225EPD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:16" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM230EPD" class="xref" target="_blank">HOM230EPD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">40 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:19" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM240EPD" class="xref" target="_blank">HOM240EPD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:22" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM250EPD" class="xref" target="_blank">HOM250EPD</a></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HOMTTandem-1E25DF902" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/HOMT%20Tandem%20and%20HOMT%20Quad%20Tandem%20Circuit%20Breakers%20(CPT)_0000056544.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">HOMT Tandem and HOMT Quad Tandem Circuit Breakers</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701014_72568" class="xmlId"></a><div class="table data" data-srcid="_17701014_72568" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">HOMT Tandem Circuit Breakers</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 173px; ">
                        <col style="width: 83px; ">
                        <col style="width: 224px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">Ampere Rating   <sup class="fnref"><a href="#fn5">[5]</a></sup></p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">1P Tandem—120/240
                                 Vac (One Space Required)
                              </p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:4" lang="English_en">15 and 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:5" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:6" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515" class="xref" target="_blank">HOMT1515</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:7" lang="English_en">15 and 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:9" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1520" class="xref" target="_blank">HOMT1520</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:10" lang="English_en">20 and 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:12" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020" class="xref" target="_blank">HOMT2020</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">30 and 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:15" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT3015" class="xref" target="_blank">HOMT3015</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">30 and 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:18" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT3020" class="xref" target="_blank">HOMT3020</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table noheader" data-xtrc="table:2" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 480px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-d_0000056556.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-12-d_0000056556.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:19" lang="English_en">HOMT Quad </p>
                              <p class="p" data-xtrc="p:20" lang="English_en">Circuit Breaker </p>
                              <p class="p" data-xtrc="p:21" lang="English_en">2
                                 Spaces Required
                              </p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701014_72651" class="xmlId"></a><div class="table data" data-srcid="_17701014_72651" data-xtrc="table:3" lang="English_en">
                  <h4 class="title" data-xtrc="title:3" lang="English_en">HOMT Quad Tandem Circuit Breakers</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 94px; ">
                        <col style="width: 96px; ">
                        <col style="width: 71px; ">
                        <col style="width: 219px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:22" lang="English_en">Ampere Rating   <sup class="fnref"><a href="#fn5">[5]</a></sup></p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:23" lang="English_en">AIR</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:24" lang="English_en">2P Tandem—120/240
                                 Vac (Two Spaces Required)
                              </p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:25" lang="English_en">1P</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:26" lang="English_en">2P</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:29" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:30" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515215" class="xref" target="_blank">HOMT1515215</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:33" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:34" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515220" class="xref" target="_blank">HOMT1515220</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">25 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:38" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515225" class="xref" target="_blank">HOMT1515225</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:39" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:41" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:42" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515230" class="xref" target="_blank">HOMT1515230</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:44" lang="English_en">40 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:46" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515240" class="xref" target="_blank">HOMT1515240</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:47" lang="English_en">(2) 15 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:49" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:50" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT1515250" class="xref" target="_blank">HOMT1515250</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:51" lang="English_en">(2) 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:52" lang="English_en">20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:54" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020220" class="xref" target="_blank">HOMT2020220</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:55" lang="English_en">(2) 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:56" lang="English_en">25 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:57" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:58" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020225" class="xref" target="_blank">HOMT2020225</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:59" lang="English_en">(2) 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:61" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:62" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020230" class="xref" target="_blank">HOMT2020230</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">(2) 20 A </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:64" lang="English_en">40 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:66" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020240" class="xref" target="_blank">HOMT2020240</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">(2) 20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en">50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:69" lang="English_en">10 kA</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:70" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMT2020250" class="xref" target="_blank">HOMT2020250</a></span> <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="note panel panel-default" data-xtrc="note:1" lang="English_en">
                  <div class="panel-heading">
                     <h4 class="noteHeader panel-title">note</h4>
                  </div>
                  <div class="panel-body">
                     <p class="p" data-xtrc="p:71" lang="English_en">Typical catalog number (e.g. HOMT 1515230) represents two
                        1P, outer poles (two 15 A 1P CBs) and one 2P inner circuit breaker
                        with common trip (one 30 A 2P CB).
                     </p>
                  </div>
               </div>
            </div>
         </div><a name="HOMELINECircuitBreakerWireSizes-1E26B9682" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Circuit%20Breaker%20Wire%20Sizes%20(CPT)_0000056543.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Circuit Breaker Wire Sizes</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701014_72902" class="xmlId"></a><div class="table data" data-srcid="_17701014_72902" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">Circuit Breaker Wire Sizes</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 142px; ">
                        <col style="width: 86px; ">
                        <col style="width: 122px; ">
                        <col style="width: 131px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">Breaker Type</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Ampere Rating</p>
                           </th>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Wire Size (AWG/kcmil) <sup class="fnref"><a href="#fn6">[6]</a></sup></p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">Aluminum</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:5" lang="English_en">Copper</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:6" lang="English_en">HOM</p>
                              <p class="p" data-xtrc="p:7" lang="English_en">1P</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">15–30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:9" lang="English_en">14–8 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:10" lang="English_en">14–8
                                 AWG or
                              </p>
                              <p class="p" data-xtrc="p:11" lang="English_en">(2) 14–10 AWG</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">40–50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">8–2 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">8–2 AWG</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="4" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">HOM</p>
                              <p class="p" data-xtrc="p:16" lang="English_en">2P</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">15–30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">14–8 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">14–8
                                 AWG or
                              </p>
                              <p class="p" data-xtrc="p:20" lang="English_en">(2) 14–10 AWG</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">35–70 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">8–2 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:23" lang="English_en">8–2 AWG</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:24" lang="English_en"> 80–125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:25" lang="English_en">4–2/0 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:26" lang="English_en">4–2/0
                                 AWG
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en">150–200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">4 AWG–300 kcmil</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:29" lang="English_en">4 AWG–300
                                 kcmil
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:30" lang="English_en">HOMT and Quad</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en">15–30 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">14–8 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:33" lang="English_en">14–8
                                 AWG
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:34" lang="English_en">Quad Only</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">40–50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">6–12 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">6–14
                                 AWG
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:38" lang="English_en">HOM-GFI - 1P</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:39" lang="English_en">15–20 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">14–10 AWG</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:41" lang="English_en">14–10
                                 AWG
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:42" lang="English_en">HOM-GFI
                                 - 2P
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en">15–50
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:44" lang="English_en">12–4
                                 AWG
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">14–6 AWG</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineCircuitBreakerAccessories-1E26E5B22" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Circuit%20Breaker%20Accessories%20(CPT)_0000056542.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Accessories for Homeline Circuit Breakers</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701014_76025" class="xmlId"></a><div class="table data" data-srcid="_17701014_76025" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">Accessories</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 280px; ">
                        <col style="width: 77px; ">
                        <col style="width: 123px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">Description</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Cat. No.</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="spruce40" colspan="3" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:3" lang="English_en"><b class="ph b" data-xtrc="b:1" lang="English_en">Handle Attachments</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:4" lang="English_en">Handle Tie: Converts any two adjacent
                                 120/240 Vac single HOM circuit breakers to independent trip 2P 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:5" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1HT" class="xref" target="_blank">HOM1HT</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:6" lang="English_en">Handle Tie: Converts any two adjacent 120/240 Vac <br class="empty">1P side-by-side HOMT circuit breakers to independent trip 2P 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:7" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMTHT" class="xref" target="_blank">HOMTHT</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">Handle Clamp: Clamp for holding HOM 1P handle in the ON or OFF position </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:9" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO1LO" class="xref" target="_blank">QO1LO</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:10" lang="English_en">Handle Blocking Device: Attaches to standard HOM 2P circuit breakers
                                 for holding the handle in the OFF position 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:11" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2HBD" class="xref" target="_blank">HOM2HBD</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">Handle Padlock Attachment: For padlocking 1P Standard HOM breakers
                                 in the ON or OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1PA" class="xref" target="_blank">HOM1PA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="3" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">Handle Padlock Attachment: For <br class="empty">padlocking 2P Standard
                                 HOM circuit breakers in ON or OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">15–70 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:16" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1PA" class="xref" target="_blank">HOM2PALA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">80–125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:18" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1PA" class="xref" target="_blank">HOM2PAHA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">150–200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:20" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1PA" class="xref" target="_blank">HOM2PAVHA</a> </span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">Handle Padlock Attachment: For padlocking 1P CAFI, DF, GFI, and EPD
                                 HOM breakers in ON or OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:22" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2PALA" class="xref" target="_blank">HOMELEC1PA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:23" lang="English_en">Handle Padlock Attachment: For padlocking 2P CAFI, GFI, and EPD HOM
                                 breakers in ON or OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:24" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2PALA" class="xref" target="_blank">HOMELEC2PALA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:25" lang="English_en">Handle Padlock Attachment: For padlocking
                                 center poles of Homeline Quad breakers in the OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:26" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMQPA" class="xref" target="_blank">HOMQPA</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en">Handle
                                 Padlock Attachment: For padlocking main circuit breakers in convertible
                                 load center in OFF position
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">50–125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:29" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM1PA" class="xref" target="_blank">QOM1PA</a></span> <sup class="fnref"><a href="#fn7">[7]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:30" lang="English_en">100–225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:31" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2PA" class="xref" target="_blank">QOM2PA</a></span> <sup class="fnref"><a href="#fn7">[7]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" colspan="3" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:32" lang="English_en"><b class="ph b" data-xtrc="b:2" lang="English_en">Sub-Feed Lugs</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:33" lang="English_en">125 A 2P plug-on—2 spaces required</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:34" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOML2125" class="xref" target="_blank">HOML2125</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">225 A 2P plug-on—4 spaces
                                 required
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:36" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOML2225" class="xref" target="_blank">HOML2225</a></span> <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
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
         <li class="fn"><a name="fn1" class="xmlId"></a>UL Listed as SWD (switching duty) rated.
            Suitable for switching 120 Vac fluorescent lighting loads.
         </li>
         <li class="fn"><a name="fn2" class="xmlId"></a>UL Listed as HACR type for use with air
            conditioning, heating and refrigeration equipment haing motor group
            combinations and marked for use with HACR type circuit breakers.
         </li>
         <li class="fn"><a name="fn3" class="xmlId"></a>Requires four spaces (1 AWG–300 kcmil Al/Cu). Use
            only in 1Ø panel rated 150 A or greater. 
         </li>
         <li class="fn"><a name="fn4" class="xmlId"></a>For 120/240 V only, not for 208Y/120 V.
         </li>
         <li class="fn"><a name="fn5" class="xmlId"></a>15–20 A tandem or quad tandem circuit breakers are suitable
            for use with 60<sup class="ph sup" data-xtrc="sup:1" lang="English_en">o</sup>C or 75<sup class="ph sup" data-xtrc="sup:2" lang="English_en">o</sup>C conductors. 25–50
            A tandem or quad tandem circuit breakers are suitable for use with
            75<sup class="ph sup" data-xtrc="sup:3" lang="English_en">o</sup>C conductors only.
         </li>
         <li class="fn"><a name="fn6" class="xmlId"></a>15–30 A circuit
            breakers are suitable for use with 60<sup class="ph sup" data-xtrc="sup:7" lang="English_en">o</sup>C or 75<sup class="ph sup" data-xtrc="sup:8" lang="English_en">o</sup>C conductors. 40–125 A circuit breakers are suitable for use
            with 75<sup class="ph sup" data-xtrc="sup:9" lang="English_en">o</sup>C conductors.
         </li>
         <li class="fn"><a name="fn7" class="xmlId"></a>50–125 A QOM1 frame
            size; 100–225 A QOM2 frame size.
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
  var refId = '_17701014_78898';
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
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2F561d5f9ae4b0c5c41a2447fa%2Fr%2F_17701014_78898&amp;size=180"
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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701014_78898 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:38 GMT -->
</html>
<?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("auth/views/not_logged_in.php");
}
?>