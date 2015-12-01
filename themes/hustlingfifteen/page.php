<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="container">
    <div class="wrapper">
      <br /><br />
          <!-- blog posts go here -->
        <div class="main-content" class="clearfix">

            <div class="post-box">
              <h2 align="center"><?php the_title(); ?></h2>
              <h3>I am page.php</h3>

            <!-- BREAKING LINE BELOW THE DATE -->

                    <div class="line-container">
                          <div class="line1">

                          </div>
                          <div class="line2">

                          </div>
                    </div>


            <!-- END OF BREAKING LINE -->
              <p class="post-content"><?php the_content(); ?></p>
                <br><br>

            </div><!-- end of blog posts here -->




    </div> <!-- end of wrapper -->

</div> <!-- end of container -->

<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
