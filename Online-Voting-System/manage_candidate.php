<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname1=$_SESSION['first_name'];

if(isset($_POST['Submit'])) {

	$cname = addslashes($_POST['cname']);
	$position = addslashes( $_POST['cposition'] );
	/*echo "<script>console.log('$cname')</script>";*/
	/*echo "<script>console.log('$cpos')</script>";*/
	if($_POST['Submit'] == "Submit") {
	/*echo "<script>console.log('Submit')</script>";*/
		$fsql = "insert into tbs_candidate(candidate_name,candidate_position) values('$cname','$position')";
		//echo $fsql;
    $frec = mysqli_query($db, $fsql);
    /*echo "<script>console.log('$frec')</script>";*/
		//echo $frec;
		if($frec) {
			echo "<script>
					alert('Data Inserted');
					location.replace('manage_candidate.php?')
					</script>";
	  		} 
		}
	}
if(isset($_GET['D']))
{
	$D = $_GET['D'];
	$dcsql = "delete from tbs_candidate where candidate_id='$D'";
	$dcrec = mysqli_query($db,$dcsql);
	if($dcrec)
	{
		echo "<script>
					alert('Data Deleted');
					location.replace('manage_candidate.php?')
					</script>";
	}
}
?>
<?php
// retrieving positions sql query
$esql="SELECT * FROM tb_position";
$positions=mysqli_query($db,$esql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::MANAGE_CANDIDATE::</title>
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
		width: 80px;
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
function conf1(str)
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
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1 class="style7"><span class="style1"><span class="style8"><font color="#FFFFFF">Manage Candidate</font><font color="#FFFFFF"> </font></span></h1>
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
              <td width="13%" align="center" class="cell"><a href="admin_poll_result.php"><strong> Poll Results</strong></a></td>
              <td width="13%" align="center" class="cell"><a href="logout.php"><strong> Logout</strong></a> </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="256" align="center" bordercolor="#00CCFF" bgcolor="#FDFDF8"><table width="99%" height="245" border="0" bgcolor="#EFEFE8">
            <tr>
              <td align="center" valign="top"><table width="98%" height="112" border="0">
                <tr>
                  <td colspan="3" align="center"><strong><font color="#FF3333">ADD NEW CANDIDATES:</font></strong> </td>
                  </tr>
                <tr>
                  <td width="38%" align="right">Candidate Name </td>
                  <td width="4%" align="center">:</td>
                  <td width="58%" align="left"><input name="cname" type="text" id="cname" required/></td>
                </tr>
                <tr>
                  <td align="right">Candidate Position </td>
                  <td align="center">:</td>
                  <td align="left"><SELECT NAME="cposition" id="cposition" required>
    <OPTION VALUE="">--Select Position--
    <?php 
    //loop through all table rows
    while ($row=mysqli_fetch_array($positions)){
    echo "<OPTION VALUE=$row[position_name]>$row[position_name]"; 
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT></td>
                </tr>
                <tr>
                  <td colspan="3" align="center"><input type="submit" name="Submit" value="Submit" class="box2" /></td>
                  </tr>
              </table>
			  <hr color="#000000" width="98%" />
			  <table width="98%" border="0">
			  <tr><td colspan="4" align="center"><strong><font color="#FF3333">Available Candidates:</font></strong></td></tr>
			  </table>
			  <?php
				$csql = "select * from tbs_candidate";
				$crec = mysqli_query($db,$csql);
				$cnum = mysqli_num_rows($crec);
				if($cnum > 0)
				{
				?>
			  <table width="98%" border="0">
                <tr>
				  <td width="13%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">SL.NO</font></strong></td>
                  <td width="17%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">Candidate ID</font></strong></td>
                  <td width="16%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">Candidate Name</font></strong> </td>
                  <td width="18%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">Candidate Position</font></strong> </td>
				  <td width="16%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">Candidate Votes</font></strong> </td>
                  <td width="20%" align="center" bgcolor="#BCC7E5"><strong><font color="#FFFFFF">Action</font></strong></td>
                </tr>
				<?php
				  $j = 1;
				  while($cres = mysqli_fetch_assoc($crec))
				  {
				  ?>
                <tr>
                  <td align="center"><?php echo $j;?></td>
                  <td align="center"><?php echo $cres['candidate_id'];?></td>
                  <td align="center"><?php echo $cres['candidate_name'];?></td>
                  <td align="center"><?php echo $cres['candidate_position'];?></td>
				  <td align="center"><?php echo $cres['candidate_votes'];?></td>
				  <td align="center"><a href="#" onclick="conf1('manage_candidate.php?D=<?php echo $cres['candidate_id'];?>')">Delete Position</a></td>
                </tr>
				<?php
				  $j++;
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
