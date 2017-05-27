<?php ini_set("session.cookie_httponly", 1);//set cookie httponly ?>
<?php
require_once("includes/session.php");
require_once("includes/connection.php");
require_once("includes/functions.php");

require_once("lang/english.php");

if (isset($_GET['del_id'])) {
    $_SESSION['del_id'] = $_GET['del_id'];
}

if (isset($_GET['edit_id'])) {
    $_SESSION['edit_id'] = $_GET['edit_id'];
}

if (logged_in()) {
    redirect_to("budget.php");
}

//if param logout = 1 show message
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $message = "<img src='images/arrow.png' />{$msg_logout}.";
}

$username = "";
$password = "";

//Login btn
if (isset($_POST['submit'])) {
    $errors = array();
// perform validations on the form data
    $required_fields = array('username', 'password');
    $errors = array_merge($errors, check_required_fields($required_fields, $_POST));

    $fields_with_lengths = array('username' => 30, 'password' => 30);
    $errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

    $username = trim(mysql_prep($_POST['username']));
    $password = trim(mysql_prep($_POST['password']));
    $hashed_password = sha1($password);

    if (empty($errors)) { // query db for username and the hashed password .
        $query = "SELECT sk_budget_users.id, sk_budget_users.username, 
			sk_budget_users.employee_number, sk_budget_users.employee_name 
			FROM sk_budget_users 
			WHERE sk_budget_users.username = '{$username}' 			
			AND hashed_password = '{$hashed_password}' 
			LIMIT 1";
        $result_set = mysql_query($query);
        confirm_query($result_set);

        if (mysql_num_rows($result_set) == 1) {
            $found_user = mysql_fetch_array($result_set);
            
            $_SESSION['user_id'] = $found_user['id'];
            $_SESSION['username'] = $found_user['username'];
            $_SESSION['employee_number'] = $found_user['employee_number'];
            $_SESSION['employee_name'] = $found_user['employee_name'];
            
        }         
        redirect_to("budget.php");
        
    } else {// if ( empty($errors) )
        if (count($errors) == 1) {
            $message = "<img src='images/arrow.png' />There was 1 error in the form.";
        } else {
            $message = "<img src='images/arrow.png' />There were " . count($errors) . " errors in the form.";
        }
    }
}//if (isset($_POST['submit']))
?>
<?php include_once('templates/login.php'); ?>
