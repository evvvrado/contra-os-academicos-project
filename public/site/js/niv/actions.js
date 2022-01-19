
// MODALS

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