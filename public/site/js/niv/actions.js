
// MODALS

// const { Logger } = require("sass");

setTimeout(() => {
    $('.modal_box').showModal()
}, 3000);



//SETAR CLICKS

$(document).ready(function () {
    $('header div[fluid] div.niv button, div.supermenu div.mobile-close').click(function () {
        $('header div[fluid] div.niv button').toggleAttr('clicked');
        $('div.supermenu').toggleAttr('hide')

    })



    $('section.drinks div.niv div.niv-controller picture').click(function () {
        if ($(this).index() == 0) {
            $('section.drinks div.niv div.niv-list').scrollLeft($('section.drinks div.niv div.niv-list').scrollLeft() - $('section.drinks div.niv div.niv-list .box').width());
        } else if ($(this).index() == 1) {
            $('section.drinks div.niv div.niv-list').scrollLeft($('section.drinks div.niv div.niv-list').scrollLeft() + $('section.drinks div.niv div.niv-list .box').width());
        }
    })


    $('section.noticias div.niv div.niv-controller picture').click(function () {
        if ($(this).index() == 0) {
            $('section.noticias div.niv div.niv-content').scrollLeft($('section.noticias div.niv div.niv-content').scrollLeft() - $('section.noticias div.niv div.niv-content div.scroll div.box').width());
        } else if ($(this).index() == 1) {
            $('section.noticias div.niv div.niv-content').scrollLeft($('section.noticias div.niv div.niv-content').scrollLeft() + $('section.noticias div.niv div.niv-content div.scroll div.box').width());
        }
    })

    $('section.servicos div.niv div.niv-top nav ul li').click(function () {
        $('section.servicos div.niv div.niv-top nav ul li').removeAttr('active');
        $(this).attr('active', '');

        $('section.servicos div.niv div.niv-content').hide();
        $(`section.servicos div.niv div.niv-content.${$(this).data('nav')}`).show();

    })

    $('section.lista-blog div.niv div.niv-top div select[name="categorias"]').change(function () {
        var categoria = $(this).val();

        $(`section.lista-blog div.niv div.niv-content div.box`).show();
        $(`section.lista-blog div.niv div.niv-content div.box:not(.${categoria})`).hide();
    })



    $('body#curso-detalhes section.s_curso-content .container-fluid .container-fav div.aba.instrutores .buttons').click(function () {

        if ($(this).index() == 0) {
            $('body#curso-detalhes section.s_curso-content .container-fluid .container-fav div.aba.instrutores .content').scrollLeft($('body#curso-detalhes section.s_curso-content .container-fluid .container-fav div.aba.instrutores .content').scrollLeft() - 400)
        }

        else if ($(this).index() == 1) {
            $('body#curso-detalhes section.s_curso-content .container-fluid .container-fav div.aba.instrutores .content').scrollLeft($('body#curso-detalhes section.s_curso-content .container-fluid .container-fav div.aba.instrutores .content').scrollLeft() + 400)
        }
    })

    $('section.contato div.niv div.niv-nav nav h2').click(function () {
        $('section.contato div.niv div.niv-nav nav h2').removeAttr('active');
        $(this).attr('active', '');

        if ($(this).index() == 0) {
            $('section.contato div.niv div.niv-content.faq').hide();
            $('section.contato div.niv div.niv-content.contato').show();
        }

        else if ($(this).index() == 1) {
            $('section.contato div.niv div.niv-content.faq').css('display', 'flex');
            $('section.contato div.niv div.niv-content.contato').hide();
        }
    })
})


// HERO CASES


$(document).ready(() => {
    setInterval(() => {
        setCaseOrder()
    }, 5000);
})

var case1 = $('section.hero div.niv div.niv-text picture img:first-child');
var case2 = $('section.hero div.niv div.niv-text picture img:nth-child(2)');
var case3 = $('section.hero div.niv div.niv-text picture img:nth-child(3)');

function resetCase() {
    case1.removeAttr('active');
    case2.removeAttr('active');
    case3.removeAttr('active');
    $('section.hero div.niv div.niv-text div.indicador span').removeAttr('active')

    case1.attr('active', '');
    $('section.hero div.niv div.niv-text div.indicador span:first-child').attr('active', '')
}

function setSecondCase() {
    case1.removeAttr('active');
    case2.removeAttr('active');
    case3.removeAttr('active');
    $('section.hero div.niv div.niv-text div.indicador span').removeAttr('active')


    case2.attr('active', '');
    $('section.hero div.niv div.niv-text div.indicador span:nth-child(2)').attr('active', '')
}
function setThirdyCase() {
    case1.removeAttr('active');
    case2.removeAttr('active');
    case3.removeAttr('active');
    $('section.hero div.niv div.niv-text div.indicador span').removeAttr('active')

    case3.attr('active', '');
    $('section.hero div.niv div.niv-text div.indicador span:nth-child(3)').attr('active', '')
}

function setCaseOrder() {
    if (case1.attr('active') == "") {
        setSecondCase();
    }
    else if (case2.attr('active') == "") {
        setThirdyCase();
    }
    else if (case3.attr('active') == "") {
        resetCase();
    }

}




//DEPOIMENTOS

var i_N = 1;
var i_B = 1;
setInterval(() => {
    if (i_N < 3) {
        $('section.depoimentos div.niv div.niv-content')
            .scrollLeft(500 + $('section.depoimentos div.niv div.niv-content').scrollLeft())

        $('section.depoimentos div.niv div.niv-indicator img').removeAttr('active')
        $($('section.depoimentos div.niv div.niv-indicator img')[i_N]).attr('active', '');


        i_N++;
    } else if (i_B >= 0) {
        $('section.depoimentos div.niv div.niv-content')
            .scrollLeft($('section.depoimentos div.niv div.niv-content').scrollLeft() - 500)

        $('section.depoimentos div.niv div.niv-indicator img').removeAttr('active')
        $($('section.depoimentos div.niv div.niv-indicator img')[i_B]).attr('active', '');

        i_B--;


    } else {
        clearInterval()
        i_B = 1;
        i_N = 1;
    }
}, 5000)