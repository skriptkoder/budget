<?php ini_set("session.cookie_httponly", 1); //set cookie httponly  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $browser_title; ?></title>
    <link rel="shortcut icon" href="http://www.skriptkoder.com/images/skriptkoder.ico" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" href="css/mtemplate.css" type="text/css"/>
    <script type='text/javascript'>
        function validate() {
            if(trim(document.frm1.username.value)==''){
                alert('<?php echo $js_req_usrnme ?>');
                return false;}
            if(trim(document.frm1.password.value)==''){
                alert('<?php echo $js_req_pswd ?>' );
                return false;}
            return true;
        }
    </script>
</head>
<!-- Start Top menu-->
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
                <table width="100%" border="0" cellspacing="0" cellpadding="0" >

                    <tr>
                        <th valign="top" style="background-color: #214020; padding-bottom: 15px; padding-left: 20px; ">
                            <form  name="frm1" method="post" style="margin:0px auto;" onsubmit="return validate(this)" action="" >
                            <h1 style="font-size: 5em; color: white"><?php echo $log_username; ?></h1>
                            <input type="text" id="username" name="username" class="inputbox" style="background-color:#FFFFFF"  value="" />
                            <h1 style="font-size: 5em;color: white"><?php echo $log_password ?></h1>
                            <input type="password" id="password" name="password" class="inputbox" style="background-color:#FFFFFF" value="" />
                            <br />
                            <br />
                            <input type="submit" name="submit" style="color: white; font-size: 4em; margin-top: 25px; margin-bottom: 25px; border: 1px solid white" value="<?php echo $log_connection ?>" style="color:#FFFFFF; background-color:#105020"   />
                            
            </form>
                        </th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


<p style="margin: 50px;font-size: 3em;">
  <a style="clear: both" href="http://www.skriptkoder.net"><?php echo $sitename; ?>&nbsp;2012</a>&nbsp;&COPY;&nbsp;<?php echo $rights ?>
</p>

  </div>

    </body>
</html>

