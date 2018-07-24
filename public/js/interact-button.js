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
    var popupItemValue = $('.pop__up--value').val();
    $('.c-card__popup > ul').html('<li><button>Salut</button></li>').text(popupItemValue);
    console.log(popupItemValue);
});

/******************************Add To Gallery*****************************/
$('.c-card__popup button').click(function () {

    $(this).text('saved ✓');
    $(this).css('background', '#E0F0D9');
});