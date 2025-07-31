<?php get_header(); ?>

<div id="content" class="w_inner">
    <?php if(have_posts()) :while (have_posts()):the_posts(); ?>
    <h1 class="ttl"><?php the_title(); ?></h1>
    <div class="date"><?php the_date('Y.m.d')?></div>
    <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<?php get_footer(); ?>