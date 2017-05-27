<?php require_once("lang/english.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--<link rel="shortcut icon" href="http://www.carmichael.info/images/favicon.ico" />-->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $browser_title; ?></title>
<script type="text/javascript" src="lib/jquery-1.3.2.js"></script>
    <link rel="stylesheet" href="css/mtemplate.css" type="text/css"/>
    <link rel="stylesheet" href="css/mstyles.css" type="text/css"/>
<script type="text/javascript">
    $(function() {
		//manage td zone of the edit button
		$(".edit_id").click(function(){
			alert("You just clicked the edit zone");								
		});
		//manage the delete confirmation button
		$(".del_id").click(function(){
			var answer = confirm('Delete this product from your personnal list?')
			if (answer){
				window.location = 'index.php';
			} else {
				return false;
			}							
		});	   			   
        $("#theList tr:even").addClass("stripe1");
        $("#theList tr:odd").addClass("stripe2");

        $("#theList tr").hover(
            function() {
                $(this).toggleClass("highlight");
            },
            function() {
                $(this).toggleClass("highlight");
            }
        );
    });
</script>


<link rel="stylesheet" type="text/css" href="css/mstyles.css" >
</head>
<body> 
       
<div align="center"  style="width: 100%;">

    <div id="wrapper" >
        <div id="whitebox"  >
            <table cellpadding="0" cellspacing="0" class="pill">
                <tr>
                    <td class="pill_m"><div id="pillmenu"></div></td>
                    <td ><div id="pillmenulang" style="font-size: 1.3em" ><?php echo $hd_lang; ?></div></td>
                </tr>
            </table>
        </div>
    </div>
<!-- End Top menu-->
<!-- Start Title and banner -->
    <div id="header" style="">
        <div id="header_l">
            <div id="logo">
                <a class="logo" style="color: #214020" href="http://skriptkoder.net"><font color="#214020">
                        <?php echo $sitename; ?>
                    </font></a>
            </div>
            <div id="whitebox_m" style=" vertical-align:top; margin:0px auto; " >
            </div>
        </div>
    </div>
<!-- End Title and banner -->
    <table cellpadding="0" cellspacing="0" class="moduletable" id="maincolumn_full"
            style="width: 100%; 

            margin-top: 110px; ">
        <tr>
            <td >
		