<?php 
    include('inc/db_connect.php');

    $results = DB::query("SELECT * FROM users");

    foreach($results as $result){
        print_r($result);
    }
?>