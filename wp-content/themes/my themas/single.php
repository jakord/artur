<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <h2 class="text-center"><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>