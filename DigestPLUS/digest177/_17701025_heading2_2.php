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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701025_Heading2_2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:51 GMT -->
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

<title>Schneider Electric Digest Plus</title>

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
window.refId = "_17701025_Heading2_2";
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


<body class="readerPage" data-pageId=69ef2483-4832-4ee6-acc4-1572a614ee7f>



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
                    data-itemKey="561d5fcee4b0c5c41a245ea4"
                    data-projectKey="561d5d65e4b0c5c41a243bf2"
                    data-parentKey="561d5f9ae4b0c5c41a2447fa">
                    <div class="col-xs-12 content-container">
<div class="itemPreview"><a name="_17701025_Heading2_22" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/concept_0000056597.xml">
      <h1 class="title" data-xtrc="title:1" lang="English_en"></h1>
      <div class="body conbody" data-xtrc="conbody:1" lang="English_en"></div><a name="_17701025_616082" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/Class%201130%20_%20Refer%20to%20Catalog%201100CT0501%20(CPT)_0000056596.xml">
         <h2 class="title" data-xtrc="title:1" lang="English_en">Class <b class="ph b" data-xtrc="b:1" lang="English_en">1130</b> / Refer to Catalog <span class="ph" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/downloads/us/en/document/1100CT0501" class="xref" target="_blank"><b class="ph b" data-xtrc="b:2" lang="English_en">1100CT0501</b></a></span></h2><a name="_17701025_Heading5_32" class="xmlId"></a><div class="topic concept" lang="English_en" data-xtrc="concept:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/1Ø3W-120_240%20Vac-240%20Vac-UL%20Listed%20(CPT)_0000056595.xml">
            <h3 class="title" data-xtrc="title:1" lang="English_en">1Ø3W—120/240 Vac—240 Vac—UL Listed</h3>
            <div class="body conbody" data-xtrc="conbody:1" lang="English_en">
               <div class="table noheader" data-xtrc="table:1" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 480px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr style="vertical-align: bottom; ">
                           <td style="text-align: center; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-25-a_0000056608.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-25-a_0000056608.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:1" lang="English_en">QO200TRNM</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_74715" class="xmlId"></a><div class="table data" data-srcid="_17701025_74715" data-xtrc="table:2" lang="English_en">
                  <h4 class="title" data-xtrc="title:2" lang="English_en">Enclosed Molded Case Switch, Switch Included, Does NOT provide
                     overcurrent protection
                  </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 77px; ">
                        <col style="width: 72px; ">
                        <col style="width: 69px; ">
                        <col style="width: 94px; ">
                        <col style="width: 94px; ">
                        <col style="width: 75px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:2" lang="English_en">Service</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:3" lang="English_en">Ampere Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:4" lang="English_en">General Purpose</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:5" lang="English_en">Rainproof</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:6" lang="English_en">Box. No.</p> <sup class="fnref"><a href="#fn1">[1]</a></sup></th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:7" lang="English_en">240 Vac</p>
                           </td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-a_0000056606.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-a_0000056606.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:8" lang="English_en">60 A <sup class="fnref"><a href="#fn2">[2]</a></sup> <sup class="fnref"><a href="#fn3">[3]</a></sup></p> 
                           </td>
                           <td rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:9" lang="English_en"><span class="ph orderable" data-xtrc="ph:1" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO260NATS" class="xref" target="_blank">QO260NATS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:10" lang="English_en"><span class="ph orderable" data-xtrc="ph:2" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO200TR" class="xref" target="_blank">QO200TR</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:11" lang="English_en">2, 9R <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:12" lang="English_en"><span class="ph orderable" data-xtrc="ph:3" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO200TRNM" class="xref" target="_blank">QO200TRNM</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:13" lang="English_en">1NM</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:14" lang="English_en"><span class="ph orderable" data-xtrc="ph:4" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO260NATR" class="xref" target="_blank">QO260NATR</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:15" lang="English_en">1R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:16" lang="English_en">120/240
                                 Vac
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-b_0000056605.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-b_0000056605.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:17" lang="English_en">100
                                 A <sup class="fnref"><a href="#fn5">[5]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:18" lang="English_en"><span class="ph orderable" data-xtrc="ph:5" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2000NS" class="xref" target="_blank">QO2000NS</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:19" lang="English_en"><span class="ph orderable" data-xtrc="ph:6" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2000NRB" class="xref" target="_blank">QO2000NRB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:20" lang="English_en">13, 10R</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_54652" class="xmlId"></a><div class="table data" data-srcid="_17701025_54652" data-xtrc="table:3" lang="English_en">
                  <h4 class="title" data-xtrc="title:3" lang="English_en">Housing Bracket</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 394px; ">
                        <col style="width: 86px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:21" lang="English_en">Description</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:22" lang="English_en">Cat. No.</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:23" lang="English_en">Bracket
                                 used with QO200TR for stucco, aluminum and vinyl siding. (This item
                                 is obsolete)
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:24" lang="English_en"><span class="ph orderable" data-xtrc="ph:7" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/PKHB" class="xref" target="_blank">PKHB</a></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_54688" class="xmlId"></a><div class="table data" data-srcid="_17701025_54688" data-xtrc="table:4" lang="English_en">
                  <h4 class="title" data-xtrc="title:4" lang="English_en">Enclosed GFCI Circuit Breakers, GFCI Circuit Breaker Included—10
                     kA Short Circuit Current Rating
                  </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 72px; ">
                        <col style="width: 64px; ">
                        <col style="width: 56px; ">
                        <col style="width: 95px; ">
                        <col style="width: 108px; ">
                        <col style="width: 84px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:25" lang="English_en">Service</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:26" lang="English_en">Ampere</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:27" lang="English_en">Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:28" lang="English_en">Type 3R—Rainproof</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:29" lang="English_en">Circuit Breaker<br class="empty">Included
                              </p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:30" lang="English_en">Box. No.</p> <sup class="fnref"><a href="#fn1">[1]</a></sup></th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:31" lang="English_en">120/240
                                 Vac
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:32" lang="English_en">50 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:33" lang="English_en"><span class="ph orderable" data-xtrc="ph:8" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOE250GFINM" class="xref" target="_blank">QOE250GFINM</a></span></p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:34" lang="English_en"><span class="ph orderable" data-xtrc="ph:9" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/HOME250SPA" class="xref" target="_blank">HOME250SPA</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:35" lang="English_en">QO250GFI</p>
                              <p class="p" data-xtrc="p:36" lang="English_en">HOM250GFI</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:37" lang="English_en">1NM (Non-metallic)</p>
                              <p class="p" data-xtrc="p:38" lang="English_en">1R (Metallic)</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table noheader" data-xtrc="table:5" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 480px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-e_0000056603.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-e_0000056603.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:39" lang="English_en">QO3100BNF</p>
                              <p class="p" data-xtrc="p:40" lang="English_en">With Cover Removed</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_55168" class="xmlId"></a><div class="table data" data-srcid="_17701025_55168" data-xtrc="table:6" lang="English_en">
                  <h4 class="title" data-xtrc="title:5" lang="English_en">2-Pole Circuit Breaker Enclosures—22 kA Short Circuit
                     Current Rating
                  </h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 63px; ">
                        <col style="width: 69px; ">
                        <col style="width: 61px; ">
                        <col style="width: 104px; ">
                        <col style="width: 101px; ">
                        <col style="width: 81px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:41" lang="English_en">Service <sup class="fnref"><a href="#fn6">[6]</a></sup></p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:42" lang="English_en">Ampere</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:43" lang="English_en">Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:44" lang="English_en">General Purpose   <sup class="fnref"><a href="#fn7">[7]</a></sup></p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:45" lang="English_en">Rainproof</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:46" lang="English_en">Box. No.</p> <sup class="fnref"><a href="#fn1">[1]</a></sup></th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:47" lang="English_en">120/240 Vac</p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:48" lang="English_en">100 A</p>
                              <p class="p" data-xtrc="p:49" lang="English_en">125 A</p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:50" lang="English_en">QO2100BNF/S</p>
                              <p class="p" data-xtrc="p:51" lang="English_en">QO2125BNF/S</p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:52" lang="English_en"><span class="ph orderable" data-xtrc="ph:10" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2100BNRB" class="xref" target="_blank">QO2100BNRB</a></span></p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:53" lang="English_en"><span class="ph orderable" data-xtrc="ph:11" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2125BNRB" class="xref" target="_blank">QO2125BNRB</a></span></p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:54" lang="English_en">13, 10R</p>
                              <p class="p" data-xtrc="p:55" lang="English_en">18, 13R</p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:56" lang="English_en">240 Vac</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-d_0000056602.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-d_0000056602.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:57" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:58" lang="English_en">QO3100BNF/S</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:59" lang="English_en"><span class="ph orderable" data-xtrc="ph:12" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO3100BNRB" class="xref" target="_blank">QO3100BNRB</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:60" lang="English_en">13, 10R</p>
                           </td>
                        </tr>
                        <tr>
                           <td data-shading="{00ef15}" rowspan="1" colspan="6" style="vertical-align: top; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p TC Table Caption" data-xtrc="p:61" lang="English_en">60A
                                 Max. Circuit Breaker Enclosures—10 kA Short Circuit Current
                                 Rating
                              </p>
                              <p class="p shading:{00ef15};textColor:{000000}" data-xtrc="p:62" lang="English_en">Circuit
                                 breaker not included. Order separately from <a href="_17701002_64045.html#QOPlug-OnCircuitBreakers-1E0FA0972" class="xref">QO Plug-On Circuit
                                    Breakers</a>. Will not accept QO-GFI circuit breaker nor QO circuit
                                 breakers with factory-installed accessories.
                              </p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:63" lang="English_en">240
                                 Vac
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-e_0000056601.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-e_0000056601.eps" class="image img-responsive" style="display:inline;"></a></td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:64" lang="English_en">60 A    <sup class="fnref"><a href="#fn2">[2]</a></sup></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:65" lang="English_en">—</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:66" lang="English_en"><span class="ph orderable" data-xtrc="ph:13" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QO2TR" class="xref" target="_blank">QO2TR</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:67" lang="English_en">9R  <sup class="fnref"><a href="#fn4">[4]</a></sup></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_53155" class="xmlId"></a><div class="table data" data-srcid="_17701025_53155" data-xtrc="table:7" lang="English_en">
                  <h4 class="title" data-xtrc="title:6" lang="English_en">Q Frame Enclosures and Q Frame Circuit Breakers</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 73px; ">
                        <col style="width: 64px; ">
                        <col style="width: 58px; ">
                        <col style="width: 43px; ">
                        <col style="width: 36px; ">
                        <col style="width: 49px; ">
                        <col style="width: 51px; ">
                        <col style="width: 49px; ">
                        <col style="width: 58px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:68" lang="English_en">Service</p>
                           </th>
                           <th rowspan="1" colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:69" lang="English_en">Enclosure Only  <sup class="fnref"><a href="#fn8">[8]</a></sup></p>
                           </th>
                           <th rowspan="1" colspan="5" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:70" lang="English_en">Circuit Breaker
                                 (Order Separately)
                              </p>
                           </th>
                        </tr>
                        <tr>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:71" lang="English_en">Type 1—General
                                 Purpose   <sup class="fnref"><a href="#fn7">[7]</a></sup></p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:72" lang="English_en">Type 3R—Rainproof</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:73" lang="English_en">Box No.</p> <sup class="fnref"><a href="#fn1">[1]</a></sup></th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:74" lang="English_en">Ampere</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:75" lang="English_en">Rating</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:76" lang="English_en">10 k AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:77" lang="English_en">25 k AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:78" lang="English_en">65 k AIR</p>
                           </th>
                           <th rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:79" lang="English_en">100 k AIR</p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:80" lang="English_en">2P 240 Vac</p>
                              <p class="p" data-xtrc="p:81" lang="English_en">Maximum</p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:82" lang="English_en"><span class="ph orderable" data-xtrc="ph:14" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/Q22200NS" class="xref" target="_blank">Q22200NS  </a> <sup class="fnref"><a href="#fn9">[9]</a></sup></span></p>
                              <p class="p" data-xtrc="p:83" lang="English_en">or</p>
                              <p class="p PCN N/O" data-xtrc="p:84" lang="English_en"><span class="ph non-orderable" data-xtrc="ph:15" lang="English_en">Q23225NF/S</span></p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:85" lang="English_en"><span class="ph orderable" data-xtrc="ph:16" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/Q22200NRB" class="xref" target="_blank">Q22200NRB</a> <sup class="fnref"><a href="#fn9">[9]</a></sup></span></p>
                              <p class="p" data-xtrc="p:86" lang="English_en">or</p>
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:87" lang="English_en"><span class="ph orderable" data-xtrc="ph:17" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/Q23225NRB" class="xref" target="_blank">Q23225NRB</a></span></p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:88" lang="English_en">19, 11R</p>
                              <p class="p" data-xtrc="p:89" lang="English_en">20, 12R</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:90" lang="English_en"> 70 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:91" lang="English_en"><span class="ph orderable" data-xtrc="ph:18" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22070" class="xref" target="_blank">QBL22070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:92" lang="English_en"><span class="ph orderable" data-xtrc="ph:19" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22070" class="xref" target="_blank">QDL22070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:93" lang="English_en"><span class="ph orderable" data-xtrc="ph:20" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22070" class="xref" target="_blank">QGL22070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:94" lang="English_en"><span class="ph orderable" data-xtrc="ph:21" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22070" class="xref" target="_blank">QJL22070</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:95" lang="English_en"> 80 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:96" lang="English_en"><span class="ph orderable" data-xtrc="ph:22" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22080" class="xref" target="_blank">QBL22080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:97" lang="English_en"><span class="ph orderable" data-xtrc="ph:23" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22080" class="xref" target="_blank">QDL22080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:98" lang="English_en"><span class="ph orderable" data-xtrc="ph:24" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22080" class="xref" target="_blank">QGL22080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:99" lang="English_en"><span class="ph orderable" data-xtrc="ph:25" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22080" class="xref" target="_blank">QJL22080</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:100" lang="English_en"> 90 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:101" lang="English_en"><span class="ph orderable" data-xtrc="ph:26" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22090" class="xref" target="_blank">QBL22090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:102" lang="English_en"><span class="ph orderable" data-xtrc="ph:27" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22090" class="xref" target="_blank">QDL22090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:103" lang="English_en"><span class="ph orderable" data-xtrc="ph:28" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22090" class="xref" target="_blank">QGL22090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:104" lang="English_en"><span class="ph orderable" data-xtrc="ph:29" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22090" class="xref" target="_blank">QJL22090</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:105" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:106" lang="English_en"><span class="ph orderable" data-xtrc="ph:30" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22100" class="xref" target="_blank">QBL22100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:107" lang="English_en"><span class="ph orderable" data-xtrc="ph:31" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22100" class="xref" target="_blank">QDL22100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:108" lang="English_en"><span class="ph orderable" data-xtrc="ph:32" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22100" class="xref" target="_blank">QGL22100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:109" lang="English_en"><span class="ph orderable" data-xtrc="ph:33" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22100" class="xref" target="_blank">QJL22100</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:110" lang="English_en">110 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:111" lang="English_en"><span class="ph orderable" data-xtrc="ph:34" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22110" class="xref" target="_blank">QBL22110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:112" lang="English_en"><span class="ph orderable" data-xtrc="ph:35" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22110" class="xref" target="_blank">QDL22110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:113" lang="English_en"><span class="ph orderable" data-xtrc="ph:36" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22110" class="xref" target="_blank">QGL22110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:114" lang="English_en"><span class="ph orderable" data-xtrc="ph:37" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22110" class="xref" target="_blank">QJL22110</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:115" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:116" lang="English_en"><span class="ph orderable" data-xtrc="ph:38" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22125" class="xref" target="_blank">QBL22125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:117" lang="English_en"><span class="ph orderable" data-xtrc="ph:39" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22125" class="xref" target="_blank">QDL22125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:118" lang="English_en"><span class="ph orderable" data-xtrc="ph:40" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22125" class="xref" target="_blank">QGL22125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:119" lang="English_en"><span class="ph orderable" data-xtrc="ph:41" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22125" class="xref" target="_blank">QJL22125</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:120" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:121" lang="English_en"><span class="ph orderable" data-xtrc="ph:42" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22150" class="xref" target="_blank">QBL22150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:122" lang="English_en"><span class="ph orderable" data-xtrc="ph:43" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22150" class="xref" target="_blank">QDL22150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:123" lang="English_en"><span class="ph orderable" data-xtrc="ph:44" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22150" class="xref" target="_blank">QGL22150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:124" lang="English_en"><span class="ph orderable" data-xtrc="ph:45" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22150" class="xref" target="_blank">QJL22150</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:125" lang="English_en">175 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:126" lang="English_en"><span class="ph orderable" data-xtrc="ph:46" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22175" class="xref" target="_blank">QBL22175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:127" lang="English_en"><span class="ph orderable" data-xtrc="ph:47" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22175" class="xref" target="_blank">QDL22175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:128" lang="English_en"><span class="ph orderable" data-xtrc="ph:48" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22175" class="xref" target="_blank">QGL22175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:129" lang="English_en"><span class="ph orderable" data-xtrc="ph:49" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22175" class="xref" target="_blank">QJL22175</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:130" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:131" lang="English_en"><span class="ph orderable" data-xtrc="ph:50" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22200" class="xref" target="_blank">QBL22200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:132" lang="English_en"><span class="ph orderable" data-xtrc="ph:51" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22200" class="xref" target="_blank">QDL22200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:133" lang="English_en"><span class="ph orderable" data-xtrc="ph:52" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22200" class="xref" target="_blank">QGL22200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:134" lang="English_en"><span class="ph orderable" data-xtrc="ph:53" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22200" class="xref" target="_blank">QJL22200</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:135" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:136" lang="English_en"><span class="ph orderable" data-xtrc="ph:54" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL22225" class="xref" target="_blank">QBL22225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:137" lang="English_en"><span class="ph orderable" data-xtrc="ph:55" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL22225" class="xref" target="_blank">QDL22225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:138" lang="English_en"><span class="ph orderable" data-xtrc="ph:56" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL22225" class="xref" target="_blank">QGL22225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:139" lang="English_en"><span class="ph orderable" data-xtrc="ph:57" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL22225" class="xref" target="_blank">QJL22225</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-d_0000056602.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-d_0000056602.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:140" lang="English_en">3P 240 Vac</p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN N/O" data-xtrc="p:141" lang="English_en"><span class="ph non-orderable" data-xtrc="ph:58" lang="English_en">Q23225NF/S</span></p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:142" lang="English_en"><span class="ph orderable" data-xtrc="ph:59" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/Q23225NRB" class="xref" target="_blank">Q23225NRB</a></span></p>
                           </td>
                           <td rowspan="10" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:143" lang="English_en">20, 12R</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:144" lang="English_en"> 70 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:145" lang="English_en"><span class="ph orderable" data-xtrc="ph:60" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32070" class="xref" target="_blank">QBL32070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:146" lang="English_en"><span class="ph orderable" data-xtrc="ph:61" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32070" class="xref" target="_blank">QDL32070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:147" lang="English_en"><span class="ph orderable" data-xtrc="ph:62" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32070" class="xref" target="_blank">QGL32070</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:148" lang="English_en"><span class="ph orderable" data-xtrc="ph:63" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32070" class="xref" target="_blank">QJL32070</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:149" lang="English_en"> 80 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:150" lang="English_en"><span class="ph orderable" data-xtrc="ph:64" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32080" class="xref" target="_blank">QBL32080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:151" lang="English_en"><span class="ph orderable" data-xtrc="ph:65" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32080" class="xref" target="_blank">QDL32080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:152" lang="English_en"><span class="ph orderable" data-xtrc="ph:66" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32080" class="xref" target="_blank">QGL32080</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:153" lang="English_en"><span class="ph orderable" data-xtrc="ph:67" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32080" class="xref" target="_blank">QJL32080</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:154" lang="English_en"> 90 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:155" lang="English_en"><span class="ph orderable" data-xtrc="ph:68" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32090" class="xref" target="_blank">QBL32090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:156" lang="English_en"><span class="ph orderable" data-xtrc="ph:69" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32090" class="xref" target="_blank">QDL32090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:157" lang="English_en"><span class="ph orderable" data-xtrc="ph:70" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32090" class="xref" target="_blank">QGL32090</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:158" lang="English_en"><span class="ph orderable" data-xtrc="ph:71" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32090" class="xref" target="_blank">QJL32090</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:159" lang="English_en">100 A </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:160" lang="English_en"><span class="ph orderable" data-xtrc="ph:72" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32100" class="xref" target="_blank">QBL32100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:161" lang="English_en"><span class="ph orderable" data-xtrc="ph:73" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32100" class="xref" target="_blank">QDL32100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:162" lang="English_en"><span class="ph orderable" data-xtrc="ph:74" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32100" class="xref" target="_blank">QGL32100</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:163" lang="English_en"><span class="ph orderable" data-xtrc="ph:75" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32100" class="xref" target="_blank">QJL32100</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:164" lang="English_en">110 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:165" lang="English_en"><span class="ph orderable" data-xtrc="ph:76" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32110" class="xref" target="_blank">QBL32110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:166" lang="English_en"><span class="ph orderable" data-xtrc="ph:77" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32110" class="xref" target="_blank">QDL32110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:167" lang="English_en"><span class="ph orderable" data-xtrc="ph:78" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32110" class="xref" target="_blank">QGL32110</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:168" lang="English_en"><span class="ph orderable" data-xtrc="ph:79" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32110" class="xref" target="_blank">QJL32110</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:169" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:170" lang="English_en"><span class="ph orderable" data-xtrc="ph:80" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32125" class="xref" target="_blank">QBL32125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:171" lang="English_en"><span class="ph orderable" data-xtrc="ph:81" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32125" class="xref" target="_blank">QDL32125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:172" lang="English_en"><span class="ph orderable" data-xtrc="ph:82" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32125" class="xref" target="_blank">QGL32125</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:173" lang="English_en"><span class="ph orderable" data-xtrc="ph:83" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32125" class="xref" target="_blank">QJL32125</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:174" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:175" lang="English_en"><span class="ph orderable" data-xtrc="ph:84" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32150" class="xref" target="_blank">QBL32150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:176" lang="English_en"><span class="ph orderable" data-xtrc="ph:85" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32150" class="xref" target="_blank">QDL32150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:177" lang="English_en"><span class="ph orderable" data-xtrc="ph:86" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32150" class="xref" target="_blank">QGL32150</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:178" lang="English_en"><span class="ph orderable" data-xtrc="ph:87" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32150" class="xref" target="_blank">QJL32150</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:179" lang="English_en">175 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:180" lang="English_en"><span class="ph orderable" data-xtrc="ph:88" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32175" class="xref" target="_blank">QBL32175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:181" lang="English_en"><span class="ph orderable" data-xtrc="ph:89" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32175" class="xref" target="_blank">QDL32175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:182" lang="English_en"><span class="ph orderable" data-xtrc="ph:90" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32175" class="xref" target="_blank">QGL32175</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:183" lang="English_en"><span class="ph orderable" data-xtrc="ph:91" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32175" class="xref" target="_blank">QJL32175</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:184" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:185" lang="English_en"><span class="ph orderable" data-xtrc="ph:92" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32200" class="xref" target="_blank">QBL32200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:186" lang="English_en"><span class="ph orderable" data-xtrc="ph:93" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32200" class="xref" target="_blank">QDL32200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:187" lang="English_en"><span class="ph orderable" data-xtrc="ph:94" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32200" class="xref" target="_blank">QGL32200</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:188" lang="English_en"><span class="ph orderable" data-xtrc="ph:95" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32200" class="xref" target="_blank">QJL32200</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:189" lang="English_en">225 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:190" lang="English_en"><span class="ph orderable" data-xtrc="ph:96" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QBL32225" class="xref" target="_blank">QBL32225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:191" lang="English_en"><span class="ph orderable" data-xtrc="ph:97" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QDL32225" class="xref" target="_blank">QDL32225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:192" lang="English_en"><span class="ph orderable" data-xtrc="ph:98" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QGL32225" class="xref" target="_blank">QGL32225</a></span></p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:193" lang="English_en"><span class="ph orderable" data-xtrc="ph:99" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QJL32225" class="xref" target="_blank">QJL32225</a> <sup class="fnref"><a href="#fn10">[10]</a></sup></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div><a name="_17701025_53946" class="xmlId"></a><div class="table data" data-srcid="_17701025_53946" data-xtrc="table:8" lang="English_en">
                  <h4 class="title" data-xtrc="title:7" lang="English_en">QOM2 Enclosures and QOM2 Circuit Breakers</h4>
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 87px; ">
                        <col style="width: 95px; ">
                        <col style="width: 94px; ">
                        <col style="width: 62px; ">
                        <col style="width: 54px; ">
                        <col style="width: 88px; ">
                     </colgroup>
                     <thead style="vertical-align: bottom; text-align: left; font-weight: bold; ">
                        <tr>
                           <th rowspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:194" lang="English_en">Service</p>
                           </th>
                           <th colspan="3" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:195" lang="English_en">Enclosure Only <sup class="fnref"><a href="#fn10">[10]</a></sup></p>
                           </th>
                           <th colspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-top-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:196" lang="English_en">QOM2 Circuit Breaker <br class="empty">(Order Separately)    <sup class="fnref"><a href="#fn11">[11]</a></sup></p>
                           </th>
                        </tr>
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:197" lang="English_en">Type 1<br class="empty">General Purpose <sup class="fnref"><a href="#fn7">[7]</a></sup></p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:198" lang="English_en">Type 3R<br class="empty">Rainproof
                              </p>
                           </th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:199" lang="English_en">Box No.</p> <sup class="fnref"><a href="#fn1">[1]</a></sup></th>
                           <th rowspan="2" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:200" lang="English_en">Ampere</p>
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:201" lang="English_en">Rating</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #ffffff; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:202" lang="English_en">22 k AIR</p>
                           </th>
                        </tr>
                        <tr>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; border-left-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:203" lang="English_en">Cat. No.</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #ffffff; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:204" lang="English_en">Cat. No.</p>
                           </th>
                           <th style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p shading:{00ef15};textColor:{ffffff}" data-xtrc="p:205" lang="English_en">Cat. No.<sup class="fnref"><a href="#fn12">[12]</a></sup></p>
                           </th>
                        </tr>
                     </thead>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-c_0000056604.eps" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:206" lang="English_en">2P 240 Vac</p>
                              <p class="p" data-xtrc="p:207" lang="English_en">Maximum</p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:208" lang="English_en">QOM22225NF/S</p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:209" lang="English_en"><span class="ph orderable" data-xtrc="ph:100" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM22225NRB" class="xref" target="_blank">QOM22225NRB</a></span></p>
                           </td>
                           <td rowspan="6" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:210" lang="English_en">22, 16R</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p" data-xtrc="p:211" lang="English_en">100 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:212" lang="English_en"><span class="ph orderable" data-xtrc="ph:101" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2100VH" class="xref" target="_blank">QOM2100VH</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:213" lang="English_en">125 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:214" lang="English_en"><span class="ph orderable" data-xtrc="ph:102" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2125VH" class="xref" target="_blank">QOM2125VH</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:215" lang="English_en">150 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:216" lang="English_en"><span class="ph orderable" data-xtrc="ph:103" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2150VH" class="xref" target="_blank">QOM2150VH</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:217" lang="English_en">175 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:218" lang="English_en"><span class="ph orderable" data-xtrc="ph:104" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2175VH" class="xref" target="_blank">QOM2175VH</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:219" lang="English_en">200 A</p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:220" lang="English_en"><span class="ph orderable" data-xtrc="ph:105" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2200VH" class="xref" target="_blank">QOM2200VH</a></span></p>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: solid; border-right-width: 1px; border-right-color: #000000; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; border-left-style: none; " class="entry">
                              <p class="p" data-xtrc="p:221" lang="English_en">225
                                 A
                              </p>
                           </td>
                           <td rowspan="1" style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: solid; border-bottom-width: 1px; border-bottom-color: #000000; " class="entry">
                              <p class="p PCN_Prod_Cat_Num" data-xtrc="p:222" lang="English_en"><span class="ph orderable" data-xtrc="ph:106" lang="English_en"><a href="http://www.schneider-electric.com/products/US/en/products/QOM2225VH" class="xref" target="_blank">QOM2225VH</a></span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="table noheader" data-xtrc="table:9" lang="English_en">
                  <table style="border-collapse: collapse; width: 100%; ">
                     <colgroup>
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                        <col style="width: 160px; ">
                     </colgroup>
                     <tbody style="vertical-align: top; ">
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; border-left-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-f_0000056600.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-f_0000056600.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:223" lang="English_en">QOM22225NS</p>
                              <p class="p" data-xtrc="p:224" lang="English_en">With Cover
                                 Removed
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-g_0000056599.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-g_0000056599.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:225" lang="English_en">Q22200NS </p>
                              <p class="p" data-xtrc="p:226" lang="English_en">With Cover
                                 Removed
                              </p>
                           </td>
                           <td style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; border-top-style: none; " class="entry"><a href="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-h_0000056618.tif" target="_blank"><img src="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/Master+Bookmap+Content/1-24-h_0000056618.tif" class="image img-responsive" style="display:inline;"></a><p class="p" data-xtrc="p:227" lang="English_en">Q23225NF</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="text-align: center; vertical-align: middle; padding: 0px; border-right-style: none; border-bottom-style: none; border-left-style: none; " class="entry">&nbsp;</td>
                           <td colspan="2" style="text-align: center; vertical-align: middle; padding: 7px; border-right-style: none; border-bottom-style: none; " class="entry">
                              <p class="p" data-xtrc="p:228" lang="English_en">(Order Q-Frame circuit breaker separately)</p>
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
         <li class="fn"><a name="fn1" class="xmlId"></a>See <a href="_17701017_71964.html#_17701017_Box_No_s2" class="xref">Knockout Information</a></li>
         <li class="fn"><a name="fn2" class="xmlId"></a>Not suitable for service
            equipment.
         </li>
         <li class="fn"><a name="fn3" class="xmlId"></a>Maximum 10 hp 240 Vac.
         </li>
         <li class="fn"><a name="fn4" class="xmlId"></a>Top endwall has no
            hub opening.
         </li>
         <li class="fn"><a name="fn5" class="xmlId"></a>Maximum 20 hp 240 Vac.
         </li>
         <li class="fn"><a name="fn6" class="xmlId"></a>Not
            for use with one pole QO circuit breakers. Circuit breakers not included.
            Order QO type circuit breakers separately from pages 1-2 and 1-3.
            Accepts QO circuit breakers with factory-installed accessories. Order
            equipment ground bar PKOGTA2, if required.
         </li>
         <li class="fn"><a name="fn7" class="xmlId"></a>Order F for flush, S for surface.
         </li>
         <li class="fn"><a name="fn8" class="xmlId"></a>Factory-installed groundable neutral assembly includes (2) ground
            lugs and (2) neutral lugs. Equipment ground kit PKOGTA2 also included.
         </li>
         <li class="fn"><a name="fn9" class="xmlId"></a>Accepts 200 A
            max. 2P Q Frame circuit breakers.
         </li>
         <li class="fn"><a name="fn10" class="xmlId"></a>Equipment ground bar kit PKOGTA2
            factory-included.
         </li>
         <li class="fn"><a name="fn11" class="xmlId"></a>Add
            suffix 1021 for 120, 208 or 240 Vac shunt trip.
         </li>
         <li class="fn"><a name="fn12" class="xmlId"></a>DE3A
            Discount Schedule.
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
  var refId = '_17701025_Heading2_2';
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
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2F561d5f9ae4b0c5c41a2447fa%2Fr%2F_17701025_Heading2_2&amp;size=180"
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

<!-- Mirrored from www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/561d5f9ae4b0c5c41a2447fa/r/_17701025_Heading2_2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:05:51 GMT -->
</html>
<?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("auth/views/not_logged_in.php");
}
?>