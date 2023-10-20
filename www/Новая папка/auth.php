<?php
    
    
    if( (isset($_REQUEST['login']) && $_REQUEST['login']=='Admin') && 
        (isset($_REQUEST['password']) && $_REQUEST['password']=='qwerty')
        )
    {
        echo 'ok';
    }
    else
    {
        echo 'wrong';
    }
?>