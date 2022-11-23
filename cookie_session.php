<?php
	
	/* php session variables are information stored in the server and remains persistant till the server session is active */
	/* php cookies are small files that stores information in the similar way as above but stored in user computer */
	
	
	session_start(); /* you must start the session to access the session variables */
	$_SESSION["myname"] = "Bhrigu Kumar Kataky"; /* creates and store a session variable */
	
	echo $_SESSION["myname"];  /* access and display the session variable */
	
	/* remove all session variable stored */
	session_destroy();
	session_unset();
	
	/* remove only one particular session variable */
	unset($_SESSION["myname"]);
	
	
	
	setcookie("mycookie","This is a cookie", time()+ 60); /* set a cookie */
	echo $_COOKIE["mycookie"];
	setcookie("mycookie","", 1); /* unset a cookie */
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	  <title>DEC Web Development Class - Cookie and Session</title>
	  <meta name="description" content="DEC Web Development Class ~~ A sample web page for all html tags and elements.">
	  <meta name="keywords" content="HTML, CSS, JavaScript">
	  <meta name="author" content="Bhrigu Kumar Kataky">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- For page responsive  -->


</head>
<body>
	
	<input type="text" id="session_value" placeholder="Input a Session Value" ><br>
	<button type="button" onclick="saveSession();">Save Session</button><br>
	<button type="button" onclick="getSession();">Get Session</button><br><br><br>
	
	
	<input type="text" id="cookie_value" placeholder="Input a Cookie Value" >
	<button type="button" onclick="saveCookie();">Save Cookie</button><br>
	<button type="button" onclick="getCookie();">Get Cookie</button><br><br><br>
	
	<script>
		/*sessionStorage.setItem("jssession","This is a javascript Session");
		var session_val = sessionStorage.getItem("jssession");
		sessionStorage.removeItem("jssession");
		sessionStorage.clear(); */
		
		
		/*document.cookie = "username=Bhrigu";
		document.cookie = "username=Bhrigu; expires=Thu, 24 Nov 2022 12:00:00 UTC";  with expiry time */
		/*document.cookie = "username=Bhrigu; expires=Thu, 24 Nov 2022 12:00:00 UTC; path=/"; /* with path , here root directory , cookie is valid by default only to current page */
		
		/*document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;"; /* setting no value unsets the cookie */
		
		
		function saveSession(){
			var s_value=document.getElementById("session_value").value;
			sessionStorage.setItem("jssession",s_value);
		}
		function getSession(){
			var session_val = sessionStorage.getItem("jssession");
			alert(session_val);
		}
		function saveCookie(){
			var c_value=document.getElementById("cookie_value").value;
			document.cookie = "Name="+c_value;
		}
		function getCookie(){
			var array=document.cookie.split("="); 
			alert(document.cookie);	
			alert("Name="+array[0]+" "+"Value="+array[1]);  
		}
	
	</script>
</body>

</html>