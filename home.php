<?php include_once 'header.php'; ?>

<h1>Posts Template</h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="post">
            <img style="width: 150px; height: 150px;" src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; ?>

    <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div>
<?php endif; ?>

<?php include_once 'footer.php'; ?>