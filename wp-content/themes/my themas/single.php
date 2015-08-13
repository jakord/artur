<?php get_header(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <h2 class="text-center"><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
<?php get_footer(); ?>