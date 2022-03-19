</div>

<footer class="main-footer">
    <button id="fetchPostsButton">Fetch and log to console posts</button>

    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

    <?php echo wp_nav_menu(
        array(
            "menu" => 'bottom-menu',
            "container" => null,
            "menu_class" => 'bottom-navigation'
        )
    ); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>