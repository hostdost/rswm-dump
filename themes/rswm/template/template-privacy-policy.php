<?php
/*Template Name: Privacy Policy HD*/
?>
<?php get_header('hd');
global $post; ?>
<?php
/*if (isset($_GET['id'])) {
	$id = $_GET['id'];*/
$args = array('post_type' => 'page', 'p' => $id);
$single_post = new WP_Query($args);
//$banner_img = 'https://rswm.in/wp-content/themes/rswm/images/investor-relation-banner.jpg';/*get_post_meta($id, 'wpcf-post-top-banner', true);*/
//echo 'banner : '. $banner_img;
function wph_add_class_for_p_tag($content)
{
	$content = str_replace('<p>', '<p style="margin-bottom:15px; line-height:19px;">', $content);
	$content = str_replace('<h2>', '<h2 style="margin-bottom:20px;">', $content);
	$content = str_replace('<h3>', '<h3 style="margin-bottom:10px; color:#dec186; font-size:16px;">', $content);
	return $content;
}

add_filter('the_content', 'wph_add_class_for_p_tag', 9999);
add_filter('the_excerpt', 'wph_add_class_for_p_tag', 9999);
?>

<div class="post-wrapper single-test" style="margin-top: 10px;">
	<div class="header-banner-single" style=" background:#ccc; background-image:url('https://rswm.in/wp-content/themes/rswm/images/investor-relation-banner.jpg')">
		<p class="center-text-img"><?php echo the_title(); ?></p>
	</div>

	<div class="container">
		<div class="clear"></div>
		<div class="row">

			<div class="col span_12">
				<?php //if ($single_post->have_posts()) : $single_post->the_post(); 
				?>
				<div class="main" style="border:none;">
					<div class="post-content">
						<div class="row" id="post-row">
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- closee col span-9 -->

			<?php //endif; 
			?>
			<?php wp_reset_postdata(); ?>
			<div class="clear"></div>

		</div>
		<div class="clear"></div>
	</div>
</div>

<?php //} 
?>
<style type="text/css">
	.main {
		border-right: 2px solid #dec18678;
		padding-right: 10px;
		margin-bottom: 20px;
	}

	.date-wrap,
	.tag-wrap,
	.cat-wrap {
		min-height: 100px;
		margin-bottom: 30px;
	}

	.sidbar-sec h2 {
		font-size: 24px;
		color: #dec186;
		margin-bottom: 10px;
		border-bottom: 2px solid;
		padding-bottom: 10px;
	}

	.sidbar-sec p {
		font-size: 14px;
		padding-top: 5px;
	}

	.header-banner-single {
		position: relative;
		margin-bottom: 30px;
	}

	.header-banner-single p {
		font-size: 50px;
		text-decoration: none;
		color: #fff;
		text-transform: uppercase;
		background: #dec186ad;
		padding: 5px;
	}

	.center-text-img {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.sidbar-sec {
		font-family: 'gotham_htfbook', sans-serif;
	}

	.header-banner-single {
		height: 350px;
		background-position: center, center !important;
		background-repeat: no-repeat !important;
		background-size: cover !important;
	}

	.inner-related-post-wrapper img {
		width: 100%;
		height: 340px;
	}

	.inner-text {
		text-align: center;
		margin-bottom: 10px;
		margin-top: 15px;
	}

	.inner-text p {
		text-transform: capitalize;
	}

	.related-post-wrap h2 {
		text-align: center;
		margin-bottom: 20px;
		text-transform: uppercase;
		font-size: 24px;
	}

	.inner-text-title {
		font-size: 15px;
		line-height: 1.3;
		margin-bottom: 5px;
	}

	.inner-text-date {
		font-size: 12px;
		font-weight: bold;
	}

	.inner-related-post-wrapper {
		border: 1px solid #80808040;
		padding: 10px;
		border-radius: 5px;
		margin-bottom: 20px;
		box-shadow: 1px 2px #dec186ad;
		min-height: 460px;
		max-height: 460px;
	}

	.inner-related-post-wrapper a {
		text-decoration: none;
		color: inherit;
	}

	.tag-list {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
	}

	.tag-list p {
		border: 2px solid #80808042;
		margin-right: 5px;
		padding: 5px;
	}
</style>
<?php get_footer(); ?>