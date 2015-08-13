<?php get_header(); ?>
            <?php while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4 category-page">
        <div><?php the_post_thumbnail(true,array('class' => "img-rounded img-responsive")); ?></div>
        <h2 class="text-center"><?php the_title(); ?></h2>
        <p class="text-center"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink();?>">Read More</a>
    </div>
            <?php endwhile; ?>
<?php get_footer(); ?>