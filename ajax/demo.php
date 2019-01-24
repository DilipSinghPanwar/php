<html>
 <head>
   <title>AJAX demo</title>
   <script>
 	function showData()
 	{
 	  var xhttp=new XMLHttpRequest();	  
 	  xhttp.open('GET','demo1.php',true);
 	  xhttp.send()
 	  
 	  xhttp.onreadystatechange=function()
 	  {
 	    if(xhttp.readyState==4 && xhttp.status==200)
 	    {
 	      document.getElementById('response').innerHTML=xhttp.responseText
 	    }
 	  }
 	  
 	}
    </script>
 </head>	
 <body>
 <button onclick="showData()">Click here to make AJAX work....</button>
 <br/><br/>
 <div id="response"></div>	
 </body>
</html>
