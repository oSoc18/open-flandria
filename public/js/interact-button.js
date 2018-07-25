/**************************Tiny Filled Button*********************************/
$('.tiny__button').click(function () {
    $(this).toggleClass('filled');
});
/******************************Bookmarked*****************************/
$('.tiny__button.bookmark').click(function (ev) {
    ev.stopPropagation();
    var target = ev.currentTarget;
    var idString = target.id;
    var parts = idString.split("-");
    var id = parts[parts.length - 1];

    var selectionString = "gallery-popup-" + id;
    $("#" + selectionString).toggle();
});
/********Add Element*********/
$('.pop__up--add').click(function () {
    if ($('.pop__up--value').val() == '') {
        alert('Empty!')
    } else {
        var popupItemValue = $('.pop__up--value').val();
        $('.c-card__popup > ul li ul').prepend("<li><button value=" + popupItemValue + ">" + popupItemValue + "</button></li>");
        console.log(popupItemValue);
        $(this).text('added ✓');
        $('.pop__up--value').val('');
        setTimeout(function () {
            $('.pop__up--add').text('add');
        }, 1000);
    }
});

/******************************Add To Gallery*****************************/


$('.c-card__popup .pop__up--item').on('click', function () {
    $(this).toggleClass("saved");
    if ($(this).hasClass("saved")) {
        $(this).text('saved ✓');
        $(this).css('background', '#E0F0D9');
    } else {
        $(this).css('background', '#FFF200');
        $(this).text($(this).val());
    }
});

