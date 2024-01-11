<?php
include('/xampp/htdocs/php/crud/conection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `data` WHERE `id`= '$id' ";
    $result=mysqli_query($conect,$sql);
    if(!$result) {
        die("Error in query: ". mysqli_error($conect));
        }
    else{
     echo "<script>alert('Record Deleted Successfully!')</script>";
            header("location:show_data.php");
     }
}
?>