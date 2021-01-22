<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';

$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");

if(isset($_POST['submit']))
{
	$uname=addslashes($_POST['username']);
	$pass=addslashes($_POST['paswd']);
	
	$sql = "select * from administrator where email='$uname'";
	//echo $sql;
	$rec = mysqli_query($db,$sql); //mysqli_query() function takes two parameters, one is database connectivity variable($db) and sql query variable($sql)//
	$num = mysqli_num_rows($rec); //mysqli_num_rows() function is same as mysql_num_rows()//
	
	if($num > 0)
	{
		$res = mysqli_fetch_assoc($rec);// mysqli_fetch_assoc() function is same as mysql_fetch_assoc()//
		//echo $res;
		if($uname== $res['email'] && $pass == $res['password'])
		{
			session_start();
			$_SESSION['admin_id']= $res['admin_id'];
			$_SESSION['first_name']= $res['first_name'];
			echo "<script>
				alert('Successfully Logged In');
				location.replace('admin_home.php');
				</script>";
		}elseif($pass != $res['password'])
		{
			echo "<script>
				alert('Wrong Password');
				location.replace('log_admin_master.php?')
				document.getElementById(uname).focus();
				</script>";
		}
	}else
	    {
		       echo "<script>
				alert('Wrong Credentials');
				location.replace('log_admin_master.php?')
				document.getElementById(uname).focus();
				</script>";
	}	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::LOGIN::</title>
<style type="text/css">
<!--
.box
	{
		width: 110px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#BCC7E5;
	}
	.box:hover
	{
		-moz-box-shadow: 0 0 10px #BCC7E5;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
	}
.style1 {
	font-size: 36px;
	font-family: Arial;
	font-weight: bold;
}
.style2 {
	font-size: 16px;
	font-weight: bold;
}
.box11 {width: 130px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#BCC7E5;
}	
-->
</style>
<script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
</head>

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="597" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1><span class="style1"><font color="#FFFFFF">Online College Voting System</font></span> </h1></td>
    </tr>
    <tr>
      <td width="16%" height="439">&nbsp;</td>
      <td width="64%" align="center"><table width="100%"  cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="167" align="center"><table width="60%" border="0" cellspacing="0" cellpadding="0" class="bod">
              <tr>
                <td width="32%" height="132" align="right"><img src="images/adminlock.png" width="107" height="128" /></td>
                <td width="68%" align="center" valign="top" class="bod_L"><table width="382" height="132" bgcolor="#EFEFE8">
        <tr>
          <td width="81" align="center"><span class="style2">Username</span></td>
          <td width="14" align="center"><span class="style2">:</span></td>
          <td width="271" align="left"><input name="username"  type="email" id="uname" required="required" width="188"/></td>
        </tr>
        <tr>
          <td align="center"><span class="style2">Password</span></td>
          <td align="center"><span class="style2">:</span></td>
          <td align="left"><input name="paswd" type="password" id="pass" required="required"/  width="188"></td>
        </tr>
        <tr>
          <td height="28" colspan="3" align="center"><input name="submit" type="submit" class="box" value="LOGIN"   /></td>
          </tr>
      </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
      </table></td>
      <td width="20%"></td>
    </tr>
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><font color="#FFFFFF"><strong>&copy;&nbsp;2018 | Simple PHP Polling System. | All Rights Reserved.</strong></font> </td>
    </tr>
  </table>
</td>
    </tr>
  </table>
</form>
</body>
</html>
