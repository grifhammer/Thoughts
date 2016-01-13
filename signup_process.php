<?php

    include('inc/db_connect.php');
    $username = $_POST["userHandle"];
    $name = $_POST["fullName"];
    $email = $_POST["emailAddress"];
    $password = $_POST["password"];
    if(count(DB::query("SELECT * FROM users WHERE email=%s OR username=%s",$email, $username))!==0){
        header('Location: /signup.php?error=username');
        exit;
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    try{
        DB::insert('users', array(
            'name' => $name,
            'email' => $email,
            'pass' => $hashed_password,
            'username' => $username,
            'status' => 1
            ));
    }catch(MeekroDBException $e){
        header('Location: /signup.php');
        print $_POST;
        // print $e;
        exit;
    }

    $_SESSION['username'] = $username;
    $_SESSION['UID'] = DB::insertId();
    header('Location: /?callback=registeration');
?>
