
/* digest section index links with assistants  window.refId = "xxxx"; */
var cns=['x_17701005_54243','_17701006_13980','_17701002_64045'];
cns=cns.concat(['xGeneralDutyUpTo100KAShortCircuitCur-80671D9E']);
cns=cns.concat(['xEnergyEfficientSinglePhaseAndSingle-70EE2DE3']);
cns=cns.concat(['x_17723004_77624']);
cns=cns.concat(['xXB6CompleteDevices-0569EFCD']);

/* digest sections (in master index) with assistants */
var hasAssist=["x17701_main(plus)(bookmap)_0000056628.html"];
hasAssist=hasAssist.concat(["x17703_main(plus)(bookmap)_0000060130.html"]);
hasAssist=hasAssist.concat(["x17714_main(plus)(bookmap)_0000061044.html"]);
hasAssist=hasAssist.concat(["x17723_main(plus)(bookmap)_0000064354.html"]);
hasAssist=hasAssist.concat(["x17719_main(plus)(bookmap)_0000052086.html"]);


var nextStep="";
var nextLink="";
var nextGoTo=false;
var cartText="";
var tempTopicView="";
var tempTopicViewUrl="";
(function(){null==window.AP&&(window.AP={}),AP.EasySelector=function(){function a(a){var b,c;for(b in a)c=a[b],this[b]=c;this.initialize()}return a.prototype.service={protocol:"https",host:"dry-refuge-2785.herokuapp.com",apiKey:"b2694f2382a7a97ce2d39b8f9d085e67",version:null},a.prototype.mockService=!0,a.prototype.productCode=null,a.prototype.selector=null,a.prototype.template='<iframe src="{{ iframeUrl }}" width="100%" height="100%" frameborder="0"></iframe>',a.prototype.initialize=function(){return this.validate(),$(window).on("message",function(a){return function(){return a.onMessage.apply(a,arguments)}}(this))},a.prototype.onMessage=function(a){var b;return b=a.originalEvent.data,console.log("datadatadata"),console.log(b),this.handleEvent(b)},a.prototype.validate=function(){if(!this.service.apiKey)throw new AP.EasySelectorError("Missing `apiKey` attribute");if(!this.productCode)throw new AP.EasySelectorError("Missing `productCode` attribute")},a.prototype.handleEvent=function(a){switch(a.fn){case"AddToProject":return this.handleComplete(JSON.parse(a.data).final_parts);case"CloseEasySelector":return this.handleClose()}},a.prototype.iframeUrl=function(){return this.mockService?"iframe.html?productCode="+this.productCode+"&apiKey="+this.service.apiKey:(this.service.protocol&&this.service.host?""+this.service.protocol+"://"+this.service.host+"/":"")+("product-configurator/"+this.productCode+"?apiKey="+this.service.apiKey)+(this.service.version?"&version="+this.service.version:"")},a.prototype.toHtml=function(){return this.template.replace("{{ iframeUrl }}",this.iframeUrl())},a.prototype.render=function(){var a;if(!this.selector)throw new AP.EasySelectorError("Missing `selector` attribute");if(!$(this.selector).size())throw new AP.EasySelectorError("Element does not exist: `"+this.selector+"`");return a=this.toHtml(),$(this.selector).html(a)},a.prototype.handleComplete=function(a){var b,c;return c=function(){var c,d,e;for(e=[],c=0,d=a.length;d>c;c++)b=a[c],e.push({catalogNo:b.part_number,designation:b.type,quantity:b.quantity});return e}(),this.onComplete(a,c)},a.prototype.handleClose=function(){return this.onClose(),$(".easy-selector-modal").modal("hide")},a.prototype.onComplete=function(){},a.prototype.onClose=function(){},a}()}).call(this),function(){var a={}.hasOwnProperty,b=function(b,c){function d(){this.constructor=b}for(var e in c)a.call(c,e)&&(b[e]=c[e]);return d.prototype=c.prototype,b.prototype=new d,b.__super__=c.prototype,b};null==window.AP&&(window.AP={}),AP.EasySelectorError=function(a){function c(a){var b;this.message=a,b=c.__super__.constructor.apply(this,arguments),this.name="EasySelectorError"}return b(c,a),c}(Error)}.call(this);

