var count=0
var countDownDate=0;
var x=setInterval(function(){
	if(count==0)
	{
		countDownDate=document.getElementById("mytext").value;
		/*alert(countDownDate);*/
		count++;
	}
	else
    {
      
    var now = new Date().getTime();


    var distance = countDownDate - now;


    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("demo").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";


    if (distance < 0) {
        clearInterval(x);

        window.open('submitresponse.php','_self');
    }
    }
}, 1000);