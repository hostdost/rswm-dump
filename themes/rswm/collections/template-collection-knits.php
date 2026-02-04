<?php /* Template Name: collection Knits */ ?>
<?php get_header('collection') ?>
<style>
    .hider {
        /* display: none!important; */
    }
</style>
<div class="new-collection">

    <div class="row">
        <div class="col span_12">
            <div class="new-collection-heading">
                <img src="<?php echo get_template_directory_uri() ?>/images//collection/knits_banner.jpg" />
                <br>
                <h1 class="hider">KNITS COLLECTIONS</h1>
            </div>
        </div>
    </div>
    <!-- Flipbook -->
    <div class="container">
        <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
            src="https://heyzine.com/flip-book/65a935d9a6.html"
            style="border: 1px solid lightgray; width: 100%; height: 490px;"></iframe>
        <!-- <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/a49f00c31c.html" style="border: 1px solid lightgray; width: 100%; height: 498px;"></iframe> -->
    </div>
    <!-- Flipbook -->
    <div class="container">
        <div class="new-collection-para">
            <div class="row">
                <div class="col span_12">
                    <p>Sustainable production has been one of the foremost focus of major industries all around the
                        world. As the climate evolves, we evolve. Embracing this evolution, our team of textile
                        designers, textile engineers, and researchers, came up with stories that symbolise the shift in
                        yarn innovation.</p>
                    <p> Using fibres like organic cotton, hemp, jute, linen, silk, wool and many others obtained from
                        Mother Nature herself, we have devised a new line of products that bask in the glory of being
                        fair to the environment. But we didn't want to stop there. </p>
                    <p>Capturing the essence of humanity's transition into a sustainable era was of supreme importance
                        to us at RSWM. We studied compositions, patterns and colours that carry with them an emotional
                        pulse of all that's happening around the world.</p>
                </div>
            </div>
        </div>

        <div class="new-collection-thumb">
            <?php $collection_num = 4;
            if ($collection_num % 2 != 0) { ?>
                <div class="row singlecollection-wrap">
                <?php } else { ?>
                    <div class="row">

                    <?php } ?>
                    <!--  LNJ voyage collection -->
                    <div class="col-md-6 col-12 span_6">
                        <div class="new-collection-thumb-image">
                            <a href="<?php echo get_permalink(7837) ?>"
                                class="<?php echo $obj->ID == 7837 ? 'active' : '' ?>" title="VOYAGE">
                                <img src="https://rswm.in/wp-content/uploads/2025/09/voyage-banner.jpg" />
                            </a>
                            <h4>
                                <a href="<?php echo get_permalink(7837) ?>"
                                    class="<?php echo $obj->ID == 7837 ? 'active' : '' ?>" title="VOYAGE">VOYAGE</a>
                                <!-- <a href="<?php //echo get_permalink(7837) 
                                                ?>" class="<?php //echo $obj->ID == 7837 ? 'active' : '' 
                                                            ?>" title="GREIGE YARN">COMING SOON</a> -->
                            </h4>
                        </div>
                    </div>
                    <!--  LNJ voyage collection -->


                    <!--  LNJ eco fusion collection -->
                    <div class="col-md-6 col-12 span_6">
                        <div class="new-collection-thumb-image">
                            <a href="<?php echo get_permalink(7632) ?>"
                                class="<?php echo $obj->ID == 7632 ? 'active' : '' ?>" title="ECO FUSION">
                                <img src="https://assets-rswm.s3.ap-south-1.amazonaws.com/eco-fusion-banner.png" />
                            </a>
                            <h4>
                                <a href="<?php echo get_permalink(7632) ?>"
                                    class="<?php echo $obj->ID == 7632 ? 'active' : '' ?>" title="ECO FUSION">ECO
                                    FUSION</a>
                                <!-- <a href="<?php //echo get_permalink(7632) 
                                                ?>" class="<?php //echo $obj->ID == 7632 ? 'active' : '' 
                                                            ?>" title="GREIGE YARN">COMING SOON</a> -->
                            </h4>
                        </div>
                    </div>
                    <!--  LNJ eco fusion collection -->

                    <!--  LNJ Knits collection -->
                    <div class="col-md-6 col-12 span_6">
                        <div class="new-collection-thumb-image">
                            <a href="#<?php echo get_permalink(7652)
                                        ?>" class="<?php echo $obj->ID == 7652 ? 'active' : ''
                                                    ?>" title="KNIT FIT">
                                <img
                                    src="https://assets-rswm.s3.ap-south-1.amazonaws.com/collection/knits-fit-thumbnail.png" />
                            </a>
                            <h4>
                                <a href="<?php echo get_permalink(7652)
                                            ?>" class="<?php echo $obj->ID == 7652 ? 'active' : ''
                                                        ?>" title="KNIT FIT">KNIT FIT</a>
                                <!-- <a href="<?php //echo get_permalink(7652) 
                                                ?>" class="<?php //echo $obj->ID == 7652 ? 'active' : '' 
                                                            ?>" title="GREIGE YARN">COMING SOON</a> -->
                            </h4>
                        </div>
                    </div>
                    <!--  LNJ Knits collection -->
                    <!-- Soul -->
                    <div class="col-md-6 col-12 span_6">
                        <div class="new-collection-thumb-image">
                            <a href="<?php echo get_permalink(7293) ?>"
                                class="<?php echo $obj->ID == 7293 ? 'active' : '' ?>" title="SOUL AW 25.26">
                                <img src="https://rswm.in/wp-content/uploads/2024/07/collection-soul.jpg" />
                            </a>
                            <h4>
                                <a href="<?php echo get_permalink(7293) ?>"
                                    class="<?php echo $obj->ID == 7293 ? 'active' : '' ?>" title="SOUL AW 25.26">SOUL AW
                                    25.26</a>
                            </h4>
                        </div>
                    </div>

                    <!-- Soul -->
                    <!-- The KNitscape -->
                    <div class="col-md-6 col-12 span_6 ">
                        <div class="new-collection-thumb-image">
                            <a href="<?php echo get_permalink(7091) ?>"
                                class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">
                                <img src="https://rswm.in/wp-content/uploads/2024/02/collection-knitscapemin.jpg" />
                            </a>
                            <h4>
                                <a href="<?php echo get_permalink(7091) ?>"
                                    class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>" title="KNITSCAPE">KNITSCAPE
                                </a>
                            </h4>
                        </div>
                    </div>
                    <!--/ The KNitscape  -->



                    </div>

                </div>

        </div>


        <?php get_footer() ?>