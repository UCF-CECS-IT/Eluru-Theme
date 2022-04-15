<?php

get_header();
the_post();

?>

<article class="<?php echo $post->post_status; ?> post-list-item">

	<div id="content" class="clearfix shadow">
		<h2 class="h3">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="meta">
			<span class="date text-muted text-uppercase letter-spacing-3"><?php the_time( 'F j, Y' ); ?></span>
		</div>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</div>
</article>


<?php get_footer(); ?>
