<?php

/* Template Name: Investors Relations Email */

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

.d-none {
    display: none !important;
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

        <h1>Investor Relations</h1>

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
            <h4 class="subtitle">VARIOUS POLICIES</h4>

        </div>
    </div>

</div>
<!-- Heading -->
<!-- -->
<div class="feature-project-box-slider-area">
    <div class="page-content-wrapper">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 order-1 order-lg-2">

                    <div class="service-details-page-content">

                        <div class="service-details-image-block section-space--bottom--50">

                            <div class="image">

                                <img src="assets/images/banner_maral.jpg" class="img-fluid" alt="">

                            </div>
                        </div>
                        <div class="service-details-text-wrapper">
                            <h2 class="title">Various Policies</h2>
                        </div>

                        <div class="service-details-list-chart section-space--bottom--50">

                            <div class="row">

                                <div class="col-xl-12 col-lg-12">

                                    <ul class="service-details-list">


                                        <li><a href="/pdf/policy/Determination_Materiality_of_Events_Policy.pdf"
                                                target="_blank"> Determination of Materiality of Events Policy</a></li>
                                        <li><a href="/pdf/policy/Material_Subsidary_Policy.pdf" target="_blank">
                                                Material Subsidary Policy</a></li>
                                        <li><a href="/pdf/policy/Nomination_and_Remuneration_Policy.pdf"
                                                target="_blank">
                                                Nomination and Remuneration Policy</a></li>
                                        <li><a href="/pdf/policy/Related_Party_Transaction_Policy.pdf" target="_blank">
                                                Related Party Transactions Policy</a></li>
                                        <li><a href="/pdf/policy/Whistle_Blower_Policy.pdf" target="_blank"> Whistle
                                                Blower
                                                Policy / Vigil Mechanism Policy</a></li>



                                    </ul>

                                </div>



                            </div>

                        </div>







                    </div>

                </div>

                <div class="col-lg-4 order-2 order-lg-1">

                    <!-- page sidebar -->

                    <div class="page-sidebar">



                        <!-- single sidebar widget -->

                        <div class="single-sidebar-widget">
                            <h2 class="widget-title"><a href="investorlistsept.php">INVESTOR RELATIONS</a></h2>
                            <ul class="sidebar-category">

                                <li class="active"><a>Various Policies</a></li>

                            </ul>
                        </div>

                        <!-- single sidebar widget -->

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

                <i class="fa fa-linkedin" aria-hidden="true"
                    style="color: #c9bfaf;        font-size: 18px;vertical-align: bottom;"></i>

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