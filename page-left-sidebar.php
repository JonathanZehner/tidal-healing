<?php 
    /*  
        Template Name: Left Sidebar
        Template Post Type: page
    */
    get_header(); 
?>

    <div class="container sidebar-template-page">
        <div class="row">

        <!-- Create Left Sidebar -->
            <aside class="col-md-3 sidebar-template-page aside">
                <?php get_sidebar(); ?>
            </aside>

            <main class="col-md-9">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>

                            <div class="single-page">
                                <div class="text-container">
                                    <h2><a href="<?php get_the_permalink();?>"><?php the_title(); ?></a></h2>
                                    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>

                        <?php
                        }
                    }
                ?>
            </main>
        </div>
    </div>

<?php get_footer(); ?>