<?php
session_start();
require_once("connection.php");
include_once 'functions.php';
//PERFORM CRUD Task CREATE for Budget Product
if (isset($_POST['submit_add_prod'])) {
    $emp_num = $_SESSION["employee_number"];
    $prod_name = $_POST['prod_name'];
    $prod_price_per_week = $_POST['prod_price_per_wk'];

    $query = "INSERT INTO sk_budget_products (
        employee_number, product_name, price_per_week
        ) VALUES (
        {$emp_num}, '{$prod_name}', {$prod_price_per_week}
    )";    
    if ($result = mysql_query($query, $connection)) {
        redirect_to("../budget.php");

        $message = $msg_new_task_success;
        $msg = $message;
    } else {
        echo mysql_error();
    }
}

//PERFORM CRUD Task READ for Budget Product
if (isset($_GET['edit_id'])) {
    $qry_editProd = "SELECT * FROM sk_budget_products 
			WHERE id =     {$_GET['edit_id']} 
                        LIMIT 1";
    $qry_editProd_rs = mysql_query($qry_editProd);
    $product = mysql_fetch_array($qry_editProd_rs);
    $_SESSION['edit_id'] = $product['id'];
    $_SESSION['employee_number'] = $product['employee_number'];
    $_SESSION['product_name'] = $product['product_name'];
    $_SESSION['price_per_week'] = $product['price_per_week'];
    redirect_to("../edit_budgetProduct.php");
}

//PERFORM CRUD Task UPDATE for Budget Product
if (isset($_POST['updateProd'])) {
    $updateProduct = "UPDATE sk_budget_products SET
				product_name = '{$_POST['product_name']}',
                                price_per_week = {$_POST['price_per_week']}
				WHERE id = {$_SESSION['edit_id']}";
    if (!$result = mysql_query($updateProduct, $connection)) {
        echo mysql_error();
    }
    redirect_to("../budget.php");
}

//PERFORM CRUD Task DELETE for Budget Product
if (isset($_GET['del_id'])) {
    $query = "DELETE FROM sk_budget_products WHERE id = {$_GET['del_id']} LIMIT 1";
    $result = mysql_query($query);

    if (mysql_affected_rows() == 1) {
        redirect_to("../budget.php");
    }
}
?>