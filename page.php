<?php
/*

	Template Name: Page Main

*/
?>
    <?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2>Felix Treitler</h2>
            <h3>Clinical Social Work/Therapist, LICSW, USTA, USPTA</h3>
            <img src="wp-content/themes/felix/images/felix.jpg">

            <?php
			while ( have_posts() ) : the_post();

				//get_template_part( 'template-parts/page/content', 'page' );    
?>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div id="mycontentid" class="some classes">
                    <?php the_content(); ?>
                </div>

                <?php         
          
          
          
          
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
?>


                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Groups</h2>
                <p>Meets every Saturday, 9-10am at 71 Adams Street, Milton, MA. Walk-ins Welcome.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Activity Therapy</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Testimonials</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <?php get_footer(); ?>