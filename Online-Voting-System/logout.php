<?php
session_start();

session_destroy();

echo "<script>
				alert('Logged Out Successfully');
				location.replace('home.html');
				</script>";
?>