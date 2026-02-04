<?php get_header('less'); global $post;?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="post-wrapper" style="margin-top: 100px;">
	<div class="container">
		<div class="clear"></div>
		<div class="main"><div class="post-content"><div class="row" id="post-row">
					<div class="content"><h1 class="hider"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div></div></div>
		<div class="clear"></div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer('less'); ?>


