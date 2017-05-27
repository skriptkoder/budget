function validate() {
    
    
    if (trim(document.frm1.username.value) == '') {
        alert('{$js_req_usrnme}');
        return false;
    }
    if (trim(document.frm1.password.value) == '') {
        alert('{$js_req_pswd}');
        return false;
    }
    return true;
}

function validate_add_product() {   
    if (trim(document.form.prod_name.value) == '') {
         alert('wait');
        alert('{$js_req_usrnme}');
        return false;
    }
    if (trim(document.frm1.prod_price_per_wk.value) == '') {
        alert('{$js_req_pswd}');
        return false;
    }
    return true;
}

