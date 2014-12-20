$(function() {

    function rand(min, max){
        return Math.floor((Math.random()*max)+min);
    }

    $('.tip').tooltipster({maxWidth: 400, animation: 'grow', position: 'bottom'});


    $('.nice-slider nav').waypoint(function(){

          $('.fa-bars').tooltipster('hide', function(){
            $('.toggle i').removeClass('hey-you');
          });

    });

    $("br").remove();
    $('section').flowtype({minFont : 35});
    $('a', '.page_item_has_children').attr('rel', 'nofollow').attr('href', '#');

    $('.page_item_has_children').click(function(){
          $('.children',this).addClass('visible');
    });

    $('.page_item_has_children').each(function(){
      $('a', this).attr('rel', 'nofollow').attr('href', '#');
    });

    $('.text ul li').each(function(){
     $(this).html('<i class="fa fa-angle-right"></i> '+$(this).html());
    });

    $( document ).on( "click", ".dropDown", function() {
      $(this).transition({backgroundColor: ''})
      $('.children').slideUp();
    //  $('#navPanel ul li a i').transition({rotate: '0deg'});
      $('.children', $(this).parent()).slideToggle();
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

    $('.top-nav').removeClass('animated bounceOutUp').css({'visibility': 'visible'}).addClass('animated bounceInDown');

    var wow = new WOW({boxClass: 'wow', animateClass:'animated', offset: 0, mobile: false, live: true});

    wow.init();
    var effects = ["bounceIn", "bounceInLeft","bounceInRight", "bounceInUp"];

  //  var effects = ["bounceIn", "bounceInDown","bounceInLeft","bounceInRight", "bounceInUp",
   // "fadeInDown", "fadeInLeft","fadeInUp", "fadeInRight", "flipInX",  "fadeInUpBig",
   // "flipInX", "flipInY", "rollIn", "zoomIn","zoomInDown", "zoomInLeft", "zoomInRight"];

    $('.container a, .container p, .container h2, .container h1, header h1, header h2, container p, .fun, .text table').each(function(){
      var effect = effects[rand(0,effects.length-1)];
      $(this).addClass('wow '+effect);
    });

    $window = $(window);

    $('section header[data-type="background"]').each(function(){
      var $bgobj = $(this);
      $(window).scroll(function() {
        var yPos = -($window.scrollTop() / $bgobj.data('speed'));
        var coords = '50% '+ yPos + 'px';
        $bgobj.css({ backgroundPosition: coords });
      });
    });

   $('#skel-layers-hiddenWrapper').css({'height': '0'});
   $('.main-header #nice-slider').css({height: $(window).height()});

});