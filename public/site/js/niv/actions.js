
// MODALS

// const { Logger } = require("sass");

//SETAR CLICKS


$('section.conteudo div.niv div.top-area ul li').click(function () {
    $('section.conteudo div.niv div.top-area ul li').removeAttr('active');
    $(this).attr('active', '');

    $('section.conteudo div.niv div.content-area div.scroll').removeAttr('active')
    $(`section.conteudo div.niv div.content-area div.scroll[data-filter="${$(this).data('filter')}"]`).attr('active', '')
})

$('header div[fluid] div.niv nav ul li a[title=menu]').click(() => {
    $('header div[fluid].sub-menu').toggleAttr('active');
})

$('header div[fluid] div.niv > div div.search-button picture').click(() => {
    $('header div[fluid] div.niv > div div.search-button input').toggleAttr('open');
})

function _showSearch() {
    let search = document.getElementById('search-niv');

    if (search.classList.contains('show--search')) {
        search.classList.remove('show--search');
    } else {
        search.classList.add('show--search');
    }
}