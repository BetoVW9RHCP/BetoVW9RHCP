<footer>
                    <?php
                    $args = array (
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'after' => '<span class="separador"> | </span>'
                    );
                    
                    wp_nav_menu( $args );
                    
                    ?>
</footer>

<?php wp_footer() ?>

</body>
</html>