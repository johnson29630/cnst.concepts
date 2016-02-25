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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701013_72833 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:37 GMT -->
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

<title>QO and Homeline Load Center Accessories - Schneider Electric Digest Plus</title>

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
window.refId = "_17701013_72833";
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


<body class="readerPage" data-pageId=cb554f05-67b2-4cc8-b7e2-c6a1ff153ac8>



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
                    data-itemKey="561d600be4b0c5c41a247991"
                    data-projectKey="561d5d65e4b0c5c41a243bf2"
                    data-parentKey="561d5f9ae4b0c5c41a2447fa">
                    <div class="col-xs-12 content-container">
<div class="itemPreview"><a name="_17701013_728332" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/QO%20and%20Homeline%20Load%20Center%20Accessories%20(CPT)_0000056434.xml">
      <h1 class="title" data-xtrc="title:1" lang="English_en">QO and Homeline Load Center Accessories</h1>
      <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701012_560552" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Class%201130%20_%20Refer%20to%20Catalog%201100CT0501%20(CPT)_0000056536.xml">
         <h2 class="title" data-xtrc="title:1" lang="English_en">Class <b class="ph b" data-xtrc="b:1" lang="English_en">1130</b> / Refer to Catalog <span class="ph" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/downloads/us/en/document/1100CT0501" class="xref" target="_blank"><b class="ph b" data-xtrc="b:2" lang="English_en">1100CT0501</b></a></span></h2><a name="QOLoadCenterAccessories-1E20C9D22" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/QO%20Load%20Center%20Accessories%20(CPT)_0000056436.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">QO Load Center Accessories</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701012_18634" class="xmlId"></a><div class="table data" data-srcid="_17701012_18634" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en"><b class="ph b" data-xtrc="b:1" lang="English_en">QO Load Center Accessories</b></h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 70px; ">
                        <col style="width: 321px; ">
                        <col style="width: 54px; ">
                        <col style="width: 36px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">Description</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Cat. No.</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Schedule</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="{00ef15}" rowspan="5" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:4" lang="English_en">Retaining Kit for
                                 Breakers <br class="empty">Used as Back-fed Mains
                              </p>
                           </td>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:5" lang="English_en">Secures circuit breaker to interior when used as a back-fed main.
                                 For QO612L100F/S, RB,
                              </p>
                              <p class="p" data-xtrc="p:6" lang="English_en">QO612L100DF/S, QO816L100F/S, RB, QO816L100DF/S
                                 and QO148L125GF/S, GRB load centers 
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:7" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK2MB" class="xref" target="_blank">PK2MB</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:9" lang="English_en">Secures 3P circuit breaker without accessories to left side of interior
                                 when used as a back-fed main. For 3Ø load centers 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK3MB" class="xref" target="_blank">PK3MB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">Secures circuit breaker to interior when used as a back-fed main
                                 for 2P QO 150–200 A circuit breakers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK5RK" class="xref" target="_blank">PK5RK</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">Secures ONE circuit breaker with or without electrical accessories
                                 to right side of interior when used as a back-fed main <br class="empty">For 1Ø 100–125 ampere convertible main load centers.
                                 Series S01 and S02
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:16" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4MB2LA" class="xref" target="_blank">PK4MB2LA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:18" lang="English_en">Secures ONE circuit breaker with or without electrical accessories
                                 to right side of interior when used as a back-fed main <br class="empty">For 1Ø 150–225 ampere convertible main load centers.
                                 Series S01 and S02
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:19" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4MB2HA" class="xref" target="_blank">PK4MB2HA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:21" lang="English_en">Cover Sealing Strap</p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">Provides means of sealing trim mounting screws on QO load center
                                 covers 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:23" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO1SE" class="xref" target="_blank">QO1SE</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:24" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:25" lang="English_en">Replacement Cover
                                 Directory Label
                              </p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:26" lang="English_en">1 through 42 numbered universal replacement directory label for load
                                 center covers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:27" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LSDL" class="xref" target="_blank">LSDL</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:28" lang="English_en">DE5</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:29" lang="English_en">Circuit Identification
                                 Stickers
                              </p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:30" lang="English_en">Circuit identification stickers for use on cover directory labels
                                 to identify branch circuits
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:31" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PSDS" class="xref" target="_blank">PSDS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">DE5</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="5" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"><a name="_17701013_20407" class="xmlId"></a><p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:33" lang="English_en">Filler Plates</p>
                           </td>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:34" lang="English_en">Fills opening in covers if twistout
                                 is removed in error
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:35" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOFP" class="xref" target="_blank">QOFP</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">Fills main circuit breaker opening
                                 in convertible load center covers 100–125 A
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:38" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM1FP" class="xref" target="_blank">QOM1FP</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:39" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">Fills main circuit breaker opening
                                 in convertible load center covers 150–225 A
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:41" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2FP" class="xref" target="_blank">QOM2FP</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:42" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en">Fills main circuit breaker opening
                                 in 3Ø load center covers (S01 and S02 Series)
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:44" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/KFP" class="xref" target="_blank">KFP</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:46" lang="English_en">Fills main circuit breaker opening
                                 in “Q” style 3Ø load center covers (S03 Series)
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:47" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/Q2FP" class="xref" target="_blank">Q2FP</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="3" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:49" lang="English_en">Door Lock Kits</p>
                           </td>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:50" lang="English_en">Use with QO612L100DF/S, QO612L100DFCU/SCU,
                                 QO612L100DTF/S, QO816L100DF/S, QO816L100DFCU/SCU, QO816L100DTF/S,
                                 QO48M30DSGP, or QO48M60DSGP
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:51" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK8FL" class="xref" target="_blank">PK8FL</a> <sup class="fnref"><a href="#fn1">[1]</a></sup></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:52" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en">Use with convertible mains, 1Ø
                                 and 3Ø 100–225 A, and fixed mains, <br class="empty">3Ø
                                 125–225 A indoor load centers 
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:54" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK6FL" class="xref" target="_blank">PK6FL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:55" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:56" lang="English_en">Use with 300 and 400 ampere indoor
                                 load centers
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:57" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4FL" class="xref" target="_blank">PK4FL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:58" lang="English_en">PE1A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="5" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:59" lang="English_en">Neutral / Ground
                                 Lugs
                              </p>
                           </td>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">Field-installed for 12– 2 Al
                                 or 14–4 Cu AWG wire
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:61" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK70AN" class="xref" target="_blank">LK70AN</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:62" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">Field-installed for 6–2/0 Al/Cu
                                 AWG wire
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:64" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK100AN" class="xref" target="_blank">LK100AN</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:66" lang="English_en">Field-installed for 14–2/0
                                 Al/Cu AWG wire
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:67" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK125AN" class="xref" target="_blank">LK125AN</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:69" lang="English_en">Field-installed for 2–3/0 Al/Cu
                                 AWG wire
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:70" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK150AN" class="xref" target="_blank">LK150AN</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:71" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:72" lang="English_en">Field-installed for 4 AWG to 300 kcmil
                                 Al/Cu wire. Use in Series S, <br class="empty">150-225A QO load center
                                 or S03 and below, 150-225A HOM load center
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:73" lang="English_en"><span class="ph orderable" data-xtrc="ph:21" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK225AN" class="xref" target="_blank">LK225AN</a></span></p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:74" lang="English_en"><span class="ph orderable" data-xtrc="ph:22" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK225ANHOM" class="xref" target="_blank">LK225ANHOM</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:75" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="4" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:76" lang="English_en">Ground Bar Kits</p>
                           </td>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:77" lang="English_en">Standard PK15GTA with a 1–4/0
                                 Al/Cu Lug 
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:78" lang="English_en"><span class="ph orderable" data-xtrc="ph:23" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK15GTAL" class="xref" target="_blank">PK15GTAL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:79" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:80" lang="English_en">Standard PK18GTA with a 1–4/0
                                 Al/Cu Lug
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:81" lang="English_en"><span class="ph orderable" data-xtrc="ph:24" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTAL" class="xref" target="_blank">PK18GTAL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:82" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:83" lang="English_en">Standard PK23GTA with a 1–4/0
                                 Al/Cu Lug
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:84" lang="English_en"><span class="ph orderable" data-xtrc="ph:25" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTAL" class="xref" target="_blank">PK23GTAL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:85" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:86" lang="English_en">Insulator Kit for PK7GTA through PK27GTA</p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:87" lang="English_en"><span class="ph orderable" data-xtrc="ph:26" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PKGTAB" class="xref" target="_blank">PKGTAB</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:88" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:89" lang="English_en">Handle Padlock Attachment</p>
                           </td>
                           <td rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:90" lang="English_en">For padlocking main circuit breakers
                                 in convertible load centers OFF
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:91" lang="English_en">50–125 A</p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:92" lang="English_en"><span class="ph orderable" data-xtrc="ph:27" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM1PA" class="xref" target="_blank">QOM1PA</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:93" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:94" lang="English_en">100–225 A</p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:95" lang="English_en"><span class="ph orderable" data-xtrc="ph:28" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2PA" class="xref" target="_blank">QOM2PA</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:96" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" colspan="4" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:97" lang="English_en"><b class="ph b" data-xtrc="b:2" lang="English_en">QO Load Center Manual Power Transfer Accessories</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="5" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:98" lang="English_en">Manual Transfer
                                 Equipment Kit
                              </p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:99" lang="English_en">For interlocking the handles of two 2P or one 2P and one 1P QO and
                                 Q1 circuit breakers mounted side-by-side so that only one circuit
                                 breaker can be “ON’’ at a time.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:100" lang="English_en"><span class="ph orderable" data-xtrc="ph:29" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2DTI" class="xref" target="_blank">QO2DTI</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:101" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:102" lang="English_en">QO2DTI mechanical interlock attachment with retaining kits for securing
                                 two adjacent back-fed circuit breakers in dual power supply applications.
                                 Can be used with (2) 2P or (1) 2P and (1) 1P QO circuit breakers in
                                 QO816L100 load centers.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:103" lang="English_en"><span class="ph orderable" data-xtrc="ph:30" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2DTIM" class="xref" target="_blank">QO2DTIM</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:104" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:105" lang="English_en">Secures two 2P circuit breakers to right side of interior when used
                                 as back-fed mains, a QO2DTI Kit included for back-up power supply
                                 applications. For 1Ø 100–125 ampere convertible main load
                                 centers. Series S01 and S02.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:106" lang="English_en"><span class="ph orderable" data-xtrc="ph:31" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4DTIM4LA" class="xref" target="_blank">PK4DTIM4LA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:107" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:108" lang="English_en">Secures two 2P circuit breakers to right side of interior when used
                                 as back-fed mains, a QO2DTI Kit included for back-up power supply
                                 applications. For 1Ø 150–225 ampere convertible main load
                                 centers. Series S01 and S02.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:109" lang="English_en"><span class="ph orderable" data-xtrc="ph:32" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4DTIM4HA" class="xref" target="_blank">PK4DTIM4HA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:110" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:111" lang="English_en">Secures two 2P circuit breakers to left side of interior when used
                                 as back-fed mains, a QO2DTI Kit included for back-up power supply
                                 applications. For 1Ø 100–125 ampere convertible main load
                                 centers. Series S01 and S02.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:112" lang="English_en"><span class="ph orderable" data-xtrc="ph:33" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4DTIM4LAL" class="xref" target="_blank">PK4DTIM4LAL</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:113" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="3" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:114" lang="English_en">Generator Circuit
                                 Breaker Interlock Kit
                              </p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:115" lang="English_en">For use on “G” and “S” Series NEMA 1
                                 and “G”, “S1” and “S2” Series
                                 NEMA 3R load centers. Interlocks a QOM1 2P main circuit breaker of
                                 a load center (100–125 A) with a QO 2P (15–125 A) branch
                                 circuit breaker. <br class="empty">Includes a retaining kit.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:116" lang="English_en"><span class="ph orderable" data-xtrc="ph:34" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOCRBGK1C" class="xref" target="_blank">QOCRBGK1C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:117" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:118" lang="English_en">For use on “G” and “S” Series NEMA 1
                                 and “G” and “S1” Series NEMA 3R load centers.
                                 Interlocks a QOM2 2P main circuit breaker of a load center (150–225
                                 A) with a QO 2P (15–125 A) branch circuit breaker. Includes
                                 a retaining kit.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:119" lang="English_en"><span class="ph orderable" data-xtrc="ph:35" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOCGK2C" class="xref" target="_blank">QOCGK2C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:120" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:121" lang="English_en">For use on “S2” Series
                                 NEMA 3R load centers. Interlocks a QOM2 2P main circuit breaker of
                                 a load center (150–225 A) with a QO 2P (15–125 A) branch
                                 circuit breaker. Includes a retaining kit.
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:122" lang="English_en"><span class="ph orderable" data-xtrc="ph:36" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QORBGK2C" class="xref" target="_blank">QORBGK2C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:123" lang="English_en">DE3A</p>
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
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-11_0000056448.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-11_0000056448.eps" class="image pgwide img-responsive" style="display:inline;"></a><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qo+acc-r1_0000056447.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qo+acc-r1_0000056447.eps" class="image pgwide" style="width:436.34pt;display:inline;"></a></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="HomelineLoadCenterAccessories-1E22BF922" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Homeline%20Load%20Center%20Accessories%20(CPT)_0000056535.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Homeline Load Center Accessories</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701013_17173" class="xmlId"></a><div class="table data" data-srcid="_17701013_17173" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">Homeline Load Center Accessories</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 73px; ">
                        <col style="width: 245px; ">
                        <col style="width: 49px; ">
                        <col style="width: 59px; ">
                        <col style="width: 55px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">Description</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Cat. No.</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Schedule</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="{00ef15}" rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:4" lang="English_en">Handle Padlock Attachment</p>
                           </td>
                           <td rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:5" lang="English_en">For padlocking main circuit breakers
                                 in convertible load center, “OFF”
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:6" lang="English_en">50–125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:7" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM1PA" class="xref" target="_blank">QOM1PA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:9" lang="English_en">100–225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2PA" class="xref" target="_blank">QOM2PA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">DE2E</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="3" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"><a name="_17701013_84088" class="xmlId"></a><p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:12" lang="English_en">Filler Plates</p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">Fills opening in covers if twistout
                                 is removed in error 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:14" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMFP" class="xref" target="_blank">HOMFP</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">DE3C</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">Fills main circuit breaker opening
                                 in convertible load centers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">100–125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:18" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM1FP" class="xref" target="_blank">QOM1FP</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">150–225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:21" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2FP" class="xref" target="_blank">QOM2FP</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:22" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="5" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:23" lang="English_en">Neutral / Ground
                                 Lugs
                              </p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:24" lang="English_en">Field-installed for 14–2 AWG
                                 Al or 14–4 AWG Cu wire 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:25" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK70AN" class="xref" target="_blank">LK70AN</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:26" lang="English_en">DE3B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:27" lang="English_en">Field-installed for 6–2/0 AWG
                                 Al/Cu wire 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:28" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK100AN" class="xref" target="_blank">LK100AN</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:29" lang="English_en">DE3B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:30" lang="English_en">Field-installed for 14–2/0
                                 AWG Al/Cu wire 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:31" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK125AN" class="xref" target="_blank">LK125AN</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">DE3B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:33" lang="English_en">Field-installed for 4 AWG to 300 kcmil
                                 Al/Cu wire.  Use in Series S, 150-225A QO load center or S03 and below,
                                 150-225A HOM load center
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:34" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK225AN" class="xref" target="_blank">LK225AN</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">Field-installed
                                 for 4 AWG–300 kcmil Al/Cu wire. Use in Series S04, 150–225
                                 A HOM load center
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:37" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LK225ANHOM" class="xref" target="_blank">LK225ANHOM</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:38" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="4" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:39" lang="English_en">Retaining Kit for
                                 Breakers <br class="empty">Used as Back-fed Mains
                              </p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">Secures circuit breaker to interior when used as a back-fed main.
                                 For HOM612L100F/S, RB and HOM48L125GC, GRB load centers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:41" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM1RK" class="xref" target="_blank">HOM1RK</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:42" lang="English_en">DE3C</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:43" lang="English_en">Secures ONE circuit breaker right
                                 side of interior when used as a back-fed main For 100–125 A
                                 convertible main load centers, Series S01 and S02
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:44" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM4RK2LA" class="xref" target="_blank">HOM4RK2LA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">DE3C</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:46" lang="English_en">Secures ONE circuit breaker right
                                 side of interior when used as a back-fed main For 150–225 A
                                 convertible main load centers, Series S01 and S02
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:47" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM4RK2HA" class="xref" target="_blank">HOM4RK2HA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">DE3C</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:49" lang="English_en">Secures circuit breaker to interior
                                 when used as a back-fed main For 2P 150–200 A circuit breakers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:50" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM5RK" class="xref" target="_blank">HOM5RK</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:51" lang="English_en">DE3C</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:52" lang="English_en">Door Lock Kit</p>
                           </td>
                           <td colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en">Use with convertible indoor load center covers (Series S-1)</p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:54" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK6FL" class="xref" target="_blank">PK6FL</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:55" lang="English_en">DE3A</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:56" lang="English_en">Replacement Cover
                                 Directory Label
                              </p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:57" lang="English_en">1 through 42 numbered universal replacement
                                 directory label for load center covers
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:58" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/LSDL" class="xref" target="_blank">LSDL</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:59" lang="English_en">DE5</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:60" lang="English_en">Circuit Identification
                                 Stickers
                              </p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:61" lang="English_en">Circuit identification stickers for
                                 use on cover directory labels to identify branch circuits
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:62" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PSDS" class="xref" target="_blank">PSDS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">DE5</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="3" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:64" lang="English_en">Generator Circuit <br class="empty">Breaker Interlock Kit
                              </p>
                           </td>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">For use on “S” Series NEMA 1 and NEMA 3R load centers.
                                 Interlocks a QOM1 2P main circuit breaker of a load center (100–125
                                 A) with a Homeline 2P (15–125 A) branch circuit breaker
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:66" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMCRBGK1C" class="xref" target="_blank">HOMCRBGK1C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">DE3D</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en">For use on “S” Series
                                 NEMA 1 and “S1” Series NEMA 3R load centers. Interlocks
                                 a QOM2 2P main circuit breaker of a load center (150–225 A)
                                 with a Homeline 2P (15–125 A) branch circuit breaker
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:69" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMCGK2C" class="xref" target="_blank">HOMCGK2C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:70" lang="English_en">DE3D</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:71" lang="English_en">For use on “S2”
                                 and “S3” Series NEMA 3R QOM2 load centers. Interlocks
                                 a QOM2 2P main circuit breaker of a load center (150–225 A)
                                 with a Homeline 2P (15–125 A) branch circuit breaker
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:72" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOMRBGK2C" class="xref" target="_blank">HOMRBGK2C</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:73" lang="English_en">DE3D</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div><a name="SurgeProtectiveDevices-1E232F852" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Surge%20Protective%20Devices%20(CPT)_0000056534.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">Surge Protective Devices</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 480px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qosamk_0000056514.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qosamk_0000056514.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">QOSAMK</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701012_186342" class="xmlId"></a><div class="table data" data-srcid="_17701012_186342" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">Load Center and CSED Surge Protection Devices</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 62px; ">
                        <col style="width: 15px; ">
                        <col style="width: 261px; ">
                        <col style="width: 85px; ">
                        <col style="width: 58px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Description</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Cat. No.</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">Schedule</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="{00ef15}" rowspan="4" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:5" lang="English_en">Surge Arresters</p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:6" lang="English_en">For use on 1Ø3W, 150 Vac maximum </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:7" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SDSA1175" class="xref" target="_blank">SDSA1175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">DE1B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:9" lang="English_en">For use on 3Ø4W, 650 Vac maximum</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/SDSA3650" class="xref" target="_blank">SDSA3650</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">DE1B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:12" lang="English_en">QO Surgebreaker <sub class="ph sub" data-xtrc="sub:1" lang="English_en">C</sub>UL<sub class="ph sub" data-xtrc="sub:2" lang="English_en">US</sub> Listed Secondary Surge Arrester 150 Vac line-to-ground maximum
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:13" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2175SB" class="xref" target="_blank">QO2175SB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:14" lang="English_en">DE1B</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">Homeline Surgebreaker <sub class="ph sub" data-xtrc="sub:3" lang="English_en">C</sub>UL<sub class="ph sub" data-xtrc="sub:4" lang="English_en">US</sub> Listed Secondary Surge Arrester 150 Vac line-to-ground
                                 maximum
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:16" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOM2175SB" class="xref" target="_blank">HOM2175SB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">DE1B</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" colspan="2" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:18" lang="English_en">Surge Arrester Mounting
                                 Kit
                              </p>
                           </td>
                           <td rowspan="1" style="vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:19" lang="English_en">UL Listed for mounting
                                 SDSA1175 surge arrester into ground bar mounting holes on 1Ø
                                 convertible main circuit breaker load centers 
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:20" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOSAMK" class="xref" target="_blank">QOSAMK</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:21" lang="English_en">DE3A</p>
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
         <li class="fn"><a name="fn1" class="xmlId"></a>QO403L60NF/S does not have provisions
            for a field-installed lock.
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
  var refId = '_17701013_72833';
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
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2F561d5f9ae4b0c5c41a2447fa%2Fr%2F_17701013_72833&amp;size=180"
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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701013_72833 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:37 GMT -->
</html>
<?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("_ext_not_logged_in.php");
}
?>