<?php 
	/* Template Name: Collection */ 
	 
	get_header();
	
?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/custom-new.css" >
<section class="collection_imgContainer">
	<div class="Collection_img">
		<img src="<?php echo get_template_directory_uri() ?>/images/rswmwebv1.png ?>" alt="" />
	</div>
</section>

<?php get_footer(); ?>

<style>
	.Collection_img {
		max-width:800px;
		display:block;
		margin: 50px auto;
	}
	
	section.collection_imgContainer {
		padding-top: 60px;
	}
	
	.Collection_img img {
		display:block;
		width:100%;
	}
</style>