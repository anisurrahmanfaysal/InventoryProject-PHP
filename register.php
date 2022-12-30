<?php

?>

    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form method="post" action="register.php" enctype="multipart/form-data">
            <h1>Registration Form</h1>
            <div>
                <label>Your Name</label>
                <input name="name" id="name" type="text" required placeholder="Enter Your Name">
            </div>
            <div>
                <label>Your Username</label>
                <input name="uname" id="uname" type="text" required placeholder="Enter UserYour Name">
            </div>
            <div>
                <label>Your Email</label>
                <input name="email" id="email" type="text" placeholder="Enter Your Email">
            </div>
            <div>
                <label>Password</label>
                <input name="pass" id="pass" type="password" required placeholder="Enter Your Password">
            </div>
            <div>
                <label>Repeat Password</label>
                <input name="r_pass" id="rpass" type="text" required placeholder="Confirm Password">
            </div>
            <div>
                <p>      <span>***</span>          By creating an account you agree to our Terms and Privacy. </p>
            </div>
        </form>
    </body>


</html>
