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

$('.modal .close-modal').click(function () {
  $($(this).closest('.modal')).hideModal()
})


$('.modal button.cancel').click(function () {
  $($(this).closest('.modal')).hideModal()
})