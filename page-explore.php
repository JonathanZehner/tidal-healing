<?php 
    /*  Template Name: Explore Page
        Template Post Type: page
    */
    get_header(); 
?>
    <main class="container explore">
        <?php
        // WordPress Loop
            if(have_posts()){
                while(have_posts()){// While Loop
                    the_post(); 
        ?>
                <!-- HTML: Structure the page -->
                    <div class="single-page">
                        <div class="text-container">
                            <h2 class="page-title"><a href="<?php get_the_permalink();?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php echo the_content(); ?></p>
                        </div>
                    </div>
        <?php
                }// End While Loop
            }// End WP Loop
        ?>
    </main>
<?php get_footer(); ?>