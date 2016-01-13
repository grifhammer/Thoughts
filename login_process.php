<?php

    include('inc/db_connect.php');
    $email = $_POST["emailAddress"];
    $password = $_POST["password"];

    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $results =DB::query("SELECT * FROM users WHERE email=%s", $email);
    foreach($results as $result){
        $hashed_password = $result["pass"];
        $uid = $result["id"];
    }
    if(password_verify($password, $hashed_password)){
        $_SESSION['username'] = $username;

        header('Location: /?callback=login');
    }else{
        header('Location: /login.php?failed-login=1');
        exit;
    }

    exit;

?>
