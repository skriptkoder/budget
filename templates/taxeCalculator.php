<div id="leftcolumn2" style="width:100%" >
    <form name="frm_taxe" id="frm_taxe" method="post" action="" >
        <table width="100%" cellpadding="0" cellspacing="0" class="moduletable">
            <tr><th width="100%" valign="top"><img src="images/arrow.png" /><?php echo $taxe_title ?></th></tr>
            <tr align="center">
                <td>
                    <?php if (!empty($message)) { ?><br /><p class=\"message\"> <?php echo $message ?></p><?php } ?>
                    <?php if (!empty($errors)) {
                        display_errors($errors);
                    } ?>
                    <table  width="800" cellpadding="0" cellspacing="0" style="padding-bottom: 10px;">
                        <tr align="center">
                            <td align="center" colspan="7" >

                                <div  align="center">Entrer le montant hors taxe. <font style="color: #ff6600; font-size: 12px;">* tps = 5%, tvq = 9.5%</font></div><br />
                                <?php echo 'Hors Taxe' ?> <input type="text" name="amount_field" id="amount_field" onkeyup="getTaxes()"  value="<?php $amount ?>" size="5" />&nbsp;&nbsp;$
                                <?php echo 'TPS' ?> <input type="text" name="tps" id="tps"  value="<?php $tps ?>" size="4" />&nbsp;&nbsp;$
                                <?php echo 'Avec TPS' ?> <input type="text" name="amount_tps" id="amount_tps"  value="<?php $amount_tps ?>" size="4" />&nbsp;&nbsp;$
<?php echo 'TVQ' ?> <input type="text" name="tvq" id="tvq"  value="<?php $tvq ?>" size="4" />	&nbsp;&nbsp;$
<?php echo 'Avec TPS & TVQ' ?> <input type="text" name="amount_tps_tvq" id="amount_tps_tvq" value="<?php $amount_tps_tvq ?>" size="5" />&nbsp;&nbsp;$

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
</div>
<br/>
<?php
require_once('includes/footer.php');