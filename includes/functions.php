<?php
ob_start();
date_default_timezone_set('America/New_York');


//START: new function from 2013-08-07
function mysqli_connectToDb() {
    if (!isset($mysqli)) {
        static $mysqli;
        return $mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
    return false;
}
function lang_getTxt($p_id) {
    $query = "SELECT * FROM `sk_budget_txt` WHERE id = '{$p_id}' LIMIT 1";
    $mysqli = mysqli_connectToDb();
    $result = mysqli_query($mysqli, $query);
    $record = mysqli_fetch_assoc($result);

    if (isset($_SESSION['lang'])){
        return htmlentities($record[$_SESSION['lang']]);
    } else {
        $_SESSION['lang']= 'fr';
        return htmlentities($record['fr']);
    }
}
//END: new function from 2013-08-07

function check_required_fields($required_array) {
	$field_errors = array();
	foreach($required_array as $fieldname) {
		if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname] != 0)) {
			$field_errors[] = $fieldname;
		}
	}
	return $field_errors;
}

function check_max_field_lengths($field_length_array) {
	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength ) {
		if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) { $field_errors[] = $fieldname; }
	}
	return $field_errors;
}

function display_errors($error_array) {
	echo "<p class=\"errors\">";
	echo "Please review the following fields:<br />";
	foreach($error_array as $error) {
		echo " - " . $error . "<br />";
	}
	echo "</p>";
}

function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			//$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if (!$magic_quotes_active) {
            $value = addslashes($value);
        }
        // if magic quotes are active, then the slashes already exist
    }
    return $value;
}

function redirect_to($location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed: " . mysql_error());
    }
}

function errMSG($logger, $msgNUM) {
    require_once("includes/session.php");
    require_once("includes/connection.php");
    $logger; //confirm_logged_in();
    //include("includes/header.php");
    $msgNUM .= "<p>" . mysql_error() . "</p>"; //$message1 .= "<p>" . mysql_error() . "</p>";
    echo $msgNUM; //$message1;
    include("includes/footer.php");
    exit;
}

function checkSelectedLang($param1) {
     echo (isset($_SESSION['lang']) && $_SESSION['lang'] === $param1)? "selected='selected'" : '';
}
?>