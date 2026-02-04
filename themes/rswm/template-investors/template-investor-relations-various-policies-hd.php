<?php

/* Template Name: Investors Relations Various Policies HD*/

get_header('hd');

$default_taxnomy = 'category';
$year_tax = get_terms('year', array('hide_empty' => false));
$annualyear = get_terms('annual-year', array('hide_empty' => false));

?>
<?php get_template_part('template-investors/hd-top', 'menu') ?>
<style>
.d-none {
    display: none;
}
</style>
<!-- -->
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

.title {
    text-transform: capitalize;
}

.Accordian_content h5 {
    font-size: 15px;
    font-weight: 600;
}
</style>
<div class="container">
    <div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="service-details-page-content">
                        <div class="service-details-image-block section-space--bottom--50 d-none">
                            <div class="image">
                                <img src="<?php echo site_url('/'); ?>assets/img/banners/banner_maral.jpg"
                                    class="img-fluid" alt="">
                            </div>

                        </div>







                        <div class="service-details-text-wrapper section-space--bottom--50">
                            <h2 class="title">Disclosure Under Regulation 46
                                <?php //echo the_title(); 
                                ?>
                            </h2>
                            <div class="faq-wrapper">

                                <?php $terms = get_term_by('id', 182, $default_taxnomy); ?>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link text-uppercase" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Various Policies<span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <!-- -->

                                                <div class="Accordian_content" style="display: block;">

                                                    <div class="accordian_Innercontent newspaper-accord-wrap">
                                                        <ul class="service-details-list">


                                                            <li><a href="/pdf/policy/Determination-of-Materiality-of-Events-Policy.pdf"
                                                                    target="_blank">Determination of Materiality of
                                                                    Events Policy</a></li>
                                                            <!-- <li><a href="https://rswm.in/wp-content/uploads/2023/08/Materiality-of-events-Policy.pdf" target="_blank">Materiality of
                                                                    Events Policy</a></li> -->
                                                            <!-- <li><a href="/pdf/policy/Determination_Materiality_of_Events_Policy.pdf" target="_blank"> Determination of Materiality of
                                                                    Events Policy</a></li> -->
                                                            <li><a href="/pdf/policy/Material_Subsidary_Policy.pdf"
                                                                    target="_blank"> Material Subsidary Policy</a></li>
                                                            <li><a href="/pdf/policy/Nomination_and_Remuneration_Policy.pdf"
                                                                    target="_blank">
                                                                    Nomination and Remuneration Policy</a></li>
                                                            <li><a href="/pdf/policy/Related_Party_Transaction_Policy.pdf"
                                                                    target="_blank">
                                                                    Related Party Transactions Policy</a></li>
                                                            <li><a href="/pdf/policy/Whistle_Blower_Policy.pdf"
                                                                    target="_blank"> Whistle Blower
                                                                    Policy / Vigil Mechanism Policy</a></li>

                                                            <li><a href="/pdf/policy/Dividend_Distribution_Policy.pdf"
                                                                    target="_blank"> Dividend Distribution Policy</a>
                                                            </li>



                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed">
                                                    <a href="https://www.rswm.in/wp-content/uploads/2018/07/Code-of-Conduct-for-Insider-Trading-RSWM.pdf"
                                                        target="_blank">Code of Conduct for Procedure of Fair disclosure
                                                        of Unpublished Price Sensitive Information’s </a>
                                                </button>
                                            </h5>
                                        </div>

                                    </div> -->

                                    <div class="card">

                                        <div id="collapseseven" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table">


                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="service-details-text-wrapper">

                        </div>
                        <div class="service-details-list-chart section-space--bottom--50">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <ul class="service-details-list">



                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="service-details-text-wrapper">

                        </div>
                        <div class="service-details-list-chart section-space--bottom--80">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <ul class="service-details-list">


                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- page sidebar -->
                    <div class="page-sidebar">

                        <!-- single sidebar widget -->
                        <div class="single-sidebar-widget">
                            <h2 class="widget-title">INVESTOR RELATIONS</h2>
                            <ul class="sidebar-category">
                                <li class="active" style="text-transform:capitalize;"><a href="">Disclosure under
                                        Regulation
                                        46<?php //echo the_title(); 
                                            ?></a>
                                </li>

                            </ul>
                        </div>





                        <!-- single sidebar widget -->
                        <div class="single-sidebar-widget">

                            <ul class="sidebar-download-items">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- -->
<?php get_template_part('template-investors/new-footer', 'menu') ?>
<script type="text/javascript" src="<?php echo site_url() ?>/assets/js/bootstrap.min.js"></script>