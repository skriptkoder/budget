<?php
	session_start();
	ini_set("session.cookie_httponly", 1);//set cookie httponly
	require_once("includes/functions.php"); 
	
	function logged_in() {
		return isset($_SESSION['user_id']);
	}
	
	function confirm_logged_in() {
            if (!logged_in()) {
                redirect_to("login.php");
            } else { 
                return true;            
            }
	}		
?>
