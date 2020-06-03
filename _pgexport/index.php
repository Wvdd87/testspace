<?php get_header(); ?>

    <section style="width: 100vw; height: 100vh;">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php PG_Helper::rememberShownPost(); ?>
                <div style="overflow: hidden;" <?php post_class( 'container' ); ?> id="post-<?php the_ID(); ?>">
                    <?php echo PG_Image::getPostImage( null, 'large', array(
                            'style' => 'height: 50vh; width: 100%;'
                    ), 'both', null ) ?>
                    <h1><?php the_title(); ?></h1>
                    <h2><span><?php echo get_post_meta( get_the_ID(), 'time', true ); ?></span> /// <span><?php echo get_post_meta( get_the_ID(), 'place', true ); ?></span></h2>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'test_theme' ); ?></p>
        <?php endif; ?>
    </section>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <section class="hero-section">
        <video controls="1" autoplay="true" loop="true" muted="true" style="margin-left: auto; margin-right: auto; width: 100vw; height: 100vh; position: fixed; object-fit: cover;"> 
            <source src="assets/video/smimb_1.mp4" type="video/mp4">
            <?php _e( 'Your browser doesn\'t support HTML5 video tag.', 'test_theme' ); ?>
        </video>
    </section>        

<?php get_footer(); ?>