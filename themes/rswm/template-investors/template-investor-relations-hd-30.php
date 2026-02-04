<?php

/* Template Name: Investors Relations 30 */

get_header('hd');

global $post;

?>

<style>
    .investeTBanner img {

        width: 100%;

        display: block;

    }

    .investeTBanner {

        position: relative;

        margin-top: 92px;

    }

    .investeTBannerContent {

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

    }

    .inversterGrid .grid {

        margin: 0 -1px;

    }

    .investeTBannerContent h2 {

        font-size: 37px;

        text-transform: uppercase;

        font-family: 'gotham_htfbook';

        color: #fff;

        font-weight: normal;

        letter-spacing: 7px;

        border-bottom: 1px solid #fff;

        padding-bottom: 20px;

    }

    .grid-item,
    .grid-sizer {

        width: 33.33%;

    }

    .grid-item {

        float: left;

        overflow: hidden;

        padding: 0 1px;

        margin-bottom: 2px;

    }

    .grid-item.width_2 {

        width: 66.66%
    }

    .grid-item img {

        object-fit: cover;

        height: 100%;

        width: 100%;

    }

    .grid-item img,
    .grid-item a {

        display: block;

        height: 100%;

    }

    .height1 {

        height: 210px;

    }

    .height2 {

        height: 420px;

    }

    .height3 {

        height: 630px;

    }

    .investorCaption {

        position: absolute;

        left: 50%;

        top: 50%;

        transform: translate(-50%, -50%);

        width: 100%;

        object-fit: cover;

        width: 100%;





    }

    .investorCaption h2 {

        font-size: 19px;

        text-transform: uppercase;

        font-family: 'gotham_htfbook';

        color: #fff;

        font-weight: normal;

        text-align: center;

    }

    .investorCaption h2 a {

        text-decoration: none;

        color: #fff;

    }

    .inversterGrid {

        margin-bottom: 40px;

    }



    * {

        -webkit-box-sizing: border-box;

        -moz-box-sizing: border-box;

        box-sizing: border-box;

    }





    /*grid new*/



    .inversterGrid1 ul li {

        float: left;

    }



    .inversterGrid1 ul li img {

        display: block;

        width: 100%;

    }

    .inversterGrid1 ul:after {

        content: '';

        display: block;

        clear: both;

    }

    .inversterGrid1 {

        margin-bottom: 40px;

    }
</style>

<div class="investeTBanner">

    <img src="<?php echo get_template_directory_uri() ?>/images/invester5-12-2018Banner.jpg" alt="" />

    <div class="investeTBannerContent">
        <!-- <h1><?php //the_title(); 
                    ?></h1> -->
        <h1>OTHER DISCLOSURES </h1>

    </div>

</div>



<div class="grid">

    <div class="grid-sizer"></div>

    <div class="grid-item ">

    </div>

</div>











<div class="inversterGrid">
    <!-- Heading -->
    <div class="featured-project-wrapper">
        <div class="col-lg-6">
            <!-- section title left align -->
            <h4 class="subtitle">Other Disclosure</h4>

        </div>
    </div>

</div>
<!-- Heading -->
<!-- -->
<div class="feature-project-box-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- feature project box wrapper -->
                <div class="feature-project-box-wrapper">
                    <div class="row">








                        <div class="col-md-4">
                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Corporate-Governance-Report.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title text-uppercase">
                                        Corporate Governance Report
                                    </h3>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6081) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Compulsory-DEMAT-of-physical-Shares.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">COMPULSORY DEMAT OF PHYSICAL SHARES
                                    </h3>


                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6103) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Investor-Presentation.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">INVESTOR PRESENTATION</h3>

                                    <br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6091) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/merger-thumb.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">MERGER</h3>

                                    <br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(1777) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Notice-to-the-members.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">NOTICE TO THE MEMBERS</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6182) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Policies.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title text-uppercase">
                                        Policies
                                    </h3>
                                    <br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6101) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Unpaid-and-Unclaimed-Dividend-Amount.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">UNPAID & UNCLAIMED DIVIDEND AMOUNT
                                    </h3>


                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6107) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/Vision-and-Mission.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">VISION & MISSION</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6109) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/tax-on-didvidend.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">TAX ON DIVIDEND</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6705) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/online-dispute-resolution.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">ONLINE DISPUTE RESOLUTION</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(6778) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/OD/csr-annual-action-plan.png" class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">CSR Annual Action Plan</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="<?php echo get_permalink(7936) ?>" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">

                            <div class="single-feature-project-box">


                                </a>
                            </div>
                        </div>






                        <div class="col-md-4">









                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -->
</div>







<?php get_template_part('footerpart'); ?>



<div class="allSocialIcon">

    <ul>

        <li>

            <a href="https://www.instagram.com/rswmofficial/" target="_blank">

                <img src="<?php echo get_template_directory_uri() ?>/images/instagram-symbol.png" alt="" />

            </a>

        </li>

        <li>

            <a href="https://twitter.com/rswmofficial?lang=en" target="_blank">

                <img src="<?php echo get_template_directory_uri() ?>/images/twitter-logo-silhouette.png" alt="" />

            </a>

        </li>

        <li>

            <a href="https://www.facebook.com/rswmofficial/" target="_blank">

                <img src="<?php echo get_template_directory_uri() ?>/images/facebook-letter-logo.png" alt="" />

            </a>

        </li>

        <li>

            <a href="https://www.linkedin.com/company/rswmofficial/" target="_blank">

                <i class="fa fa-linkedin" aria-hidden="true" style="color: #c9bfaf;        font-size: 18px;"></i>

            </a>

        </li>

        <!--        <li>

            <a href="#">

                <img src="<?php echo get_template_directory_uri() ?>/images/musica-searcher-.png" alt=""/>

            </a>

        </li>-->

    </ul>

</div>

<?php get_footer(); ?>



<script type="text/javascript">
    $(document).ready(function() {

        var $griditem = $('.grid').imagesLoaded(function() {

            $griditem.masonry({

                itemSelector: '.grid-item',

                columnWidth: '.grid-sizer',



            });

        });

    });
</script>