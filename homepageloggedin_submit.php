<?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $user_id=$_SESSION['id'];
    $status = $_POST['status'];
    $date = date("Y.m.d");
    $time= date("h:i:sa"); 
    $sql = "INSERT INTO statuses (status, date, time,user_id) VALUES ('$status', '$date', '$time','$user_id')";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }

    header("Location:homepage.php");
    mysqli_close($conn);
    
?>
