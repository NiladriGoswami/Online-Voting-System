<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';

$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");

session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::INDEX::</title>
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
.box11 {width: 130px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#BCC7E5;
}
.rcorners1 {
    border-radius: 25px;
    background: #73AD21;
    padding: 20px; 
    width: 200px;
    height: 150px; 
}
.style3 {font-size: 32px; font-family: Arial; font-weight: bold; }
.style4 {font-size: 32px}
.text_position {
    position: relative;
    text-align: center;
    color: white;
	position: absolute;
    bottom: 8px;
    left: 16px;
}
	
-->
</style>

</head>

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="598" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1><span class="style1"><font color="#FFFFFF">Online College Voting System</font></span> </h1></td>
    </tr>
    <tr>
      <td width="16%" height="440">&nbsp;</td>
      <td width="64%" align="center"><table width="100%"  cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><p><font color="#BCC7E5"><span class="style3">Log in as :</span></font><span class="style4"></br>
              </span></p>
            </td>
        </tr>
        <tr>
          <td height="166" align="center"><table width="40%" height="193" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="bod">
              <tr>
                <td width="50%" height="166" align="center"><table width="92%" height="134" border="0" bgcolor="#BCC7E5" class="box">
                  <tr>
                    <td align="center"><a href="log_admin_master.php"><img src="images/adminlock.png" width="120" height="126" /></a>ADMIN</td>
                  </tr>
                </table></td>
                <td width="50%" align="center" valign="middle" class="bod_L"><table width="92%" border="0" bgcolor="#BCC7E5" class="box">
                  <tr>
                    <td height="129" align="center"><a href="log_master.php"><img src="images/keylock.png" width="120" height="126" /></a>USER</td>
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
