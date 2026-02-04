<?php 
	/* Template Name: transfer-of-shares-to-iepf-1.php */ 
	get_header('less');
	global $post;
	$default_taxnomy = 'category';$year_tax = get_terms('year');$annualyear = get_terms('annual-year');
?>
<?php get_template_part('template-investors/new-top', 'menu') ?>
<div class="container">
    <div class="topdetail-content">
        <div class="investor-select-wrap">
            <?php $get_children = get_terms( $default_taxnomy, array( 'child_of' => 123 ) ); ?>
            <?php foreach($get_children as $result) { ?>
            <div class="accordian_Innercontent newfinance">
                <?php $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $result->taxonomy, "field" => "id", "terms" => array($result->term_id),), )); $shareholder_query = new WP_Query($shareholder_args);?>
                <?php if($shareholder_query->have_posts() ) { ?>
                <h3><?php echo $result->name ?></h3>
                <ul class="<?php echo $result->slug ?>_responsive">
                    <?php while($shareholder_query->have_posts() ) { $shareholder_query->the_post() ?>
                    <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                    <?php $wpcfpdfurl2 = get_post_meta(get_the_ID(), 'wpcf-pdf-url-hindi', true); ?>
                    <li>
                        <?php if($wpcfpdfurl2 == '' && $wpcfpdfurl1 != '' ) { ?>
                        <a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
                            <?php } ?> <span class="newspaper-text"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php the_title(); ?> </span>
                            <?php if($wpcfpdfurl2 != '' ) { ?> <span class="newspaper-vers"><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">English </a> <span>|</span><a href="<?php echo $wpcfpdfurl2 != '' ? $wpcfpdfurl2 : 'javascript:void(0)' ; ?>"
                                target="_blank">Hindi </a></span>
                            <?php } ?>
                            <?php if($wpcfpdfurl2 == '' && $wpcfpdfurl1 != '' ) { ?> </a>
                        <?php } ?> </li>
                    <?php } ?> </ul>
                <?php } ?> </div>
            <?php } ?> </div>
    </div>
</div>
<?php get_template_part('template-investors/new-footer', 'menu') ?>
