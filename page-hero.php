<?php  
    /*
        Template Name: Hero Image
        Template Post Type: page
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale-1" />

        <title><?php bloginfo('name'); ?></title>

        <!--=============== Fonts ================-->
        <link rel="stylesheet" href="https://use.typekit.net/flc2bxu.css">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="content">
            <?php
                // Begin WordPress Loop:
                if(have_posts()){
                    // Begin While Loop:
                    while(have_posts()){
                        the_post(); ?>
                    
        <!-- Begin Header Section: manually coded for this specific page template -->
                        <header class="home-page-header">
                            <div class="container">
                                <div class="row">
                                    <!-- // HTML Hero Image: featured image assigned to this page. -->
                                    <div class="hero-container">
                                        <!-- Create container for Hero Image -->
                                        <div class="hero-image">
                                            <!-- Call featured img. of this page -->
                                            <?php the_post_thumbnail('full'); ?> 
                                        </div>
                                        <!-- Create container for Hero Title -->
                                        <div class="hero-title container">
                                        <!-- Brand Logo -->
                                            <div class="col-lg-6 logo-container">
                                                <?php
                                                    // Display logo if it's set, if not then display site title
                                                    if(get_header_image() == ''){ ?>
                                                        <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
                                                    <?php
                                                    } else {?>
                                                        <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="Company Logo" /></a>
                                                    <?php
                                                    }
                                                ?>
                                            </div>                        
                                        <!-- Navigation Menu -->
                                            <div class="col-lg-6 navigation">
                                                <nav class="custom-menu-class">
                                                    <?php // Create Navigation Menu
                                                        wp_nav_menu(array(
                                                            // Key                      Value
                                                            'theme_location'    =>  'main-menu',
                                                        ));
                                                    ?>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    <!-- End Header Section -->

        <!-- // Body Content:  -->
                        <!-- Create container to hold everything in middle of the page. -->
                        <div class="container">
                            <!-- Call Bootstrap -->
                            <div class="row">
                            <!-- Main Content -->
                                <main class="col-md-12">
                                    <section class="page-hero-content">
                                        <?php the_content(); ?>
                                    </section>
                                </main>
                            </div>
                        </div>
                    <!-- End Body Content -->

                <!-- Close out conditional statements -->
                    <?php
                    } // While Loop
                } // End if statement
                ?>

        <!-- Custom WordPress Query for Testimonials -->
                        <aside class="container">
                            <h3>Testimonials</h3>
                            <p>Some text to describe the query below.</p>
                            <div class="row">
                                <?php 
                                // Create variable for arguments
                                    $args = array(
                                        'post_type'         =>  'post',
                                        'post_status'       =>  'publish',
                                        'posts_per_page'    =>   3,
                                        'order'             =>  'DESC',
                                        'orderby'           =>  'rand',
                                        'category_name'     =>  'testimonials'
                                    );

                                // Create variable for query
                                    $query = new WP_Query($args);

                                // WordPress Loop (modified for query)
                                    if($query->have_posts()){
                                        while($query->have_posts()){
                                            $query->the_post(); 
                                ?>
                                        <!-- HTML for the post -->
                                            <div class="individual-post col-md-4">
                                            <!-- Set featured image -->
                                                <div class="index-featured-image">
                                                    <?php the_post_thumbnail('thumbnail'); ?>
                                                </div>

                                            <!-- The post -->
                                                <div class="text-container">
                                                    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                                    <p class="excerpt"><?php echo the_excerpt(); ?></p>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </aside>
        <!-- Get Footer -->                
            <?php
                // Insert Footer
                get_footer();
            ?>
