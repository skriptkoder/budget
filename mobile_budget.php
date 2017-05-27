<?php

require_once("includes/session.php");
require_once("includes/connection.php");
confirm_logged_in();
require("includes/mobile_header.php");

require_once("lang/english.php");

//add Budget Layout
//global $cols_arr_foreach_total, $col_ar_prod_tot, $cols_tot_payment, $cols_tot_after_rev, $tot_1wk, $tot_2wk,
//	$tot_month, $tot_6month, $tot_year, $tot_payment, $tot_rev, $cols_tot_rev, $tot_revenu_title, $rev_after_pay_title,
//	$cols_tot_rev_after_payment, $rs_arr_tot_rev_after_pay, $rev_after_pay;	
//Query db to retrieve revenu by week from table product member
$tot_rev = getRevenuPerWeek();
//Create an array for revenu at each week, 2 wk, month, 6mount and Year
$arr_tot_rev = array($tot_rev, $tot_rev * 2, $tot_rev * 4, $tot_rev * 26, $tot_rev * 52);
//Query db to retrieve all product name and price by week from table ... budget_product
$prod = getProductsPricePerWeek();

//retrieves the revenu per week
function getRevenuPerWeek() {
    $qry_rev = "SELECT revenu_per_week FROM sk_budget_users 
			WHERE employee_number = '{$_SESSION['employee_number']}' 
			LIMIT 1";
    $qry_rev_rs = mysql_query($qry_rev);
    while ($found_qry_rev = mysql_fetch_array($qry_rev_rs)) {
        $rev = $found_qry_rev['revenu_per_week'];
        $_SESSION['rev'] = $rev;
    }
    return $rev;
}

//this function retrieve each product price per week and compute the totals for periods
function getProductsPricePerWeek() {
    $qry_prod = "SELECT * FROM sk_budget_products 
			WHERE employee_number = '{$_SESSION['employee_number']}' ";
    $qry_prod_rs = mysql_query($qry_prod);
    global $prod_id, $prod_key, $prod_price_per_week;
    while ($found_qry_prod = mysql_fetch_array($qry_prod_rs)) {
        $product_id = $found_qry_prod['id'];
        $product_name = $found_qry_prod['product_name'];
        $price_per_week = $found_qry_prod['price_per_week'];
        $prod_id[].=$product_id;
        $prod_key[].=$product_name;
        $prod_price_per_week[].=$price_per_week;
    }
    return $prod_price_per_week;
}

function getProductsName() {
    $qry_prod = "SELECT * FROM sk_budget_products 
			WHERE employee_number = '{$_SESSION['employee_number']}' ";
    $qry_prod_rs = mysql_query($qry_prod);
    global $prod_id, $prod_key, $prod_price_per_week;
    while ($found_qry_prod = mysql_fetch_array($qry_prod_rs)) {
        $product_name = $found_qry_prod['product_name'];
        $prod_key[].=$product_name;
    }
    return $prod_key;
}

function calcul_1wk($value) {
    $val = $value;
    return $val;
}
function calcul_2wk($value) {
    return 2 * $value;
}
function calcul_1m($value) {
    return 4 * $value;
}
function calcul_6m($value) {
    return 26 * $value;
}
function calcul_1y($value) {
    return 52 * $value;
}

function edit_prod($value) {
    
}
function del_prod($value) {
    
}

function total_payment_1wk() {
    global $prod;
    return array_sum($prod);
}
function total_payment_2wk() {
    return 2 * total_payment_1wk();
}
function total_payment_1m() {
    return 4 * total_payment_1wk();
}
function total_payment_6m() {
    return 26 * total_payment_1wk();
}
function total_payment_1y() {
    return 52 * total_payment_1wk();
}

//START:Total Product Payment Row
$cols_tot_pay = array(total_payment_1wk(), total_payment_2wk(), total_payment_1m(), total_payment_6m(), total_payment_1y());
//START: arr for Total Revenu after payments
/* foreach($cols_tot_pay as $key => $value){
  $tot_rev_after_pay[$key]=$arr_tot_rev[$key]-$value;
  } */
require_once('templates/mobile_budget.php');
?>