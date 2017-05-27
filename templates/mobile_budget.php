<div class="green_gradient" style="margin-top: 2.5em" >
    <form name="frm1" method="post" action="includes/crud_prod_budget.php" >

        <table id="theList" width="100%">
            <tr>
                <th colspan="8" style="; font-size: 3em"><img src="images/mobile/mobile_arrow.png" />
                    <?php echo $budget_title ?></th>
            </tr>
            <?php foreach ($cols_mobile_budget_title as $value) { ?>
            <th style="font-size: 2em; text-align: center">
                    <?php echo $value; ?> 
                </th> 
            <?php } ?> 

            <?php
            $prod_name = getProductsName();
            $i = 0;
            foreach ($prod as $key => $value) {
                ?>
                <tr>
                    <td style="text-align: center; font-size: 2em"><?php echo $prod_name['payment_date']; ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo $prod_name[$i]; ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo calcul_1wk($value); ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo calcul_2wk($value); ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo calcul_1m($value); ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo calcul_6m($value); ?></td>
                    <td style="text-align: center; font-size: 2em"><?php echo calcul_1y($value); ?></td>
                    <td align='center' class="edit_id" style="margin: 0px; padding: 0px; border-spacing: 0px; border-collapse: collapse">
                        <a style="display: block; width: 175px; height: 35px" href='includes/crud_prod_budget.php?edit_id={$prod_id[$key]}{$langAnd}'>
    <?php echo edit_prod($value); ?>
                            <img src='images/mobile/mobile_tick.png' width='32' height='32' style="display: block;" border='0' alt='edit' /></a>
                    </td>
                    <td align='center' class="del_id" style="margin: 0px; padding: 0px; border-spacing: 0px; border-collapse: collapse">
                        <a style="display: block; width: 175px; height: 35px" href='includes/crud_prod_budget.php?del_id={$prod_id[$key]}{$langAnd}'>
                            <img src='images/mobile/mobile_x.png' style="padding: 5px 10px 5px 10px" width='32' height='32' border='0' alt='delete' /></a>
                    </td> 
    <?php $i++;
} ?>
            </tr>

            <tr >
                <td align='center' style="background-color:#999; font-size: 2em"></td>
                <td align='center' style="background-color:#999; font-size: 2em"><?php echo $tot_pay_title ?></td>
                    <?php foreach ($cols_tot_pay as $value) { ?>
                    <td align='center' style="background-color:#999; color:#FFF; font-size: 2em">
                    <?php echo $value ?>
                    </td>
<?php } ?>
                <td style="background-color:#999">&nbsp;</td><td style="background-color:#999">&nbsp;</td>
            </tr>
            <tr>
                <td colspan='18'><hr size='1' style='color:#CCCCCC'/></td>
            </tr>
            <tr>
                <td align='center' style="background-color:#FF9900; font-size: 2em"></td>
                <td align='center' style="background-color:#FF9900; font-size: 2em"><?php echo $tot_rev_title  ?></td>
<?php foreach ($arr_tot_rev as $value) { ?><td style="text-align: center;background-color:#FF9900; font-size: 2em"><?php echo $value ?></td><?php } ?>
                <td style="background-color:#FF9900">&nbsp;</td><td style="background-color:#FF9900">&nbsp;</td>	
            </tr>
            <tr style="background-color:#999" >
                <td align='center' style="background-color:#999; font-size: 2em"></td>
                <td align='center' style="background-color:#999; font-size: 2em"><?php echo $rev_after_pay_title ?></td>
                    <?php foreach ($cols_tot_pay as $key => $value) { ?><td align='center'style="font-size: 2em">
    <?php $tot_rev_after_pay[$key] = $arr_tot_rev[$key] - $value;
    echo $tot_rev_after_pay[$key]; ?></td><?php } ?>
                <td>&nbsp;</td><td>&nbsp;</td>
            </tr>
        </table>
        </table>

    </form>
</div>
<div style="margin-top: 3em">
    <p>
        <a href="logout.php" class="mainlevel-nav" style="font-size: 5em; color: #FF9900" ><img src="images/mobile/mobile_arrow.png" />
    <?php echo $hd_logout; ?></a>
    </p>
</div>