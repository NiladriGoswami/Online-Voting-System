<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname1=$_SESSION['first_name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::ADMIN_HOME::</title>
<style type="text/css">
<!--
.box
	{
		width: 98%;
		padding: 10px;
		border-radius:5px;
		background:#BCC7E5;
		text-decoration:none;
	}
	.box:hover
	{
		-moz-box-shadow: 0 0 10px #89FBDO;
		-webkit-box-shadow: 0 0 10px #ccc;
		box-shadow: 0 0 10px #ccc;
	}
.box1 {		width: 130px;
		border: 1px solid #89FBD0;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#89FBDO;
}
.box11 {width: 130px;
		border: 1px solid #89FBD0;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#89FBDO;
}
.style1 {font-size: 24px}
.style4 {font-size: 36px}
.style5 {font-family: Arial; color:#FFFFFF;}
.box a:link{color:#FFFFFF; text-decoration:none;}
.box a:active{ color:#FFFFFF; text-decoration:none;}
.box a:activated{ color:#FFFFFF; text-decoration:none;}
.box a:hover{ color:#FFFFFF; text-decoration:none;}
.cell{ box-shadow: 20px 20px 20px; color:#FFFFFF; box-shadow: 20px 20px 45px;}
.box a:scell{ background-color:#0000CC; color:#BCC7E5;}
-->
</style>

</head>

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="589" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1 class="style5"><span class="style1"><span class="style4"><font color="#FFFFFF">Administrator Control Pannel</font><font color="#FFFFFF"> </font></span></h1>
        <table width="25%" border="0" align="right">
          <tr>
            <td align="right" class="style5"><b>Welcome, <?php echo $fname1;?>.</b></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="21%" height="417">&nbsp;</td>
      <td width="57%" align="center"><table width="108%" height="384" border="0">
        <tr>
          <td height="59" align="center"><table width="100%" border="0" bgcolor="#BCC7E5" class="box">
            <tr>
              <td width="10%" align="center" class="cell"><a href="admin_home.php"><strong>Home</strong></a></td>
              <td width="24%" align="center" class="cell"><a href="manage_admin.php"><strong>Manage Administrator</strong></a></td>
              <td width="19%" align="center" class="cell"><a href="manage_position.php"><strong>Manage Position</strong></a></td>
              <td width="21%" align="center" class="cell"><a href="manage_candidate.php"><strong>Manage Candidates</strong></a></td>
              <td width="13%" align="center" class="cell"><a href="admin_poll_result.php"><strong> Poll Results</strong></a></td>
              <td width="13%" align="center" class="cell"><a href="logout.php"><strong> Logout</strong></a> </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="256" align="center" bordercolor="#00CCFF" bgcolor="#FDFDF8"><span class="style1"><font color="#BCC7E5">Click the above link to perform administrative operations.</font></span> </td>
        </tr>
        <tr>
          <td height="61" align="center">&nbsp;</td>
        </tr>
      </table></td>
      <td width="22%"></td>
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
