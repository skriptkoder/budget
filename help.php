<?php
require_once("includes/session.php");
require_once("includes/connection.php");
confirm_logged_in();
require("includes/header.php");

//Send Mail btn
if (isset($_POST['sendMail'])) {
    //email---------------------------------
    $headers = "Content-type: text/html; charset=utf-8\r\n";

    // Pour envoyer un mail HTML, l'en-t�te Content-type doit �tre d�fini
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    // En-t�tes additionnels
    $headers .= 'From: skriptkoder <info@skriptkoder.net>' . "\r\n";
    $headers .= 'Cc: skriptkoder@gmail.com' . "\r\n";

    $empl_num = $_SESSION['employee_number'];
    $name = $_SESSION['employee_name'];
    $description = $_POST['description'];
    $mailTo = $_SESSION['dispatcher_email'];

    if (isset($_GET['lang']) == 'fr') {
        $msg_message = "De: Employ�e: $_SESSION[employee_name]  -
						Numeros: $_SESSION[employee_number]";
        //$headers = "Employ�e: $_SESSION[employee_name]";
        //$content = $tplMail->fetch("email_help_fr.html");
        //include_once 'templates/help_email_fr.php';

 /*
        $content = '<table width="400" border="0" cellspacing="0" cellpadding="2" style="font: 12px Arial, Helvetica, sans-serif; border:1px solid #214020;">
    <tr>
        <td align="center" style="padding-top:5px; padding-bottom:5px;background-color: whitesmoke;">
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font: 14px Arial, Helvetica, sans-serif; background-color: whitesmoke; border-bottom:1px dotted #FF9900;">
                <tr>
                    <td><img alt="img" src="http://skriptkoder.com/budget/images/email_hd_banner.png"></td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font: 14px Arial, Helvetica, sans-serif; background-color: whitesmoke; border-bottom:1px dotted #FF9900;">
                <tr>
                    <td style="font-size:18px;">
				<b style="color:#214020;">
                Gestionnaire</b>&nbsp;<b style="color:black;">Feuille de Temps</b>
			</td>
                    <td rowspan="2"><i style="font-size:12px; color:#214020;">Courriel Aide!</i></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table width="390" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:#214020;">
                <tr>
                    <td colspan="2">
                        <table align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:#214020;">
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Technicien</td><td style="color:black;">' . $name . '</td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png"># Employ�e</td><td style="color:black;">' . $empl_num . '</td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Branche</td><td style="color:black;">' . $branch . '</td>
                            </tr>
                            <tr><td colspan="2">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <td colspan="2" valign="top" style="padding-left: 10px; color: Black;">
                    Bienvenue,<br>
                    <strong>' . $name . '</strong> demande de l aide!
                    <br><br>
                </td>
    </tr>
    <tr>
        <td  valign="top" style="padding-left: 10px;color: Black;" colspan="2">
            Le message est:<br />
            <table width="350" border="1" align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:black;">

                <tr>
                    <td style="paddding: 15px;" >' . $description . '</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td  valign="top" style="padding-left: 10px;color: Black;" >
        </td>
    </tr>
</table>
<table width="390" border="0" cellspacing="2" cellpadding="2" align="center"  style=" font-weight: normal; color: #FF9900;">
    <tr><td >
    <center><em style="font-size: 11px; color: Gray;"></em><br>
        <font size="1" color="#a5a5a5"><I><a href="http://skriptkoder.net">skriptkoder - Copyright.</a></I></FONT>
    </center>
</td></tr>
</table>
</td>
</tr>
</table>
';
*/


$content= '

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo cms_page_getTitle() ?></title>
		<style>
			p{ padding:10px; padding-left:50px; }
			.footerContent p { padding:0px; padding-left: 0px; }
		</style>
	</head>
<body bgcolor="#ffffff">
	<table cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto; padding: 0px; height: 186px; width: 692px; background-color: #ebebeb">
		<tr><td colspan="3" style="height: 185px; vertical-align: top; padding: 0px; margin: 0px;"><img src="http://skriptkoder.com/theme/david/img/newsletter1/header.png" width="692" height="186" style="display: block" /></td></tr>
		<tr>
                    <td style="vertical-align:top"><img src="http://skriptkoder.com/theme/david/img/newsletter1/contentLeft.png" width="21" height="100%" style="display:block" /></td>
                    <td style="background-color: whitesmoke"><?php echo cms_area_runModule(1) ?><br />
                    <br />
                    <br /><br />
                    <br /><br /><br /></td>
                    <td style="vertical-align:top"><img src="http://skriptkoder.com/theme/david/img/newsletter1/contentRight.png" width="21" height="100%" style="display:block" /></td>
                </tr>
                <tr>
        	<td style="background-color:#191a26; vertical-align:top"><img src="http://skriptkoder.com/theme/david/img/newsletter1/footerLeft.png" width="21" height="170" style="display:block" /></td>
                <td class="footerContent" style="background-color:#191a26; width:650px; vertical-align:top">
					<p style="margin-bottom: 5px; color: #474960; text-align: center; font-size: 15px; font-family: sans-serif; text-transform: uppercase">www.nodaccess.com</p>
                    <p style="padding-top: 10px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px; text-align: center; font-weight: bold; color: #c7c8cd; font: 14px sans-serif; letter-spacing: 1px; line-height: 18px;">
                            NodAccess Solutions inc.<br />
                            26, rue Saint-Louis, Lemoyne, Qc, J4R 2L4<br />
                            <?php //echo cms_getText("phoneNumber") ?> : 450.656.4837 | <?php //echo cms_getText("tollFree") ?> : 1.877.711.4837<br />
                            <?php //echo cms_getText("email") ?> : <a href="" target="_blank" class="contact_emailLink" style="color: #9194b6;">info@nodaccess.com</a><br /><br />
                            <a href="http://facebook.com" target="_blank" style="vertical-align: top"><img src="http://skriptkoder.com/theme/david/img/newsletter1/iconFb.png" border="0" /></a><a href="http://linkedin.com" target="_blank" style="margin-left: 16px;"><img src="http://skriptkoder.com/theme/david/img/newsletter1/iconLi.png" border="0" /></a><a href="http://youtube.com" target="_blank" style="margin-left: 16px;"><img src="http://skriptkoder.com/theme/david/img/newsletter1/iconYt.png" border="0" /></a>
                    </p>
                </td>
            <td style="vertical-align:top; background-color:#191a26;"><img src="http://skriptkoder.com/theme/david/img/newsletter1/footerRight.png" width="21" height="170" style="display:block" /></td>
		</tr>
        <tr><td colspan="3"><img src="http://skriptkoder.com/theme/david/img/newsletter1/footerBottom.png" width="692" height="32" style="display: block" /></td></tr>
	</table>
	<div style="width: 692px; margin: 0 auto; text-align: center"><a href="<?php echo url_getBase() ?>/cms/newsletter/unsubscribe?id=email" style="margin: 0 auto; text-align: center" ><?php// echo cms_getText("unsubscribe") ?></a></div>
</body>
</html>

';
    } else {
        $msg_message = "From: Employee: $_SESSION[employee_name]  -
						Number: $_SESSION[employee_number]";
        //$headers = "Employee: $_SESSION[employee_name]";
//                echo 'en<br />' . $_SESSION['employee_number'];
        //$content = $tplMail->fetch("email_help_en.html");
        //$content= include_once 'templates/help_email_en.php';
        $content = '<table width="400" border="0" cellspacing="0" cellpadding="2" style="font: 12px Arial, Helvetica, sans-serif; border:1px solid #214020;">
    <tr>
        <td align="center" style="padding-top:5px; padding-bottom:5px;background-color: whitesmoke;">
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font: 14px Arial, Helvetica, sans-serif; background-color: whitesmoke; border-bottom:1px dotted #FF9900;">
                <tr>
                    <td><img alt="img" src="http://skriptkoder.com/budget/images/email_hd_banner.png"></td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font: 14px Arial, Helvetica, sans-serif; background-color: whitesmoke; border-bottom:1px dotted #FF9900;">
                <tr>
                    <td style="font-size:18px;">
                        <b style="color:#214020;">
                            Timesheet</b>&nbsp;<b style="color:black;">Manager</b>
                    </td>
                    <td rowspan="2"><i style="font-size:12px; color:#214020;">Help Mail Message!</i></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table width="390" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:#214020;">
                <tr>
                    <td colspan="2">
                        <table align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:#214020;">
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Technician</td><td style="color:black;">' . $name . '</td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Employee #</td><td style="color:black;">' . $empl_num . '</td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Branch</td><td style="color:black;">' . $branch . '</td>
                            </tr>
                            <tr><td colspan="2">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <td colspan="2" valign="top" style="padding-left: 10px; color: Black;">
                    Welcome,<br>
                    <strong>' . $name . '</strong> ask for help!
                    <br><br>
                </td>
    </tr>
    <tr>
        <td  valign="top" style="padding-left: 10px;color: Black;" colspan="2">
            The message is:<br />
            <table width="350" border="1" align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:black;">

                <tr>
                    <td style="paddding: 15px;">' . $description . '</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td  valign="top" style="padding-left: 10px;color: Black;" >
        </td>
    </tr>
</table>
<table width="390" border="0" cellspacing="2" cellpadding="2" align="center"  style=" font-weight: normal; color: #FF9900;">
    <tr><td >
    <center><em style="font-size: 11px; color: Gray;"></em><br>
        <font size="1" color="#a5a5a5"><I><a href="http://skriptkoder.net">skriptkoder - Copyright.</a></I></FONT>
    </center>
</td></tr>
</table>
</td>
</tr>
</table>
';
    }
    $address = $_SESSION['dispatcher_email'];
    $subject = $help_mail_subject;
    $message_mail = $msg_message . $_POST['description'];

    if (mail($address, $subject, $content, $headers)) {
        $message = $msg_submit_mail;
    } else {
        $message = $msg_submit_mail_fail;
    }
}
?>

<?php
global $help_bar, $help_title, $help_mail_msg, $lang_description,
 $help_send_mail, $reset_btn, $message, $errors, $lang, $rights;

require_once('templates/help.php');
?>