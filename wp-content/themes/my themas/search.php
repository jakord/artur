<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

	<div class="row article">
		<div class="col-sm-4 col-xs-4"><a href="<?php the_permalink(); ?>">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
				<?php else: ?>
				<?php endif; ?>
			</a></div>
		<div class="col-sm-8  col-xs-8 "><h5 class="header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<p><?php the_excerpt()?></p>
			<a href="<?php the_permalink()?>"  class="btn btn-danger ">More Info</a>
		</div>
	</div>

<?php endwhile; ?>
<?php else: ?>
	<h2 class="text-center">Your search did not match</h2>
<?php endif; ?>
<?php get_footer(); ?>