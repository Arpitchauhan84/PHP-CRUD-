<?php
include('conection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Show Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>



<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Area</th>
      <th scope="col">Content No</th>
      <th scope="col">EXP.year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql="SELECT * FROM `data`";
        $res=mysqli_query($conect,$sql);
        $sno=0;
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['Name'];
            $area=$row['Area'];
            $con=$row['Content_no'];
            $year=$row['E_year'];
          $sno=$sno+1;
          echo '<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$area.'</td>
            <td>'.$con.'</td>
            <td>'.$year.'</td>
            <td> 
            <button class=" edit btn btn-sn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button>
             <button class="delete btn btn-sm btn-primary"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
          </tr>';
        }
        
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>