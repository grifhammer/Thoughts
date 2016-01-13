<?php 
    include('inc/db_connect.php');

    $results = DB::query("SELECT * FROM users");

    foreach($results as $result){
        print("<pre>");
        print_r($result);
        print("</pre>");
    }

    $title = 'Thoughts'
?>

