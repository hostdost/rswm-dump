<?php

/* Template Name: Investors Relations New */

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
        <h1><?php the_title(); ?></h1>
        <!-- <h1>Investor Relations</h1> -->

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
            <h4 class="subtitle">Disclosure under Regulation 46 of Listing Regulation, 2015</h4>

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
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/feature3.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">

                                        Annual Reports
                                    </h3>
                                    <br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="annual_report.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">





                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/feature12.jpg"
                                        class="img-fluid" alt="">
                                </div>

                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">
                                        Annual Returns
                                    </h3><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="annualreturn.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod1.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Code of conduct of Board of
                                        Directors and Senior Management Personnel</h3>


                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="code_of_conduct.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod3.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Composition of Committees of Board
                                        of Directors</h3>

                                    <br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="/committees.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod4.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Contact Details for Shareholders
                                        Grievance Redressal</h3>
                                    <br>

                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="/griev.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/feature11.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Credit Rating </h3>

                                    <br><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="credit_rating.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod5.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Details of Key Managerial
                                        Personnel who are authorized for the purpose of determining materiality</h3>


                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="pdf/Key Managerial Personnel.pdf" target="_blank"
                                    class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod6.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Details of Business</h3>
                                    <br><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="products.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod7.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Email address of Grievance
                                        Redressal</h3><br><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="email.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod8.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Familiarization Programme</h3>
                                    <br><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="familiar.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>



                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod9.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Financial Results</h3><br><br><br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="financial.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/bod10.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Intimation to Stock Exchange as
                                        per Reg. 30 of Listing Regulation </h3>
                                    <br>
                                    <ul class="feature-list">

                                    </ul>
                                </div>
                                <a href="intimationtostock.php" target="_blank"
                                    class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>



                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/feature8.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Notice of Board Meeting</h3><br>

                                </div>
                                <a href="notices.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/Newspaper.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Newspaper Advertisement of
                                        Financial Results</h3>


                                </div>
                                <a href="financial2.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/agm.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Newspaper Publications of Annual
                                        General Meetings </h3>

                                </div>
                                <a href="advertisementagm.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE </span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/shareholding.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Share Holding Pattern</h3><br>

                                </div>
                                <a href="sharepattern.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/seccompl.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Secretarial Compliance Report</h3>
                                    <br>
                                    <p class="single-feature-project-box__subtitle">
                                    </p>
                                </div>
                                <a href="sec_compliance.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/Appointment.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Term and Conditions of Appointment
                                        of Independent Directors </h3>
                                    <p class="single-feature-project-box__subtitle">
                                    </p>
                                </div>
                                <a href="appinddirector.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
                                    <i class="ion-arrow-right-c"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="single-feature-project-box">
                                <div class="single-feature-project-box__image">
                                    <img src="<?php echo site_url(); ?>/assets/img/investor/feature2.jpg"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="single-feature-project-box__content">
                                    <h3 class="single-feature-project-box__title">Various Policies</h3><br><br>
                                    <ul class="feature-list">
                                    </ul>
                                </div>
                                <a href="policies.php" target="_blank" class="single-feature-project-box__link">
                                    <span>SEE MORE</span>
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