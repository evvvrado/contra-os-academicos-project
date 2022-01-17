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

