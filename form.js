/*Javascript file*/

function onSelect(state)
{
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/Ajax/form.php?state="+state,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4&& req.status==200)
		{
			document.getElementById("cities").innerHTML=req.responseText;
		}
	};
}