window.publicationLandingPage = "digest177.html";

window.addEventListener("load", ext_onload)

function ext_onload() {
	console.log("ext_onload initiated")
	/* additional elements */
	
/*	if (cns.indexOf(window.refId)>=0) {
		document.getElementById("tocPortal").getElementsByTagName("div").item(0).innerHTML+='<div class="extBtnGrp"><div class="extBtn" onclick="clickTabIndex()" id="extTabIndex">Index</div><div class="extBtn" onclick="clickTabWizard()" id="extTabWizard">Selection&#160;Assistant<i class="fa fa-user iconWiz"></i></div></div><div class="CNS_wrapper" id="CNS_wrapper"></div>';

	}*/
	if (document.getElementById('tocPortal')) {
		if (document.getElementById('viewerContent')) {
			
			extCartCreate();
		}
	}

	var els=document.getElementsByTagName("li")
	for (i=0;i<els.length;i++) {
		if (cns.indexOf(els[i].getAttribute("data-refid"))>=0) {
				els[i].childNodes.item(0).innerHTML+='<i class="fa fa-user iconWiz"></i>'
		}
	}	


	if (cns.indexOf(window.refId)>=0) {
		clickTabIndex();
	}
	/* add icons to top digest index */
	if (location.pathname.substring(location.pathname.lastIndexOf("/") + 1)=='digest177.html') {
		els=document.getElementsByTagName("a")
		for (i=0;i<els.length;i++) {
			els[i].setAttribute("href",els[i].getAttribute("href").replace("%2b","(plus)"));
			if (hasAssist.indexOf(els[i].getAttribute("href"))>=0) {
					els[i].innerHTML+='<i class="fa fa-user iconWiz"></i>';
			}
		}	
		
	}

	/* remap load center links */
	if (typeof(window.refId)=="string") {
	if (window.refId.substr(0,6) == "x_17701") {
		els=document.getElementsByTagName("a")
		var u1="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/";
		var u2="http://localhost/dce/concepts/d1/";u2="";
		for (i=0;i<els.length;i++) {
			if (typeof(els[i].getAttribute("href"))=="string") {
			if (els[i].getAttribute("href").substr(0,6)=="_17701") {
			//alert(els[i].getAttribute("href"));
				els[i].setAttribute("href",'javascript:topicView_load("'+els[i].getAttribute("href")+'")')
			}
			}
		}
	}
	}


	/* remap specified targets */

//http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/nocontext/Master+Bookmap+Content/17701_MAIN+%28bookmap%29_0000056628.xml
//http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/nocontext/Master+Bookmap+Content/17701_MAIN+%28bookmap%29_0000056628.xml
//http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/nocontext/Master+Bookmap+Content/17701_MAIN+%28bookmap%29_0000056628.xml


	els=document.getElementsByTagName("a")
	var u1="http://www.productinfo.schneider-electric.com/portals/ui/digest/viewer/561d5d65e4b0c5c41a243bf2/";
	var u2="http://localhost/dce/concepts/d1/";u2="";
	for (i=0;i<els.length;i++) {
		//els[i].innerHTML=els[i].getAttribute("href");
		//if (els[i].getAttribute("href")=="http://www.digestplus-us.schneider-electric.com/") els[i].setAttribute("href","digest177.html");
		if (els[i].innerHTML=="Digest 177") els[i].innerHTML=="";
		
		if (els[i].getAttribute("href")=="http://www.digestplus-us.schneider-electric.com/") els[i].setAttribute("target","");
		if (els[i].getAttribute("href")=="http://www.digestplus-us.schneider-electric.com/") els[i].setAttribute("href","DigestPLUSindex.htm");

		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a2447fa/") els[i].setAttribute("href",u2+"17701_main%28plus%29%28bookmap%29_0000056628.html");
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a2447fd/") els[i].setAttribute("href",u2+"17702_main%28plus%29%28bookmap%29_0000048841.html");
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244800/") els[i].setAttribute("href",u2+"17703_main(plus)(bookmap)_0000060130.html"); /* Section 3: Safety Switches */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244803/") els[i].setAttribute("href",u2+"17704_main(plus)(bookmap)_0000041932.html"); /* Section 4: Power Monitoring and Control */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244806/") els[i].setAttribute("href",u2+"17705_main(plus)(bookmap)_0000054913.html"); /* Section 5: Advanced Products */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244809/") els[i].setAttribute("href",u2+"17706_main(plus)(bookmap)_0000059343.html"); /* Section 6: Surge Protective Devices (SPDs) */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24480c/") els[i].setAttribute("href",u2+"17707_main(plus)(bookmap)_0000054602.html"); /* Section 7: Miniature and Molded Case Circuit Breakers */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24480f/") els[i].setAttribute("href",u2+"17708_main(plus)(bookmap)_0000055153.html"); /* Section 8: Operating Mechanisms and Disconnect Switches */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244812/") els[i].setAttribute("href",u2+"17709_main(plus)(bookmap)_0000061751.html"); /* Section 9: Panelboards */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244815/") els[i].setAttribute("href",u2+"17710_main(plus)(bookmap)_0000060965.html"); /* Section 10: Power Solutions Integrated Equipment */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244818/") els[i].setAttribute("href",u2+"17711_main(plus)(bookmap)_0000065704.html"); /* Section 11: Switchboards and Switchgear */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24481b/") els[i].setAttribute("href",u2+"17712_main(plus)(bookmap)_0000056938.html"); /* Section 12: Busway */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24481e/") els[i].setAttribute("href",u2+"17713_main(plus)(bookmap)_0000055871.html"); /* Section 13: Wire Management */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244821/") els[i].setAttribute("href",u2+"17714_main(plus)(bookmap)_0000061044.html"); /* Section 14: Transformers */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244824/") els[i].setAttribute("href",u2+"17715_main(plus)(bookmap)_0000056082.html"); /* Section 15: Medical Products */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244827/") els[i].setAttribute("href",u2+"17716_main(plus)(bookmap)_0000062583.html"); /* Section 16: NEMA and Definite Purpose Contactors and Starters */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24482a/") els[i].setAttribute("href",u2+"17717_main(plus)(bookmap)_0000055870.html"); /* Section 17: Motor Control Centers */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24482d/") els[i].setAttribute("href",u2+"17718_main(plus)(bookmap)_0000058904.html"); /* Section 18: Contactors and Starters-IEC */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244830/") els[i].setAttribute("href",u2+"17719_main(plus)(bookmap)_0000052086.html"); /* Section 19: Push Buttons and Operator Interface */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244833/") els[i].setAttribute("href",u2+"17720_main(plus)(bookmap)_0000064574.html"); /* Section 20: Electronic Sensors and Machine Cabling */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244841/") els[i].setAttribute("href",u2+"17721_main(plus)(bookmap)_0000065094.html"); /* Section 21: Limit Switches */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244844/") els[i].setAttribute("href",u2+"17722_main(plus)(bookmap)_0000062893.html"); /* Section 22: Pressure, Vacuum, and Float Switches */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244847/") els[i].setAttribute("href",u2+"17723_main(plus)(bookmap)_0000064354.html"); /* Section 23: Relays and Timers */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24484a/") els[i].setAttribute("href",u2+"17724_main(plus)(bookmap)_0000063623.html"); /* Section 24: Terminal Blocks */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a24484d/") els[i].setAttribute("href",u2+"17725_main(plus)(bookmap)_0000056022.html"); /* Section 25: Machine Safety Products */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244850/") els[i].setAttribute("href",u2+"17726_main(plus)(bookmap)_0000049666.html"); /* Section 26: AC Drives and Soft Starters */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244853/") els[i].setAttribute("href",u2+"17727_main(plus)(bookmap)_0000053412.html"); /* Section 27: Automation Products */
		if (els[i].getAttribute("href")==u1+"561d5f9ae4b0c5c41a244856/") els[i].setAttribute("href",u2+"17728_main(plus)(bookmap)_0000064454.html"); /* Section 28: Universal Enclosures */
	}	

	clickTabWizard();
	
	/* retreive cart */
	extRetrieveCart();

	//alert('ext_onload()');

	console.log("ext_onload complete")
}
function extCartCreate(){
				/* add cart to content pages */
			document.getElementById("viewerContent").getElementsByTagName("div").item(0).innerHTML+='<div class="extCart" id="extCart"  ondrop="extDrop(event)" ondragover="extAllowDrop(event)"><div class="extCartHeader" id="extCartHeader">Cart <i class="fa fa-shopping-cart"></i><i class="fa fa-question-circle extCartHelp" onclick="extCartHelp();" id="extCartHelp"></i></div><div class="extCartMaterialList" id="extCartMaterialList"></div></div></div>';
			document.getElementById("extCart").style.borderColor=window.getComputedStyle(document.getElementById("docTitle"),null).backgroundColor;
			 document.getElementById("viewerContent").getElementsByTagName("div").item(0).innerHTML+="<div class=\"helpWrapper\"></div>"; 
                extRetrieveCart();

}
function extCartHelp() {
	window.open('//quotefast.schneider-electric.com/QuoteFast/QFHelp/prodhelp.php?ndx=43359','_blank')
}
function clickTabIndex(){
	console.log("clickTabIndex initiated")
	document.getElementById("extTabIndex").className="extBtn extBtnSelect";
	document.getElementById("extTabWizard").className="extBtn";
	document.getElementById("extSectionIndex").style.display="block";
	document.getElementById("CNS_wrapper").style.display="none";
}
function clickTabWizard(){
	console.log("clickTabWizard initiated")
	var prod_id="";
	var prod_ap="";
	var assistant="";
	nextStep="";
	nextLink="";
	switch(window.refId) {
		case "x_17701005_54243":assistant="CNS";prod_id="S0018";prod_ap="1Ph3W 120/240 Indoor";
			nextStep="Select Circuit Breakers";nextLink="_17701002_64045.html#Plug-OnCircuitBreakers-5FF20DF8";break;
		case "x_17701006_13980":assistant="CNS";prod_id="S0018";prod_ap="1Ph3W 120/240 Indoor";
			nextStep="Select Circuit Breakers";nextLink="_17701002_64045.html#Plug-OnCircuitBreakers-5FF20DF8";break;
		case "_17701006_13980":assistant="CNST";prod_id="E2.0000";prod_ap="1Ph3W 120/240 Indoor";
			nextStep="Select Circuit Breakers";nextLink="_17701002_64045.html#Plug-OnCircuitBreakers-5FF20DF8";break;
		case "_17701015_58738":assistant="CNST";prod_id="E2.0000";prod_ap="1Ph3W 120/240 Indoor";
			nextStep="Select Circuit Breakers";nextLink="_17701002_64045.html#Plug-OnCircuitBreakers-5FF20DF8";break;
		case "x_17701002_64045":assistant="CNS";prod_id="SA518";prod_ap="1Ph3W 120/240 Indoor";break;
			/* todo: pass selection data from target to host, use to open proper application subset */
		case "xGeneralDutyUpTo100KAShortCircuitCur-80671D9E":assistant="CNS";prod_id="S0028";prod_ap="General Duty Safety Switches";break;
		case "xGeneralDutyUpTo100KAShortCircuitCur-80671D9E":assistant="EZ";prod_id="A028";prod_ap="";break;
		case "xEnergyEfficientSinglePhaseAndSingle-70EE2DE3":assistant="EZ";prod_id="A044";prod_ap="EE";break;
		case "x_17723004_77624":assistant="CNS";prod_id="SC233";prod_ap="Miniature Relay (3-12A, 2PDT,3PDT,4PDT)";break;
		case "xXB6CompleteDevices-0569EFCD":assistant="CNS";prod_id="S9001";prod_ap="16mm XB6 Operators";break;
	}
	document.getElementById("extTabIndex").className="extBtn";
	document.getElementById("extTabWizard").className="extBtn extBtnSelect";

	document.getElementById("extSectionIndex").style.display="none";
	document.getElementById("CNS_wrapper").style.display="block";


	//document.getElementById("CNS_wrapper").style.top="88px";
	//document.getElementById("CNS_wrapper").style.left="0px";
	//document.getElementById("CNS_wrapper").style.width="360px"; /* 358 fits index area */
	//document.getElementById("CNS_wrapper").style.height="85%";
	if (assistant=="CNS") {
		document.getElementById("CNS_wrapper").innerHTML="<iframe src=\"https://quotefast.schneider-electric.com/QuoteFast/QFHelp/cnst.php?prod="+prod_id+"&app="+prod_ap+"&apikey=b2694f2382a7a97ce2d39b8f9d085e67&nextStep="+encodeURI(nextStep)+"\" width=\"100%\" height=\"100%\" class=\"CNS_iframe\"></iframe>"; 
		document.getElementById("CNS_wrapper").style.display="block";
	}
	if (assistant=="CNST") {
		document.getElementById("CNS_wrapper").innerHTML="<iframe src=\"https://quotefast.schneider-electric.com/QuoteFast/QFHelp/cnst.php?prod="+prod_id+"&app="+prod_ap+"&apikey=b2694f2382a7a97ce2d39b8f9d085e67&nextStep="+encodeURI(nextStep)+"\" width=\"100%\" height=\"100%\"></iframe>"; 
		document.getElementById("CNS_wrapper").style.display="block";
	}
	if (assistant=="EZ") {

		//document.getElementById("CNS_wrapper").style.left="-61px";
		//document.getElementById("CNS_wrapper").style.width="438px";
	
//document.getElementById("CNS_wrapper").innerHTML="";
		var results;
		/* product_code determines the Easy Selector to be opened */
		var easySelector;
			easySelector = new AP.EasySelector({
		    mockService: false,
		    productCode: prod_id,
		    selector: '.CNS_wrapper',
		    onComplete: function(response, items) {
		    	return results=items;
		    	//document.getElementById("easy-selector-wrapper").style.height="0px";
		    },
		    onClose: function() {
		        //document.getElementById("easy-selector-results").innerHTML="<p>Selected Parts:</p><pre>"+JSON.stringify(results).split("},").join("}<br/>,")+"</pre>";
		    	clickTabIndex();
			}
		});
		easySelector.render();





		document.getElementById("CNS_wrapper").style.display="block";




//document.getElementById("CNS_wrapper").innerHTML="<iframe src=\"//schneider-electric.com\" width=\"100%\" height=\"100%\"></iframe>"; 

		//document.getElementById("CNS_wrapper").innerHTML="<iframe src=\"../CNS/CNS.php?prod="+prod_id+"&app="+prod_ap+"&apikey=8831a6000d584a6034d142d63eeeda93\" width=\"100%\" height=\"100%\"></iframe>"; 
	}
}

