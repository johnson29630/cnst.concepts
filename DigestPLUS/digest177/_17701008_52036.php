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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701008_52036 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:34 GMT -->
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

<title>3Ø, Main Lugs and Main Circuit Breaker - Schneider Electric Digest Plus</title>

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
window.refId = "_17701008_52036";
window.urlRefId = "";
window.publicationLandingPage = "/portals/ui/digest/pages/landingPages/digest177";
window.publicationName = "Digest 177";
</script>

<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/viewer.js"></script>
<script src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/table-watermarks.js"></script>

<!-- d+ext extensions -->
<script src="../ext/extend.js"></script>
<?php echo('<script>var listuid="'.$login->getUsername().'";</script>'."\n") ?>
<link rel="stylesheet" href="../ext/extend.css"></link>
</head>


<body class="readerPage" data-pageId=7753c992-8412-4182-9737-92c5fb8d4595>



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
                    data-itemKey="561d5fa3e4b0c5c41a244df0"
                    data-projectKey="561d5d65e4b0c5c41a243bf2"
                    data-parentKey="561d5f9ae4b0c5c41a2447fa">
                    <div class="col-xs-12 content-container">
<div class="itemPreview"><a name="_17701008_520362" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/3Ø,%20Main%20Lugs%20and%20Main%20Circuit%20Breaker%20(CPT)_0000056503.xml">
      <h1 class="title" data-xtrc="title:1" lang="English_en">3Ø, Main Lugs and Main Circuit Breaker</h1>
      <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701008_651633" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Class%201130%20_%20Refer%20to%20Catalog%201100CT0501%20(CPT)_0000056502.xml">
         <h2 class="title" data-xtrc="title:1" lang="English_en">Class <b class="ph b" data-xtrc="b:1" lang="English_en">1130</b> / Refer to Catalog <span class="ph" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/downloads/us/en/document/1100CT0501" class="xref" target="_blank"><b class="ph b" data-xtrc="b:2" lang="English_en">1100CT0501</b></a></span></h2>
         <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701008_Heading5_62" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/3Ø4W-208Y_120%20Vac,%203Ø4W-240_120%20Vac%20Delta%20and%203Ø3W-240%20Vac%20Delta-UL%20List_0000056501.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">3Ø4W—208Y/120 Vac, 3Ø4W—240/120 Vac
               Delta and 3Ø3W—240 Vac Delta—UL Listed
            </h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en"><a name="_17701008_66543" class="xmlId"></a><div class="table data" data-srcid="_17701008_66543" data-xtrc="table:1" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en"><b class="ph b" data-xtrc="b:1" lang="English_en">Main Lugs and Main Breakers (Accepts Only QO Plug-On Circuit
                        Breakers) </b></h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 14px; ">
                        <col style="width: 4px; ">
                        <col style="width: 33px; ">
                        <col style="width: 41px; ">
                        <col style="width: 71px; ">
                        <col style="width: 53px; ">
                        <col style="width: 58px; ">
                        <col style="width: 53px; ">
                        <col style="width: 53px; ">
                        <col style="width: 57px; ">
                        <col style="width: 42px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="2" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:1" lang="English_en">&nbsp;</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Mains</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Rating</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en"> Max. Number</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:5" lang="English_en">of 1P QO <br class="empty">circuit breakers
                              </p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:6" lang="English_en">Load Center</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:7" lang="English_en">Box and Interior</p>
                           </th>
                           <th rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:8" lang="English_en">Indoor Cover with
                                 Door
                              </p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:9" lang="English_en">(Order
                                 Separately)
                              </p>
                           </th>
                           <th colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:10" lang="English_en">Main</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:11" lang="English_en">Wire Size</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:12" lang="English_en">AWG/kcmil</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:13" lang="English_en">Equipment</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:14" lang="English_en">Ground Bar Kit</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:15" lang="English_en">(Order Separately)</p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:16" lang="English_en">Box No.</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:17" lang="English_en">See</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:18" lang="English_en">Pages 1-17, 1–18</p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:19" lang="English_en">Cat. No.</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:20" lang="English_en">Flush</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:21" lang="English_en">Surface</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:22" lang="English_en">Al</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:23" lang="English_en">Cu</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="{00ef15}" rowspan="16" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: solid; border-left-width: 1px; border-left-color: #000000; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:24" lang="English_en">I</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:25" lang="English_en">N</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:26" lang="English_en">D</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:27" lang="English_en">O</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:28" lang="English_en">O</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:29" lang="English_en">R</p>
                           </td>
                           <td rowspan="16" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">&nbsp;</td>
                           <td data-shading="spruce40" rowspan="1" colspan="9" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:30" lang="English_en"><b class="ph b" data-xtrc="b:2" lang="English_en">Fixed Mains—Factory-installed Main Lugs—Copper Bus—65
                                    kA Short Circuit Current Rating</b>  <sup class="fnref"><a href="#fn1">[1]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en"> 60 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en"> 3</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:33" lang="English_en">QO403L60NF/S</p>
                           </td>
                           <td rowspan="1" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:34" lang="English_en">Cover Included With Load Center (No
                                 Door)
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:36" lang="English_en">10–6</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:37" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4GTA" class="xref" target="_blank">PK4GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:38" lang="English_en">13</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:39" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:40" lang="English_en">12</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:41" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO312L125G" class="xref" target="_blank">QO312L125G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:42" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC16UF" class="xref" target="_blank">QOC16UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:43" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC16US" class="xref" target="_blank">QOC16US</a></span></p>
                           </td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:44" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:45" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:46" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:47" lang="English_en"> 6</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:49" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO320L125G" class="xref" target="_blank">QO320L125G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:50" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC24UF" class="xref" target="_blank">QOC24UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:51" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC24US" class="xref" target="_blank">QOC24US</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:52" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:53" lang="English_en"> 7</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:54" lang="English_en">24</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:55" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO324L125G" class="xref" target="_blank">QO324L125G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:56" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC24UF" class="xref" target="_blank">QOC24UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:57" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC24US" class="xref" target="_blank">QOC24US</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:58" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:59" lang="English_en"> 7</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:61" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:62" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO318L200G" class="xref" target="_blank">QO318L200G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:63" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30UF" class="xref" target="_blank">QOC30UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:64" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30US" class="xref" target="_blank">QOC30US</a></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">6–250</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:66" lang="English_en">6–250</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:68" lang="English_en"> 9</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:69" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:70" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330L200G" class="xref" target="_blank">QO330L200G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:71" lang="English_en"><span class="ph orderable" data-xtrc="ph:15" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30UF" class="xref" target="_blank">QOC30UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:72" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30US" class="xref" target="_blank">QOC30US</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:73" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:74" lang="English_en"> 9</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:75" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:76" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:77" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342L225G" class="xref" target="_blank">QO342L225G</a> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:78" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC42UF" class="xref" target="_blank">QOC42UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:79" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC42US" class="xref" target="_blank">QOC42US</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:80" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:81" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:82" lang="English_en">Factory-incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:83" lang="English_en">11</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" rowspan="1" colspan="9" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:84" lang="English_en"><b class="ph b" data-xtrc="b:3" lang="English_en">Convertible Mains—Factory-installed
                                    QDL Main Circuit Breaker—Copper Bus—25 kA Short Circuit
                                    Current Rating  </b><sup class="fnref"><a href="#fn5">[5]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:85" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:86" lang="English_en">27</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:87" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO327M100" class="xref" target="_blank">QO327M100 </a> <sup class="fnref"><a href="#fn6">[6]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:88" lang="English_en"><span class="ph orderable" data-xtrc="ph:21" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30UF" class="xref" target="_blank">QOC30UF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:89" lang="English_en"><span class="ph orderable" data-xtrc="ph:22" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC30US" class="xref" target="_blank">QOC30US</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:90" lang="English_en">4–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:91" lang="English_en">4–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:92" lang="English_en"><span class="ph orderable" data-xtrc="ph:23" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK15GTA" class="xref" target="_blank">PK15GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:93" lang="English_en"> 9</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:94" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:95" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:96" lang="English_en"><span class="ph orderable" data-xtrc="ph:24" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ125" class="xref" target="_blank">QO330MQ125</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:97" lang="English_en"><span class="ph orderable" data-xtrc="ph:25" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:98" lang="English_en"><span class="ph orderable" data-xtrc="ph:26" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:99" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:100" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:101" lang="English_en"><span class="ph orderable" data-xtrc="ph:27" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:102" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:103" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:104" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:105" lang="English_en"><span class="ph orderable" data-xtrc="ph:28" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ150" class="xref" target="_blank">QO330MQ150</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:106" lang="English_en"><span class="ph orderable" data-xtrc="ph:29" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:107" lang="English_en"><span class="ph orderable" data-xtrc="ph:30" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:108" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:109" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:110" lang="English_en"><span class="ph orderable" data-xtrc="ph:31" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:111" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:112" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:113" lang="English_en"><span class="ph orderable" data-xtrc="ph:32" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342MQ150" class="xref" target="_blank">QO342MQ150</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:114" lang="English_en"><span class="ph orderable" data-xtrc="ph:33" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:115" lang="English_en"><span class="ph orderable" data-xtrc="ph:34" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:116" lang="English_en"><span class="ph orderable" data-xtrc="ph:35" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTA" class="xref" target="_blank">PK23GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:117" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:118" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:119" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:120" lang="English_en"><span class="ph orderable" data-xtrc="ph:36" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ200" class="xref" target="_blank">QO330MQ200</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:121" lang="English_en"><span class="ph orderable" data-xtrc="ph:37" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:122" lang="English_en"><span class="ph orderable" data-xtrc="ph:38" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:123" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:124" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:125" lang="English_en"><span class="ph orderable" data-xtrc="ph:39" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:126" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:127" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:128" lang="English_en"><span class="ph orderable" data-xtrc="ph:40" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342MQ200" class="xref" target="_blank">QO342MQ200</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:129" lang="English_en"><span class="ph orderable" data-xtrc="ph:41" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:130" lang="English_en"><span class="ph orderable" data-xtrc="ph:42" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:131" lang="English_en"><span class="ph orderable" data-xtrc="ph:43" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTA" class="xref" target="_blank">PK23GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:132" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:133" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:134" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:135" lang="English_en"><span class="ph orderable" data-xtrc="ph:44" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342MQ225" class="xref" target="_blank">QO342MQ225</a><sup class="fnref"><a href="#fn7">[7]</a></sup> <sup class="fnref"><a href="#fn2">[2]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:136" lang="English_en"><span class="ph orderable" data-xtrc="ph:45" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQF" class="xref" target="_blank">QOC342MQF</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:137" lang="English_en"><span class="ph orderable" data-xtrc="ph:46" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOC342MQS" class="xref" target="_blank">QOC342MQS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:138" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:139" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:140" lang="English_en"><span class="ph orderable" data-xtrc="ph:47" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTA" class="xref" target="_blank">PK23GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:141" lang="English_en">12</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="14" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: solid; border-left-width: 1px; border-left-color: #000000; " class="entry">
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:142" lang="English_en">R</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:143" lang="English_en">A</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:144" lang="English_en">I</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:145" lang="English_en">N</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:146" lang="English_en">P</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:147" lang="English_en">R</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:148" lang="English_en">O</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:149" lang="English_en">O</p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:150" lang="English_en">F</p>
                           </td>
                           <td rowspan="14" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">&nbsp;</td>
                           <td data-shading="spruce40" rowspan="1" colspan="9" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:151" lang="English_en"><b class="ph b" data-xtrc="b:4" lang="English_en">Fixed Mains—Factory-installed
                                    Main Lugs—Copper Bus—65 kA Short Circuit Current Rating </b><sup class="fnref"><a href="#fn1">[1]</a></sup> <sup class="fnref"><a href="#fn8">[8]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:152" lang="English_en">60 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:153" lang="English_en">3</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:154" lang="English_en"><span class="ph orderable" data-xtrc="ph:48" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO403L60NRB" class="xref" target="_blank">QO403L60NRB</a></span></p>
                           </td>
                           <td rowspan="6" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:155" lang="English_en">Cover
                                 Included
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:156" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:157" lang="English_en">10–6</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:158" lang="English_en"><span class="ph orderable" data-xtrc="ph:49" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK4GTA" class="xref" target="_blank">PK4GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:159" lang="English_en">10R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:160" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:161" lang="English_en">12</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:162" lang="English_en"><span class="ph orderable" data-xtrc="ph:50" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO312L125GRB" class="xref" target="_blank">QO312L125GRB</a></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:163" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:164" lang="English_en">6–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:165" lang="English_en">Factory Incl. <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:166" lang="English_en"> 3R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:167" lang="English_en">20</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:168" lang="English_en"><span class="ph orderable" data-xtrc="ph:51" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO320L125GRB" class="xref" target="_blank">QO320L125GRB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:169" lang="English_en">Factory Incl. <sup class="fnref"><a href="#fn3">[3]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:170" lang="English_en"> 4R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:171" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:172" lang="English_en">18</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:173" lang="English_en"><span class="ph orderable" data-xtrc="ph:52" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO318L200GRB" class="xref" target="_blank">QO318L200GRB</a></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:174" lang="English_en">6–250</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:175" lang="English_en">6–250</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:176" lang="English_en">Factory Incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:177" lang="English_en"> 6R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:178" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:179" lang="English_en"><span class="ph orderable" data-xtrc="ph:53" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330L200GRB" class="xref" target="_blank">QO330L200GRB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:180" lang="English_en">Factory Incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:181" lang="English_en"> 6R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:182" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:183" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:184" lang="English_en"><span class="ph orderable" data-xtrc="ph:54" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342L225GRB" class="xref" target="_blank">QO342L225GRB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:185" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:186" lang="English_en">6–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:187" lang="English_en">Factory Incl. <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:188" lang="English_en"> 8R</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="spruce40" rowspan="1" colspan="9" style="vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:189" lang="English_en"><b class="ph b" data-xtrc="b:5" lang="English_en">Convertible Mains—Factory-installed
                                    QDL Main Circuit Breaker—Copper Bus—25 kA Short Circuit
                                    Current Rating</b>  <sup class="fnref"><a href="#fn5">[5]</a></sup> <sup class="fnref"><a href="#fn8">[8]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:190" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:191" lang="English_en">27</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:192" lang="English_en"><span class="ph orderable" data-xtrc="ph:55" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO327M100RB" class="xref" target="_blank">QO327M100RB</a> <sup class="fnref"><a href="#fn6">[6]</a></sup></span></p>
                           </td>
                           <td rowspan="6" colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:193" lang="English_en">Cover Included</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:194" lang="English_en">4–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:195" lang="English_en">4–2/0</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:196" lang="English_en"><span class="ph orderable" data-xtrc="ph:56" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK15GTA" class="xref" target="_blank">PK15GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:197" lang="English_en"> 6R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:198" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:199" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:200" lang="English_en"><span class="ph orderable" data-xtrc="ph:57" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ125RB" class="xref" target="_blank">QO330MQ125RB</a> <sup class="fnref"><a href="#fn7">[7]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:201" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:202" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:203" lang="English_en"><span class="ph orderable" data-xtrc="ph:58" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:204" lang="English_en">14R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:205" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:206" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:207" lang="English_en"><span class="ph orderable" data-xtrc="ph:59" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ150RB" class="xref" target="_blank">QO330MQ150RB</a> <sup class="fnref"><a href="#fn7">[7]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:208" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:209" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:210" lang="English_en"><span class="ph orderable" data-xtrc="ph:60" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:211" lang="English_en">14R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:212" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:213" lang="English_en">30</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:214" lang="English_en"><span class="ph orderable" data-xtrc="ph:61" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO330MQ200RB" class="xref" target="_blank">QO330MQ200RB</a><sup class="fnref"><a href="#fn7">[7]</a></sup></span></p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:215" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:216" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:217" lang="English_en"><span class="ph orderable" data-xtrc="ph:62" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK18GTA" class="xref" target="_blank">PK18GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:218" lang="English_en">14R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:219" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:220" lang="English_en"><span class="ph orderable" data-xtrc="ph:63" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342MQ200RB" class="xref" target="_blank">QO342MQ200RB</a> <sup class="fnref"><a href="#fn7">[7]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:221" lang="English_en"><span class="ph orderable" data-xtrc="ph:64" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTA" class="xref" target="_blank">PK23GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:222" lang="English_en">14R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:223" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:224" lang="English_en">42</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:225" lang="English_en"><span class="ph orderable" data-xtrc="ph:65" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO342MQ225RB" class="xref" target="_blank">QO342MQ225RB</a> <sup class="fnref"><a href="#fn7">[7]</a></sup></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:226" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:227" lang="English_en">4–300</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:228" lang="English_en"><span class="ph orderable" data-xtrc="ph:66" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PK23GTA" class="xref" target="_blank">PK23GTA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:229" lang="English_en">14R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" colspan="11" style="text-align: left; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry"><a name="_17701008_88424" class="xmlId"></a><p class="p TXB_Bold_Table_Text" data-xtrc="p:230" lang="English_en"><b class="ph b" data-xtrc="b:6" lang="English_en">Above listings through 200 A
                                    mains rating meet Federal Specification W-P-115C as Type 1, Class
                                    2.</b></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table noheader" data-xtrc="table:2" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 240px; ">
                        <col style="width: 240px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr style="vertical-align: bottom; ">
                           <td style="text-align: center; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/mvc-045sr_0000056517.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/mvc-045sr_0000056517.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:231" lang="English_en">QO342MQ200</p>
                           </td>
                           <td style="text-align: center; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qo312l125g+load+center_0000057729.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/qo312l125g+load+center_0000057729.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:232" lang="English_en">QO312L125G</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701008_47633" class="xmlId"></a><div class="table data" data-srcid="_17701008_47633" data-xtrc="table:3" lang="English_en">
                  <h4 class="title" data-xtrc="title:3" lang="English_en">3Ø, Main Circuit Breakers</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 120px; ">
                        <col style="width: 120px; ">
                        <col style="width: 120px; ">
                        <col style="width: 120px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:233" lang="English_en">Amperage</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:234" lang="English_en">25 k AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:235" lang="English_en">65 k AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:236" lang="English_en">100 k AIR <sup class="fnref"><a href="#fn9">[9]</a></sup></p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="spruce40" colspan="4" style="text-align: left; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:237" lang="English_en"><b class="ph b" data-xtrc="b:7" lang="English_en">Field-installed alternate main circuit
                                    breakers for QO 3Ø main circuit breaker load centers rated 70–225
                                    A. Do not exceed the load center main rating.</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"> 70 A</td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:238" lang="English_en"><span class="ph orderable" data-xtrc="ph:67" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32070" class="xref" target="_blank">QDL32070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:239" lang="English_en"><span class="ph orderable" data-xtrc="ph:68" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32070" class="xref" target="_blank">QGL32070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:240" lang="English_en"><span class="ph orderable" data-xtrc="ph:69" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32070" class="xref" target="_blank">QJL32070</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"> 80 A</td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:241" lang="English_en"><span class="ph orderable" data-xtrc="ph:70" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32080" class="xref" target="_blank">QDL32080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:242" lang="English_en"><span class="ph orderable" data-xtrc="ph:71" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32080" class="xref" target="_blank">QGL32080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:243" lang="English_en"><span class="ph orderable" data-xtrc="ph:72" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32080" class="xref" target="_blank">QJL32080</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:244" lang="English_en"> 90 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:245" lang="English_en"><span class="ph orderable" data-xtrc="ph:73" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32090" class="xref" target="_blank">QDL32090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:246" lang="English_en"><span class="ph orderable" data-xtrc="ph:74" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32090" class="xref" target="_blank">QGL32090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:247" lang="English_en"><span class="ph orderable" data-xtrc="ph:75" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32090" class="xref" target="_blank">QJL32090</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:248" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:249" lang="English_en"><span class="ph orderable" data-xtrc="ph:76" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32100" class="xref" target="_blank">QDL32100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:250" lang="English_en"><span class="ph orderable" data-xtrc="ph:77" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32100" class="xref" target="_blank">QGL32100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:251" lang="English_en"><span class="ph orderable" data-xtrc="ph:78" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32100" class="xref" target="_blank">QJL32100</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:252" lang="English_en">110 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:253" lang="English_en"><span class="ph orderable" data-xtrc="ph:79" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32110" class="xref" target="_blank">QDL32110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:254" lang="English_en"><span class="ph orderable" data-xtrc="ph:80" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32110" class="xref" target="_blank">QGL32110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:255" lang="English_en"><span class="ph orderable" data-xtrc="ph:81" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32110" class="xref" target="_blank">QJL32110</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:256" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:257" lang="English_en"><span class="ph orderable" data-xtrc="ph:82" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32125" class="xref" target="_blank">QDL32125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:258" lang="English_en"><span class="ph orderable" data-xtrc="ph:83" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32125" class="xref" target="_blank">QGL32125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:259" lang="English_en"><span class="ph orderable" data-xtrc="ph:84" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32125" class="xref" target="_blank">QJL32125</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:260" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:261" lang="English_en"><span class="ph orderable" data-xtrc="ph:85" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32150" class="xref" target="_blank">QDL32150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:262" lang="English_en"><span class="ph orderable" data-xtrc="ph:86" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32150" class="xref" target="_blank">QGL32150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:263" lang="English_en"><span class="ph orderable" data-xtrc="ph:87" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32150" class="xref" target="_blank">QJL32150</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:264" lang="English_en">175 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:265" lang="English_en"><span class="ph orderable" data-xtrc="ph:88" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32175" class="xref" target="_blank">QDL32175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:266" lang="English_en"><span class="ph orderable" data-xtrc="ph:89" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32175" class="xref" target="_blank">QGL32175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:267" lang="English_en"><span class="ph orderable" data-xtrc="ph:90" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32175" class="xref" target="_blank">QJL32175</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:268" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:269" lang="English_en"><span class="ph orderable" data-xtrc="ph:91" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32200" class="xref" target="_blank">QDL32200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:270" lang="English_en"><span class="ph orderable" data-xtrc="ph:92" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32200" class="xref" target="_blank">QGL32200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:271" lang="English_en"><span class="ph orderable" data-xtrc="ph:93" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32200" class="xref" target="_blank">QJL32200</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:272" lang="English_en">225
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:273" lang="English_en"><span class="ph orderable" data-xtrc="ph:94" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32225" class="xref" target="_blank">QDL32225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:274" lang="English_en"><span class="ph orderable" data-xtrc="ph:95" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32225" class="xref" target="_blank">QGL32225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:275" lang="English_en"><span class="ph orderable" data-xtrc="ph:96" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32225" class="xref" target="_blank">QJL32225</a></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701008_47745" class="xmlId"></a><div class="table data" data-srcid="_17701008_47745" data-xtrc="table:4" lang="English_en">
                  <h4 class="title" data-xtrc="title:4" lang="English_en">3Ø, Main Lugs Kits</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:276" lang="English_en">Main Lugs</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:277" lang="English_en">Amperage Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:278" lang="English_en">Cat. No.</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:279" lang="English_en">Lug Wire Size<br class="empty">AWG/kcmil
                              </p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td data-shading="spruce40" colspan="3" style="text-align: left; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:spruce40" data-xtrc="p:280" lang="English_en"><b class="ph b" data-xtrc="b:8" lang="English_en">Field-installed main lugs for convertible
                                    3Ø main circuit breaker load centers</b></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:281" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:282" lang="English_en"><span class="ph orderable" data-xtrc="ph:97" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOL3125" class="xref" target="_blank">QOL3125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:283" lang="English_en">6–2/0 Cu/Al</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:284" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:285" lang="English_en"><span class="ph orderable" data-xtrc="ph:98" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOL3225" class="xref" target="_blank">QOL3225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:286" lang="English_en">6–300 Cu/Al</p>
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
         <li class="fn"><a name="fn1" class="xmlId"></a>UL short circuit current rating depends
            on lowest interrupting rating of circuit breaker installed.
         </li>
         <li class="fn"><a name="fn2" class="xmlId"></a>For Certification to IEC 60439-1 contact
            the local Square D sales office; otherwise panels are <b class="ph b" data-xtrc="b:1" lang="English_en">NOT</b> CE
            marked. (For use on 415Y/240 Vac 3-phase 4-wire, 3,000 Short Circuit
            Current Rating when QOXD...branch circuit breakers are used and 10,000
            Short Circuit Current Rating when QO...VS branch circuit breakers
            are used).
         </li>
         <li class="fn"><a name="fn3" class="xmlId"></a>PK15GTA.
         </li>
         <li class="fn"><a name="fn4" class="xmlId"></a>PK23GTA and LK100AN.
         </li>
         <li class="fn"><a name="fn5" class="xmlId"></a>25 kA short circuit current rating SSCR
            maximum with Square D Type QDL main circuit breaker, or 22 kA SCCR
            maximum with back-fed Type QO-VH main circuit breaker, feeding QO
            10 k AIR branch circuit breakers.
         </li>
         <li class="fn"><a name="fn6" class="xmlId"></a>Includes factory-installed
            back fed QO3100VH main circuit breaker.
         </li>
         <li class="fn"><a name="fn7" class="xmlId"></a>65 kA Short Circuit Current Rating maximum
            with field-installed Square D type QGL 65 k AIR minimum main circuit
            breaker feeding QO and Q1 10 k AIR minimum branch circuit breakers.
         </li>
         <li class="fn"><a name="fn8" class="xmlId"></a>Side hinge door device allow 1-1/4 in.
            on left side for door to open.
         </li>
         <li class="fn"><a name="fn9" class="xmlId"></a>When
            these 3P circuit breakers are used as the main circuit breaker of
            a 3Ø load center, the maximum AIR rating is 65 kA at 240 Vac
            and 100 kA at 208 Vac.
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
  var refId = '_17701008_52036';
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
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2F561d5f9ae4b0c5c41a2447fa%2Fr%2F_17701008_52036&amp;size=180"
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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701008_52036 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:35 GMT -->
</html>
<?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("_ext_not_logged_in.php");
}
?>