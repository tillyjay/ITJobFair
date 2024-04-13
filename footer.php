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
            <div class="col-md-6">
                <div class="secondary">
                    <?php
                        $menu_items = wp_get_nav_menu_items('Secondary Menu');
                        $count = count($menu_items);
                        $i = 1;
                        foreach ($menu_items as $menu_item) {
                            echo '<a class="nav-link mx-1" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                            if ($i < $count) {
                                echo ' · ';
                            }
                            $i++;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

