<?php
//can be set in a function
require_once("includes/session.php");
require_once("includes/connection.php");
confirm_logged_in();
require("includes/header.php");

//require_once("lang/english.php");

//add Budget Layout
global $cols_arr_foreach_total, $col_ar_prod_tot, $cols_tot_payment, $cols_tot_after_rev, $tot_1wk, $tot_2wk,
	$tot_month, $tot_6month, $tot_year, $tot_payment, $tot_rev, $cols_tot_rev, $tot_revenu_title, $rev_after_pay_title,
	$cols_tot_rev_after_payment, $rs_arr_tot_rev_after_pay, $rev_after_pay;
//$prod=(array("Videotron" => 32.5, "Universitas" => 25, "Pret etudiant" => 12, "Ethylo" => 28.75));

//Query db to retrieve revenu by week from table product member
$tot_rev = getRevenu();
$arr_tot_rev = array($tot_rev, $tot_rev*2, $tot_rev*4, $tot_rev*26, $tot_rev*52);;
//Query db to retrieve product name and price by week from table ... budget_product
$prod=getProduct();

if(isset($_POST['submit_add_prod'])){
	$query = "INSERT INTO sk_budget_products (
					employee_number, product_name, price_per_week
				) VALUES (
					{$_SESSION['employee_number']},
					{$_POST['prod_name']} , {$_POST['prod_price_per_wk']})";
		if($result = mysql_query($query, $connection)){

		}else{
		if (count($errors) == 1) {
			$message = "There was 1 error in the form.";
		}else{
			$message = "There were " . count($errors) . " errors in the form. {$errors[0]} and {$errors[1]}";
		}
	}
}
//this function retrieve the revenu per week and compute the totals for periods
function getRevenu(){
	//query db to get the rev
	$qry_rev = "SELECT * FROM sk_budget_users
			WHERE employee_number = '{$_SESSION['employee_number']}'
			LIMIT 1";
	$qry_rev_rs = mysql_query($qry_rev);

	while( $found_qry_rev = mysql_fetch_array($qry_rev_rs)){
		$rev = $found_qry_rev['revenu_per_week'];
		$_SESSION['rev'] = $rev;
	}

	return $rev;
}
//this function retrieve each product price per week and compute the totals for periods
function getProduct(){
	//query db to get the rev
	$qry_prod = "SELECT * FROM sk_budget_products
			WHERE employee_number = '{$_SESSION['employee_number']}' 
			ORDER BY product_name";
	$qry_prod_rs = mysql_query($qry_prod);
	global $prod_id, $prod_key, $prod_price_per_week;
	while( $found_qry_prod = mysql_fetch_array($qry_prod_rs)){
		$product_id = $found_qry_prod['id'];
		$product_name = $found_qry_prod['product_name'];
		$price_per_week = $found_qry_prod['price_per_week'];
			/*echo $product_name . " for " . $price_per_week;
			echo "<br />";*/
			$prod_id[].=$product_id;
			$prod_key[].=$product_name;
			$prod_price_per_week[].=$price_per_week;
				// $price_per_week));

	}
	return $prod_price_per_week;
}


//START:EACH ROWS and COLUMN with amount per period
$i=0;
global $found_tasks, $langAnd;
        
$result = array_fill_keys($prod_key, '');
foreach($result as $key => $value){
	$result[$prod_key[$i]] = $prod[$i];
	$two_weeks[$i] = $prod[$i]*2;
	$four_weeks[$i] = $prod[$i]*4;
	$half_month[$i] = $prod[$i]*26;
	$year[$i] = $prod[$i]*52;	
	$i++;
}
//ksort($result);
//echo '<pre style="width=600px">';print_r($result);echo '</pre>';exit;*/
/*$result = array_merge($prod_key, $prod);
echo '<pre>';print_r($result);echo '</pre>';
*/
function by_numof_weeks($num, $val){
	return $num * $val;
}






