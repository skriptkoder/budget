<div id="leftcolumn2" style="width:100%" >

    <form name="frm1" method="post" action="includes/crud_prod_budget.php" onsubmit="return validate_add_product();" >
        <table width="100%" cellpadding="0" cellspacing="0" class="moduletable" style="margin-bottom: 10px;">
            <tr>
                <th width="100%" valign="top"><img src="images/arrow.png" /><?php echo lang_getTxt('budget_title'); ?></th>
            </tr>


            <tr align="center">
                <td>
                    <br /><br />
                    </div>
                    </div>

                    <table class="budget_table" width='800px' align="center">
                        <tr bgcolor='#214020' >
                            <?php foreach ($cols_budget_title as $value) { ?><td align='center'><font color='#FFFFFF'><?php echo $value ?></font></td><?php } ?>
                        </tr>
                        <?php echo $col_ar_prod_tot ?>
                        <tr bgcolor='#666666' >
                            <td align='center'><?php echo $tot_pay_title ?></td>
                            <?php foreach ($cols_tot_pay as $value) { ?><td align='center'><font color='#FFFFFF'><?php echo $value ?></font></td><?php } ?>
                            <td align="center" colspan=2 class="budget_calculatorCel"><a href="taxeCalculator.php" style="display: block; width: 100px;"><?php echo $taxe_title ?></a></td>
                        </tr>
                        <tr>
                            <td colspan='17'><hr size='1' style='color:#CCCCCC'/></td>
                        </tr>
                        <tr bgcolor='#FF9900' >
                            <td align='center'><?php echo $tot_rev_title ?></td>
                            <?php foreach ($arr_tot_rev as $value) { ?><td align='center'><font color='#FFFFFF'><?php echo $value ?></font></td><?php } ?>
                        </tr>
                        <tr bgcolor='#666666' >
                            <td align='center'><?php echo $rev_after_pay_title ?></td>
                            <?php foreach ($tot_rev_after_pay as $value) { ?><td align='center'><?php echo $value ?></td><?php } ?>
                        </tr>
                        <tr><td style="height: 40px;  ">&nbsp;</td></tr>
          <!--        <tr bgcolor='#214020'>
                                  <td colspan="100%" style="color: white">
                                          <img src="images/arrow.png" />Add a Product to Your Budget List
                                  </td>
                          </tr>-->
                        <table  width="800" cellpadding="0" cellspacing="0" style="padding-bottom: 10px;">
                            <tr align="center">
                                <td align="center" colspan="7" >
                                    <div class="row_header"  align="center"><?php echo 'Budget Product' ?></div><br />
                                    <?php echo 'Product Name' ?> <input type="text" name="prod_name" value="" />
                                    <?php echo 'Amount per Week' ?> <input type="text" name="prod_price_per_wk" size="5" value="" />
                                    <input type="submit" name="submit_add_prod" id="button" value="<?php echo $btn['add']; ?>" /> &nbsp;
                                    <input type="reset" name="reset" id="button" value="<?php echo $btn['cancel']; ?>" />

                                    <div class="row_header"  align="center" style="margin-top: 20px;">Entrer le montant hors taxe. <font style="color: #ff6600; font-size: 12px;">* tps = 5%, tvq = 8.5%</font></div><br />
                                    <?php echo 'Hors Taxe' ?> <input type="text" name="amount_field" id="amount_field" onkeyup="getTaxes()"  value="<?php $amount ?>" size="5" />&nbsp;&nbsp;$
                                    <?php echo 'TPS' ?> <input type="text" name="tps" id="tps"  value="<?php $tps ?>" size="4" />&nbsp;&nbsp;$
                                    <?php echo 'Avec TPS' ?> <input type="text" name="amount_tps" id="amount_tps"  value="<?php $amount_tps ?>" size="4" />&nbsp;&nbsp;$
                                    <?php echo 'TVQ' ?> <input type="text" name="tvq" id="tvq"  value="<?php $tvq ?>" size="4" />	&nbsp;&nbsp;$
                                    <?php echo 'Avec TPS & TVQ' ?> <input type="text" name="amount_tps_tvq" id="amount_tps_tvq" value="<?php $amount_tps_tvq ?>" size="5" />&nbsp;&nbsp;$
                        </table>
            </tr>
        </table>
        </table>
    </form>
    <script type = "text/javascript" src = "lib/validation.js"></script>
    <?php require_once('includes/footer.php'); ?>
