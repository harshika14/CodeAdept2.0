var countDownDate;
function hello()
{
	var time=new Date().getTime();
	countDownDate=time+10000;
	document.getElementById("mytext").value=countDownDate;
	
}