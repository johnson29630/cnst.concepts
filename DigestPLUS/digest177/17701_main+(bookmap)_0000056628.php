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

<!-- Mirrored from www.productinfo.schneider-electric.com//portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/nocontext/Master+Bookmap+Content/17701_MAIN+(bookmap)_0000056628.xml by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:10:37 GMT -->
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

<title>Section 1: Load Centers - Digest 177</title>

<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/scripts/libs/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/bannerfix.js"></script>
<link rel="stylesheet" href="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/style/harp-portals.less"></link>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/ui/_theme/digest/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.productinfo.schneider-electric.com/portals/resources/scripts/harp-sdk.js"></script><link rel="stylesheet" href="http://www.productinfo.schneider-electric.com/portals/resources/cm/cm.css"></link>
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

<script>
$(function() {
    $('li.topicref.harp-portal-filter-exclude > a').click(function(e) {
        alert("This content is currently unavailable.");
        e.preventDefault();
        return false;
    });
});
</script>


<!-- d+ext extensions -->
<script src="../d+ext/extend.js"></script>
<link rel="stylesheet" href="../d+ext/extend.css"></link>
</head>

<body class="readerPage" data-pageId=6ff228e6-0371-4ad3-a648-fd2383c59ee9>


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
			</ul>
		</div>
	</div>
</header>

<div id="docTitle" class="sectionColor1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>        <span class="context-title">
          Section 1: Load Centers
        </span>
</h3>
      </div>
    </div>
  </div>
</div>

  <div id="floatingDocTitle" class="sectionColor1">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3>        <span class="context-title">
          Section 1: Load Centers
        </span>
</h3>
        </div>
      </div>
    </div>
  </div>

<!-- END HEADER -->
	
	<div class="container" id="tocPage">
      

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-xs-12 content-container" id="viewerContent"
                 	data-portalKey="562794fee4b05736848a7cb4"
                    data-itemKey="561d5f9ae4b0c5c41a2447fa"
                    data-projectKey="561d5d65e4b0c5c41a243bf2">
              	
