$('.cantidad>button.menos').click(function () {
    var num = parseInt($(this).siblings('input').val());
    if (num <= 1)
        return;
    $(this).siblings('input').val(num - 1);
    calcular();
});

$('.cantidad>button.mas').click(function () {
    var num = parseInt($(this).siblings('input').val());
    $(this).siblings('input').val(num + 1);
    calcular();
});

function calcular() {
    var precio = $('.preciounitario');
    var cantidad = $('.p_cantidad');
    var envio = $('.p_envio');
    var total = 0;

    for (var i = 0; i < precio.length; i++) {
        total += parseInt(precio[i].value) * parseInt(cantidad[i].value) + parseInt(envio[i].value);
        console.log(precio[i].value, cantidad[i].value, envio[i].value);
    }

    $('.monto').html('S/.&nbsp;' + total + '.00');
}