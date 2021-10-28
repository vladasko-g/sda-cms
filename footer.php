</div>

<button id="fetchPostsButton">Fetch and log to console posts</button>
<?php echo wp_nav_menu(
    array(
        "menu" => 'bottom-menu'
    )
); ?>

<script>
    window.siteTitle = '<?php echo get_bloginfo('name'); ?>';
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</body>

</html>