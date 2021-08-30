<?php
    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['sphone'];


    $conn = mysqli_connect("localhost","root","","crud") or die("Connection fail");

    $sql = "INSERT INTO student(sname,saddress,class,phone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
         
    $result = mysqli_query($conn,$sql) or die("Query Unsuccess.");


    header("Location: http://localhost/Curd/index.php");

    mysqli_close($conn);

?>