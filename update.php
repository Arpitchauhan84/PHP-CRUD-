<?php
include('conection.php');
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
           $name=$_POST['name'];
           $area=$_POST['area'];
           $con=$_POST['con'];
           $year=$_POST['year'];

           $sql="UPDATE `data` SET `id`='$id', `Name`='$name',`Area`='$area',`Content_no`='$con',`E_year`='$year' WHERE `id`='$id'";
           $result=mysqli_query($conect,$sql);
           if($result){
            echo "<script>alert('Data Update Successfully!')</script>";
            header("location:show_data.php");
           }
           else {
             die("error in query".mysqli_error($conect));
             }
        }
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update data!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="con">
        <form method="post">
            <div class="mb-3 m-3 ">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 m-3">
                <label for="exampleInputPassword1" class="form-label">Area</label>
                <input type="text" name="area" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 m-3">
                <label for="exampleInputPassword1" class="form-label">Content-NO</label>
                <input type="text" name="con" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 m-3">
                <label for="exampleInputPassword1" class="form-label">Ex-YEAR</label>
                <input type="text" name="year" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>