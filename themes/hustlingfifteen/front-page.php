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
        <!-- the header goes here -->
          <div class="header">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/_/images/header.png" class="imageheader" />
          </div>

  <br><br>
            <!-- blog posts go here -->
          <div class="main-content" class="clearfix">

              <div class="post-box">
                <h2 align="center">10 Super Street Style Inspiring Photos</h2>
                <p align="center" class="date">September 26, 2015</p>


              <!-- BREAKING LINE BELOW THE DATE -->

                      <div class="line-container">
                            <div class="line1">

                            </div>
                            <div class="line2">

                            </div>
                      </div>


              <!-- END OF BREAKING LINE -->
                <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <br><br>
                <a href="#" class="continue-box">Continue Reading</a>
                <br><br><br><br>
                <div class="post-footer clearfix">
                  <div class="float-left">Posted by Devesh Sharma &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/images/bubbles.svg" style="width: 15px; height: 15px;">&nbsp;&nbsp;Leave a Comment</div>
                  <div class="float-right">Share<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/images/facebook.svg" style="width: 15px; height: 15px;">&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/images/twitter.svg" style="width: 15px; height: 15px;"></div>
                </div><!-- end of post's footer -->

              </div><!-- end of blog posts here -->




      </div> <!-- end of wrapper -->

  </div> <!-- end of container -->



<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
