<html>

    <head>
        <link rel="stylesheet" href="css/login.css">      
                       
    </head>
    <body>
        
        <div class="backRight"></div>
        <div class="left">
            <div class="content">
                <h2>Sign Up</h2>
             
                <form method="post" action="insertdata.php" name="RegForm">
                
                    
                    <div class="form-group">
                        <label for="username" class="form-label" style="color: whitesmoke">Name</label>
                        <input type="text" placeholder="Full name" name="name" required="" />
                    </div>

                    <div class="form-group">
                        <label for="username" class="form-label" style="color: whitesmoke">College ID</label>
                        <input type="text" placeholder="College ID" name="collegeid" required="" />            
                    </div>
                    
                    <div>
                        <label for="password" class="form-label" style="color: whitesmoke">Password</label>
                        <input type="password" placeholder="Password" name="password" required="" />    
                    </div>
                    
                    <div class="form-group" style="color: whitesmoke">
                        <label for="repass" class="form-label" style="color: whitesmoke">Re-enter </label>
                        <input type="password" placeholder="Re-enter password" name="repassword" required="" />    
                    </div>
                    
                    <div class="form-group" style="color: whitesmoke">
                        Contact No.<input type="tel" placeholder="Contact No." name="contactno" required="" />    
                    </div>
                    
                    <div class="form-group" style="color: whitesmoke">
                        <label for="email" class="form-label" style="color: whitesmoke">Email ID </label>
                        <input type="email" placeholder="Email." name="email" required="" />    
                    </div>
                    
                    <div style="color: rgb(235, 76, 76)" font-size="20px">    
                    </div>
                    
                    <button type="submit" name="stulogin">Sign up</button>    
                    <!--<input type="submit" name="submit" value="Sign Up"/>-->
                </form>
                
                <label style="color:aliceblue">Already have an account?
                    <a href="index.php"><button id="goLeft" class="off">Log in</button></a></div>

            </div>
        </div>        
    </body>
</html>

