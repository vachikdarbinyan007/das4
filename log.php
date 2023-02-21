<?php
 $password=$_POST['password'];
 $login=$_POST['login'];
 $con=mysqli_connect("localhost","root","","mysqldb4");
 $sql="SELECT login,password FROM newtab WHERE login='$login' AND password='$password'";
 $ardyunq=mysqli_query($con,$sql);
 $qanak=mysqli_num_rows($ardyunq);
 if(!$qanak==1){
    echo '0';
 }else{
    echo '1';
 };
?>