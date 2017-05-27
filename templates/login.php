<?php ini_set("session.cookie_httponly", 1); //set cookie httponly   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        #copyright:hover, #leftcolumn #button:hover {
            color: white;
        }
        #leftcolumn #button {
            color: gray;
        }</style>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo lang_getTxt('browser_title'); ?></title>
    <link rel="shortcut icon" href="http://www.skriptkoder.com/images/skriptkoder.ico" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" href="css/template.css" type="text/css"/>
    <link rel="stylesheet" type="text/css"
          media="only screen and (min-width:50px) and (max-width:500px)"
          href="css/mtemplate.css">
    <script type = "text/javascript" src = "lib/jquery-1.3.2.min.js"></script>
    <script type = "text/javascript" src = "lib/js.js"></script>
    <script type='text/javascript'>
    function validate() {  
    
        var errors = false;
        var error_str = '';

        if (document.getElementById('username').value == "") {
            error_str += "<?php echo lang_getTxt('js_req_usrnme'); ?>\n\r";
            errors = true;
        }
        if (document.getElementById('password').value == "") {
            error_str += "<?php echo lang_getTxt('js_req_pswd'); ?>";
            errors = true;
        }

        if(errors){
            alert(error_str);       
            return false;
        }

        return true;
    }
    </script>
</head>
<!-- Start Top menu-->
<body >
<div align="center" style="margin-top:7%" >
    <div id="wrapper" >
        <div id="whitebox"  >
            <table cellpadding="0" cellspacing="0" class="pill">
                <tr>
                    <td class="pill_m"><div id="pillmenu"></div></td>
                    <td >
                        <div>
                            <form name="form_lang">
                            <select id="langMenu">
                                <option value="fr" <?php checkSelectedLang('fr'); ?>>francais</option>
                                <option value="en" <?php checkSelectedLang('en'); ?>>english</option>
                            </select>
                            </form></div></td>
                </tr>
            </table>
        </div>
    </div>

        <div id="header" style="padding-bottom: 100px;">
            <div id="header_l">
                <div id="logo">
                    <a class="logo" href="http://skriptkoder.net"><font color="#214020">
                            <?php echo lang_getTxt('sitename'); ?>
                        </font></a></div>
                <div id="whitebox_m" style="vertical-align:top; margin:0px auto; " >

                    <form  name="frm1" method="post" style="margin:0px auto;" onsubmit="return validate(this)" action="" >
                    <table align="left">
                        <tr>
                            <td></td>
                            <td><div id="leftcolumn" style="margin-top: 0px; padding-top: 0px;"  >
                                    <table cellpadding="0" cellspacing="0" class="moduletable" id="maincolumn_full"
                                       style="width: 980px;
                                       margin-left: -232px;
                                       margin-top: 110px; ">
                                    <tr>
                                        <td >
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" >

                                                <tr style="background-color: #214020;">
                                                    <th style="padding-top:5px; padding-right: 0px; width: 62px"><?php echo lang_getTxt('username'); ?></th>
                                                    <th>
                                                        <input type="text"id="username" name="username" class="inputbox" size="25" value="" />
                                                    </th>
                                                    <th style="padding-top:5px; width: 82px"><?php echo lang_getTxt('password'); ?></th>
                                                    <th>                                                                
                                                        <input style="padding-right:<?php echo ($_SESSION['lang'] == 'en')? '100': '25';?>px;" type="password" id="password" name="password" class="inputbox" size="25" value="" />
                                                    </th>
                                                    <th style="padding-right:<?php echo ($_SESSION['lang'] == 'en')? '100': '25';?>px;">
                                                        <input type="submit" id="button" name="submit" value="<?php echo lang_getTxt('login'); ?>"  /></th>
                                                    </th>
                                                    <th style="100%"></th>
                                                    <th style="padding-top:5px; padding-right: 5px;"><span style="float:right"><a id="copyright" href="http://www.skriptkoder.com"><?php echo lang_getTxt('sitename'); ?>&nbsp;2012</a>&nbsp;&COPY;&nbsp;<?php echo lang_getTxt('rights'). "."; ?></span></th>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    </table>
                                </div></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>          
  </div>
    </div>
  </div>
    </body>
</html>
