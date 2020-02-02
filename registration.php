<!DOCTYPE html>
<html>
    <head>
        <title> REGISTRATION PAGE </title>
        <link rel="stylesheet" href="/social_media/css/registration.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="a">
            <div class="a1">
                <div class="a11">
                    <a href="sd">
                        <img src="/social_media/img/ungineering_logo.svg" height="100px"/>
                    </a>
                </div>
                <div class="a12">
                    <h1 class="a13"><span style="color:red">un</span>gineering</h1>
                    <p class="a12">A <span style="color:red">bit</span> of knowledge is good.A <span style="color:red">byte</span> is better</p>
                </div>
            </div>
        </div>
        <div class="b">
            <div class="b1">
                <div class="b13">
                    <a class="b13" href="login.php">Existing User</a>
                </div>
                <div class="b12">
                    <p class="b12">New <span style="text-decoration:underline">User</span></p>
                </div>
            </div>
            <div class= "b2">
                <div class="b23">
                    <h1 class="b23">Create New Account at Ungineering</h1>
                </div>
                <form id="registration" method="post" action="registration_submit.php"/>
                    <div class="b24">
                        <div class="b241">
                            <p class="b241">Name</p>
                        </div>
                        <div class="b242">
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="b24">
                        <div class="b241">
                            <p class="b241">Email</p>
                        </div>
                        <div class="b242">
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="b24">
                        <div class="b241">
                            <p class="b241">Password</p>
                        </div>
                        <div class="b242">
                            <input type="password" name="password">
                        </div>
                    </div>
                    <div class="b24">
                        <div class="b241">
                            <p class="b241">Confirm Password</p>
                        </div>
                        <div class="b242">
                            <input type="password" name="confirm_password">
                        </div>
                    </div>
                    <div class="b25">
                        <input class="b25" type="submit" value="Create Account">
                    </div>
                </form>
                <div class="b25">
                    <a class="b25" href="abc">Existing user,login</a>
                </div>
            </div>
        </div>
        <div class ="c">
            <div class="c1">
                <div class="c2">
                    <p class="c1">Connect with us at-</p>
                </div>
                <div class="c3">
                    <div class="c31">
                        <a href="abc">
                            <img class="c2" src="/social_media/img/youtube1.png"/>
                        </a>
                    </div>
                    <div class="c31">
                        <a href="abc">
                            <img class="c2" src="/social_media/img/facebook1.png"/>
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
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>
