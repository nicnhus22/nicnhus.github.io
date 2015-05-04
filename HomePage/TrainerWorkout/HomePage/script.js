
function pagetwofunction(){
	var c=document.getElementsByClassName("leftsecond");
	var x=c[0].getElementsByTagName("p");
	var temp=30;
	for (var i=0;i<x.length;i++){
		x[i].style.marginRight=temp+"px";
		temp-=15;
	}
}
