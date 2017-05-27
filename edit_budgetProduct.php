<?php
//can be set in a function
require_once("includes/session.php"); 
require_once("includes/connection.php"); 
confirm_logged_in(); 
require("includes/header.php"); 

require_once('templates/edit_budgetProduct.php');
?>