<?php

$link = mysqli_connect ('localhost', 'root', '', 'design');
print_r($_REQUEST);

if( isset($_REQUEST['login']) && isset($_REQUEST['password']))
        
    {
    echo $query= 'INSERT INTO "users" ("login","password") VALUES ( "'.$_REQUEST['login'].'","'.$_REQUEST['password'].'")';
    $result = mysqli_query($link,$query);
    if($result==true) { echo 'ok'; }
    else
    {
        echo 'wrong';
    }
    }
    // if(){
    //     'INSERT INTO' 'users' ('role') VALUES ("'.$_REQUEST['role'].'");
    //     else {}
    // }

?>
