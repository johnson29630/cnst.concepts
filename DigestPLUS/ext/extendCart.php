<?php
/* ------ caching reference: http://www.php.net/manual/en/function.header.php */
  header( "Expires: Mon, 20 Dec 1998 01:00:00 GMT" );
  header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
  header( "Cache-Control: no-cache, must-revalidate" );
  header( "Pragma: no-cache" );
/* ---------------------------------------------------------------------------- */

/**
* 
* linked to user email authentication
* 
* note: accepts email attribute as paraleter, does not verify authentication (todo: address in future update)
* 
*/

  $datasource['type']='MySQL';
  $datasource['user']='ext_cart';
  $datasource['password']='ext_cart';
  $datasource['database']='data_qcnfg';
  $datasource['server']='acepub.us.schneider-electric.com';

//----------------------------[ establish database connection ]
	$link = mysqli_connect($datasource['server'], $datasource['user'], $datasource['password'],$datasource['database']);


$request="";$reqp="";$reqv="";$uid="this_is_not_a_valid_email_address";
if (isset($_GET['addtext'])) {$reqp="addtext";$reqv=$_GET[$reqp];$request=$reqp."=".$reqv;}
if (isset($_GET['addurl'])) {$reqp="addurl";$reqv=$_GET[$reqp];$request=$reqp."=".$reqv;}
if (isset($_GET['addlist'])) {$reqp="addlist";$reqv=$_GET[$reqp];$request=$reqp."=".$reqv;}
if (isset($_GET['cmd'])) {$reqp="cmd";$reqv=$_GET[$reqp];$request=$reqp."=".$reqv;}
if (isset($_GET['email'])) {$uid=$_GET['email'];}

/* if (isset($_COOKIE["ext_cart"])) $ndx=$_COOKIE["ext_cart"]+0;else $ndx=0; */

	$q="select * from data_qcnfg.cart where user_id='".$uid."';";
	$result = mysqli_query($link,$q);
	if ($row = mysqli_fetch_array($result)) {
		$mat=$row["material"];
		$ndx=$row["ndx"];
		}
	else {
		$ndx=0;
		$mat=newCartMat();
	}
	mysqli_free_result($result);

if ($ndx==0) {
	/* no valid cart identified, need to create one */
	$q="insert into data_qcnfg.cart (`user_id`,`material`,`dtcreate`) values ('".$uid."',concat('".newCartMat()."\n"."/* ',now(),' cart created */'),now());";
	mysqli_query($link,$q);
	$q="select last_insert_id() as newid;";
	$result=mysqli_query($link,$q);
	if ($row = mysqli_fetch_array($result)) {
		$ndx=$row["newid"];
		$mat=newCartMat();
	}
	mysqli_free_result($result);
	/* setcookie("ext_cart",$ndx,time() + (365 * 24 * 60 * 60)); */
}