<div class="map bookmap" lang="English_en" data-xtrc="bookmap:1" data-xtrf="harp://561d5d65e4b0c5c41a243bf2/pr/ORIGINAL/Master%20Bookmap%20Content/17701_MAIN%20(bookmap)_0000056628.xml">
   <div class="topicmeta bookmeta" data-xtrc="bookmeta:1" lang="English_en">
      
      <div class="metadata" data-xtrc="metadata:1" lang="English_en">
         
         
      </div>
      
   </div>
   <ul id="toc">
      <li data-refid="_17701002_66113" class="topicref chapter brand:sd tocentry"><span class="topichead">QO™ Miniature Circuit Breakers</span><ul>
            <li data-refid="_17701002_64045" class="topicref tocentry"><span class="topichead">QO Plug-On Circuit Breakers</span><ul>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#QOPlug-OnCircuitBreakers-1E0FA0972" data-refids=" QOPlug-OnCircuitBreakers-1E0FA097">QO Plug-On Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#QOQOBRingTerminal-1E1109B82" data-refids=" QOQOBRingTerminal-1E1109B8">QO/QOB Ring Terminal</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#WireSizes-1E1121FB2" data-refids=" WireSizes-1E1121FB">Wire Sizes for QO/QOB Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#QOTTandemCircuitBreakers-1E113C992" data-refids=" QOTTandemCircuitBreakers-1E113C99">QOT Tandem Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_42" data-refids=" _17701003_Heading5_4">QO Arc-Fault Circuit Breaker</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_722" data-refids=" _17701003_Heading5_72">QO-Dual Function Circuit Breaker</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_1112" data-refids=" _17701003_Heading5_111">QO-GFI</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_2042" data-refids=" _17701003_Heading5_204">QO-EPD/EPE</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_2942" data-refids=" _17701003_Heading5_294">QO-SWN</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_3492" data-refids=" _17701003_Heading5_349">QO-HID</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701027_Heading5_2932" data-refids=" _17701027_Heading5_293">QO-K</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_4162" data-refids=" _17701003_Heading5_416">QO-HM</a></li>
                  <li class="topicref tocentry"><a href="_17701002_64045.php#_17701003_Heading5_4322" data-refids=" _17701003_Heading5_432">Non-Automatic (Standard) Miniature Switches</a></li>
               </ul>
            </li>
            <li data-refid="_17701004_50129" class="topicref tocentry"><span class="topichead">Accessories</span><ul>
                  <li class="topicref tocentry"><a href="_17701004_50129.php#AccessoriesForQOQOBCircuitBreakers-1E14C3B72" data-refids=" AccessoriesForQOQOBCircuitBreakers-1E14C3B7">Accessories for QO/QOB Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701004_50129.php#_17701004_Heading5_1232" data-refids=" _17701004_Heading5_123">Factory-Installed Accessories for use with QO and QOB Miniature
                        Circuit Breakers</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701005_19950" class="topicref chapter brand:sd tocentry"><span class="topichead">QO<sup class="ph sup" data-xtrc="sup:1" lang="English_en">™</sup> Load Centers</span><ul>
            <li data-refid="_17701005_54243" class="topicref tocentry"><span class="topichead">Indoor, 1Ø, Main Lugs</span><ul>
                  <li class="topicref tocentry"><a href="_17701005_54243.php#_17701005_Heading5_42" data-refids=" _17701005_Heading5_4">1Ø3W—120/240 Vac—UL Listed Main Lugs</a></li>
                  <li class="topicref tocentry"><a href="_17701005_54243.php#_17701005_Heading5_4282" data-refids=" _17701005_Heading5_428">1Ø, Field-Installed Main Circuit Breaker Kits</a></li>
               </ul>
            </li>
            <li data-refid="_17701006_13980" class="topicref tocentry"><span class="topichead">Indoor, 1Ø, Main Circuit Breaker</span><ul>
                  <li class="topicref tocentry"><a href="_17701006_13980.php#_17701006_Heading5_42" data-refids=" _17701006_Heading5_4">1Ø3W—120/240 Vac—UL Listed Main Circuit
                        Breaker</a></li>
                  <li class="topicref tocentry"><a href="_17701006_13980.php#_17701006_Heading5_3852" data-refids=" _17701006_Heading5_385">1Ø, Field-Installed Main Lugs Kits</a></li>
               </ul>
            </li>
            <li data-refid="_17701027_54243" class="topicref tocentry"><span class="topichead">Indoor, 1Ø, Main Lugs and Main Breaker</span><ul>
                  <li class="topicref tocentry"><a href="_17701027_54243.php#Indoor1%C3%98MainLugsAndMainBreaker-1EA7EBCF2" data-refids=" Indoor1ØMainLugsAndMainBreaker-1EA7EBCF">Indoor, 1Ø, Main Lugs and Main Breaker</a></li>
               </ul>
            </li>
            <li data-refid="_17701007_44298" class="topicref tocentry"><span class="topichead">Rainproof, 1Ø, Main Lugs and Main Circuit Breaker</span><ul>
                  <li class="topicref tocentry"><a href="_17701007_44298.php#_17701007_Heading5_42" data-refids=" _17701007_Heading5_4">1Ø3W—120/240 Vac—UL Listed Main Lugs and Main Circuit Breakers</a></li>
               </ul>
            </li>
            <li data-refid="_17701008_52036" class="topicref tocentry"><span class="topichead">3Ø, Main Lugs and Main Circuit Breaker</span><ul>
                  <li class="topicref tocentry"><a href="_17701008_52036.php#_17701008_Heading5_62" data-refids=" _17701008_Heading5_6">3Ø4W—208Y/120 Vac, 3Ø4W—240/120 Vac
                        Delta and 3Ø3W—240 Vac Delta—UL Listed</a></li>
               </ul>
            </li>
            <li data-refid="_17701009_18356" class="topicref tocentry"><span class="topichead">1Ø, Backup Power Solutions</span><ul>
                  <li class="topicref tocentry"><a href="_17701009_18356.php#_17701009_966822" data-refids=" _17701009_96682">1Ø3W—120/240 Vac—UL Listed Backup Power
                        Solutions</a></li>
               </ul>
            </li>
            <li data-refid="_17701010_24856" class="topicref tocentry"><span class="topichead">1Ø, Special Applications</span><ul>
                  <li class="topicref tocentry"><a href="_17701010_24856.php#_17701010_Heading5_42" data-refids=" _17701010_Heading5_4">1Ø2W—120Vac—1Ø3W—120/240 Vac—UL
                        Listed</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701011_45669" class="topicref chapter brand:sd tocentry"><span class="topichead">QO™ and Homeline™ Load Centers and Circuit Breakers</span><ul>
            <li data-refid="_17701011_56950" class="topicref tocentry"><span class="topichead">1Ø, Value Packs and Riser Panels</span><ul>
                  <li class="topicref tocentry"><a href="_17701011_56950.php#_17701011_Heading5_42" data-refids=" _17701011_Heading5_4">1Ø3W—120/240 Vac—UL Listed</a></li>
                  <li class="topicref tocentry"><a href="_17701011_56950.php#_17701011_Heading5_2292" data-refids=" _17701011_Heading5_229">QO Riser Panels</a></li>
                  <li class="topicref tocentry"><a href="_17701011_56950.php#_17701011_Heading5_3342" data-refids=" _17701011_Heading5_334">Panelboard-style Covers for Riser Panels</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701012_88121" class="topicref chapter brand:sd tocentry"><span class="topichead">Load Center Accessories</span><ul>
            <li data-refid="_17701013_72833" class="topicref tocentry"><span class="topichead">QO and Homeline Load Center Accessories</span><ul>
                  <li class="topicref tocentry"><a href="_17701013_72833.php#QOLoadCenterAccessories-1E20C9D22" data-refids=" QOLoadCenterAccessories-1E20C9D2">QO Load Center Accessories</a></li>
                  <li class="topicref tocentry"><a href="_17701013_72833.php#HomelineLoadCenterAccessories-1E22BF922" data-refids=" HomelineLoadCenterAccessories-1E22BF92">Homeline Load Center Accessories</a></li>
                  <li class="topicref tocentry"><a href="_17701013_72833.php#SurgeProtectiveDevices-1E232F852" data-refids=" SurgeProtectiveDevices-1E232F85">Surge Protective Devices</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701014_10955" class="topicref chapter brand:sd tocentry"><span class="topichead">Homeline™ Circuit Breakers</span><ul>
            <li data-refid="_17701014_78898" class="topicref tocentry"><span class="topichead">Plug-On Circuit Breakers</span><ul>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HOMELINEPlug-OnCircuitBreaker-1E239C3C2" data-refids=" HOMELINEPlug-OnCircuitBreaker-1E239C3C">Homeline Plug-On Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineHighMagneticHMCircuitBreake-1E2419092" data-refids=" HomelineHighMagneticHMCircuitBreake-1E241909">Homeline High Magnetic (HM) Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineCombinationArcFaultCircuitI-1E2457802" data-refids=" HomelineCombinationArcFaultCircuitI-1E245780">Homeline Combination Arc Fault Circuit Interruptors (HOM-CAFI)</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineDualFunctionCircuitBreakerH-1E24BDF82" data-refids=" HomelineDualFunctionCircuitBreakerH-1E24BDF8">Homeline Dual Function Circuit Breaker (HOM-DF)</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineGFIHOM-GFI-1E256C822" data-refids=" HomelineGFIHOM-GFI-1E256C82">Homeline GFI (HOM-GFI)</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineEquipmentProtectionDeviceHO-1E25B9472" data-refids=" HomelineEquipmentProtectionDeviceHO-1E25B947">Homeline Equipment Protection Device (HOM-EPD)</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HOMTTandem-1E25DF902" data-refids=" HOMTTandem-1E25DF90">HOMT Tandem and HOMT Quad Tandem Circuit Breakers</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HOMELINECircuitBreakerWireSizes-1E26B9682" data-refids=" HOMELINECircuitBreakerWireSizes-1E26B968">Homeline Circuit Breaker Wire Sizes</a></li>
                  <li class="topicref tocentry"><a href="_17701014_78898.php#HomelineCircuitBreakerAccessories-1E26E5B22" data-refids=" HomelineCircuitBreakerAccessories-1E26E5B2">Accessories for Homeline Circuit Breakers</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="HomelineTMLoadCenters-20B2B571" class="topicref chapter tocentry"><span class="topichead">Homeline™ Load Centers</span><ul>
            <li data-refid="_17701015_58738" class="topicref tocentry"><span class="topichead">Indoor, 1Ø, Main Lugs and Main Circuit Breaker</span><ul>
                  <li class="topicref tocentry"><a href="_17701015_58738.php#_17701015_Heading4_42" data-refids=" _17701015_Heading4_4">Indoor, 1Ø, Main Lugs and Main Circuit Breaker</a><ul>
                        <li class="topicref tocentry"><a href="_17701015_58738.php#_17701015_Heading5_42" data-refids=" _17701015_Heading5_4">1Ø3W—120/240 Vac—UL Listed</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li data-refid="_17701016_75665" class="topicref tocentry"><span class="topichead">Rainproof, 1Ø, Main Lugs and Main Circuit Breakers</span><ul>
                  <li class="topicref tocentry"><a href="_17701016_75665.php#_17701016_Heading4_42" data-refids=" _17701016_Heading4_4">Rainproof, 1Ø, Main Lugs and Main Circuit Breakers</a><ul>
                        <li class="topicref tocentry"><a href="_17701016_75665.php#_17701016_Heading5_42" data-refids=" _17701016_Heading5_4">1Ø3W—120/240 Vac—UL Listed</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li data-refid="FieldInstalledMainsKits" class="topicref tocentry"><span class="topichead">1Ø, Field-Installed Mains Kits</span><ul>
                  <li class="topicref tocentry"><a href="fieldinstalledmainskits.php#_17701016_792502" data-refids=" _17701016_79250">1Ø, Field-Installed Mains Kits</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701017_68978" class="topicref chapter brand:sd tocentry"><span class="topichead">QO™ and Homeline™ Load Centers</span><ul>
            <li data-refid="_17701017_71964" class="topicref tocentry"><span class="topichead">Indoor, Dimensions and Knockouts</span><ul>
                  <li class="topicref tocentry"><a href="_17701017_71964.php#_17701017_Box_No_s2" data-refids=" _17701017_Box_No_s">Indoor Knockout Information and Enclosure Dimensions</a></li>
               </ul>
            </li>
            <li data-refid="_17701018_49919" class="topicref tocentry"><span class="topichead">Rainproof, Dimensions, Knockouts and Bolt-on Hubs</span><ul>
                  <li class="topicref tocentry"><a href="_17701018_49919.php#_17701018_Heading4_1702" data-refids=" _17701018_Heading4_170">Enclosure Dimensions and Knockout Information</a></li>
                  <li class="topicref tocentry"><a href="_17701018_49919.php#_17701018_Heading5_1702" data-refids=" _17701018_Heading5_170">Bolt-On Hubs</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701019_78791" class="topicref chapter brand:sd tocentry"><span class="topichead">Combination Service Entrance Devices</span><ul>
            <li data-refid="_17701019_18781" class="topicref tocentry"><span class="topichead">Rainproof, Meter Mains</span><ul>
                  <li class="topicref tocentry"><a href="_17701019_18781.php#RainproofMeterMains-1EAE7E972" data-refids=" RainproofMeterMains-1EAE7E97">Rainproof Meter Mains</a></li>
               </ul>
            </li>
            <li data-refid="_17701020_90185" class="topicref tocentry"><span class="topichead">Rainproof, All-In-Ones, 100 to 225 A Maximum</span><ul>
                  <li class="topicref tocentry"><a href="_17701020_90185.php#_17701020_801322" data-refids=" _17701020_80132">Meter Mains and All-In-Ones (100 to 225 A Maximum)</a></li>
               </ul>
            </li>
            <li data-refid="_17701021_128720" class="topicref tocentry"><span class="topichead">Rainproof, Meter Mains and All-In-Ones, 300–400 A</span><ul>
                  <li class="topicref tocentry"><a href="_17701021_128720.php#MeterMainsAndAll-in-Ones-1EAFD5222" data-refids=" MeterMainsAndAll-in-Ones-1EAFD522">Meter Mains and All-in-Ones (300–400 A Devices)</a></li>
               </ul>
            </li>
            <li data-refid="_17701022_53576" class="topicref tocentry"><span class="topichead">Circuit Breakers for CSEDs</span><ul>
                  <li class="topicref tocentry"><a href="_17701022_53576.php#CircuitBreakersForCSEDs-1EFD2FF62" data-refids=" CircuitBreakersForCSEDs-1EFD2FF6">Circuit Breakers for CSEDs</a></li>
               </ul>
            </li>
            <li data-refid="_17701023_Heading2_3" class="topicref tocentry"><span class="topichead">Accessories and Hubs for CSEDs</span><ul>
                  <li class="topicref tocentry"><a href="_17701023_heading2_3.php#AccessoriesAndHubsForCSEDs-1EFD73C12" data-refids=" AccessoriesAndHubsForCSEDs-1EFD73C1">Accessories and Hubs for CSEDs</a></li>
               </ul>
            </li>
            <li data-refid="Dimensions-1EFDAB40" class="topicref tocentry"><span class="topichead">Dimensions</span><ul>
                  <li class="topicref tocentry"><a href="dimensions-1efdab40.php#DimensionsForCSEDs-1EFDD5E22" data-refids=" DimensionsForCSEDs-1EFDD5E2">Dimensions for CSEDs</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701024_96967" class="topicref chapter brand:sd tocentry"><span class="topichead">RC/QC Solar Ready CSEDs</span><ul>
            <li data-refid="_17701024_90185" class="topicref tocentry"><span class="topichead">Rainproof, Meter Mains and All-In-Ones, 150 to 200 A Maximum</span><ul>
                  <li class="topicref tocentry"><a href="_17701024_90185.php#_17701024_801322" data-refids=" _17701024_80132">Meter Mains and All-In-Ones</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="HomelineSolarReadyPoNCSEDs-7F569B48" class="topicref chapter tocentry"><span class="topichead">Homeline Solar Ready PoN CSEDs</span><ul>
            <li data-refid="RainproofMeterMainsAndAll-In-Ones12-7F579A37" class="topicref tocentry"><span class="topichead">Rainproof, Meter Mains and All-In-Ones, 125 to 225 A Maximum</span><ul>
                  <li class="topicref tocentry"><a href="rainproofmetermainsandall-in-ones12-7f579a37.php#HomelineSolarReadyPoNCSEDs-7F57F1BF2" data-refids=" HomelineSolarReadyPoNCSEDs-7F57F1BF">Homeline Solar Ready PoN CSEDs</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701025_96496" class="topicref chapter brand:sd tocentry"><span class="topichead">Enclosed Devices</span><ul>
            <li data-refid="_17701025_Heading2_2" class="topicref tocentry"><span class="topichead">Load Centers</span><ul>
                  <li class="topicref tocentry"><a href="_17701025_heading2_2.php#_17701025_Heading5_32" data-refids=" _17701025_Heading5_3">1Ø3W—120/240 Vac—240 Vac—UL Listed</a></li>
               </ul>
            </li>
         </ul>
      </li>
      <li data-refid="_17701026_68008" class="topicref chapter brand:sd tocentry"><span class="topichead">Servicepak<sup class="ph sup" data-xtrc="sup:1" lang="English_en">™</sup> Power Outlet Panels</span><ul>
            <li data-refid="_17701026_Heading2_2" class="topicref tocentry"><span class="topichead">Load Centers</span><ul>
                  <li class="topicref tocentry"><a href="_17701026_heading2_2.php#_17701026_692272" data-refids=" _17701026_69227">Power Outlet Panels for Construction Sites</a></li>
                  <li class="topicref tocentry"><a href="_17701026_heading2_2.php#_17701026_682922" data-refids=" _17701026_68292">Power Outlet Panels for Recreational Vehicle Parks</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
