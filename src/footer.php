
    </div>

    <footer>
        <nav>
        <a href="#">О нас</a>
        <a href="#">Контакты</a>
        <a href="#box-bani">Бани</a>
        <a href="#box-sauna">Сауна</a>
        <a href="#">Дополнительные услуги</a>
        <a href="#">Традиции</a>
        <a href="#slider-wrapper"><i class="fa fa-angle-up"></i></a>
        </nav>
    </footer>
    <div id="menuContainer" style="display:none; visibility: hidden;">
    <?
    $leftNav = wp_nav_menu(array( 'echo' => 0 ));
    $leftNav = mb_ereg_replace("'","\"", $leftNav);
    echo $leftNav;
    ?>
    </div>

    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery-1.11.1.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/easing.1.3.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel-layers.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/transit.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/waypoints.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/flowtype.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/imagelightbox.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/fullwidth-slider.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/init.js"></script>

    <script>
    (function($) {

        $('#menuContainer .page_item_has_children').each(function(){
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
                    '<span class="title"></span></div>'
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

        $(function() {


        });

    })(jQuery);
    </script>
    <script src="<? echo get_template_directory_uri(); ?>/js/pathLoader.js"></script>
        <script src="<? echo get_template_directory_uri(); ?>/js/loader-engine.js"></script>
      <!--  <script src="<? echo get_template_directory_uri(); ?>/js/bubbles.js"></script> -->
        <script src="<? echo get_template_directory_uri(); ?>/js/rAF.js"></script>
    </body>
</html>