window.addEventListener("message", receiveMessage, false);

function receiveMessage(event) {
	var cnl=[];
	var odata;
	//alert(JSON.stringify((event.data)));
	//alert(JSON.stringify((event.data.fn)));
	if (event.data.fn=="cnsAddToProject") {
		cln=[];
		odata=JSON.parse(event.data.data);
		//alert(JSON.stringify((odata)));
		extAddToProject(odata);
		for (i=0;i<odata.length;i++) {
			//alert(event.data.data[i])
			if (typeof(odata[i].catalogNo)=="String") {
				cln[cln.length]=odata[i].catalogNo;
			}
			if (typeof(odata[i].part_number)=="String") {
				cln[cln.length]=odata[i].part_number;
			}
		}
		highlightCatNums(cln);
	}
	if (event.data.fn=="AddToProject") {
		cln=[];
		odata=JSON.parse(event.data.data);
		odata=odata.final_parts
		//alert(JSON.stringify((odata)));
		//alert(JSON.stringify((odata.final_parts)));
		extAddToProjectEZ(odata);
		for (i=0;i<odata.length;i++) {
			//alert(event.data.data[i])
			cln[cln.length]=odata[i].part_number;
		}
		highlightCatNums(cln);
	}
	if (event.data.fn=="cnsSolution") {
		cln=[];
		odata=JSON.parse(event.data.data);
		for (i=0;i<odata.length;i++) {
			//alert(event.data.data[i])
			//cln[cln.length]=odata[i].catalogNo;
			if (typeof(odata[i].catalogNo)=="String") {
				cln[cln.length]=odata[i].catalogNo;
			}
			if (typeof(odata[i].part_number)=="String") {
				cln[cln.length]=odata[i].part_number;
			}
		}
		highlightCatNums(cln);
	}
	if (event.data.fn=="cnsClose") {
		//alert(JSON.stringify(event.data));
		/* close CNS div */
		document.getElementById("CNS_wrapper").style.display="none";
		document.getElementById("CNS_wrapper").innerHTML="";
		clickTabIndex();
	}
	if (event.data.fn==nextStep && nextStep!='') {
		//alert("!!"+event.data.fn);
		odata=JSON.parse(event.data.data);
		extAddToProject(odata);
		//location.href=nextLink;
		nextGoTo=true;
		/* setTimeout(function(){location.href=nextLink; }, 2000); */
	}
}

