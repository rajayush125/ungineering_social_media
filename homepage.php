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
    $sql1 ="select users.name,statuses.status,statuses.date,statuses.time from users inner join statuses on users.id=statuses.user_id ORDER BY date DESC";

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
                    <img src="logo.svg" height="75" alt=" "/>
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
            <div class="a3">
                  <a href="#/"><div class="a31">Login</div></a>
                  <a href="#/"><div class="a32">New User</div></a>
            </div>
                       
        </div>
        <?php 
            while ($row=mysqli_fetch_array($result1)){
        ?> 
        <div class="b">
            
            <div class="b1">
                
                <div class="b11">
                    <h3> <?php echo $row['name'] . "<br/>" ?></h3>
                </div>
                <div class="b12">
                    <p>
                       <?php echo $row['status'] . "<br/>"; 
                       ?>
                    </p>
                </div>
                <div class="b13">
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
                            <img class="c2" src="/social_media/youtube1.png"/>
                        </a>
                    </div>
                    <div class="c31">
                        <a href="abc">
                            <img class="c3" src="/social_media/facebook1.png"/>
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
