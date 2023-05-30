<?php
session_start();

if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}

header("Location: start.html");
die;

if(isset($_SESSION['admin_id']))
{
    unset($_SESSION['admin_id']);
}

header("Location: start.html");
die;
?>
