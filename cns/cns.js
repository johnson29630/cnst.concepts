/* cns.js */

var cns_fvalid /* scope of feature values that are valid within scoope of selected features */ 
var appValid=false;
var slnValid=false;
var featValid=false;
var ndxApp=-1;
var ndxProd=-1;
var ndxSolution=-1
var cns_user={
	"open_fsel":false
}


function body_onresize() {
	cnsShowAll();
}
function body_onload() {
	cnsShowAll()
}

function cnsSelectSingleScope() {
	
}

function cnsShowAll() {
	/* check cns_app against product definition */
	var pg="";
	appValid=false;
	slnValid=false;
	ndxApp=-1;
	ndxProd=-1;
	ndxSolution=-1
	var tmp="";
	var fnd="";
	var imok=false;
	for (i=0;i<cns_pd.products.length;i++) {if (cns_pd.products[i].prod==cns_prod) {ndxProd=i;for (j=0;j<cns_pd.products[i].applications.length;j++) {
		if (cns_pd.products[i].applications[j].application==cns_app) {appValid=true;ndxApp=j}
	}}}
	if (appValid) {
		pg+="<div class='cns_app' onclick='pnl_show_application();'><p  class='cns_app'><i class='fa fa-bars' style='font-size:22px;float:left;margin-right:4px'></i>"+cns_app+"</p></div>";
		for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].features.length;k++) {
			if (cns_sel.length<k+1) {cns_sel[k]="";}
			if (cns_pd.products[ndxProd].applications[ndxApp].features[k].values.length==1) {
				/* single value available, automatically select */
				//alert (JSON.stringify(cns_sel));
				cns_sel[k]=(cns_pd.products[ndxProd].applications[ndxApp].features[k].values[0]);
				//alert (JSON.stringify(cns_sel));
			}
		}
		/* --------------- get 'also valid' feature values --------------- */
		cns_fvalid=JSON.parse( JSON.stringify(cnsGetFvalid(cns_pd.products[ndxProd].applications[ndxApp],cns_sel)));
		/* --------------------------------------------------------------- */
		document.getElementById("cns_application").innerHTML=pg;
		ndxSolution= cnsValidSolution(cns_pd.products[ndxProd].applications[ndxApp],cns_sel);
		featValid=(ndxSolution>-1);
		if (featValid==false || cns_user.open_fsel==true/* or user opens feat editor */) {
			document.getElementById("cns_solution").className='cns_solution_act';
			/* scan for (first) valid solution */
			for (m=1;m<cns_pd.products[ndxProd].applications[ndxApp].solutions.length;m++) {
				slnValid=true;
				for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].solutions[0].length;k++) {
					if (cns_sel.length<k+1) {cns_sel[k]="";}
					/* check each value */
					
					if (cns_pd.products[ndxProd].applications[ndxApp].solutions[m][k]!=cns_sel[k]) {
						slnValid=false;
						//cns_sel[k]="";
					}
				}
				if (slnValid) {
					featValid=true;
					cns_sel[0]=cns_pd.products[ndxProd].applications[ndxApp].solutions[m][0]
					m=cns_pd.products[ndxProd].applications[ndxApp].solutions.length;
				}
			}
			
			tmp='';
			for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].features.length;k++) {
			//for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].solutions[0].length;k++) {
				if (cns_sel.length<k+1) {cns_sel[k]="";}
				if (cns_sel[k]!="n/a") {
					if (tmp!="") {tmp+="<br/>";}
					if (cns_sel[k]=="") {
						tmp+="<span class=\"cns_feat_null\" tyle=\"background-color:#ff0000;color:#ffff00;\">"+cns_pd.products[ndxProd].applications[ndxApp].features[k].name+":</span>" ;
					}
					else {
						tmp+=cns_pd.products[ndxProd].applications[ndxApp].features[k].name+":" ;
					}
					fnd="";


					for (m=0;m<cns_pd.products[ndxProd].applications[ndxApp].features[k].values.length;m++) {
							if (cns_fvalid[k].values.indexOf(cns_pd.products[ndxProd].applications[ndxApp].features[k].values[m])<0) {
								tmp+=' <div class=\"cns_fval\" onclick="cnsSelectFeat('+ndxProd+','+ndxApp+','+k+','+m+');">'+cns_pd.products[ndxProd].applications[ndxApp].features[k].values[m]+'</div>';
								
							}
							else if (cns_sel[k]==cns_pd.products[ndxProd].applications[ndxApp].features[k].values[m]) {
								tmp+=' <div class=\"cns_fval_sel\" onclick="cnsSelectFeat('+ndxProd+','+ndxApp+','+k+','+m+');">'+cns_pd.products[ndxProd].applications[ndxApp].features[k].values[m]+'</div>';
							}
							else {
								tmp+=' <div class=\"cns_fval_valid\" onclick="cnsSelectFeat('+ndxProd+','+ndxApp+','+k+','+m+');">'+cns_pd.products[ndxProd].applications[ndxApp].features[k].values[m]+'</div>';
							}
					}
				}


			}
			
			document.getElementById("cns_features").innerHTML='<div  class="cnsx_head">Select Features:</div>'+tmp;
