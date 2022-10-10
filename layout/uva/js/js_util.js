var checkbox = $("#navbarSupportedContent input[type='checkbox']");

checkbox.change(function(event) {
    var checkbox = event.target;
    if (checkbox.checked) {
        $('#navbarSupportedContent').addClass('nova');
        $('.basecentral').addClass('expande');
        $('.barra').css('right','-26px');
    } else {
        $('#navbarSupportedContent').removeClass('nova');
        $('.basecentral').removeClass('expande');
    }
});