
<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <!--<script type="text/javascript" src="js/login.js"></script>-->
        <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
       
        
    </head>

    <body>

        <div class="backLeft" style="background-image:images/image1"></div>

            <div class="right">

                <div class="content">
                    <h2>Login</h2>
                    <form method="post" action="validatelogin.php">

                        <div class="form-group">
                            <label for="username" class="form-label">College ID</label>
                            <input type="text" name="collegeid" required="" />

                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" required="" />

                        </div>
                        <div style="color: rgb(235, 76, 76)" font-size="20px">

                        </div>

                        <button id="login" type="submit" name="stulogin">Login</button>

                    </form>
                    <div>New here?
                        <a href="register.php"><button id="goRight" class="off">Sign Up</button></a>
                    </div>
                  </div>
            </div>
        </body> 
</html>