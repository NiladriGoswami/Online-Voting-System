<?php
$user='id15273222_niladri_voting';
$pass='Nilmoni@1994';
$db='id15273222_polling';
$db= new mysqli('localhost', $user, $pass, $db) or die("DANG!!...unable to connect!");
session_start();
$primaryKey = $_SESSION['admin_id'];
$sqlForFetchingAdmin = "select * from administrator where admin_id = '$primaryKey'";
$executedQuery = mysqli_query($db, $sqlForFetchingAdmin);
$adminInfo = mysqli_fetch_array($executedQuery);

$firstName = $adminInfo['first_name'];
$lastName = $adminInfo['last_name'];
$email = $adminInfo['email'];
$password = $adminInfo['password'];

echo "<script>console.log('$primaryKey')</script>";
if(isset($_POST['Update'])) {
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $updateSQL = "update administrator set first_name='$firstName',last_name='$lastName',email='$email',password='$password' where admin_id='$primaryKey'";
  $exeupdate = mysqli_query($db, $updateSQL);
  if($exeupdate) {
    echo "<script>
      alert('Data Updated Successfully');
      location.replace('update.php?')
      </script>";
   }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
  </head>

  <body>
    <form id="form1" name="form1" method="post">
    <table width="56%" height="175" border="0" align="center">
    <tr>
    <td colspan="3" align="center" valign="middle">Update Account : </td>
    </tr>
    <tr> 
    <td width="33%" align="right">First Name </td>
    <td width="2%" align="center">:</td>
    <td width="65%">
    <?php 

    // echo "<script>console.log('$pk')</script>";
      // $esql="select * from administrator where admin_id=$pk";
      //echo $esql;
      // $eerec=mysqli_query($db,$esql);

      // while($fres=mysqli_fetch_assoc($eerec)) { 
    ?>
      <label>
        <input name="first_name" type="text" id="first_name" value="<?php echo $firstName; ?>"/>
      </label>
        </td>
        </tr>
        <tr>
        <td align="right">Last Name </td>
        <td align="center">:</td>
        <td><label>
        <input name="last_name" type="text" id="last_name" value="<?php echo $lastName;?>"/>
          </label></td>
          </tr>
          <tr>
          <td align="right">Email</td>
          <td align="center">:</td>
          <td><label>
          <input name="email" type="text" id="email" value="<?php echo $email; ?>" />
          </label></td>
          </tr>
          <tr>
          <td align="right">Password</td>
          <td align="center">:</td>
          <td><label>
          <input name="password" type="password" id="password" value="<?php echo $password;?>"/>
            </label></td>
            </tr>
            <tr>
            <td align="right">Confirm Password </td>
            <td align="center">:</td>
            <td><label>
            <input name="cnf_password" type="password" id="cnf_password" value=""/>
              </label></td>
              </tr>
              <tr>
              <td colspan="3" align="center"><label>
              <input type="submit" name="Update" value = "Update"/>
              </label></td>
              </tr>
              <!-- <?php 
            // } 
            ?> -->
          </table>
          </form>
        </body>
        </html>
        