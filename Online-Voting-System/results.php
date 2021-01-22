<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname1=$_SESSION['first_name'];
?>
<html>
<head>
<script language="javascript"  src="js1/js/jquery-1.2.6.min.js"></script>
<script language="javascript"  src="js1/js/jquery.timers-1.0.0.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".admin_poll_result").everyTime(1000,function(i){
			j.ajax({
			  url: "admin_poll_result.php",
			  cache: false,
			  success: function(html){
				j(".admin_poll_result").html(html);
			  }
			})
		})
		
	});
   j('.admin_poll_result').css({color:"green"});
});
</script>
</head>
<body>
</body>
</html>