<?php
    $stu_id= $_POST['sid'];
    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['sphone'];


    $conn = mysqli_connect("localhost","root","","crud") or die("Connection fail");

    $sql = "UPDATE student SET sname='{$stu_name}',saddress='{$stu_address}',class='{$stu_class}',phone='{$stu_phone}' WHERE id='{$stu_id}'";
         
    $result = mysqli_query($conn,$sql) or die("Query Unsuccess.");


    header("Location: http://localhost/Curd/index.php");

    mysqli_close($conn);

?>