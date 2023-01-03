<?php

?>

    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="css/register.css" type="text/css" rel="stylesheet">
    </head>
    <div>
            <div class="container">
                <form method="post" action="register.php" enctype="multipart/form-data">
                    <h1>Registration Form</h1>
                    <hr>
                    <div>
                        <label>Your Name<span>*</span></label>
                        <input name="name" id="name" type="text" required placeholder="Enter Your Name">
                    </div>
                    <div>
                        <label>Your Username<span>*</span></label>
                        <input name="uname" id="uname" type="text" required placeholder="Enter UserYour Name">
                    </div>
                    <div>
                        <label>Your Email</label>
                        <input name="email" id="email" type="text" placeholder="Enter Your Email">
                    </div>
                    <div>
                        <label>Password<span>*</span></label>
                        <input name="pass" id="pass" type="password" required placeholder="Enter Your Password">
                    </div>
                    <div>
                        <label>Repeat Password<span>*</span></label>
                        <input name="r_pass" id="rpass" type="text" required placeholder="Confirm Password">
                    </div>
                    <div style="text-align: center">
                        <p>      <span>***</span>          By creating an account you agree to our Terms and Privacy. </p>
                    </div>
                    <div style="text-align: center; padding: 20px">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                    <div style="text-align: center">
                        <p>Already have an account <a href="login.php">Sign in</a></p>
                    </div>
                </form>
            </div>
    </body>
</html>
