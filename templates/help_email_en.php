
<table width="400" border="0" cellspacing="0" cellpadding="2" style="font: 12px Arial, Helvetica, sans-serif; border:1px solid #214020;">
    <tr>
        <td align="center" style="padding-top:5px; padding-bottom:5px;background-color: whitesmoke;">
            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font: 14px Arial, Helvetica, sans-serif; background-color: whitesmoke; border-bottom:1px dotted #FF9900;">
                <tr>
                    <td><img alt="img" src="http://localhost/_phpMysql/timesheet2012/images/email_hd_banner.png"></td>
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
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Technician</td><td style="color:black;"><?php echo $name ?></td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Employee #</td><td style="color:black;"><?php echo $empl_num ?></td>
                            </tr>
                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">Branch</td><td style="color:black;"><?php echo $branch ?></td>
                            </tr>

                            <tr>
                                <td><img alt="img" src="http://skriptkoder.net/budget/images/arrow.png">mailTo</td><td style="color:black;"><?php echo $mailTo ?></td>
                            </tr>
                            <tr><td colspan="2">&nbsp;</td>
                            </tr>	
                        </table>
                    </td>
                </tr>
                <td colspan="2" valign="top" style="padding-left: 10px; color: Black;">			
                    Welcome,<br>
                    <strong><?php echo $name ?></strong> ask for help!
                    <br><br>		
                </td>					
    </tr>
    <tr>			
        <td  valign="top" style="padding-left: 10px;color: Black;" colspan="2">
            The message is:<br />
            <table width="350" border="1" align="center" style="font-family:  Arial, Helvetica, sans-serif; font-size: 12 px; font-weight: normal; color:black;">

                <tr>
                    <td ><?php echo $description ?></td>
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
        <font size="1" color="#a5a5a5"><I>skriptkoder - Copyright.</FONT>
    </center>
</td></tr>
</table>
</td>
</tr>
</table>


