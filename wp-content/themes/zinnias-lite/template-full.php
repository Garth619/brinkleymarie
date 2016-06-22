<?php
// Template Name: Full Width
 get_header(); ?>

    <!-- main-content section start -->
    <div class="main-content">
        <div class="row">

            <div class="col-md-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                <?php endwhile; // end of the loop. ?>

            </div>

        </div>
    </div>
    <!-- main-content section end -->

<?php get_footer(); ?>