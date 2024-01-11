<?php
$servarname='localhost';
$username='root';
$password='';
$db_name="emp";

$conect=mysqli_connect($servarname,$username,$password,$db_name);
if(!$conect){
    die("Connection Failed".mysqli_connect_error());
}
else{
    
}
?>
