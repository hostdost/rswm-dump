<?php
/* Template Name: Custom home root */
get_header('home');
global $post;
$postid         = $post->ID;
$wpcffootertext = get_post_meta($postid, 'wpcf-footer-text', true);
while (have_posts()) {
    the_post();
    $wpcfcaption     = get_post_meta(get_the_ID(), 'wpcf-caption', false);
    $wpcfbanner      = get_post_meta(get_the_ID(), 'wpcf-banner', true);
    $wpcfvideofile  = get_post_meta(get_the_ID(), 'wpcf-video-file', true);
?>
<style type="text/css">
#blog-tbl-content h3 {
    text-transform: unset;
    line-height: 1.2;
}

div#form-rswm-pen a.view-more-blogs {
    background: #555;
    padding: 10px;
    margin-top: 30px;
    display: inline-block;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
}

div#form-rswm-pen a.view-more-blogs:hover {
    background-color: #ebd9b5;
    color: #555;
}

.sped {
    padding: 40 px 0 px 0 px 40 px;
}
.btn-primary{
    background-color: #d7b369;
    border-color: #d7b369;
}
</style>
<section class="homeSliderBlock">
    <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
    <div class="sliderContent textalignleft" style="display: none!important;">
        <div class="captionSlider">
            <?php foreach ($wpcfcaption as $row) { ?>
            <div class="item">
                <?php echo $row ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="homeSlider">
        <?php if (wp_is_mobile()) { ?>
        <div class="item"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slide_mobiles.jpg'); no-repeat top center / cover; background-size: contain; width:865;height:568;">
        </div>
        <!-- <div class="item" style="background-image: url('<?php //echo $wpcfbanner 
                                                                        ?>');no-repeat top center / cover; background-size: contain;width:100%; height:568px;"> -->
        <?php } else { ?>
        <div class="item">
            <video width="100%" preload="auto" autoplay loop muted id="homeslideid">
                <source src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/rswm_home_page-com.mp4"
                    type="video/mp4">
            </video>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>
<div class="testimonials-block sped">
    <div class="container">
        <div class="lnjBhilwaraContent">
            <!--HOME-->
            <?php
            // Start the loop.
            while (have_posts()) : the_post();
                //the_title( '<h2 class="page-title">', '</h2>' ); 
            ?>
            <h1 class="met-title" style="text-transform: uppercase;">A leader in domestic and global textile for over six decades</h1>
            <div class="page-content">
                <?php //the_content(); ?>
                    <p>RSWM Limited, the flagship company of LNJ Bhilwara Group, is one of the leading manufacturers and exporters of synthetic, cotton and blended spun yarns in India. Under the leadership of Mr. Riju Jhunjhunwala, Chairman and Managing Director of RSWM Ltd, the textile company exports a wide range of fabric and yarns to over 70 countries across the globe.</p>

                    <p>Its 12 manufacturing plants with 6.25 lakh spindles, 172 looms, 95 circular and flat knitting machines produce high-quality cotton, melange, synthetic novelty yarns, denim & knitted fabrics. Its annually producing 1,21,000 MT Greige Yarn, 24,000 MT Melange yarn, 32,000 MT Dyed yarn, 32 M Meters Denim Fabric, 9000+ MT Knits Fabric, 43,000 MT Green Fibre.
                </p>
            </div>
            <?php // End of the loop.
            endwhile;
            ?>
        </div>
            <div class="row">
                <div class="col span_12 col-12">
                <a href="#businessenquiries" class="btn btn-primary">For Business Enquiries</a>
                </div>
            </div>
    </div>
</div>
<div class="testimonials-block" id="jamp">
    <div class="container">
        <?php get_header("ourbusiness") ?>
        <div class="row">
            <div class="col span_12">
                <p class="footer_text">
                    <span class="quote">RSWM is one of the largest manufacturers and exporters of<br> synthetic and
                        blended spun yarns from India.</span>
                </p>
            </div>
        </div>
        <div class="row" id="form-rswm-pen" style="display: none!important;">
            <div class="col span_12 col-12">
                <div class="latest_news">
                    <!-- <h3 style="margin-bottom: 20px;">From The Editor's Desk</h3> -->
                    <h3 style="margin-bottom: 20px;">Blogs</h3>
                </div>
            </div>
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 3,);
            $post_query = new WP_Query($args);
            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) : $post_query->the_post();
                    if (has_post_thumbnail()) {
                        $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    }
            ?>
            <div class="col span_4 mb-30 col-md-4 col-12">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="servicesBlock" id="blog-tbl-content" style="background-image: url('<?php echo $image_url[0] ?>'); background-size:cover;">
                        <!-- <img src="<?php //echo $image_url[0] ?>" title="Premier Yarn Manufacturer" width="" height=""
                            alt="RSWM Ltd. is a Premier Yarn Manufacturer in India"> -->
                        <div class="servicesContent">
                            <h3 style="display: none;">
                                <?php the_title(); ?> </h3>
                        </div>
                        <div class="servicesHover">
                            <div class="servicesTable">
                                <div class="servicesTablecell">
                                    <h3><?php the_title(); ?></h3>
                                    <!-- <p class="spotlights"><?php the_excerpt(); ?><br> -->
                                    <i class="fa fa-angle-right" aria-hidden="true"
                                        style="color: #fff;font-size: 20px;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="col span_12 col-12">
            <a href="<?php echo get_the_permalink(5342); ?>" class="view-more-blogs">View More</a>
            </div>
        </div>

        <!--
        <div class="row">
            <div class="col span_12">
                <div class="latest_news">
                    <h3>Latest News Update </h3>
                </div>
            </div>
        </div>
-->
        <!--

        <div class="row">
            <div class="col span_6">
                <div class="left_coverage">
                    <h3> RSWM Ltd. inks strategic partnership with HeiQ to offer anti-COVID fabric under Mayur brand</h3>
                </div>
            </div>
            <div class="col span_6">
                <div class="right_coverage">
                    <a href="<?php echo site_url(); ?>/news-coverage/ ">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/01/demoimg.jpg" width="100%" height="auto">
            </a>
                </div>
            </div>
-->
    </div>
</div>
</div>
<section class="aboutContact_form">
    <?php get_template_part('contact-form') ?>
</section>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "RSWM Limited",
    "url": "<?php echo site_url(); ?>/",
    "logo": "<?php echo site_url(); ?>/wp-content/themes/rswm/images/rswm-logo.svg",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-120-4390300",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": "en"
    },
    "sameAs": [
        "https://www.linkedin.com/company/rswmofficial/",
        "https://www.facebook.com/rswmofficial/",
        "https://twitter.com/rswmofficial",
        "https://www.instagram.com/rswmofficial/"
    ]
}
</script>
<?php get_footer(); ?>