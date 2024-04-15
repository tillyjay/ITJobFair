</main>
</div> <!-- div.container -->

<footer class="mt-5 py-5">
    <div class="container secondary-menu">
        <div class="row">
            <div class="col-md-6">
                <div class="copy">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/birdLogo.png" class="float-left mr-2" alt="Bird Logo">
                    &copy; 2019-2024 - Blackbird Project
                </div>
            </div>
            <div class="col-md-6" id="leftCol">
            <div class="secondary">
                    <?php
                        $menu_items = wp_get_nav_menu_items('Secondary Menu');
                        $count = count($menu_items);
                        $i = 1;
                        foreach ($menu_items as $menu_item) {
                            if ($i == $count) {
                                //if last menu item change href to email link
                                echo '<a class="nav-link mx-1" href="mailto:itjobfair@nscc.ca?Subject=IT%20Job%20Fair%20Bugs">' . $menu_item->title . '</a>';
                            } else {
                                //for all other menu items keep original href
                                echo '<a class="nav-link mx-1" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                            }
                            if ($i < $count) {
                                echo ' · ';
                            }
                            $i++;
                        }
                    ?>
                </div>

                <div id="upBtn">
                    <a href="#top" id="upLink">
                        <img id="chevronUp" src="<?php echo get_template_directory_uri(); ?>/assets/images/chevronUp.png" alt="Up Button">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

