<?php include_once 'header.php'; ?>

<h1>Posts Template</h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; ?>

    <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div>
<?php endif; ?>

<?php include_once 'footer.php'; ?>