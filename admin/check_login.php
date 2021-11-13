<?php
require('connect.php');
session_start();
$email=$_POST['u_email'];
$password=$_POST['u_password'];
$sql="select * from admin_tbl where admin_email='$email' and admin_password='$password'";
$res=mysql_query($sql,$con);
$numrows = mysql_num_rows($res);
//echo $numrows;
if($numrows>=1){
    $data = mysql_fetch_assoc($res);
    $_SESSION['admin_id']=$data['admin_id'];
    $_SESSION['admin_name']=$data['admin_name'];
    $_SESSION['admin_login']=1;
    header('location:index.php');

}else{
    header('location:login.php?error=1');
}
 
?>