if ($request!='' and $ndx>0) {
	$q="update data_qcnfg.cart set material=concat(material,'\n/* ',now(),' ".$request." */') where ndx=".$ndx.";";
	mysqli_query($link,$q);
	if ($reqp=='addurl') {
		/* atttempt to locate part from ptovided url */
		if (substr($reqv,0,58)=='http://www.schneider-electric.com/products/US/en/products/') {
			$newp=substr($reqv,58);
			$q="select m.cat_num as 'catalog_nbr',m.desc_en as 'desc',coalesce(d.url_img_60x40,'') as 'url_img_60x40' from data_cr.crmaster m left join data_cr.crdocs d on d.catalog_nbr=m.cat_num and m.country=d.country where m.cat_num='".$newp."' order by m.country!='USA' limit 1;";
			$q2="";
			$result = mysqli_query($link,$q);
			if ($row = mysqli_fetch_array($result)) {
				//$mat.="\n1|"."query".'|'.$q;
				$mat.="\n1|".$row["catalog_nbr"].'|'.$row["desc"]."|".$row["url_img_60x40"];
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$row["catalog_nbr"]."|".$row["desc"]."|".$row["url_img_60x40"]."'), updates=updates+1 where ndx=".$ndx.";";
			}
			else {
				$mat.="\n1|".$newp.'|('.$newp.')|';
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$newp."|(".$newp.")|'), updates=updates+1 where ndx=".$ndx.";";
			}
			mysqli_free_result($result);
			if ($q2!="") {
				mysqli_query($link,$q2);
			}
			//$mat.="\n0|"."query".'|'.$q;

		}
		//$mat.="\n0|"."query".'|'.$reqv;
		if (substr($reqv,0,118)=='http://products.schneider-electric.us/products-services/product-detail/?event=productDetail&countryCode=us&partNumber=') {
		//	//  'http://products.schneider-electric.us/products-services/product-detail/?event=productDetail&countryCode=us&partNumber=LADS2'
			$newp=substr($reqv,118);
			$q="select m.cat_num as 'catalog_nbr',m.desc_en as 'desc',coalesce(d.url_img_60x40,'') as 'url_img_60x40' from data_cr.crmaster m left join data_cr.crdocs d on d.catalog_nbr=m.cat_num and m.country=d.country where m.cat_num='".$newp."' order by m.country!='USA' limit 1;";
			$q2="";
			$result = mysqli_query($link,$q);
			if ($row = mysqli_fetch_array($result)) {
				//$mat.="\n1|"."query".'|'.$q."|";
				$mat.="\n1|".$row["catalog_nbr"].'|'.$row["desc"]."|".$row["url_img_60x40"];
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$row["catalog_nbr"]."|".$row["desc"]."|".$row["url_img_60x40"]."'), updates=updates+1 where ndx=".$ndx.";";
			}
			else {
				$mat.="\n1|".$newp.'|('.$newp.')';
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$newp."|(".$newp.")|'), updates=updates+1 where ndx=".$ndx.";";
			}
			mysqli_free_result($result);
			if ($q2!="") {
				mysqli_query($link,$q2);
			}
			//$mat.="\n0|"."query".'|'.$q."|";
		}
	}
	if ($reqp=='addtext') {
		/* atttempt to locate part from provided text */
		$newp=$reqv;
			$q="select m.cat_num as 'catalog_nbr',m.desc_en as 'desc',coalesce(d.url_img_60x40,'') as 'url_img_60x40' from data_cr.crmaster m left join data_cr.crdocs d on d.catalog_nbr=m.cat_num and m.country=d.country where m.cat_num='".$newp."' order by m.country!='USA' limit 1;";
			$q2="";
			$result = mysqli_query($link,$q);
			if ($row = mysqli_fetch_array($result)) {
				//$mat.="\n1|"."query".'|'.$q;
				$mat.="\n1|".$row["catalog_nbr"].'|'.$row["desc"]."|".$row["url_img_60x40"];
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$row["catalog_nbr"]."|".$row["desc"]."|".$row["url_img_60x40"]."'), updates=updates+1 where ndx=".$ndx.";";
			}
			else {
				$mat.="\n1|".$newp.'|('.$newp.')|';
				$q2="update data_qcnfg.cart set material=concat(material,'\n1|".$newp."|(".$newp.")|') where ndx=".$ndx.";";
			}
			mysqli_free_result($result);
			if ($q2!="") {
				mysqli_query($link,$q2);
			}
	}
	if ($reqp=='addlist') {
		/* atttempt to locate part from ptovided url */
		$new_list=explode(";",$reqv);
		foreach ($new_list as $new_item) {
			//$mat.="\n0|"."query".'|'.$new_item."|";
			$newa=explode(",",$new_item);
			$newp=$newa[1];
			$q="select m.cat_num as 'catalog_nbr',m.desc_en as 'desc',coalesce(d.url_img_60x40,'') as 'url_img_60x40' from data_cr.crmaster m left join data_cr.crdocs d on d.catalog_nbr=m.cat_num and m.country=d.country where m.cat_num='".$newp."' order by m.country!='USA' limit 1;";
			$q2="";
			$result = mysqli_query($link,$q);
			if ($row = mysqli_fetch_array($result)) {
				//$mat.="\n1|"."query".'|'.$q;
				$mat.="\n".$newa[0]."|".$row["catalog_nbr"].'|'.$row["desc"]."|".$row["url_img_60x40"];
				$q2="update data_qcnfg.cart set material=concat(material,'\n".$newa[0]."|".$row["catalog_nbr"]."|".$row["desc"]."|".$row["url_img_60x40"]."'), updates=updates+1 where ndx=".$ndx.";";
			}
			else {
				$mat.="\n".$newa[0]."|".$newa[1].'|('.$newa[1].')|';
				$q2="update data_qcnfg.cart set material=concat(material,'\n".$newa[0]."|".$newa[1]."|(".$newa[1].")|') where ndx=".$ndx.";";
			}
			mysqli_free_result($result);
			if ($q2!="") {
				mysqli_query($link,$q2);
			}
		}
		//$mat.="\n0|"."query".'|'.$reqv;
	}
	if ($reqp=='cmd') {
		if ($reqv=='empty') {
			$mat=newCartMat();
			$q2="update data_qcnfg.cart set material='".$mat."', updates=updates+1 where ndx=".$ndx.";";
			mysqli_query($link,$q2);
		}
	}
}


$bom=explode("\n",$mat);

$material=array();
foreach($bom as $itm) {
	if (substr($itm,0,1)!='\\') {
		$itma=explode('|',$itm);
		if (count($itma)>2) {
			$material[]=array($itma[0],$itma[1],$itma[2],$itma[3]);
		}
	}
}


	mysqli_close($link);

$cart=array(
	'identifier'=>'extCart',
	'version'=>1,
	'ndx'=>$ndx,
	'request'=>$request,
	'result'=>$mat,
	'material'=>$material);

echo json_encode($cart);

function newCartMat() {
	return '/* ;REMOTE_ADDR:'.$_SERVER['REMOTE_ADDR'].";HTTP_HOST:".$_SERVER['HTTP_HOST'].'; */';
}

?>