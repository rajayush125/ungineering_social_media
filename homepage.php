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
    $sql1 ="select users.name,statuses.status,statuses.date,statuses.time from users inner join statuses on users.id=statuses.user_id ORDER BY statuses.id DESC";
    $result1 = mysqli_query($conn, $sql1);
    if (!$result1) {
        die("Error: " . $sql1 . "<br>" . mysqli_error($conn));
    }
?>
<html>
    <head>
    <link rel="stylesheet" href=/social_media/css/homepage.css>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="a">
            <div class="a1">
                <div class="a1a">
                    <a href="#/">
                    <img src="img/logo.svg" height="75" alt=" "/>
                    </a>
                </div>
                <div class="a1b">
                    <div class="a1b1">
                        <div class="a1b11"><h1>un</h1></div>
                        <div class="a1b12"><h1>gineering</h1></div>
                    </div>
                    <div class ="a1b2"><h7>A <span style="color:#f04c4e">bit</span> of knowledge is good.A <span style="color:#f04c4e">byte</span> is better</h7></div>
                </div>
            </div>
            <?php
            if($_SESSION['id']!=NULL){ ?>
                <div class="a3">
                    <div class="a41"><u>My Dashboard</u></div>
                    <a href="logout.php"><div class="a42">Logout</div></a>
                </div>
            <?php }
            else { ?>
                <div class="a3">
                    <a href="login.php"><div class="a31">Login</div></a>
                    <a href="registration.php"><div class="a32">New User</div></a>
                </div>
            <?php } ?>           
        </div>

        <div class="b">
        <?php
            if($_SESSION['id']!=NULL){
        ?>
           <div class="b1">
                <div class="b11"><h2>Write something here</h2></div>
                <form method="post" action="homepageloggedin_submit.php">
                    <div class="b12">
                        <textarea name="status" style="height:100%;width:100%"></textarea>
                    </div> 
                    <div class="b13">
                        <input class="b13" type="submit" value="Post" >
                    </div>
                </form>
            </div>
        <?php } ?>
        <?php 
            while ($row=mysqli_fetch_array($result1)){
        ?>         
            <div class="b2">
                
                <div class="b21">
                    <h3> <?php echo $row['name'] . "<br/>" ?></h3>
                </div>
                <div class="b22">
                    <p>
                       <?php echo $row['status'] . "<br/>"; 
                       ?>
                    </p>
                </div>
                <div class="b23">
                    <p>Time:<?php 
                            echo $row['time'];
                            echo " | ";
                            echo $row['date'] . "<br/>";
                            ?> </p>  
                </div>       
            </div>
          <?php 
              } ?>
        </div>
   
        <div class ="c">
            <div class="c1">
                <div class="c2">
                    <p class="c1">Connect with us at-</p>
                </div>
                <div class="c3">
                    <div class="c31">
                        <a href="abc">
                            <img class="c2" src="img/youtube1.png"/>
                        </a>
                    </div>
                    <div class="c31">
                        <a href="abc">
                            <img class="c3" src="img/facebook1.png"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="c1">
                <div class="c4">
                    <p class="c2">For any question/doubts write us at-</p>
                </div>
                <div class="c5">
                    <a class="c2" href="abcd">queries@ungineering.com</a>
                </div>
            </div>
        </div>
    </body>
</html>
