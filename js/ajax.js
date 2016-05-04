// JavaScript Document
function getXMLHttpRequest(){
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
	}else if(window.XMLHttpRequest){
		return new XMLHttpRequest();	
	}else alert("Status : Can not create XMLHttpRequest Object");
}
var xmlhttp=getXMLHttpRequest();
function sendRequest(pageURL,ElementID){
	var obj=document.getElementById(ElementID);
	obj.innerHTML='<center><font color="ffffff" size="20px">SEDANG MEMUAT.....</font><font color="ffffff" size="5px"><p>SILAHKAN TUNGGU..</p></font></center>';
	if(xmlhttp.readyState==4 || xmlhttp.readyState==0){
		xmlhttp.open('GET',pageURL,true);
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				obj.innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.send(null);
	}
}