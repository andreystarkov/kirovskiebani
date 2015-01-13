$(function() {

    function rand(min, max){
        return Math.floor((Math.random()*max)+min);
    }

    $('.tip').tooltipster({maxWidth: 400, animation: 'grow', position: 'bottom'});

    $("br").remove();
    $('section').flowtype({minFont : 35});
    $('a', '.menu-item-has-children').attr('rel', 'nofollow').attr('href', '#');

    $('.menu-item-has-children').click(function(){
          $('.sub-menu',this).addClass('visible');
    });

    $('.menu-item-has-children').each(function(){
      $('a', this).attr('rel', 'nofollow').attr('href', '#');
    });

    $('.text ul li').each(function(){
     $(this).html('<i class="fa fa-angle-right"></i> '+$(this).html());
    });

    $( document ).on( "click", ".dropDown", function() {
    //  $(this).transition({backgroundColor: ''});
      var dno = $('.sub-menu', $(this).parent());
    //  $('#navPanel ul li a i').transition({rotate: '0deg'});

      if(dno.hasClass('toggled') ){
        dno.removeClass('toggled').slideUp();
    } else { dno.addClass('toggled').slideDown(); }
   //   $('i',this).transition({rotate: '+=180deg'});
    });

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            var offsetTop = target.position().top - target.closest('body').position().top;
            if (target.length) {
              $('body').animate({scrollTop: offsetTop}, 1200, 'easeInQuart');
              return false;
            }
        }
    });
    if( $(window).width() < 1200 ){
    $('#nice-slider, #slider-wrapper, canvas').css({height: $('#nice-slider img').height() });
    $('.top-nav').removeClass('animated bounceOutUp').css({'visibility': 'visible'}).addClass('animated bounceInDown');
    } else {

   $('.main-header #nice-slider').css({height: $(window).height()});
    }
    var wow = new WOW({boxClass: 'wow', animateClass:'animated', offset: 0, mobile: false, live: true});

    wow.init();
    var effects = ["fadeInUp"];

  //  var effects = ["bounceIn", "bounceInDown","bounceInLeft","bounceInRight", "bounceInUp",
   // "fadeInDown", "fadeInLeft","fadeInUp", "fadeInRight", "flipInX",  "fadeInUpBig",
   // "flipInX", "flipInY", "rollIn", "zoomIn","zoomInDown", "zoomInLeft", "zoomInRight"];

    $('.container a, .container p, .container h2, .container h1, header h1, header h2, container p, .fun, .text table').each(function(){
      var effect = effects[rand(0,effects.length)];
      $(this).addClass('wow '+effect);
    });

    $window = $(window);

    $('section header[data-type="background"]').each(function(){
      var $bgobj = $(this);
      $(window).scroll(function() {
      //  var topOffs = $bgobj.data('offset');
        var yPos = -($window.scrollTop() / $bgobj.data('speed'));
        var coords = '50% '+ yPos + 'px';
        $bgobj.css({ backgroundPosition: coords });
      });
    });

   $('#skel-layers-hiddenWrapper').css({'height': '0'});

});