        </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">

                    <!-- Left Footer Widget and Menu -->
                        <div class="col-md-3 left-footer-container">

                        <!-- Left Footer Widget -->
                            <div class="left-footer-widget">
                                <?php
                                    dynamic_sidebar('left-footer-widget');
                                ?>                        
                            </div>

                        <!-- Left Footer Menu -->
                            <div class="left-footer-menu">
                                <?php // Create conditional loop for footer menu
                                    if(has_nav_menu('footer-left')){ ?>
                                        <nav class="footer-menu">
                                            <?php // Create Navigation Menu
                                                wp_nav_menu(array(
                                                    // Key                      Value
                                                    'theme_location'   => 'footer-left',
                                                ));
                                            ?>
                                        </nav><?php
                                    } else {
                                        echo "<p>Please select a menu through the dashboard</p>";
                                    }
                                ?>
                            </div>
                        </div>

                    <!-- Middle Footer Widget and Menu -->
                        <div class="col-md-3 middle-footer-container">

                        <!-- Middle Footer Menu -->
                            <div class="middle-footer-menu">
                                <?php // Create conditional loop for footer menu
                                    if(has_nav_menu('footer-middle')){ ?>
                                        <nav class="footer-menu">
                                            <?php // Create Navigation Menu
                                                wp_nav_menu(array(
                                                    // Key                      Value
                                                    'theme_location'   => 'footer-middle',
                                                ));
                                            ?>
                                        </nav><?php
                                    } else {
                                        echo "<p>Please select a menu through the dashboard</p>";
                                    }
                                ?>
                            </div>
                        <!-- Middle Footer Widget -->
                            <div class="middle-footer-widget">
                                <?php
                                    dynamic_sidebar('middle-footer-widget');
                                ?>                        
                            </div>
                        </div>

                    <!-- Right Footer Widget and Menu -->
                        <div class="col-md-3 right-footer-container">

                        <!-- Right Footer Menu -->
                            <div class="right-footer-menu">
                                <?php // Create conditional loop for footer menu
                                    if(has_nav_menu('footer-right')){ ?>
                                        <nav class="footer-menu">
                                            <?php // Create Navigation Menu
                                                wp_nav_menu(array(
                                                    // Key                      Value
                                                    'theme_location'   => 'footer-right',
                                                ));
                                            ?>
                                        </nav><?php
                                    } else {
                                        echo "<p>Please select a menu through the dashboard</p>";
                                    }
                                ?>
                            </div>
                        <!-- Right Footer Widget -->
                            <div class="right-footer-widget">
                                <?php
                                    dynamic_sidebar('right-footer-widget');
                                ?>                        
                            </div>
                        </div>
                        
                        <div class="footer-meta">
                            <h2>Website Created by Nomad Web Designs</h2>
                            <p>Copyright &copy; 2022, all rights reserved.</p>
                        </div>

                    </div>
                </div>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>