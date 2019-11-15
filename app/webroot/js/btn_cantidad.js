$('.cantidad>button.menos').click(function() {
    var num = parseInt($(this).siblings('input').val());
    if (num <= 1)
        return;
    $(this).siblings('input').val(num - 1);
});

$('.cantidad>button.mas').click(function() {
    var num = parseInt($(this).siblings('input').val());
    $(this).siblings('input').val(num + 1);
});