<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");


if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$pass= ($_POST['paswd']);
	
	$sql = "select * from login_test1 where username='$uname'";
	//echo $sql;
	$rec = mysqli_query($db,$sql); //mysqli_query() function takes two parameters, one is database connectivity variable($db) and sql query variable($sql)//
	$num = mysqli_num_rows($rec); //mysqli_num_rows() function is same as mysql_num_rows()//
	
	if($num > 0)
	{
		$res = mysqli_fetch_assoc($rec);// mysqli_fetch_assoc() function is same as mysql_fetch_assoc()//
		echo $res;
		if($uname== $res['username'] && $pass == $res['password'])
		{
			echo "<script>
				alert('Successfully Logged In');
				location.replace('login.php');
				</script>";
		}elseif($pass != $res['password'])
		{
			echo "<script>
				alert('Wrong Password');
				location.replace('login.php?')
				document.getElementById(uname).focus();
				</script>";
		}
	}else
	    {
		       echo "<script>
				alert('Wrong Credentials');
				location.replace('login.php?')
				document.getElementById(uname).focus();
				</script>";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-weight: bold; font-family:Verdana, Arial, Helvetica, sans-serif }
.box
	{
		width: 60px;
		border: 1px solid #9325BC;
		padding: 10px;
		border-radius:10px;
	}
	.box:hover
	{
		-moz-box-shadow: 0 0 10px #ccc;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
	}
	
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="100%" height="663" border="0" bgcolor="#E1E1E1">
    <tr>
      <td height="55" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="16%" height="358">&nbsp;</td>
      <td width="64%" align="center"><table width="100%"  cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="167" align="center"><table width="60%" border="0" cellspacing="0" cellpadding="0" class="bod">
              <tr>
                <td width="32%" height="110" align="right"><img src="images/keylock.png" width="100" height="120" /></td>
                <td width="68%" align="center" valign="top" class="bod_L"><table width="353" height="132" border="">
        <tr>
          <td width="71" align="center">Name</td>
          <td width="10" align="center">:</td>
          <td width="308" align="center"><input name="username"  type="email" id="uname" required="required" width="188"/></td>
        </tr>
        <tr>
          <td align="center">Password</td>
          <td>:</td>
          <td align="center"><input name="paswd" type="password" id="pass" required="required"/  width="188"></td>
        </tr>
        <tr>
          <td height="28" colspan="3" align="center"><input name="submit" type="submit" class="box" value="LOGIN"   /></td>
          </tr>
      </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
