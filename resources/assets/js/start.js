var IMG=1;
var myGalleryTimer=setTimeout(function(){startGallery()},8000);

function startGallery(){

	document.getElementById("galleryContens").style.backgroundImage='url('+"file/gallery/"+IMG+"/jpg"+')';
	
	if(IMG<10){IMG+=1}else{IMG=1}
myGalleryTimer=setTimeout(function(){startGallery()},8000);


}
function angebot_in(btName){
	document.getElementById(btName).style.border = "3px dotted #032642";
	document.getElementById(btName).style.color = "#032642";
}
function angebot_out(btName){
	document.getElementById(btName).style.border = "3px dotted #418ec9";
	document.getElementById(btName).style.color = "#418ec9";
}