/* todo: reset and unfilter functions */
			//document.getElementById("cns_material").className='cns_solution_act';
			if (document.getElementById("cns_material").innerHTML=="") {
				document.getElementById("cns_material").innerHTML="Select product features to continue...";
			}


			
		}
		
		else {
			document.getElementById("cns_solution").className='cns_solution';

			tmp="";
			tmp+='<div class="cnsx_head"><span onclick="cns_user.open_fsel=true;cnsShowAll();" style="cursor:pointer;"><em>Selected Features:</em><i class="fa fa-pencil-square-o" style="float:right;font-size:24px;color:#009933;"></i></span></div>';

			for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].features.length;k++) {
			//for (k=3;k<cns_pd.products[ndxProd].applications[ndxApp].solutions[0].length;k++) {
				if (cns_sel[k]!="n/a") {
					tmp+='<div class="cnsx_feat"><small>'+cns_pd.products[ndxProd].applications[ndxApp].features[k].name+':</small> <span class="cnsx_feat_valu">'+cns_sel[k]+'</span></div>';
				}

				fnd="";


			}

			document.getElementById("cns_features").innerHTML=tmp;
		}
		if (featValid==true) {
			tmp='<div class="cnsx_head">Material List:</div>';
			material=cns_pd.products[ndxProd].applications[ndxApp].solutions[ndxSolution][0];
			for (catnum of material) {
				tmp_desc="<em>(description not found)</em>";
				tmp_img=""
				tmp_itn=""
				tmp_dat=""
				tmp_dwg=""
				
				for (i=0;i<cns_pd.material.length;i++) {
					if (cns_pd.material[i].cat==catnum.c) {
						tmp_desc=cns_pd.material[i].desc
						if (cns_pd.material[i].itn!="") {
							tmp_itn='<img src="' + cns_pd.material[i].itn + '" class="cns_mat_img" style="float:right;"></img>';
						}
						if (cns_pd.material[i].img!="") {
							tmp_itn=' <a href="'+cns_pd.material[i].img+'" target="_blank">'+tmp_itn+'</a>';
						}
						if (cns_pd.material[i].dwg!="") {
							tmp_desc+=' <a href="'+cns_pd.material[i].dwg+'" target="_blank" class="cns_doc_link">Drawing<i class="fa fa-download"></i></a>';
						}
						if (cns_pd.material[i].dat!="") {
							tmp_desc+=' <a href="'+cns_pd.material[i].dat+'" target="_blank" class="cns_doc_link">Datasheet<i class="fa fa-download"></i></a>';
						}
					}
				}
				/* if (tmp!="") {tmp+="<br/>";} */
				
				tmp+='<div class="cnsx_item">';
					tmp+='<div class="cnsx_img_tn">'+tmp_itn+'</div>';
					/* todo: set appriopriate quantity */
					tmp+='<div class="cnsx_cnum"><div class="cnsx_qty">1</div><span class="csnx_pname">'+catnum.c+'</span></div>';
					tmp+='<div class="cnsx_desc">'+tmp_desc+'</div>';
				tmp+='</div>';
			}
			material=cns_pd.products[ndxProd].applications[ndxApp].solutions[ndxSolution][1];
			if (material.length>0) {
				tmp+='<div class="cnsx_head">Accessories:</div>';
				for (catnum of material) {
					tmp_desc="<em>(description not found)</em>";
					tmp_img=""
					tmp_itn=""
					tmp_dat=""
					tmp_dwg=""
					
					for (i=0;i<cns_pd.material.length;i++) {
						if (cns_pd.material[i].cat==catnum.c) {
							tmp_desc=cns_pd.material[i].desc
							if (cns_pd.material[i].itn!="") {
								tmp_itn='<img src="' + cns_pd.material[i].itn + '" class="cns_mat_img" style="float:right;"></img>';
							}
							if (cns_pd.material[i].img!="") {
								tmp_itn=' <a href="'+cns_pd.material[i].img+'" target="_blank">'+tmp_itn+'</a>';
							}
							if (cns_pd.material[i].dwg!="") {
								tmp_desc+=' <a href="'+cns_pd.material[i].dwg+'" target="_blank" class="cns_doc_link">Drawing<i class="fa fa-download"></i></a>';
							}
							if (cns_pd.material[i].dat!="") {
								tmp_desc+=' <a href="'+cns_pd.material[i].dat+'" target="_blank" class="cns_doc_link">Datasheet<i class="fa fa-download"></i></a>';
							}
						}
					}
					/* if (tmp!="") {tmp+="<br/>";} */
					
					tmp+='<div class="cnsx_item">';
						tmp+='<div class="cnsx_img_tn">'+tmp_itn+'</div>';
						/* todo: editable quantity */
						/* todo: add accessories to bom */
						tmp+='<div class="cnsx_cnum cnsx_accessory"><div class="cnsx_qty" onclick="cnsAccessoryQty(this);">0</div><span class="csnx_pname">'+catnum.c+'</span></div>';
						tmp+='<div class="cnsx_desc">'+tmp_desc+'</div>';
					tmp+='</div>';
				}
			}
			document.getElementById("cns_material").className='cns_material';
			document.getElementById("cns_material").innerHTML=tmp;
		}
		else {
			if (document.getElementById("cns_material").innerHTML=="Select product features to continue...") {
				document.getElementById("cns_material").className='cns_material';
			}
			else {
				document.getElementById("cns_material").className='cns_material_strike';
			}
		}
		cns_user.open_fsel=false;			
	}
	else {
		cns_app="";
		pnl_show_application();
	}
	/* build footer */
	tmp='';
	if (featValid==true) {
		locationParameters();
		if (locationParameters()['nextStep']) {
			tmp+='<div class="tpl_footer_btn" onclick="cnsPostMessage(\''+locationParameters()['nextStep']+'\');">'+locationParameters()['nextStep']+'</div>';
		}
		tmp+='<div class="tpl_footer_btn" onclick="cnsAddToProject();">Add Parts to Project</div>';
	}
	else {
		if (locationParameters()['nextStep']) {
			tmp+='<div class="tpl_footer_dis">'+locationParameters()['nextStep']+'</div>';
		}
		tmp+='<div class="tpl_footer_dis">Add Parts to Project</div>';
	}
	tmp+='<div class="tpl_footer_btn" onclick="cnsShowHelp();">Help</div>';
	document.getElementById("tpl_footer").innerHTML=tmp;
}

