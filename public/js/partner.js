var Interval=4;		/* in secunden*/
var myTimer=setTimeout(function(){nextFade()},1000*Interval);
var myIDs = new Array('Artur', 'Auc', 'BITS', 'CCB', 'CDI','CMCS', 'com', 'comh', 'comp', 'exe','frindly','geo', 'getIT', 'inte','tel','theIT');
var i=Math.floor((Math.random() * myIDs.length));

document.getElementById("com").className = "FadeIn";
 
function startAnimation(){
	document.getElementById(myIDs[i]).className = "FadeIn logoHover";
}
function nextFade(){
	var j=i;
	while (i==j){i=Math.floor((Math.random() * myIDs.length))};
	document.getElementById(myIDs[i]).className = "FadeIn logoHover";
	document.getElementById(myIDs[j]).className = "FadeOut logoHover";
	myTimer=setTimeout(function(){nextFade()},1000 * Interval);
}

alert('i_new');
function hoverIN(i_new){
if (i!=i_new){
document.getElementById(myIDs[i_new]).className = "FadeIn logoHover";
	document.getElementById(myIDs[i]).className = "FadeOut logoHover";
	}
	myTimer=clearInterval(myTimer);
	i=i_new;
}
function hoverOUT(){
myTimer=setTimeout(function(){nextFade()},500);

}