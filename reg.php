<?php
    $login=$_POST['login'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','','mysqldb4');

     // ugharkel baza
     $query="INSERT INTO newtab VALUES('','$login','$password')";
     mysqli_query($con,$query);
     
?>