function cnsAccessoryQty(obj) {
	//alert('cnsAccessoryQty()');
	if (obj.innerHTML=='1') {
		obj.innerHTML='0';
	}
	else {
		obj.innerHTML='1';
	}
	cnsSolutnPlusAcc();
}

function cnsSetApp(app2set) {
	cns_app=app2set;
	pnl_hide()
	cnsShowAll();
} 

function pnl_show_application() {
	var content='';
	var pnl_height=document.getElementById("tpl_menubar").clientHeight+document.getElementById("tpl_content").clientHeight;
	document.getElementById("pnl_backdrop").style.display="none";
	document.getElementById("pnl_content").style.display="none";
	document.getElementById("pnl_backdrop").style.top=document.getElementById("tpl_banner").clientHeight+"px";
	document.getElementById("pnl_backdrop").style.left=0;
	document.getElementById("pnl_backdrop").style.width="100vw";
	document.getElementById("pnl_backdrop").style.height=pnl_height+"px";
	document.getElementById("pnl_content").style.top=document.getElementById("tpl_banner").clientHeight+"px";
	//document.getElementById("pnl_content").style.width="75%";
	document.getElementById("pnl_content").style.height=pnl_height+"px";//document.getElementById("pnl_backdrop").style.clientHeight;
	document.getElementById("pnl_backdrop").style.display="block";
	content="<p style=\"font-size:75%;\"><em>Application:</em></p>";
	for (i=0;i<cns_pd.products.length;i++) {
		if (cns_pd.products[i].prod==cns_prod) {
			for (j=0;j<cns_pd.products[i].applications.length;j++) {
				if (cns_pd.products[i].applications[j].application==cns_app) {
					content+="<p class=\"tpl_selectable\" style=\"color:#000000;background-color:#cccccc;\" onclick=\"cnsSetApp(&quot;"+cns_pd.products[i].applications[j].application+"&quot;)\"><i class='fa fa-check-square-o' style='font-size:24px;float:right;margin-left:4px'></i>"+cns_pd.products[i].applications[j].application+"</p>"
				}
				else {
					content+="<p class=\"tpl_selectable\" onclick=\"cnsSetApp(&quot;"+cns_pd.products[i].applications[j].application+"&quot;)\">"+cns_pd.products[i].applications[j].application+"</p>"
				}
			}
		}
	}
	document.getElementById("pnl_content").innerHTML= content;
	document.getElementById("pnl_content").style.display="block";
}

function cnsSelectFeat(sp,sa,sk,sm) {
	//alert(sk + " " + cns_pd.products[sp].applications[sa].solutions[sm][sk]);
	cns_sel[sk]=cns_pd.products[sp].applications[sa].features[sk].values[sm]+"";

	if (cns_fvalid[sk].values.indexOf(cns_sel[sk])<0){
		for (k=3;k<cns_pd.products[sp].applications[sa].features.length;k++) {
			if (k!=sk) {
				cns_sel[k]="";
			}
		}
	}
	cnsShowAll();
	cnsSolution();
}

