
function getTaxes(){
    var amount=0;
    var tps=0;
    var amount_tps=0;
    var tvq=0;
    var amount_tps_tvq=0;

    amount=parseFloat(document.getElementById('amount_field').value);
    tps=0.05 * parseFloat(document.getElementById('amount_field').value);
    amount_tps= parseFloat(tps) + parseFloat(amount);
    tvq=parseFloat(amount_tps * 0.095);
    amount_tps_tvq=parseFloat(amount_tps) + parseFloat(tvq);

    document.getElementById('tps').value = tps.toFixed(2);;
    document.getElementById('amount_tps').value = amount_tps.toFixed(2);;
    document.getElementById('tvq').value = tvq.toFixed(2);;
    document.getElementById('amount_tps_tvq').value = amount_tps_tvq.toFixed(2);

}


