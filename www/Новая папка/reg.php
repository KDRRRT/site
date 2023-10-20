<?php

$link = mysqli_connect ('localhost', 'root', '', 'users');
print_r($_REQUEST);

if( isset($_REQUEST['login']) && isset($_REQUEST['password']))
        
    {
    echo $query= 'INSERT INTO `user` (`login`,`password`) VALUES ( "'.$_REQUEST['login'].'","'.$_REQUEST['password'].'")';
    $result = mysqli_query($link,$query);
    if($result==true) { echo 'ok'; }
    else
    {
        echo 'wrong';
    }
    }

?>