function cnsGetFvalid(tapp,tsel) {
		/* --------------- get 'also valid' feature values --------------- */
		var tfvalid=JSON.parse( JSON.stringify( tapp.features ) ); /* 'clone' the features */
		var thisone=false;
		for (k=3;k<tfvalid.length;k++) {tfvalid[k].values=[];
			if (tsel.length<k+1) {tsel[k]="";}
			for (m=1;m<tapp.solutions.length;m++) {
				/* temporary: works for 3 features only */
				for (l=3;l<tfvalid.length;l++) {
					if (l==3) {
						if ((tapp.solutions[m][4]==tsel[4] || tsel[4]=="") && (tapp.solutions[m][5]==tsel[5] || tsel[5]=="")) {
							tfvalid[3].values[tfvalid[3].values.length]=tapp.solutions[m][3];
						} 
					}
					if (l==4) {
						if ((tapp.solutions[m][3]==tsel[3] || tsel[3]=="") && (tapp.solutions[m][5]==tsel[5] || tsel[5]=="")) {
							tfvalid[4].values[tfvalid[4].values.length]=tapp.solutions[m][4];
						} 
					}
					if (l==5) {
						if ((tapp.solutions[m][3]==tsel[3] || tsel[3]=="") && (tapp.solutions[m][4]==tsel[4] || tsel[4]=="")) {
							tfvalid[5].values[tfvalid[5].values.length]=tapp.solutions[m][5];
						} 
					}
					//if (l==6) alert("critical error!");
				}
			}
		}

		for (k=3;k<tfvalid.length;k++) {
			//alert(JSON.stringify(tfvalid[k].values))
		}




// try again

		/*var*/ tfvalid=JSON.parse( JSON.stringify( tapp.features ) ); /* 'clone' the features */
		for (k=3;k<tfvalid.length;k++) {
			tfvalid[k].values=[];
		}
		for (k=3;k<tfvalid.length;k++) {
			if (tsel.length<k+1) {tsel[k]="";}
			for (s=1;s<tapp.solutions.length;s++) {
				/* parse through each solution */
				thisone=true;
				for (t=3;t<tfvalid.length;t++) {
					if (t!=k) {
						if (tapp.solutions[s][t]!=tsel[t] && tsel[t]!='') {
							thisone=false
						}
					}
				}				
				if (thisone==true && tfvalid[k].values.indexOf(tapp.solutions[s][k])<0) {
					tfvalid[k].values[tfvalid[k].values.length]=tapp.solutions[s][k];
				}



/*				for (l=3;l<tfvalid.length;l++) {
					if (l==3) {
						if ((tapp.solutions[m][4]==tsel[4] || tsel[4]=="") && (tapp.solutions[m][5]==tsel[5] || tsel[5]=="")) {
							if (tfvalid[3].values.indexOf(tapp.solutions[m][3])<0) tfvalid[3].values[tfvalid[3].values.length]=tapp.solutions[m][3];
						} 
					}
					if (l==4) {
						if ((tapp.solutions[m][3]==tsel[3] || tsel[3]=="") && (tapp.solutions[m][5]==tsel[5] || tsel[5]=="")) {
							if (tfvalid[4].values.indexOf(tapp.solutions[m][4])<0)tfvalid[4].values[tfvalid[4].values.length]=tapp.solutions[m][4];
						} 
					}
					if (l==5) {
						if ((tapp.solutions[m][3]==tsel[3] || tsel[3]=="") && (tapp.solutions[m][4]==tsel[4] || tsel[4]=="")) {
							if (tfvalid[5].values.indexOf(tapp.solutions[m][5])<0)tfvalid[5].values[tfvalid[5].values.length]=tapp.solutions[m][5];
						} 
					}
					if (l==6) alert("critical error!");
				}*/
			}
		}



		//alert(JSON.stringify(tfvalid))
	return tfvalid;
}

function cnsValidSolution(tapp,tsel) {
	var n=-1;
	var tv
	for (s=1;s<tapp.solutions.length;s++) {
		tv=true;
		for (k=3;k<tapp.solutions[0].length;k++) {
			/* check each value */
			
			if (tapp.solutions[s][k]!=tsel[k]) {
				tv=false;
				//cns_sel[k]="";
			}
		}
		if (tv) {
			n=s;
			s=tapp.solutions.length;
		}
	}
	return n;
}
function cnsShowHelp() {
	window.open('//quotefast.schneider-electric.com/QuoteFast/QFHelp/prodhelp.php?ndx=38273','_blank')
}

function locationParameters() {
	var qs=location.search
    qs = qs.split('+').join(' ');

    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
        /* alert(tokens[1]); */
    }

    return params;
}