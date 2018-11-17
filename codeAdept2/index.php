<!DOCTYPE html>
<html>
<head>
	<title>Ajax Tutorial</title>

<link rel="stylesheet" type="text/css" href="design.inc.css">
	<script type="text/javascript">
		var num=0;
		
		function insert() {
			if(window.XMLHttpRequest)
			{
				xmlhttp= new XMLHttpRequest();

			}
			else
			{
				xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4&&xmlhttp.status==200)
				{
					document.getElementById('question').innerHTML=xmlhttp.responseText;
				}
			}
			
			fileName1=num+'.php';
			xmlhttp.open('GET',fileName1,true);
			xmlhttp.send();

			
			
		}
		function next()
		{
			if(window.XMLHttpRequest)
			{
				xmlhttp= new XMLHttpRequest();

			}
			else
			{
				xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4&&xmlhttp.status==200)
				{
					if(num==10)
					{
						document.getElementById('abc').innerHTML=xmlhttp.responseText;
					}
					
				}

			}
			var option="";
			if(document.getElementById('A').checked)
			{
				option=document.getElementById('A').value;
			}
			else if(document.getElementById('B').checked)
			{
				option=document.getElementById('B').value;
			}
			else if(document.getElementById('C').checked)
			{
				option=document.getElementById('C').value;
			}
			else if(document.getElementById('D').checked)
			{
				option=document.getElementById('D').value;
			}
			else
			{
			
			}

			parameters=num+'='+option;
			xmlhttp.open('POST','submission.php',true);
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
			num++;
			if(num<=9&&num>=0)
			{
				insert();
			}
			

			
		}

		function prev()
		{
			if(window.XMLHttpRequest)
			{
				xmlhttp= new XMLHttpRequest();

			}
			else
			{
				xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4&&xmlhttp.status==200)
				{
					if(num==10)
					{
						document.getElementById('abc').innerHTML=xmlhttp.responseText;
					}
					
				}

			}
			var option="";
			if(document.getElementById('A').checked)
			{
				option=document.getElementById('A').value;
			}
			else if(document.getElementById('B').checked)
			{
				option=document.getElementById('B').value;
			}
			else if(document.getElementById('C').checked)
			{
				option=document.getElementById('C').value;
			}
			else if(document.getElementById('D').checked)
			{
				option=document.getElementById('D').value;
			}
			else
			{
			
			}

			parameters=num+'='+option;
			xmlhttp.open('POST','submission.php',true);
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
			num--;
			if(num<=9&&num>=0)
			{
				insert();
			}
			

			
		}

		function opted()
		{
			document.getElementById('choosen').innerHTML="<?php echo($_SESSION['q1'])?>"
		}
	
	</script>
	<script type="text/javascript" src="Two.js"></script>
	
	

</head>
<body onload="insert()">
	<div id="header">
		<h2 id="text">CodeAdept 2.0</h2>
	</div>
	<div id="question">
		
	</div>
	<p id="abc"></p>
	<p id="demo"></p>
	</body>
</html>