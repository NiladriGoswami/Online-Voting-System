//login//
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
//login part complete//
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" height="100%" border="0">
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="55%">table width="293" height="158" border="1">
  <tr>
    <td width="71">Name</td>
    <td width="10">:</td>
    <td width="190"><input name="username"  type="email" id="uname" required/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input name="paswd" type="password" id="pass" required/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" value="login" /></td>
  </tr>
</table></td>
      <td width="22%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