function extNextStep() {
	if (nextLink!='') {
		location.href=nextLink;
	}
}

function extAddToProject(odata) {
	var tmp='Add parts to cart:\n\n';
//	for (i=0;i<odata.length;i++) {
//		//alert(event.data.data[i])
//		tmp+='('+odata[i].quantity+') '+odata[i].catalogNo+'\n';
//		extRetrieveCart('addurl=http://www.schneider-electric.com/products/US/en/products/'+odata[i].catalogNo)
//	}

	//tmp+=JSON.stringify(odata);
	//alert(tmp);

	tmp="";
	for (i=0;i<odata.length;i++) {
		//alert(JSON.stringify(odata[i]))
		//tmp+=';'+odata[i].quantity+','+odata[i].catalogNo;
			if (typeof(odata[i].catalogNo)=="string") {
				tmp+=';'+odata[i].quantity+','+odata[i].catalogNo;
			}
			if (typeof(odata[i].part_number)=="string") {
				tmp+=';'+odata[i].quantity+','+odata[i].part_number;
			}
	}
	tmp=tmp.substring(1);
	extRetrieveCart('addlist='+tmp);
	tmp+="\n"+JSON.stringify(odata);
	//alert(tmp);

	
}
function extAddToProjectEZ(odata) {
	var tmp='';
	for (i=0;i<odata.length;i++) {
		//alert(event.data.data[i])
		tmp+=';'+odata[i].quantity+','+odata[i].part_number;
	}
	tmp=tmp.substring(1);
	extRetrieveCart('addlist='+tmp);

	//tmp+=JSON.stringify(odata);
	//alert(tmp);
}

