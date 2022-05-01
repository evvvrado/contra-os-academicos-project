
// MODALS

// const { Logger } = require("sass");

//SETAR CLICKS


$('section.conteudo div.niv div.top-area ul li').click(function () {
    $('section.conteudo div.niv div.top-area ul li').removeAttr('active');
    $(this).attr('active', '');

    $('section.conteudo div.niv div.content-area div.scroll').removeAttr('active')
    $(`section.conteudo div.niv div.content-area div.scroll[data-filter="${$(this).data('filter')}"]`).attr('active', '')
})