#####################
# Refund Module 
##################

#Data in database
$arr_refund= array(
	 'Visa' => 1000, 
	 'MasterCard' => 5500, 
	 'Dell' => 1600);

#array to populate for manipulation
$arr_refund_list = array(
	 'Visa' => array('amount_to_refund' => 1000, 'payment_per_month' => 100), 
	 'MasterCard' => array('amount_to_refund' => 5500, 'payment_per_month' => 100), 
	 'Dell' => array('amount_to_refund' => 1600, 'payment_per_month' => 100));

foreach($arr_refund_list as $key => $val){	
	
	$month_left = $val['amount_to_refund'] / $val['payment_per_month'];
	$date_ending = date('Y-m-d', strtotime('+'. $month_left .' month'));
	
	$arr_refund_list[$key] = array(
		'amount_to_refund' => $val['amount_to_refund'], 
		'payment_per_month' => $val['payment_per_month'], 
		'ending in #months' => $month_left,
		'Ending on' => $date_ending 
	);
}

echo '<br/>';echo '<br/>';
echo '<pre>';print_r($arr_refund_list);echo '</pre>';
exit;



//START:EACH ROWS and COLUMN with amount per period
$i=0;
$k = 0;
global $found_tasks, $langAnd;
foreach($result as $key=>$value){
	//interline the result and put a roll over effect
	$i++;
	if($i % 2){
		$tr_custom = "bgcolor='#eeeeee'";
		$tr_custom_color = "#eeeeee";
	}else{
		$tr_custom = "bgcolor='#d0d0d0'";
		$tr_custom_color = "#d0d0d0";
	}
	$tr_custom .= " onmouseover="."this.style.backgroundColor='#FF9900'".
			 " onmouseout="."this.style.backgroundColor='" . $tr_custom_color . "'".">";

	//compute result of products
	$col_ar_prod_tot.="<tr " . $tr_custom . " <td style='color:black; text-align:center'>" .array_keys($result)[$k] . "</td>
		<td style='color:black; text-align:center'>" . $value ."</td>";			
	$col_ar_prod_tot.="<td style='color:black; text-align:center'>" . by_numof_weeks(2, $value) ."</td>";			
	$col_ar_prod_tot.="<td style='color:black; text-align:center'>" . by_numof_weeks(4, $value) ."</td>";		
	$col_ar_prod_tot.="<td style='color:black; text-align:center'>" . by_numof_weeks(26, $value) ."</td>";
	$col_ar_prod_tot.="<td style='color:black; text-align:center'>" . by_numof_weeks(52, $value) ."</td>";

	$tot_1wk=$tot_1wk+$value;
	$tot_2wk=$tot_2wk+$value*2;
	$tot_month=$tot_month+$value*4;
	$tot_6month=$tot_6month+$value*26;
	$tot_year=$tot_year+$value*52;

	$col_ar_prod_tot.="<td style='color:#214020; text-align:center'>
	<a href='includes/crud_prod_budget.php?edit_id={$prod_id[$key]}{$langAnd}'>
					<img src='images/tick.png' width='12' height='12' border='0' alt='edit' /></a></td>";
	$col_ar_prod_tot.="<td style='color:#214020; text-align:center'>
	<a href='includes/crud_prod_budget.php?del_id={$prod_id[$key]}{$langAnd}'>
					<img src='images/publish_x.png' width='12' height='12' border='0' alt='delete' onclick='return confirmation_delete()' /></a></td></tr>";
$k++;
}
$col_ar_prod_tot .= "</tr>";




//START:Total Product Payment Row
$cols_tot_pay = array($tot_1wk, $tot_2wk, $tot_month, $tot_6month, $tot_year);

//START: arr for Total Revenu after payments
foreach($cols_tot_pay as $key => $value){
	$tot_rev_after_pay[$key]=$arr_tot_rev[$key]-$value;
}
require_once('templates/budget2-0.php');
?>