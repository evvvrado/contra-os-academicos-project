//CONTADOR DE NULMEROS

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}


//HEADER SROLL

var oS = 0;

$(document).scroll(() => {
    var sT = $(document).scrollTop();
    var sY = window.scrollY;

    if (sT == 0) {
        $('header').removeClass('_re')
    } else {
        $('header').addClass('_re')
    }

    if (sT !== 0) {
        $("header").addClass("_hi");
        $(".scroll_icon").addClass("_hi");
    } else {
        $("header").removeClass("_hi");
        $(".scroll_icon").removeClass("_hi");
    }

    let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value

    if (currentScroll > 0 && oS <= currentScroll) {
        //DOWN
        nivFollow(false);


        oS = currentScroll;
    } else {
        //UP
        nivFollow(true);


        $("header").removeClass("_hi");
        oS = currentScroll;

    }

})

var empty;

(function ($) {
  $.fn.showModal = function () {
    $(this).attr('show', '');

    return this;
  }


  $.fn.hideModal = function () {
    $(this).removeAttr('show');
    return this;
  }

})(jQuery);

$('.close-modal').click(() => {
  $('.modal_box').hideModal()
})


// NIV-FADE

$(document).ready(() => {
  $("section.hero div.niv div.niv-text[niv-fade], section.hero div.niv div.niv-form[niv-fade]").removeAttr("niv-fade");

  $(".backdrop").animate(
    {
      opacity: 0,
    },
    3000
  );

  var i = 0;
  $(document).scroll(() => {
    $("[niv-fade]").each(function () {
      if (
        $(document).scrollTop() >=
        $(this).closest("div.niv").offset().top -
        ($(window).height() * 3) / 4
      ) {
        $(this).removeAttr("niv-fade");
      }
    });
  })
})



// NIV-FOLLOW



// ACTION


$(document).ready(() => {

  // SET
  $('[niv-follow]').each(function () {
    var min = $(this).attr('niv-follow').split('-')[0];
    var max = $(this).attr('niv-follow').split('-')[1];

    $(this).css('transform', `translateY(${min}px)`);
  })


})




function nivFollow(scrollDirection) {
  $('[niv-follow]').each(function () {
    var min = $(this).attr('niv-follow').split('-')[0];
    var atual = parseInt($(this).css('transform').split(',')[5]);
    var max = $(this).attr('niv-follow').split('-')[1];

    var statementUP = atual > min ? true : false;
    var statementDOWN = atual < max ? true : false;


    if (!scrollDirection) {
      if (statementDOWN) {
        $(this).css('transform', `translateY(${atual + 20}px)`);
      }
    }
    else {
      if (statementUP) {
        $(this).css('transform', `translateY(${atual - 40}px)`);
      }
    }
  })
}
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });



$('form label input[name = "telefone"]').mask("(00) 00000-0000");
$('form label input[name = "expiracao"]').mask("00/0000");
$('form label input[name= "numero"]').mask("0000 0000 0000 0000");

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}



(function ($) {
    $.fn.toggleAttr = function (attr) {
        if ($(this).attr(attr) == '') {
            $(this).removeAttr(attr)
        } else {
            $(this).attr(attr, '')
        }
        return this;
    }

})(jQuery);


console.log("%c👋 Opa, bom dia!\n%cEstá perdido? a estrada é pelo %coutro lado!!\n%cMas já que já está aqui, da uma olhadinha no nosso site\n%chttps://hyp8.com.br ✨", "font-family: consolas;", "font-family: consolas;", "font-family: consolas; font-weight: bold;color: red;", "font-family: consolas;", "font-family: consolas; color:$FF3434; ")


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