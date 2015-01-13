
    </div>

    <footer>
        <div class="container">
        <div class="float-right copy">&copy; 2014 &laquoКировские бани&raquo;</div>
        <div class="item-info"><i class="li_phone"></i> <b>77-98-31</b></div>
        <a href="/контакты/" class="item-info"><i class="li_location"></i> <b>Как нас найти?</b></a>
        <a href="#slider-wrapper" class="tip" tooltip="Наверх страницы"><i class="fa fa-angle-up"></i></a>
        </div>

    </footer>
    <div id="menuContainer" style="display:none; visibility: hidden;">
    <?
    $leftNav = wp_nav_menu(array( 'echo' => 0 ));
    $leftNav = mb_ereg_replace("'","\"", $leftNav);
    echo $leftNav;
    ?>
    </div>

    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery-1.11.1.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.tooltipster.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/easing.1.3.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel-layers.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/transit.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/waypoints.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/flowtype.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/imagelightbox.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.nanoscroller.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/fullwidth-slider.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/init.js"></script>
      <script src="<? echo get_template_directory_uri(); ?>/js/bubbles.js"></script>
        <script src="<? echo get_template_directory_uri(); ?>/js/rAF.js"></script>
    <script>
    (function($) {

        $('#menuContainer .menu-item-has-children').each(function(){
            $('a', this).first().attr('href', '#');
            $('a', this).first().replaceWith( "<div class='dropDown'>" + $('a', this).first().text() + " <i class='fa fa-angle-down'></i></div>" );
        });


        skel.init({
            reset: 'full',
            breakpoints: {
                    global: {
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style.css', containers: 1400, grid: { gutters: ['2em', 0] }},
                    xlarge: {
                        media: '(max-width: 1680px)',
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xlarge.css',
                        containers: 1200
                    },
                    large: {
                        media: '(max-width: 1280px)',
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-large.css',
                        containers: 960, grid: { gutters: ['1.5em', 0] }, viewport: { scalable: false }
                    },
                    medium: {
                        media: '(max-width: 980px)',
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-medium.css',
                        containers: '90%', grid: { zoom: 2 }
                    },
                    small: {
                        media: '(max-width: 736px)',
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-small.css',
                        containers: '90%', grid: { zoom: 3, gutters: ['1.25em', 0] }
                    },

                    xsmall: {
                        media: '(max-width: 480px)',
                        href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xsmall.css',
                        grid: { zoom: 4 }
                    }

            },plugins: {
                layers: {
                  titleBar: {
                    position: 'top-left',
                    width: '100%',
                    height: 50,
                    html: '<div class="toggle left-panel" id="topPanel" data-action="toggleLayer" data-args="navPanel"><i class="fa fa-bars"></i>' +
                    '<span class="title"></span></div><a class="button-home tip" style="display:none" title="На главную страницу" href="/"><i class="fa fa-home"></i></a>'
                  },
                  navPanel: {
                    position: 'top-left',
                    width: 295,
                    height: '100%',
                    orientation: 'vertical',
                    side: 'left',
                    hidden: true,
                    animation: 'pushX',
                    clickToHide: true,
                    html: $('#menuContainer').html()
                  }
                }
              }
        });
          $('#navPanel').nanoScroller({
            preventPageScrolling: true
          });
        $(function() {

        });

    })(jQuery);
    </script>
    <script src="<? echo get_template_directory_uri(); ?>/js/pathLoader.js"></script>
        <script src="<? echo get_template_directory_uri(); ?>/js/loader-engine.js"></script>

    </body>
</html>
