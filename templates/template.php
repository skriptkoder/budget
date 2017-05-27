<?php global $browser_title, $hd_lang, $template, $header, $content, $footer; ?>
<!--Display the Template for the Timesheet Manager Site-->
<table align="center">
    <tr align="center">
        <td>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                    <head><title><?php echo lang_getTxt('browser_title'); ?></title>
                        <!--<link rel="shortcut icon" href="http://www.carmichael.info/images/favicon.ico" />-->
                        <link rel="stylesheet" href="css/template.css" type="text/css"/>
                    </head>

                    <!-- Top menu-->
                    <body>
                        <div align="center">
                            <div id="wrapper">
                                <div id="whitebox">
                                    <table cellpadding="0" cellspacing="0" class="pill">
                                        <tr>
                                            <td class="pill_m">
                                                <div id="pillmenu"></div>
                                            </td>
                                            <td ><div id="pillmenulang"><?php echo $top_menu['lang']; ?></div></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Title and banner -->
                            <div id="header">
                                <div id="header_l">
                                    <div id="logo"><img src="images/site-logo.gif"><br><a class="logo" href="index.php"><font color="#214020"><?php echo $browser_title; ?></font></a></div>
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



										</td></tr>
										<tr align="center"><td><?php include_once('content.php'); ?></td></tr>
										<tr align="center"><td><?php include_once('includes/footer.php'); ?></td></tr>
										</table>