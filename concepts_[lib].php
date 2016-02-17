<?php


function formatDecDate($this_ddate) {
	if (strlen($this_ddate)==10) {
		return substr($this_ddate,5,2)."/".substr($this_ddate,8,2)."/".substr($this_ddate,0,4);
	}
	else {
		return $this_ddate;
	}
}




function autoReptFindGrid($ndx,$cmd) {
	// $cmd attributes
	//   header:string (default='')
	//   column1:string (default='')
	//   tabelement:0|1 (default=1)
	// Generate table showing count/status of findings under the indicated project (by project ndx)
	$html="";

  		$tfcount["sub"]=0;
  		$tfcount["inv"]=0;
  		$tfcount["act"]=0;
  		$tfcount["com"]=0;
  		$tfcount["res"]=0;
  		$tfcount["tot"]=0;


	$this_list = mysql_query("SELECT ndx, flags,act_name FROM cpd_act WHERE ((act_typ='task') AND (p_ndx=".$ndx.")) ORDER BY date_end");


	while($row = mysql_fetch_array($this_list)) {
		$t="";
		$q="SELECT count(ndx) AS c FROM cpd_act WHERE ((act_typ='find') AND (p_ndx=".$row["ndx"]."))";
		$a=mysql_query($q);
		$r=mysql_fetch_array($a);
//		if (get_attribute($row["flags"],"find_new")== "1") {
		if (($r["c"]>0) or (get_attribute($row["flags"],"find_new"))=="1") {
  		$html .= "<tr>";
			if (get_attribute($cmd,"column1")!="") {
				$html.="<td>".get_attribute($cmd,"column1")."</td>";
			}
  		$html .= "<td align='right'>".$row["act_name"]."</td>";
  		$fcount["sub"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Submit') AND (act_typ='find') AND (p_ndx=".$row["ndx"]."))");
  		$fcount["inv"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Investigate') AND (act_typ='find') AND (p_ndx=".$row["ndx"]."))");
  		$fcount["act"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Active') AND (act_typ='find') AND (p_ndx=".$row["ndx"]."))");
  		$fcount["com"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE (((status='Complete') OR (status='Reject')) AND (act_typ='find') AND (p_ndx=".$row["ndx"]."))");
  		$fcount["res"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE (((status='Resolved') OR (status='Acknowledged')) AND (act_typ='find') AND (p_ndx=".$row["ndx"]."))");
  		$fcount["tot"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((act_typ='find') AND (p_ndx=".$row["ndx"]."))");

			$html.="<td>".$fcount["sub"]."</td>";
			$html.="<td>".$fcount["inv"]."</td>";
			$html.="<td>".$fcount["act"]."</td>";
			$html.="<td>".$fcount["com"]."</td>";
			$html.="<td>".$fcount["res"]."</td>";
			$html.="<td>".$fcount["tot"]."</td>";
			if ($fcount["tot"]>0) {
				$html.="<td>".sprintf("%.0f",((($fcount["com"]+$fcount["res"])/$fcount["tot"])*100))."%</td>";
				$html.="<td>".sprintf("%.0f",((($fcount["res"])/$fcount["tot"])*100))."%</td>";
			}
			else {
				$html.="<td>&nbsp;</td>";
				$html.="<td>&nbsp;</td>";
			}

  		$html.="</tr>";
  		$tfcount["sub"]=$tfcount["sub"]+$fcount["sub"];
  		$tfcount["inv"]=$tfcount["inv"]+$fcount["inv"];
  		$tfcount["act"]=$tfcount["act"]+$fcount["act"];
  		$tfcount["com"]=$tfcount["com"]+$fcount["com"];
  		$tfcount["res"]=$tfcount["res"]+$fcount["res"];
  		$tfcount["tot"]=$tfcount["tot"]+$fcount["tot"];
		}
	}





  		$t = "<tr>";
			if (get_attribute($cmd,"column1")!="") {
				$t.="<td>".get_attribute($cmd,"column1")."</td>";
			}
  		$t .= "<td align='right'>"."assigned to project"."</td>";
  		$fcount["sub"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Submit') AND (act_typ='find') AND (p_ndx=".$ndx."))");
  		$fcount["inv"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Investigate') AND (act_typ='find') AND (p_ndx=".$ndx."))");
  		$fcount["act"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Active') AND (act_typ='find') AND (p_ndx=".$ndx."))");
  		$fcount["com"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Complete') AND (act_typ='find') AND (p_ndx=".$ndx."))");
  		$fcount["res"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((status='Resolved') AND (act_typ='find') AND (p_ndx=".$ndx."))");
  		$fcount["tot"]=firstSQL("SELECT count(ndx) FROM cpd_act WHERE ((act_typ='find') AND (p_ndx=".$ndx."))");
			$t.="<td>".$fcount["sub"]."</td>";
			$t.="<td>".$fcount["inv"]."</td>";
			$t.="<td>".$fcount["act"]."</td>";
			$t.="<td>".$fcount["com"]."</td>";
			$t.="<td>".$fcount["res"]."</td>";
			$t.="<td>".$fcount["tot"]."</td>";
			if ($fcount["tot"]>0) {
				$t.="<td>".sprintf("%.0f",((($fcount["com"]+$fcount["res"])/$fcount["tot"])*100))."%</td>";
				$t.="<td>".sprintf("%.0f",((($fcount["res"])/$fcount["tot"])*100))."%</td>";
	  		$t.="</tr>";
			}
			else {
				$t="";
			}
			if ($html=="") {$t="";}
  		$html.=$t;
  		$tfcount["sub"]=$tfcount["sub"]+$fcount["sub"];
  		$tfcount["inv"]=$tfcount["inv"]+$fcount["inv"];
  		$tfcount["act"]=$tfcount["act"]+$fcount["act"];
  		$tfcount["com"]=$tfcount["com"]+$fcount["com"];
  		$tfcount["res"]=$tfcount["res"]+$fcount["res"];
  		$tfcount["tot"]=$tfcount["tot"]+$fcount["tot"];

		//if (($fcount["tot"]>0) or (get_attribute($row["flags"],"find_new"))=="1") {

  		$html .= "<tr>";
			if (get_attribute($cmd,"column1")!="") {
				$html.="<td>".get_attribute($cmd,"column1")."</td>";
			}
  		$html .= "<td align='right'>"."Project Total"."</td>";
			$html.="<td>".$tfcount["sub"]."</td>";
			$html.="<td>".$tfcount["inv"]."</td>";
			$html.="<td>".$tfcount["act"]."</td>";
			$html.="<td>".$tfcount["com"]."</td>";
			$html.="<td>".$tfcount["res"]."</td>";
			$html.="<td>".$tfcount["tot"]."</td>";
			if ($tfcount["tot"]>0) {
				$html.="<td>".sprintf("%.0f",((($tfcount["com"]+$tfcount["res"])/$tfcount["tot"])*100))."%</td>";
				$html.="<td>".sprintf("%.0f",((($tfcount["res"])/$tfcount["tot"])*100))."%</td>";
			}
			else {
				$html.="<td>&nbsp;</td>";
				$html.="<td>&nbsp;</td>";
			}
  		$html.="</tr>";




	if ($html!="") {
		if (get_attribute($cmd,"tabelement")!="0") {
			$t="<table border='1' cellspacing='0' cellpadding='0' style='text-align:right;' width='100%'>";
		}
		else {
			$t="";
		}
		if (get_attribute($cmd,"header")!="") {
			$t.="<tr>";
			if (get_attribute($cmd,"column1")!="") {
				$t.="<td colspan='1' style='background-color:#ffff99;font-weight:bold;margin:5px 5px 5px 5px;'>".get_attribute($cmd,"column1")."</td>";
			}
			$t.="<td colspan='9' style='text-align:left;background-color:#ffff99;font-weight:bold;margin:5px 5px 5px 5px;'>".get_attribute($cmd,"header")."</td>";
			$t.="</tr>";
		}
		$t.="<tr bgcolor='#e0e0e0' valign='bottom'>";
		if (get_attribute($cmd,"column1")!="") {
			$t.="<td>CPD#</td>";
		}
		$t.="<td>Activity</td>";
		$t.="<td>Submit</td>";
		$t.="<td>Invest.</td>";
		$t.="<td>Active</td>";
		$t.="<td>Complete<br/>(or Reject)</td>";
		$t.="<td>Resolved/<br/>Acknowledged</td>";
		$t.="<td>Total</td>";
		$t.="<td>%Comp</br/>/Rej</td>";
		$t.="<td>%Res<br/>/Ack</td>";
		$html=$t.$html;
		if (get_attribute($cmd,"tabelement")!="0") {
			$html=$html."</table>";
		}
	}

	return $html;
}


Function user_name($u) {
    $uf='['.$u.']';
    $result=mysql_fetch_array(mysql_query("SELECT cfg_data FROM cpd_config WHERE cfg_type='user' AND cfg_grp='cpd' AND cfg_attr='".$u."'"));
    $uf=get_attribute($result["cfg_data"],"name");
    return $uf;
}


Function get_attribute($text_to_scan, $a){
	$t=";".$text_to_scan.";";
	$r="";
	$p=strpos($t,";".$a.":");
	if ($p>-1) {
		$r=substr($t,$p+strlen($a)+2);
		$p=strpos($r,";");
		$r=substr($r,0,$p);
	}
	return $r;
}

Function set_attribute($text_to_scan, $a, $valu){
	$ret=";;".$text_to_scan;
	if (strpos($ret,";".$a.":")>0) {
		// existing attribute
		$reta=explode(";",$ret);
		$ret="";
		foreach ($reta as $elem) {
			$elema=explode(":",$elem);
			if ($elema[0]<>"") {
				if ($elema[0]==$a) {
					$ret.=";".$a.":".$valu;
					}
				else {
					$ret.=";".$elem;
					}
				}
			}
		}
	else {
		$ret=$text_to_scan.";".$a.":".$valu;
		}
	if (substr($ret,0,1)==";") $ret=substr($ret,1);
	if (substr($ret,0,1)==";") $ret=substr($ret,1);
	return $ret;
	}

Function element_attribute($text_to_scan, $a){
	$t=" ".$text_to_scan.">";
	$t=substr($t,0,strpos($t,">"))." ";
	$r="";
	$p=strpos($t," ".$a.'="');
	if ($p>-1) {
		$r=substr($t,$p+strlen($a)+3);
		$p=strpos($r,'" ');
		$r=substr($r,0,$p);
	}
	return $r;
}


Function crlf() {
	return chr(13).chr(10);
}


function read_db_attributes($prod_id) {
	$q="SELECT act_attrib FROM cpd_act WHERE (act_typ='cnfg' AND prod_id='".$prod_id."')";
	$r = mysql_fetch_array(mysql_query($q));
	return $r["act_attrib"];
}


Function get_line_ini($text_to_scan, $a){
	$t=crlf().$text_to_scan.crlf();
	$r="";
	$p=strpos($t,crlf().$a."=");
	if ($p>-1) {
		$r=substr($t,$p+strlen($a)+3);
		$p=strpos($r,crlf());
		$r=substr($r,0,$p);
	}
	return $r;
}


function firstSQL($qsql) {
	//returns first field of data from provided query
	$fr = mysql_fetch_row(mysql_query($qsql));
	return $fr[0];
}


function contentTabStart($tabArray) {
$fr='';
	$fr=$fr.'<table border="1" cellspacing="0" width="100%">';
	$fr=$fr.'<tr>';
for ($i = 1; $i <= count($tabArray)-1; $i++) {
	$tabData=explode('*',$tabArray[$i]);
	if ($tabArray[0]==('current:'.$tabData[0])) {
		$fr=$fr.'<td style="font-weight:bold;color:red;text-align:center" title="'.$tabData[2].'"><nobr>'.$tabData[0].'</nobr></td>';
	} else {
		$fr=$fr.'<td bgcolor="#e0e0e0" style="text-align:center" title="'.$tabData[2].'"><nobr><a href="'.$tabData[1].'">'.$tabData[0].'</a></nobr></td>';
	}
}
	$fr=$fr.'<td bgcolor="#7f7f7f" width="75%">&nbsp;</td>';
	$fr=$fr.'</tr>';
	$fr=$fr.'<tr><td colspan="'.(count($tabArray)-0).'">';
	return $fr;
}


function contentTabEnd($cmd) {
	$fr='';
	$fr=$fr.'</td></tr>';
	$fr=$fr.'</table>';
	return $fr;
}

//	  // My SQL datasource for testing only
//	  $datasource['type']='MySQL';
//	  $datasource['server']='localhost';
//	  $datasource['user']='cpd_user';
//	  $datasource['password']='cpd_user';
//	  $datasource['database']='cpd';
//mysql_connect($datasource['server'], $datasource['user'], $datasource['password']);
//mysql_select_db($datasource['database']);
//echo autoReptFindGrid(19269,"");

Function user_function($u) {
	$uf=$u;
//    uf = get_attribute(get_line_ini(MyEnv.user_access, CStr(Nz(u, ""))), "usr_func")
//    If uf = "" Then Let uf = "[" + CStr(Nz(u, "")) + "]"
//    user_function = uf
	return "[".$uf."]";
}


function browser_info($agent=null) {
	/* 
	from http://php.net/manual/en/function.get-browser.php
	If you're just finding this API, note that you may want to use a lighter-weight
	browser detection script.  get_browser() requires the "browscap.ini" file,
	which is 300KB+.  Loading and processing this file will likely impact script
	performance.  Although it surely provides excellent detection results, in most
	cases a much simpler method can be just as effective.  This is why so many
	previous commenters have provided alternate implementations.

	Here's the solution I ended up using, which I've tested on the agents listed at
	http://whatsmyuseragent.com/CommonUserAgents.asp It has the advantage of being
	compact and reasonably easy to extend (just add entries to the $known array
	defined at the top).  It should be fairly performant as well, since it doesn't
	do any iteratoin or recursion.

	This returns an array with the detected browser as the key, and the version as
	the value, and also sets 'browser' and 'version' keys.  For example on Firefox
	3.5:
	<?php
	$ua = browser_info();
	print_r($ua);
	Array
	(
		[firefox] => 3.5
		[browser] => firefox
		[version] => 3.5
	)

	// Various browser tests you can do with the returned array ...
	if ($ua['firefox']) ... // true
	if ($ua['firefox'] > 3) ... // true
	if ($ua['firefox'] > 4) ... // false
	if ($ua['browser'] == 'firefox') ... // true
	if ($ua['version'] > 3.5) ... // true
	if ($ua['msie']) ... // false ('msie' key not defined)
	if ($ua['opera'] > 3) ... // false ('opera' key not defined)
	if ($ua['safari'] < 3) ... // false also ('safari' key not defined)
	?>
	*/
	// Declare known browsers to look for
  $known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
    'konqueror', 'gecko');

  // Clean up agent and build regex that matches phrases for known browsers
  // (e.g. "Firefox/2.0" or "MSIE 6.0" (This only matches the major and minor
  // version numbers.  E.g. "2.0.0.6" is parsed as simply "2.0"
  $agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
  $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';

  // Find all phrases (or return empty array if none found)
  if (!preg_match_all($pattern, $agent, $matches)) return array();

  // Since some UAs have more than one phrase (e.g Firefox has a Gecko phrase,
  // Opera 7,8 have a MSIE phrase), use the last one found (the right-most one
  // in the UA).  That's usually the most correct.
  $i = count($matches['browser'])-1;
  return array($matches['browser'][$i] => $matches['version'][$i]);
}

/*
 * converts a 'quickdate' 'YYYY.MM.DD' to a formatted date 'MM/DD/YYYY'
 * create:2011.10.05
 */
function qdate2fdate($qd) {
	$return=$qd;
	if (strlen($qd)==10 and substr($qd,4,1)=="." and substr($qd,7,1)==".") {
		$return=substr($qd,5,2)."/".substr($qd,8,2)."/".substr($qd,0,4);	
	}
	return $return;
}

function query2table($link,$query,$groupcol=0,$tdr=array("<<>>")) {
	/*
	
	$groupcol: optional parameter that triggers grouping of the first column
		$groupcol=0: no grouping
		$groupcol=1 (!=0): group the first column: combine cells that contain the same content (use $group=1, future values could be used for alternate behaviors)
	*/
		$tbl="";
		$result = mysqli_query($link,$query);
		if ($row=mysqli_fetch_fields ($result)) {
			$tbl.="<table border=\"1\" cellspacing=\"0\">";
			$tbl.="<tr style=\"background-color:#eeeeee\">";
			$icol=0;
			foreach ($row as $col) {
				$icol=$icol+1;
					$tbl.="<td><span>";
					$tbl.=str_replace("%lt%","<",str_replace("%gt%",">",$col->name));
					$tbl.="</span></td>";
			}
			$tbl.="</tr>";
		}
		$coldata="<<first_row>>";
		$irow=1;
		while ($row = mysqli_fetch_row($result)) {
			$icol=0;
			$tbl.="<tr>";
			foreach ($row as $col) {
				$icol=$icol+1;
				if (isset($tdr[$icol][$col])) $colLabel=$tdr[$icol][$col]; else $colLabel=$col;
				if ($groupcol==1) {
					if ($icol==1) {
						if ($coldata==$col){
							$irow=$irow+1;
						}
						else {
							$tbl=str_replace("%<rowspan>%",$irow,$tbl);
							$irow=1;
							$coldata=$col;
							$tbl.="<td rowspan=\"%<rowspan>%\"><span>";
							if ($colLabel=="") {$tbl.="&#160;";} else {$tbl.=$colLabel;}
							$tbl.="</span></td>\n";
						}
						
					}
					else {
						$tbl.="<td><span>";
						if ($colLabel=="") {$tbl.="&#160;";} else {$tbl.=$colLabel;}
						$tbl.="</span></td>\n";
					}
				}
				else {
					$tbl.="<td><span>";
					if ($colLabel=="") {
						$tbl.="&#160;";
						} 
					else {
						$tbl.=$colLabel;
						}
					$tbl.="</span></td>\n";
				}
				}
			$tbl.="</tr>\n";
			}
			$tbl=str_replace("%<rowspan>%",$irow,$tbl);
		mysqli_free_result($result);
		if ($tbl!=""){
			$tbl.="</table>";
		}
	echo $tbl;
	
	//

}

function query2array($link,$query) {
	/*
	 loads the entire results of a query into an array
	*/
		$tb=array();
		$result = mysqli_query($link,$query);
		if ($row=mysqli_fetch_fields ($result)) {
			$tr=array();
			foreach ($row as $col) {
				$tr[]=$col->name;
			}
			$tbl[]=$tr;
		}
		while ($row = mysqli_fetch_row($result)) {
			$tr=array();
			//foreach ($row as $col) {
			//	$tr[]=$col;
			//	}
			//	$tbl[]=$tr;
			$tbl[]=str_replace("\"","&quot;",$row);
			}
		mysqli_free_result($result);
	return $tbl;
	
	//

}

function query2str1x($link,$query) {
	/*
	 load first column of first row from a query to a single result variable
	*/
		$result = mysqli_query($link,$query);
		$r="";
		if ($row = mysqli_fetch_row($result)) {
			$r=$row[0];
		}
		mysqli_free_result($result);
	return $r;
}

function query2str2d($link,$query) {
	/*
	 loads the entire results of a query into an a 2 d strng array without headings
	 [1,2,3],[,4,5,6]...
	*/
	$tbl="";
		$result = mysqli_query($link,$query);
		while ($row = mysqli_fetch_row($result)) {
			$tr="";
			foreach ($row as $col) {
				if (is_numeric($col)) {
					$tr.=",".$col;
				}
				else {
					$col=str_replace("#","Num",$col);
					$tr.=",\"".str_replace("\"","&quot;",$col)."\"";
				}
				}
			$tbl.=",[".substr($tr,1)."]";
			//$tr=str_replace("\"","&quot;",$row);
			//$tbl.=",[".implode(",",$tr)."]";
			}
		mysqli_free_result($result);
	return substr($tbl,1);
	
	//

}
function query2arrayO($link,$query) {
	/*
	 loads the entire results of a query into an object array
	*/
	$rc=0;
		$tb=array();
		$result = mysqli_query($link,$query);
		if ($row=mysqli_fetch_fields ($result)) {
			$tr=array();
			foreach ($row as $col) {
				$tr[]=$col->name;
			}
			$tbl["r".$rc]=$tr;
		}
		while ($row = mysqli_fetch_row($result)) {
			$tr=array();
			$cc=0;
			foreach ($row as $col) {
				$cc+=1;
				$tr["c".$cc]=$col;
				}
			$rc+=1;
			$tbl["r".$rc]=$tr;
			}
		mysqli_free_result($result);
	return $tbl;
	
	//

}


function act_log($link,$action,$activity) {
	global $session;
	/**
	* 
	*/
//----------------------------[ read parameters from url ]
if (isset($_GET['uid'])) $uid=$_GET['uid']; else $uid='';
//if (isset($_GET['source'])) $source=$_GET['source']; else $source='unknown';
//	if (isset($_GET['application'])) $source=$_GET['application'];
//$activity="act_log:0.106;loc:cpd".$activity;
// try to read userID from $session
	$ra="";
if (isset($session)) {
	$ui= $session->userinfo;
	$ra=$_SERVER['REMOTE_ADDR'];
	$uid=$ra;
	if (isset($ui["username"]))	$uid=$ui["username"];
}
if (isset($activity)) $act=$activity; else $act='';
$act=$activity;
$act=set_attribute($act,'remote_addr',$_SERVER['REMOTE_ADDR']);

$tmp="Schneider-login_name";if (isset($_COOKIE[$tmp])) {$tmpa=$_COOKIE[$tmp];if (is_string($tmpa)) {$act=set_attribute($act,$tmp,$tmpa);}}


if ($uid=='') {$uid=$_SERVER['REMOTE_ADDR'];}
if ($uid=='') {$uid='unknown';}


$p="";
if (isset($_SERVER['QUERY_STRING'])) {
	$p=libMysqlEscape($_SERVER['QUERY_STRING']);
}

$geo=""; // if (isset($_COOKIE["SECTRYCODE"])) {$geo=set_attribute($geo,"SECTRYCODE",$_COOKIE["SECTRYCODE"]);}

$client_id=""; 
if (isset($_COOKIE["help_client_uuid"])) {$client_id=$_COOKIE["help_client_uuid"];}

	$source='concepts';

	$geo=set_attribute($geo,'country',geoCountryFromIP($link,act_log_getClientIP()));

	//$query="insert into `data_rpt`.`act_log` (`source`) values ('".$source."');";
	//$result = mysqli_query($link,$query);

$apiKey=get_attribute($activity,"apikey");
if (isset($_GET['apiKey'])) $apiKey=$_GET['apiKey'];

	//$query="insert into `data_rpt`.`act_log` (`source`,`uid`,`action`,`activity`,`query_string`,`remote_addr`) values ('".$source."','".$uid."','".$action."','".$act."','".$p."','".$ra."');";
	$query="insert into `data_rpt`.`act_log` (`source`,`uid`,`action`,`activity`,`query_string`,`remote_addr`,`getClientIP`,`api_key`,`clientGeoData`,`prod_id`,`client_id`) values ('".$source."','".$uid."','".$action."','".$act."','".$p."','".$ra."','".act_log_getClientIP()."','".$apiKey."','".$geo."','".strtoupper(get_attribute($activity,"prod_id"))."','".$client_id."');";
	$result = mysqli_query($link,$query);
	
	//echo $query;
	return 0;
}

function act_log_getClientIP(){
     if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];  
        }else if (array_key_exists('REMOTE_ADDR', $_SERVER)) { 
            return $_SERVER["REMOTE_ADDR"]; 
        }else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"]; 
        } 
        return '';
    }

/**
* 
* @param undefined $link
* @param undefined $IP
* 
* @return
* 
* uses ip2nation data
* http://www.ip2nation.com/ip2nation
* 
*/
function geoCountryFromIP($link,$IP) {
	$geoCntry="";
	$ipa=explode(",",$IP.",");
	$q= "
	SELECT c.country 
	        FROM 
	            data_rpt.ip2nationCountries c,
	            data_rpt.ip2nation i 
	        WHERE 
	            i.ip < INET_ATON('".$ipa[0]."') 
	            AND 
	            c.code = i.country 
	        ORDER BY 
	            i.ip DESC 
	        LIMIT 1;";
	//$geoCntry=$q."\n";
	$result = mysqli_query($link,$q);
	if ($row = mysqli_fetch_array($result)) {
		$geoCntry .= $row[0];
	}
	mysqli_free_result($result);
	if ($geoCntry=="Private") {$geoCntry="";}
	return $geoCntry;
}

function libMysqlEscape($str) {
        $search=array("\\","\0","\n","\r","\x1a","'",'"');
        $replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
        return str_replace($search,$replace,$str);
}

?>