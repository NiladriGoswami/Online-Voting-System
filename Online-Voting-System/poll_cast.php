<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$fname3=$_SESSION['member_id'];
$fname=$_SESSION['f_name'];
//$fname2=$_SESSION['first_name'];
$psql="select * from tb_position";
$positions=mysqli_query($db,$psql);

// retrieval sql query
// check if Submit is set in POST
 if (isset($_POST['Submit']))
 {
 // get position value
 $position = addslashes( $_POST['position'] ); //prevents types of SQL injection
 
 // retrieve based on position
 $rsql="select * from tbs_candidate where candidate_position='$position'";
 $result = mysqli_query($db,$rsql); 
 
 // redirect back to vote
 //header("Location: vote.php");
 }
 else
 // do something
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::POLL_CAST::</title>
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
<script language="JavaScript" src="js1/js/user.js">
</script>
<script type="text/javascript">
function getVote(int)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

	if(confirm("Your vote is for "+int))
	{
	xmlhttp.open("GET","save.php?vote="+int,true);
	xmlhttp.send();
	}
	else
	{
	alert("Choose another candidate ");	
	}
	
}

function getPosition(String)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.open("GET","poll_cast.php?position="+String,true);
xmlhttp.send();
}
</script>
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

<body bgcolor="#FAFDFD">
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" bgcolor="#F7F7F4">
    <tr>
      <td><table width="100%" height="589" border="0">
    <tr>
      <td height="75" colspan="3" align="center" bgcolor="#BCC7E5"><h1 class="style5"><span class="style4">Current Polls</span>  </h1>
        <table width="25%" border="0" align="right" class="style5">
          <tr>
            <td align="right"><b>Welcome, <?php echo $fname;?>.</b></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="21%" height="417">&nbsp;</td>
      <td width="57%" align="center"><table width="108%" height="384" border="0">
        <tr>
          <td height="59" align="center"><table width="100%" border="0" bgcolor="#BCC7E5" class="box">
            <tr>
              <td width="25%" align="center" class="cell"><a href="student_home.php">Home</a></td>
              <td width="25%" align="center" class="cell"><a href="poll_cast.php">Current Polls</a> </td>
              <td width="25%" align="center" class="cell"><a href="manage_student.php">Manage Profile</a></td>
              <td width="25%" align="center" class="cell"><a href="logout.php">Logout</a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="256" align="center" valign="top" bordercolor="#00CCFF" bgcolor="#FDFDF8"></br>
            <table width="98%" height="54" border="0">
              <tr>
                <td align="center">
				<table width="55%" height="42" border="0" bgcolor="#F7F7F4">
<form name="fmNames" id="fmNames" method="post" action="poll_cast.php" onSubmit="return positionValidate(this)">
                  <tr>
                    <td width="35%" align="right">Choose Position: </td>
                    <td width="44%" align="center">
					<SELECT NAME="position" id="position" onclick="getPosition(this.value)" required>
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
                    <td width="21%" align="left"><input type="submit" name="Submit" value="See Candidates" /></td>
                  </tr>
</form> 
                </table>
				</td>
              </tr>
            </table>
			</br>
            <table width="50%" border="0">
			<form  method="post" name="poll_cast">
              <tr>
				<th align="left">Candidates:</th>
				<?php
				//loop through all table rows
				//if (mysql_num_rows($result)>0){
				  if (isset($_POST['Submit']))
				  {
				while ($row=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row['candidate_name']."</td>";
				echo "<td><input type='radio' name='poll_cast' value='$row[candidate_name]' onclick='getVote(this.value)' /></td>";
				echo "</tr>";
				}
				mysqli_free_result($result);
				mysqli_close($db);
				//}
				  }
				else
				// do nothing
				?>
			</tr>
			 <tr>
    <font color="#BCC7E5" size="+1">NB: Click a circle under a respective candidate to cast your vote. You can't vote more than once in a respective position. This process can not be undone so think wisely before casting your vote.</font>
    <td>&nbsp;</td>
</tr>
			  </form>
            </table>
            </td>
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
	</form>
  </table>
</form>
</body>
</html>