function showEZdata() {
	alert(results);
}

function highlightCatNums(catnumlist) {
	var catnum=document.getElementsByTagName("p")
	var c="";
	var looking=true
	for (i=0;i<catnum.length;i++) {
		if (catnumlist.indexOf(catnum[i].textContent)>=0) {
			catnum[i].classList.add("extSelectCatNum");
			catnum[i].scrollIntoView(false);
			looking=false;
		}
		/* else if (catnumlist.indexOf(catnum[i].childNodes.item(0).textContent)>=0) {
			catnum[i].parentNode.classList.add("extSelectCatNum");
			catnum[i].parentNode.scrollIntoView(false);
		} */
		else {
			catnum[i].classList.remove("extSelectCatNum");
		}
	}
	if (looking) {
		catnum=document.getElementsByTagName("td")
		for (i=0;i<catnum.length;i++) {
			if (catnumlist.indexOf(catnum[i].textContent)>=0) {
				catnum[i].classList.add("extSelectCatNum_td");
				catnum[i].scrollIntoView(false);
				looking=false;
			}
			/* else if (catnumlist.indexOf(catnum[i].childNodes.item(0).textContent)>=0) {
				catnum[i].parentNode.classList.add("extSelectCatNum");
				catnum[i].parentNode.scrollIntoView(false);
			} */
			else {
				catnum[i].classList.remove("extSelectCatNum_td");
			}
		}
	}
}

