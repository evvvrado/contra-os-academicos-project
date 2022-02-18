
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
