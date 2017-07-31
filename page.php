<?php
/*

	Template Name: Page Main

*/
?>
    <?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <div class="header-container">
                <div class="header-title">
                    <h2>
                        <?php the_field('header_title'); ?>
                    </h2>
                </div>
                <div class="header-meta">
                    <h3>
                        -
                        <?php the_field('header_meta'); ?>
                    </h3>
                </div>
            </div>
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


                <p><a class="btn btn-primary btn-lg" href="#" role="button">Contact Me<br>t: <?php the_field('contact_me_button'); ?></a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Groups</h2>
                <p>Bereavement Group meets every Saturday, 9-10am at 71 Adams Street, Milton, MA. Walk-ins Welcome.</p>
                <p><a class="btn btn-default" href="<?php the_field('groups_link'); ?>" role="button">View more &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Activity Therapy</h2>
                <p>I have also developed Activity Therapy. This incorporates the clients' favorite activity, creative interest, or sport into the therapy itself...</p>
                <p><a class="btn btn-default" href="<?php the_field('activity_therapy_link'); ?>" role="button">View more &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Family and Marital Therapy</h2>
                <p>Coming Soon...</p>
                <p><a class="btn btn-default" href="<?php the_field('family_and_marital_therapy_link'); ?>" role="button">Learn More &raquo;</a></p>
            </div>
        </div>

        <?php get_footer(); ?>