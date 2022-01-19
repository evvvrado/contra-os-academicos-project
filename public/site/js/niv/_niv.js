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