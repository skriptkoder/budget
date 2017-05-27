<?php
//can be set in a function
require_once("includes/session.php"); 
require_once("includes/connection.php"); 
confirm_logged_in(); 
require("includes/header.php"); 

		//require_once("lang/french.php");
		require_once("lang/english.php");

global $browser_title, $hd_lang, $taxe_title;
?>

<?php include_once('templates/taxeCalculator.php'); ?>