<?php
    session_start();
    
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";

    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
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
        $response['success'] = true;
        $response['message'] = "Hello " . $row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        ?>
        <form action="homepage.php"  method ="post"/>
        </form>
        <?php
    }
    else
    {
        $response['success'] = false;
        $response['message'] = "Login failed";
    }
    echo json_encode($response);
    mysqli_close($conn);
?>
