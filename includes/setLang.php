<?php
session_start();
include_once 'functions.php';

if (isset($_GET['lang'])) {
    $_SESSION['lang']= $_GET['lang'];
}
if (isset($_GET['href'])) {
    redirect_to($_GET['href']);
}

redirect_to('http://skriptkoder.com');
?>


