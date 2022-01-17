// NIV-FADE

$(document).ready(() => {
  $("[niv-fade]:first-child").removeAttr("niv-fade");

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
        $(this).closest("div.container-fav").offset().top -
        ($(window).height() * 3) / 4
      ) {
        $(this).removeAttr("niv-fade");
      }
    });
  })
})
