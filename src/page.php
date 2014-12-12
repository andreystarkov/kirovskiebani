<?php get_header(); ?>
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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            <?
            $page_id = $_GET['page_id'];
            $page_data = get_page( $page_id );
            echo apply_filters('the_content', $page_data->post_content);
            ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>