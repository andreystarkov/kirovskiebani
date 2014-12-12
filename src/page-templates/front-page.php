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
   <header id="slider-wrapper" class="large-header">

        <div class="logo"><h1>Кировские бани</h1></div>

        <div id="nice-slider" class="nice-slider nice-slider-fullwidth">

        <ul class="itemwrap">

            <li class="current">
                <div class="slider-caption caption-current">
                  <div class="wrp">
                    <p>Предлагаем Вам забыть на время о суете и динамике внешнего мира и погрузиться в полную релаксацию.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/fasad.jpg" alt="">
            </li>

            <li>
                <div class="slider-caption">
                  <div class="wrp">
                    <p>Умелые руки высокопрофессиональных банщиков и массажистов приведут Ваше тело и дух в полный порядок.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/hall1.jpg" alt="">
            </li>

            <li>
                <div class="slider-caption">
                  <div class="wrp">
                    <p>Два отделения для отдыха, отделение высшего разряда и отделение нижнего разряда, душевыми,
                    бассейнами, и настоящими русскими парными</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/hall2.jpg" alt="">
            </li>
            <li>
                <div class="slider-caption">
                  <div class="wrp">
                    <p>Как только Вы войдёте сюда &mdash; ощутите ласкающий всё тело "лёгкий пар". Тут Вы прекрасно отдохнёте и попаритесь с веничком.</p>
                  </div>
                </div>
                <img src="<? echo get_template_directory_uri(); ?>/images/slides/5.jpg" alt="">
            </li>
        </ul>

        <nav>
            <a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
            <a class="next" href="#"><i class="fa fa-angle-right"></i></a>
        </nav>

        </div>

    </header>

    <section class="section wooden-1" id="intro">
    <div class="container">
    <div class="text">
        <h1>Банно-оздоровительный комплекс «Кировские бани»</h1>
        <p>Здесь вы найдете все, что необходимо, для прекрасного отдыха с пользой для здоровья.  Давно известно, что Баня - это не просто уникальное, а поистине
        волшебное оздорови-тельное, восстанавливающее средство. В стенах нашего банного комплекса мы постарались воплотить лучшие традиции банной культуры.
        </p>
    </div>
    </div>
    </section>


    <section id="bani" class="section-header wooden-1">
        <header data-speed="10" data-type="background">
            <div class="overlay"></div>
            <div class="container">
                <h2>Бани</h2>
                <div class="buttons">
                    <a href="#" class="button button-red">Отделение высшего разряда</a>
                    <a href="#" class="button button-red">Отделение низшего разряда</a>
                    <a href="#" class="button button-red">Душевые номера</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-bani">
            <div class="text">
                    <p>Кировские бани — классическая русская баня в Оренбурге и, особенно полезна городским жителям, ведущим малоподвижный образ жизни. Она нормализует обмен веществ, лечит простудные заболевания, способствует выведению шлаков из организма. </p>
            </div>
            <div class="paddings columns clearfix">
                <div class="seven columns alpha">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/bani-1.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/bani-1thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns beta">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/bani-2.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/bani-2thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns omega">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/bani-3.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/bani-3thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="sauna" class="section-header wooden-1">
        <header data-speed="10" data-type="background">
            <div class="overlay"></div>
            <div class="container">
                <h2>Сауна</h2>
                <div class="buttons">
                    <a href="#" class="button button-red">Прайс-лист</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-sauna">
            <div class="text">
                    <p>Сауна от «Кировских Бань» приглашает Вас насладиться домашней атмосферой и уютной обстановкой. Предлагаем Вам забыть на время о суете и динамике внешнего мира и погрузиться в полную релаксацию в наших стенах.</p>
            </div>
            <div class="paddings columns clearfix">
                <div class="seven columns alpha">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/sauna-1.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/sauna-1thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns beta">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/sauna-2.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/sauna-2thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns omega">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/sauna-3.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/sauna-3thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="uslugi" class="section-header wooden-1">
        <header data-speed="10" data-type="background">
            <div class="overlay"></div>
            <div class="container">
                <h2>Доп. услуги</h2>
                <div class="buttons">
                    <a href="#" class="button button-red">Салон Шадэ</a>
                    <a href="#" class="button button-red">Магазин</a>
                    <a href="#" class="button button-red">Мойка тела</a>
                    <a href="#" class="button button-red">Закасочная</a>
                    <a href="#" class="button button-red">Душ Шарко</a>
                </div>
            </div>
        </header>
        <div class="container text-right" id="box-sauna">
            <div class="text">
                    <p>Так вы всегда можете заказать дополнительные услуги, которые оказывают "Кировские бани" своим любимым посетителям. К ним относятся парикмахерская, магазин, закусочная, мойка тела и душ "Шарко".</p>
            </div>
            <div class="paddings columns clearfix">
                <div class="seven columns alpha">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/us-1.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/us-1thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns beta">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/us-2.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/us-2thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
                <div class="seven columns omega">
                    <a class="thumb" data-lb="lightbox" href="<? echo get_template_directory_uri(); ?>/images/photo/us-3.jpg">
                        <div class="hover"><i class="fa fa-search"></i></div><img src="<? echo get_template_directory_uri(); ?>/images/photo/us-3thumb.jpg" alt="">
                        <div class="frame"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<section id="contact" class="section-header building-1 wooden-1">
    <header data-speed="10" data-type="background">
        <div class="overlay"></div>
        <div class="container">
            <h2>Контакты</h2>
        </div>
    </header>
    <div class="container text-right" id="box-contact">
        <div class="text">
            <p>Кировские бани это баннй комплекс для всей семьи: одновременно работают отделения с обновленными интерьерами для женжин и для мужчин, сауна, буфет, массажи, салон парикмахерская Шадэ.</p>
            <div class="map">
                <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=q-ai15yV_mUKIpsDXFKkLJXoSfStwRgo"></script>
            </div>

            <div class="information">
                <div class="item phone">
                    <i class="li_phone"></i> <b>77-98-31</b>
                </div>
                <div class="item location">
                    <i class="li_location"></i> <b>Город Оренбург, улица Кирова, 39</b>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>