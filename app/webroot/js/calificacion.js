$("[type='radio']").on('click', function(e) {
    var previousValue = $(this).attr('previousValue');
    $('.calificar label').css('color', '#e0e0e0');

    if (previousValue == 'true') {
        this.checked = false;
        $(this).attr('previousValue', this.checked);
    } else {
        this.checked = true;
        $(this).attr('previousValue', this.checked);
        for (var i = 1; i <= parseInt(this.id.substr(-1)); i++) {
            $('#i-estrella' + i).css('color', '#e44300');
        }
    }
});