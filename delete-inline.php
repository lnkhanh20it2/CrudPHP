<?php
    echo $stu_id = $_GET['id'];
    include 'config.php';

    $sql = "DELETE FROM student WHERE id={$stu_id}";

    $result = mysqli_query($conn,$sql) or die("Query Unsuccess.");

    header("Location: http://localhost/Curd/index.php");

    mysqli_close($conn);
?>