/* http://www.javascriptkit.com/javatutors/loadjavascriptcss.shtml

loadjscssfile("myscript.js", "js")    //dynamically load and add this .js file
loadjscssfile("javascript.php", "js") //dynamically load "javascript.php" as a JavaScript file
loadjscssfile("mystyle.css", "css")   //dynamically load and add this .css file
*/
function loadjscssfile(filename, filetype){
    if (filetype=="js"){ //if filename is a external JavaScript file
        var fileref=document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype=="css"){ //if filename is an external CSS file
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref!="undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
}

function extAllowDrop(ev) {
    ev.preventDefault();
}
function extDrag(ev) {
   ev.dataTransfer.setData("text", ev.target.id);
}
function extDrop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("url");
    document.getElementById("extCartMaterialList").innerHTML+='<div class="cnsx_cnum" style="font-weight:normal;font-style:italic;">adding item...</div>';
    if (data!='') {
    	/* a url has been dropped */
    	/* document.getElementById("extCartMaterialList").innerHTML+='<p>'+ev.dataTransfer.getData("text")+'</p>'; */
    	extRetrieveCart('addurl='+encodeURIComponent(data))
	}
	else {
		/* not a url */
		data=ev.dataTransfer.getData("text");
    	extRetrieveCart('addtext='+encodeURIComponent(data))
	}
    //alert(data);
    //ev.target.appendChild(document.getElementById(data));
}

