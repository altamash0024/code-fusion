<html>
<body>
<center>
<h1> <font color="red"> Customer Login Form</font></h1>
<form name="login" method="post" action="index.php">
      <table border="2">
      <tr>
      <th>Customer Username</th>
      <th><input type="text" name="uname"></th>
      </tr>
      <tr>
      <th>Customer Password</th>
      <th><input type="password" name="cpass"></th>
      </tr>
      <tr>
      <tr>
      <th colspan="2"><input type="submit" name="submit" value="Login">
      &nbsp;&nbsp;
      <input type="reset" name="re" value="Clear">
      </th>
      </tr>
      </table>
      </form>
</body>
</html>
<?php
  if((isset($_POST['submit']))&&($_POST['submit']=="Login"))
{
$uname=$_POST['uname'];
$cpass=$_POST['cpass'];
if($uname=="RCP" && $cpass=="IMRD")
  {
              session_start();
      $_SESSION['cname']=$uname; 
      header("location:p.php");
  }
  else
     {
      echo "Invalid username password..!!!";
      //echo mysql_error();
     }
}
?>