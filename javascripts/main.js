$(document).ready(function(){

  $(document).on('init.slides', function() {
    $('.loading-container').fadeOut(function() {
      $(this).remove();
    });
  });

  $('#slides').superslides({
    hashchange: true,
    animation: 'fade',
    play: 4000
  });

  $('#team').superslides({
    hashchange: true
  });

  $('.fancybox').fancybox({
      beforeShow : function(){
          $(".fancybox-skin").addClass("form_reset");
      },
      'closeBtn' : false
  });

  $('.slider-block form').validate();
  $('.our-works form').validate();
  $('.before-after form').validate();
  $('.calendar-form form').validate();
  $('.price-big-block form').validate();

  $('.slider-block form').ajaxForm({
      success: function () {
          $(".tnx-link").trigger('click');
      },
      data: {
          title: ' Бесплатная консультация '
      }
  });
  $('.our-works form').ajaxForm({
      success: function () {
          $(".tnx-link").trigger('click');
      },
      data: {
          title: ' Бесплатная консультация '
      }
  });
  $('.before-after form').ajaxForm({
      success: function () {
          $(".tnx-link").trigger('click');
      },
      data: {
          title: ' Бесплатная консультация '
      }
  });
  $('.price-big-block form').ajaxForm({
      success: function () {
          $(".tnx-link").trigger('click');
      },
      data: {
          title: ' Бесплатная консультация '
      }
  });

  $('input[name="phone"]').mask("+7 (999) 999-99-99");
  $('input[name="date"]').mask("99.99.2099");

  $('.slider-block .slide').cycle({
      fx: 'scrollHorz',
      timeout: '6000',
      slideResize: false,
      pause: '',
      next:   '.slider-block .next',
      prev:   '.slider-block .prev',
      cleartypeNoBg: true
  });

  $('.our-works .slider').cycle({
      fx: 'scrollHorz',
      timeout: '8000',
      slideResize: false,
      pause: '',
      next:   '.our-works .next',
      prev:   '.our-works .prev',
      cleartypeNoBg: true
  });

  $('.rent-slider .slider .items').cycle({
      fx: 'scrollHorz',
      timeout: '8000',
      slideResize: false,
      pause: '',
      next:   '.rent-slider .right',
      prev:   '.rent-slider .left',
      cleartypeNoBg: true
  });

  $('.reviews .show-all').click(function(){
      $(this).prev('.other-reviews').slideToggle('0', function(){
          if ($(this).is(":hidden")) $(".reviews .show-all").html("Посмотреть еще");
          else $(".reviews .show-all").html("Скрыть");
      });
  })

});
