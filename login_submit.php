<?php
    session_start();
    
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }

    $flag=0;
    $email = $_POST['email'];
    $password = $_POST['password'];
    while ($row=mysqli_fetch_array($result)) {
        
        if($row['email']===$email && $row['password']===$password)
        {
            $flag=1;
            break;
        }
        
    }
    
    if($flag===1)
    {
        echo "Log in Successful.... Hello ".$row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        ?>
        <a href="homepage.php">Click Here to continue</a>
        <form action="homepage.php"  method ="get">
        </form>
        <?php
    }
    else
    {
        echo "Invalid Login";
    }
?>
