$(function () {
    //Language EventHandler
    $("select#langMenu").change(function () {
        var e = $("#langMenu").val();
        var t = window.location.pathname;
        window.location = "includes/setLang.php?lang=" + e + "&href=" + t
    })
})

