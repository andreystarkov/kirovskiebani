<?php
/**
 * Template Name: Newsss
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
  <header id="slider-wrapper" class="large-header">
        <div class="logo"><h1>Кировские бани</h1></div>
        <div id="nice-slider" class="nice-slider nice-slider-fullwidth" style="height: 420px">
            <ul class="itemwrap">
                <li class="current"><img src="<? echo get_template_directory_uri(); ?>/images/inner/1.jpg" alt=""></li>
                <li><img src="<? echo get_template_directory_uri(); ?>/images/inner/3.jpg" alt=""></li>
                <li><img src="<? echo get_template_directory_uri(); ?>/images/inner/2.jpg" alt=""></li>
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
            <h2 class="news-header"><i class="li_news icon"></i> Новости </h2>
            <div class="box-news clearfix">
            <?php
                $args = array( 'posts_per_page' => 3, );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <a class="news-item" href="<?php the_permalink(); ?>">
                        <b class="news-title"><i class="li_pen icon"></i><?php the_title(); ?></b>
                        <p class="news-content"><? the_excerpt(); ?></p>
                    </a>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div><!-- #content -->
    </div><!-- #primary -->
</section>
<?php get_footer(); ?>