function extRetrieveCart(cmd,nxt) {
	var params='';
	if (typeof(cmd)=='string') {/* alert(cmd); */params='?'+cmd;}
	/* http://www.w3schools.com/json/json_http.asp */
	var xmlhttp = new XMLHttpRequest();
	var url = "../ext/extendCart.php"+params;
	var thumbnail='';
	cartText="";
	var email_link='mailto:?subject=Parts List for your review'; /* window.open('mailto:test@example.com?subject=subject&body=body'); */
	xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        var myCart = JSON.parse(xmlhttp.responseText);
	        document.getElementById("extCartMaterialList").innerHTML ="";
		    //document.getElementById("extCartMaterialList").innerHTML = JSON.stringify(myCart,null,' ');
		    if (myCart.material.length>0) {
		    	document.getElementById("extCartMaterialList").innerHTML +='<div class="extCartBtn" onclick="extRetrieveCart(\'cmd=empty\')">Empty Cart</div>';
		    	for (itm of myCart.material) {
		    		if (itm[3]=='') thumbnail="";
		    		else thumbnail='<img class="extCartImg60x40" src="'+itm[3]+'"/>';
    				document.getElementById("extCartMaterialList").innerHTML+='<div class="cnsx_cnum">'+thumbnail+'<div class="cnsx_qty">'+itm[0]+'</div>'+'<span class="cnsx_pname">'+itm[1]+'</span>'+'<div class="cnsx_desc">'+itm[2]+'</div></div>';
    				cartText+="["+itm[0]+"] "+itm[1] +": "+itm[2]+"\n";
				}
				document.getElementById("extCartMaterialList").innerHTML +='<div class="extCartBtn" onclick="extCartToClipboard()" id="extCartBtnCopy">copy this to clipboard</div>';
			}
			cartText+="cartID:"+myCart.ndx+"\n";
			document.getElementById("extCartMaterialList").innerHTML +='<div class="extCartMaterialFoot">CartID:'+myCart.ndx+'</div>';
			if (nextGoTo) {
				setTimeout(function(){location.href=nextLink; }, 400);
			}
	    }
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function extCartToClipboard() {
	document.getElementById("extCartBtnCopy").innerHTML="<span style='color:#ff0000;'>copying list to clipboard...</span>";
	setTimeout(function(){document.getElementById("extCartBtnCopy").innerHTML="copy this to clipboard"; }, 800);
	var text=cartText;
	/* http://stackoverflow.com/questions/400212/how-do-i-copy-to-the-clipboard-in-javascript */
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
        }
    }
    extRetrieveCart();
}