</div>        </div>
              
      </div>
          
<script type="text/javascript">
  var refId = '';
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
                        
        <div class="col-sm-10 col-sm-offset-1 col-xs-11">

         </div>
          
	</div>
<!-- BEGIN footer -->
<footer class="navbar navbar-default harp-portal-footer" style="width: 100%; margin: 20px 0 0 0;"> <!-- navbar-fixed-bottom  -->
	<div class="container">
  <p class="navbar-text navbar-left hidden-xs">
    <span class="glyphicon glyphicon-qrcode" id="qrcodeLink"
          title="Show QR code for this page"></span>
  </p>
  <img src="http://www.productinfo.schneider-electric.com/portals/qrgen?url=http%3A%2F%2Fwww.productinfo.schneider-electric.com%2Fportals%2Fui%2Fdigest%2Fviewer%2F561d5d65e4b0c5c41a243bf2%2Fnocontext%2FMaster%2BBookmap%2BContent%2F17701_MAIN%2B(bookmap)_0000056628.xml&amp;size=180"
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

<!-- Mirrored from www.productinfo.schneider-electric.com//portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/nocontext/Master+Bookmap+Content/17701_MAIN+(bookmap)_0000056628.xml by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2016 22:10:37 GMT -->
</html><?php 
} /* ends primary content for logged in users */
else {
	/* alternate content for non-logged in users */
    include("auth/views/not_logged_in.php");
}
?>