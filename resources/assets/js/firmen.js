var Interval=6;		/* in secunden*/
var myTimer=setTimeout(function(){nextFade()},1000*Interval);
var myIDs = new Array('MS', 'Adobe', 'Lotus', 'Corel', 'WordP','WorldS');
var i=Math.floor((Math.random() * 6));

document.getElementById("MS").className = "FadeIn";
 
function startAnimation(){
	var Path=location.pathname;
	alert(Path);
	document.getElementById(myIDs[i]).className = "FadeIn logoHover";
}
function nextFade(){
	var j=i;
	while (i==j){i=Math.floor((Math.random() * 6))};
	document.getElementById(myIDs[i]).className = "FadeIn logoHover";
	document.getElementById(myIDs[j]).className = "FadeOut logoHover";
	myTimer=setTimeout(function(){nextFade()},1000 * Interval);
}

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
