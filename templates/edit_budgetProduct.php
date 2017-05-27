<div id="leftcolumn2" style="width:100%" >
    <table align="center" width="800" cellpadding="0" cellspacing="0" class="moduletable">
        <tr><th width="800" valign="top"><img src="images/arrow.png" /><?php echo 'Edit Budget Product'; ?></th></tr>
        <tr align="center">
            <td>
                <?php if (!empty($message)) { ?><br /><p class=\"message\"> <?php echo $message ?></p><?php } ?>
                <?php if (!empty($errors)) {
                    display_errors($errors);
                } ?>
                <table  style="padding-bottom: 10px;" width="800" cellpadding="0" cellspacing="0">
                    <tr align="center">
                        <td align="center" colspan="7" >
                            <form name="frm_editProduct" id="frm_editProduct" method="post" onsubmit="return validate(this)" action="includes/crud_prod_budget.php" >
                                <div  align="center"><?php echo 'Budget Product' ?></div><br />
<?php echo 'Product Name' ?> <input type="text" name="product_name" value="<?php echo $_SESSION['product_name'] ?>" />
<?php echo 'Amount per Week' ?> <input type="text" name="price_per_week" size="5" value="<?php echo $_SESSION['price_per_week'] ?>" />
                                <input type="submit" name="updateProd" id="button" value="<?php echo $btn['update']; ?>" /> &nbsp;
                                <input type="reset" name="reset" id="button" value="<?php echo $btn['cancel']; ?>" /><br />
                            </form>
                </table>
        </tr>
    </table>
</td>
</tr>
</table>
</div>
<?php
require_once('includes/footer.php');?>
