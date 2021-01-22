<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname=$_SESSION['f_name'];
$primaryKey = $_SESSION['member_id'];
$sqlForFetchingAdmin = "select * from member where member_id = '$primaryKey'";
$executedQuery = mysqli_query($db, $sqlForFetchingAdmin);
$adminInfo = mysqli_fetch_array($executedQuery);

$firstName = $adminInfo['f_name'];
$lastName = $adminInfo['l_name'];
$email = $adminInfo['email'];
$password = $adminInfo['password'];

echo "<script>console.log('$primaryKey')</script>";
if(isset($_POST['Update'])) {
  $firstName = addslashes($_POST['first_name']);
  $lastName = addslashes($_POST['last_name']);
  $email = addslashes($_POST['email']);
  $password = addslashes($_POST['password']);

  $updateSQL = "update member set f_name='$firstName',l_name='$lastName',email='$email',password='$password' where member_id='$primaryKey'";
  $exeupdate = mysqli_query($db, $updateSQL);
  if($exeupdate) {
    echo "<script>
      alert('Data Updated Successfully');
      location.replace('manage_student.php?')
      </script>";
   }
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::MANAGE_STUDENT::</title>
<style type="text/css">
<!--
.box2
	{
		width: 110px;
		border: 1px solid #BCC7E5;
		padding: 10px;
		cursor:pointer;
		border-radius:40px;
		background:#BCC7E5;
	}

.box
	{
		width: 98%;
		padding: 10px;
		border-radius:5px;
		background:#BCC7E5;
		text-decoration:none;
	}
	.box_button
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
.box a:link{color:#FFFFFF; text-decoration:none;}
.box a:active{ color:#FFFFFF; text-decoration:none;}
.box a:activated{ color:#FFFFFF; text-decoration:none;}
.box a:hover{ color:#FFFFFF; text-decoration:none;}
.cell{ box-shadow: 20px 20px 20px; color:#FFFFFF; box-shadow: 20px 20px 45px;}	
.style6 {font-family: Arial; color:#FFFFFF;}
.box3 {		width: 98%;
		padding: 10px;
		border-radius:5px;
		background:#BCC7E5;
		text-decoration:none;
}
.box a:cell1 {box-shadow: 20px 20px 20px; color:#FFFFFF; box-shadow: 20px 20px 45px;}
.style7 {font-size: 36px}
.style8 {font-family: Arial}
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
      <td><table width="100%" height="601" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1 class="style7"><span class="style1"><span class="style8"><font color="#FFFFFF">Manage Profile</font><font color="#FFFFFF"> </font></span></h1>
        <table width="25%" border="0" align="right">
          <tr>
            <td align="right" class="style6"><b>Welcome, <?php echo $fname;?>.</b></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="21%" height="429">&nbsp;</td>
      <td width="57%" align="center"><table width="108%" height="388" border="0">
        <tr>
          <td height="63" align="center"><table width="100%" border="0" bgcolor="#BCC7E5" class="box3">
            <tr>
              <td width="25%" align="center" class="cell"><a href="student_home.php">Home</a></td>
              <td width="25%" align="center" class="cell"><a href="poll_cast.php">Current Polls</a> </td>
              <td width="25%" align="center" class="cell"><a href="manage_student.php">Manage Profile</a></td>
              <td width="25%" align="center" class="cell"><a href="logout.php">Logout</a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="256" align="center" bordercolor="#00CCFF" bgcolor="#FDFDF8"><table width="99%" height="245" border="0" bgcolor="#EFEFE8">
            <tr>
              <td><table width="98%" height="175" border="0" align="center">
    <tr>
    <td colspan="3" align="center" valign="middle"><strong><font color="#FF3333">UPDATE ACCOUNT : </font></strong></td>
    </tr>
    <tr> 
    <td width="37%" align="right"><strong>First Name</strong> </td>
    <td width="2%" align="center"><strong>:</strong></td>
    <td width="61%">
    <?php 

    /* echo "<script>console.log('$pk')</script>";*/
      // $esql="select * from administrator where admin_id=$pk";
      //echo $esql;
      // $eerec=mysqli_query($db,$esql);

      // while($fres=mysqli_fetch_assoc($eerec)) { 
    ?>
      <label>
        <input name="first_name" type="text" id="first_name" value="<?php echo $firstName; ?>" required/>
      </label>
        </td>
        </tr>
        <tr>
        <td align="right"><strong>Last Name</strong> </td>
        <td align="center"><strong>:</strong></td>
        <td><label>
        <input name="last_name" type="text" id="last_name" value="<?php echo $lastName;?>" required/>
          </label></td>
          </tr>
          <tr>
          <td align="right"><strong>Emai</strong>l</td>
          <td align="center"><strong>:</strong></td>
          <td><label>
          <input name="email" type="text" id="email" value="<?php echo $email; ?>" required/>
          </label></td>
          </tr>
          <tr>
          <td align="right"><strong>Password</strong></td>
          <td align="center"><strong>:</strong></td>
          <td><label>
          <input name="password" type="password" id="password" value="<?php echo $password;?>" required/>
            </label></td>
            </tr>
            <tr>
            <td align="right">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td><label></label></td>
              </tr>
              <tr>
              <td colspan="3" align="center"><label>
              <input type="submit" name="Update" value = "Update" class="box2"/>
              </label></td>
              </tr>
              <!-- <?php 
            // } 
            ?> -->
          </table></td>
            </tr>
          </table></td>
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
