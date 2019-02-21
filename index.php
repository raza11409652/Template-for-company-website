<?php
    session_start();
    function checkUrlValid($path)
    {
        if(file_exists($path))
        {   
            require_once $path;
        }else{
            require_once "views/error.php";
        }
    }
    if(isset($_REQUEST['view']))
    {
        $path="views/".$_REQUEST['view'].".php";
    }else{
        $path="views/home.php";
    }
    checkUrlValid($path);
?>