function bad_delay(ms) {
	
        var cur_d = new Date();
        var cur_ticks = cur_d.getTime();
        var ms_passed = 0;
        while(ms_passed < ms) {
            var d = new Date();  // Possible memory leak?
            var ticks = d.getTime();
            ms_passed = ticks - cur_ticks;
            // d = null;  // Prevent memory leak?
        }
    }
    
function prodGuide(obj,evt,ndx) {
	evt.stopPropagation();
	//alert(obj.parentNode.parentNode.parentNode.getBoundingClientRect().width);
	var pBox=obj.parentNode.parentNode.parentNode.getBoundingClientRect();
	document.getElementById("helpWrapper").style.width="420px";
	document.getElementById("helpWrapper").style.height="600px";
	document.getElementById("helpWrapper").style.left=(pBox.left + pBox.width+8)+"px";
	document.getElementById("helpWrapper").style.width=( pBox.width*2)+"px";

	document.getElementById("helpWrapper").innerHTML="";
	document.getElementById("helpWrapper").innerHTML+="<div class=\"helpWrapperTitle\" onclick=\"prodGuideClose()\"><i class=\"fa fa-times helpWrapperBtn\">&#160;close</i></div>";
	document.getElementById("helpWrapper").innerHTML+='<div class=\"helpWrapperFrame\"><iframe src="http://quotefast.schneider-electric.com/QuoteFast/QFHelp/prodhelp.php?doc=cbm&cmd=t:a&ndx='+ndx+'"style="width:100%;height:555px;"></iframe></div>';
	
	document.getElementById("helpWrapper").style.display="inline";
}

function prodGuideClose() {
	document.getElementById("helpWrapper").style.display="none";
}

function topicView_load(theURL) {
	var sourceDoc
	tempTopicViewUrl=theURL;
	tempTopicView=document.getElementById("topicView").innerHTML;
	//document.getElementById("topicView").innerHTML="<p>new content loading</p>";
	//bad_delay(1000)
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
				sourceDoc=xmlhttp.responseText;     
				tempTopicView=sourceDoc+"<!--topicViewBoundry-->";
				tempTopicView=tempTopicView.substr(tempTopicView.search("<!--topicViewBoundry-->")+23)+"<!--topicViewBoundry-->";
				tempTopicView=tempTopicView.substr(0,tempTopicView.search("<!--topicViewBoundry-->")+0);
				//alert(tempTopicView);
                //alert(xmlhttp.responseText);
                document.getElementById("topicView").innerHTML=tempTopicView;
                if (tempTopicViewUrl.search("#")>=0) {
 					document.getElementsByName(tempTopicViewUrl.substr(tempTopicViewUrl.search("#")+1)).item(0).scrollIntoView(true)
				}
                tempTopicViewUrl="";
                extCartCreate();
            }
        }
        xmlhttp.open("GET", theURL, true);
        xmlhttp.send();
        
}