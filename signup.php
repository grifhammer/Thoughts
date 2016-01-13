<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php print $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="site-wrap" class="container">
        <div id="header-wrap">
            <div class="home-button">
                <a href="#"><button class='btn btn-primary btn-lg'>Home</button></a>
            </div>
            <h1>Thoughts</h1>
            <div class="login-wrap">
                <a href="#"><button class="btn btn-primary">Signup</button></a>
                <a href="#"><button class="btn btn-primary">Log In</button></a>
            </div>
        </div>
        <div id="main-content-wrap">
            <h2>Join everyone else sharing their Thoughts</h2>
            <div>
                <form id="registerForm" method="post" action="signup_process.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailAddress" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="userHandle" placeholder="Tag">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-lg" type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
        <div id="bottom-links">
            <a href="/terms">Terms</a>
            <a href="/privacy">Privacy</a>
            <a href="/legal">Legal</a>
            <a href="/support">Support</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>