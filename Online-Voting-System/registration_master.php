<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");

if(isset($_POST['Submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['email'];
	$pass= ($_POST['password']);
	$cpass= ($_POST['cpassword']);
if($_POST['Submit'] == "Submit" && $pass == $cpass)
	{
		//$password = $_POST['password'];
		
		$sql = "insert into member(f_name,l_name,email,password,cnf_password) values('$fname','$lname','$email','$pass','$cpass')";
		//echo $sql;
		$rec = mysqli_query($db,$sql);
		//echo $rec;
		if($rec)
		{
			echo "<script>
					alert('Data Inserted');
					location.replace('log_master.php?')
					</script>";
		}
	}
	else
	    {
		       echo "<script>
				alert('Data entry failed!!!... Please try again.');
				location.replace('registration_master.php?')
				document.getElementById(fname).focus();
				</script>";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::REGISTER::</title>
<style type="text/css">
<!--
.box
	{
		width: 110px;
		border: 1px solid #89FBD0;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#89FBDO;
	}
	.box:hover
	{
		-moz-box-shadow: 0 0 10px #BCC7E5;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
	}
.style3 {
	font-size: 24px;
	font-weight: bold;
}
.box1 {		width: 130px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#89FBDO;
}
.box11 {width: 130px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#BCC7E5;
}
.style4 {font-size: 36px}
	
-->
</style>
</head>

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="596" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1><span class="style1"><span class="style4"><font color="#FFFFFF">Student Registration</font></span></h1></td>
    </tr>
    <tr>
      <td width="16%" height="438">&nbsp;</td>
      <td width="64%" align="center"><table width="100%"  cellspacing="0" cellpadding="0" bgcolor="#EFEFE8">
        <tr>
          <td align="center" ><span class="style3"><font color="#FF3333">Register an account by filling in the needed information below :</font></span> </td>
        </tr>
        <tr>
          <td height="167" align="center"><table width="60%" border="0" cellspacing="0" cellpadding="0" class="bod">
              <tr>
                <td width="2%" height="132" align="right">&nbsp;</td>
                <td width="98%" align="center" valign="top" class="bod_L"><table width="100%" border="0">
                  <tr>
                    <td width="33%" height="33" align="right"><strong>First Name </strong></td>
                    <td width="5%" align="center"><strong>:</strong></td>
                    <td width="62%"><input name="firstname"  type="firstname" id="fname" required="required" width="188"/></td>
                  </tr>
                  <tr>
                    <td height="29" align="right"><strong>Last Name </strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td><input name="lastname"  type="lastname" id="lname" required="required" width="188"/></td>
                  </tr>
                  <tr>
                    <td height="32" align="right"><strong>Email Address </strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td><input name="email"  type="email" id="email" required="required" width="188"/></td>
                  </tr>
                  <tr>
                    <td height="31" align="right"><strong>Password</strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td><input name="password"  type="password" id="pass" required="required" width="188"/></td>
                  </tr>
                  <tr>
                    <td height="28" align="right"><strong>Confirm Password </strong></td>
                    <td align="center"><strong>:</strong></td>
                    <td><input name="cpassword"  type="password" id="cpass" required="required" width="188"/></td>
                  </tr>

                  <tr>
                    <td height="36" align="right">&nbsp;</td>
                    <td align="center">&nbsp;</td>
                    <td><input name="Submit" type="submit" class="box11" id="Submit" /></td>
                  </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center"> Already have an Account ? <a href="log_master.php"><strong>Login Here</strong></a></td>
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
