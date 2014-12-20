<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
   <header id="slider-wrapper" class="large-header main-header">


        <div class="logo"><h1>Кировские бани</h1></div>

        <div id="nice-slider" class="nice-slider nice-slider-fullwidth">

        <ul class="itemwrap">

            <li class="current">
                <div style="display:none" class="slider-caption">
                  <div class="wrp">
                    <p>Предлагаем Вам забыть на время о суете и динамике внешнего мира и погрузиться в полную релаксацию.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/fasad.jpg" alt="">
            </li>

            <li>
                <div style="display:none" class="slider-caption">
                  <div class="wrp">
                    <p>Умелые руки высокопрофессиональных банщиков и массажистов приведут Ваше тело и дух в полный порядок.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/hall1.jpg" alt="">
            </li>

            <li>
                <div style="display:none" class="slider-caption">
                  <div class="wrp">
                    <p>Два отделения для отдыха, отделение высшего разряда и отделение нижнего разряда, душевыми,
                    бассейнами, и настоящими русскими парными</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/hall2.jpg" alt="">
            </li>
            <li>
                <div style="display:none" class="slider-caption">
                  <div class="wrp">
                    <p>Как только Вы войдёте сюда &mdash; ощутите ласкающий всё тело "лёгкий пар". Тут Вы прекрасно отдохнёте и попаритесь с веничком.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/5.jpg" alt="">
            </li>
        </ul>

        <nav>
            <a class="button-down" href="#intro"><i class="fa fa-angle-down"></i></a>
            <a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
            <a class="next" href="#"><i class="fa fa-angle-right"></i></a>
        </nav>

        </div>
    </header>

    <section class="section wooden-1" id="intro">
    <div class="container">
        <div class="text">
            <h1 class="first-header">Банно-оздоровительный комплекс «Кировские бани»</h1>
            <p>Здесь вы найдете все, что необходимо, для прекрасного отдыха с пользой для здоровья.  Давно известно, что Баня - это не просто уникальное, а поистине
            волшебное оздорови-тельное, восстанавливающее средство. В стенах нашего банного комплекса мы постарались воплотить лучшие традиции банной культуры.
            </p>
            <h2 class="news-header"><i class="li_news icon"></i> Новости и акции</h2>
            <div class="box-news clearfix">
            <?php
                $args = array( 'posts_per_page' => 3 );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <a class="news-item" href="<?php the_permalink(); ?>">
                        <b class="news-title"><i class="li_pen icon"></i><?php the_title(); ?></b>
                        <p class="news-content"><? the_content(); ?></p>
                    </a>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </div>
    </section>

    <section id="bani" class="section-header wooden-1">
        <header data-speed="10" data-type="background">
            <div class="overlay"></div>
            <div class="container">
                <h2>Бани</h2>
                <div class="buttons">
                    <a href="/бани/отделение-высшего-разряда/" class="button button-red">Отделение высшего разряда</a>
                    <a href="/бани/отделение-низшего-разряда/" class="button button-red">Отделение низшего разряда</a>
                    <a href="/бани/душевые-номера/" class="button button-red">Душевые номера</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-bani">
            <div class="text">
                    <p>Кировские бани — классическая русская баня в Оренбурге и, особенно полезна городским жителям, ведущим малоподвижный образ жизни. Она нормализует обмен веществ, лечит простудные заболевания, способствует выведению шлаков из организма. </p>
            </div>
            <div class="thumbs-grid">
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/bani-1.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/bani-1thumb.jpg" alt="">
                </a>
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/bani-2.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/bani-2thumb.jpg" alt="">
                </a>
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/bani/hi/6.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/bani/hi/6t.jpg" alt="">
                </a>
            </div>
        </div>
    </section>

    <section id="sauna" class="section-header wooden-1">
        <header>
            <div class="overlay"></div>
            <div class="container">
                <h2>Сауна</h2>
                <div class="buttons">
                    <a href="/сауна/" class="button button-red">Подробнее о сауне</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-sauna">
            <div class="text">
                    <p>Сауна от «Кировских Бань» приглашает Вас насладиться домашней атмосферой и уютной обстановкой. Предлагаем Вам забыть на время о суете и динамике внешнего мира и погрузиться в полную релаксацию в наших стенах.</p>
            </div>

            <div class="thumbs-grid">
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/sauna-1.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/sauna-1thumb.jpg" alt="">
                </a>
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/sauna/5.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/sauna/5t.jpg" alt="">
                </a>
                <a data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/sauna-3.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/sauna-3thumb.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="uslugi" class="section-header wooden-1">
        <header data-speed="10" data-type="background">
            <div class="overlay"></div>
            <div class="container">
                <h2>Услуги</h2>
                <div class="buttons">
                    <a href="/дополнительные-услуги/салон-шадэ/" class="button button-red">Салон Шадэ</a>
                    <a href="/дополнительные-услуги/магазин/" class="button button-red">Магазин</a>
                    <a href="/дополнительные-услуги/мойка-тела/" class="button button-red">Мойка тела</a>
                    <a href="/дополнительные-услуги/массаж/" class="button button-red">Массаж</a>
                    <a href="/дополнительные-услуги/закусочная/" class="button button-red">Закусочная</a>
                    <a href="/дополнительные-услуги/душ-шарко-от-кировских-бань/" class="button button-red">Душ Шарко</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-etc">
            <div class="text">
                    <p>Так вы всегда можете заказать дополнительные услуги, которые оказывают "Кировские бани" своим любимым посетителям. К ним относятся парикмахерская, магазин, закусочная, мойка тела и душ "Шарко".</p>
            </div>
            <div class="thumbs-grid">
                <a class="tip" title="Наша продукция" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/etc/mag/6.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/etc/mag/6t.jpg" alt="">
                </a>
                <a class="tip" title="Парикмахерская &laquoШаде&raquo;" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/us-2.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/us-2thumb.jpg" alt="">
                </a>
                <a class="tip" title="Душ &laquoШарко&raquo;" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/us-3.jpg">
                    <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/us-3thumb.jpg" alt="">
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>