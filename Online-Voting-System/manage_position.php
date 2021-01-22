<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname1=$_SESSION['first_name'];

if(isset($_POST['Submit'])) {
	$pos = addslashes($_POST['position']);
	echo "<script>console.log('$pos')</script>";
	if($_POST['Submit'] == "Submit") {

		$sql = "insert into tb_position(position_name) values('$pos')";
    $rec = mysqli_query($db, $sql);
    echo "<script>console.log('$rec')</script>";
		//echo $rec;
		if($rec) {
			echo "<script>
					alert('Position Inserted');
					location.replace('manage_position.php?')
					</script>";
	  } 
	}
}
if(isset($_GET['D']))
{
	$D = $_GET['D'];
	$dsql = "delete from tb_position where position_id='$D'";
	$drec = mysqli_query($db,$dsql);
	if($drec)
	{
		echo "<script>
					alert('Data Deleted');
					location.replace('manage_position.php?')
					</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::MANAGE_POSITION::</title>
<style type="text/css">
<!--
.box2
	{
		width: 80px;
		border: 1px solid #BCC7E5;
		padding: 5px;
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
.style7 {font-size: 36px}
.style8 {font-family: Arial}
-->
</style>
<script>
function conf(str)
{
	if(confirm("Are You Sure??"))
	{
		location.replace(str)
	}
}
</script>

</head>

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="584" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1 class="style7"><span class="style1"><span class="style8"><font color="#FFFFFF">Manage Position </font></span></h1>
        <table width="25%" border="0" align="right">
          <tr>
            <td align="right" class="style6"><b>Welcome, <?php echo $fname1;?>.</b></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="21%" height="412">&nbsp;</td>
      <td width="57%" align="center"><table width="108%" height="388" border="0">
        <tr>
          <td height="63" align="center"><table width="98%" border="0" class="box">
            <tr>
              <td width="10%" align="center" class="cell"><a href="admin_home.php"><strong>Home</strong></a></td>
              <td width="24%" align="center" class="cell"><a href="manage_admin.php"><strong>Manage Administrator</strong></a></td>
              <td width="19%" align="center" class="cell"><a href="manage_position.php"><strong>Manage Position</strong></a></td>
              <td width="21%" align="center" class="cell"><a href="manage_candidate.php"><strong>Manage Candidates</strong></a></td>
              <td width="13%" align="center" class="cell"><a href="admin_poll_result.php"><strong>Poll Results</strong></a></td>
              <td width="13%" align="center" class="cell"><a href="logout.php"><strong>Logout</strong></a> </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="256" align="center" bordercolor="#00CCFF" bgcolor="#FDFDF8"><table width="99%" height="245" border="0" bgcolor="#EFEFE8">
            <tr>
              <td align="center" valign="top"><table width="98%" border="0">
                <tr>
                  <td colspan="3" align="center"><strong><font color="#FF3333">ADD NEW POSITION:</font></strong> </td>
                  </tr>
                <tr>
                  <td width="35%" align="right">Position Name </td>
                  <td width="4%" align="center">:</td>
                  <td width="61%" align="left"><input name="position" type="text" id="position" required/></td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><input type="submit" name="Submit" value="Submit" class="box2" /></td>
                  </tr>
              </table>
			  <hr color="#000000" width="98%" />
			  <table width="98%" border="0">
			  <tr>
                    <td colspan="3" align="center"><strong><font color="#FF3333">Available Position:</font></strong> </td>
                    </tr>
			  </table>
						  <?php
				$fsql = "select * from tb_position";
				$frec = mysqli_query($db,$fsql);
				$fnum = mysqli_num_rows($frec);
				if($fnum > 0)
				{
				?>
                <table width="98%" border="0">
                  <tr>
				    <td width="25%" align="center" bgcolor="#BCC7E5"><font color="#FFFFFF"><strong>Sl.No</strong></font> </td>
                    <td width="25%" align="center" bgcolor="#BCC7E5"><font color="#FFFFFF"><strong>Position ID</strong></font> </td>
                    <td width="25%" align="center" bgcolor="#BCC7E5"><font color="#FFFFFF"><strong>Position Name </strong></font></td>
                    <td width="25%" align="center" bgcolor="#BCC7E5"><font color="#FFFFFF"><strong>Action</strong></font></td>
                  </tr>
				  <?php
				  $i = 1;
				  while($fres = mysqli_fetch_assoc($frec))
				  {
				  ?>
                  <tr>
				  <td align="center"><?php echo $i;?></td>
                  <td align="center"><?php echo $fres['position_id'];?></td>
                  <td align="center"><?php echo $fres['position_name'];?></td>
                  <td align="center"><a href="#" onclick="conf('manage_position.php?D=<?php echo $fres['position_id'];?>')">Delete Position</a></td>
                  </tr>
				  <?php
				  $i++;
				  }
				  ?>
                </table>
				<?php
				  }
				?>
                <p>&nbsp;</p></td>
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
