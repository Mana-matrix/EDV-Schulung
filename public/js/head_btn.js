

var btState="start";
function checkBt(){
	var title=document.getElementById("ifrm").contentDocument.title;
	switch (document.getElementById("ifrm").contentDocument.title){
		case  "start":document.title = "EDV Detlef Mai - Home";break;
		case  "about":document.title = "EDV Detlef Mai - Über mich";break;
		case  "seminare":document.title = "EDV Detlef Mai - Seminare";break;
		case  "location":document.title = "EDV Detlef Mai - Schulungsorte";break;
		case  "partner":document.title = "EDV Detlef Mai - Partner";break;
		case  "contact":document.title = "EDV Detlef Mai - Kontakt";break;
		case  "impress":document.title = "EDV Detlef Mai - Impressum";break;
	}
	if(btState!=document.getElementById("ifrm").contentDocument.title ){
		endBTN(title)
	}
	
}

function Line(name){

		
		document.getElementById(name+"T").className="btnTopInner bevel_in";
	//document.getElementById(name+"L").className="changeLine btLine";
	
	
}
function LineOut(name){
	document.getElementById(name+"T").className="btnTopInner bevel_out";
	//document.getElementById(name+"L").className="changeBack btLine";
}

function startBTN(name){
	document.getElementById(name+"T").className="btnTopInner bt_in";
	//document.getElementById(name+"L").className="changeLine btLine";
}
function endBTN(name2){


	document.getElementById(name2+"T").className="btnTopInner bt_in";
	document.getElementById(btState+"T").className="btnTopInner bt_out";
	
	document.getElementById("cont1").visibility="hidden";
	
	document.getElementById(name2+"T").onclick = "";
	document.getElementById(name2+"T").onmouseover = "";
	document.getElementById(name2+"T").onmouseout = "";
	$( "#cont1" ).load(name2+".htm");
	//var myBTNTimer=setTimeout(function(){document.getElementById("ifrm").src=name2+".html";},120);
	
	var myString=String(btState);
	document.getElementById(btState+"T").onclick =  function(){endBTN(myString)}; 
	document.getElementById(btState+"T").onmouseover = function(){Line(myString)};
	document.getElementById(btState+"T").onmouseout =  function(){LineOut(myString)};

	
	btState=name2;
	
	/*var myBTNTimer=setTimeout(function(){window.open(name2+".html","_self")},120);*/
}