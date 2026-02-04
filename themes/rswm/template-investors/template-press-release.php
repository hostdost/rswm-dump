<?php
/* Template Name: Press Release HD */
get_header('hd');
global $post;
$default_taxnomy = 'category';
$year_tax = get_terms('year');
$args = array(
    'taxonomy' => 'annual-year',
    'hide_empty' => 1,
    'hierarchical' => 1,
    'parent' => 0,
    'orderby' => 'name',
    'order' => 'ASC',
    'fields' => 'all',
);
$annualyear = get_terms('annual-year'); //,$args);
?>
<?php //get_template_part('template-investors/hd-top', 'menu') 
?>
<?php $queried_object = get_queried_object(); ?>
<?php $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($queried_object->ID), 'full'); ?>
<?php $imgsrc = $imgsrc[0] != '' ? $imgsrc[0] : get_template_directory_uri() . '/images/media-coverage-banner.jpg'; ?>
<div class="investeTBanner investerDetailBanner">
    <img src="<?php echo $imgsrc ?>" alt="" />
    <div class="investeTBannerContent">
        <h1><?php echo $queried_object->post_title ?></h1>
    </div>
</div>
<div class="inversterMenuAria" style="display: none!important;">
    <div class="container">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <ul>
            <li><a href="<?php echo get_permalink(131) ?>"
                    class="<?php echo $queried_object->ID ==  131 ? 'active' : ''; ?>">Annual Reports</a></li>
            <li><a href="<?php echo get_permalink(1280) ?>"
                    class="<?php echo $queried_object->ID == 1280 ? 'active' : ''; ?>">Investors Relations</a></li>
            <li><a href="<?php echo get_permalink(129) ?>"
                    class="<?php echo $queried_object->ID == 129 ? 'active' : ''; ?>">Investors Correspondence</a></li>
            <li><a href="<?php echo get_permalink(135) ?>"
                    class="<?php echo $queried_object->ID == 135 ? 'active' : ''; ?>">Financial Performance</a></li>
            <li><a href="<?php echo get_permalink(137) ?>"
                    class="<?php echo $queried_object->ID == 137 ? 'active' : ''; ?>">Code of Conduct</a></li>
            <li><a href="<?php echo get_permalink(133) ?>"
                    class="<?php echo $queried_object->ID == 133 ? 'active' : ''; ?>">Board of Directors</a></li>
            <li><a href="<?php echo get_permalink(139) ?>"
                    class="<?php echo $queried_object->ID == 139 ? 'active' : ''; ?>">Transfer of shares to IEPF</a>
            </li>
            <li><a href="<?php echo get_permalink(1777) ?>"
                    class="<?php echo $queried_object->ID == 1777 ? 'active' : ''; ?>">Merger</a></li>
            <li><a href="<?php echo get_permalink(1089) ?>"
                    class="<?php echo $queried_object->ID == 1089 ? 'active' : ''; ?>">Intimation to Stock Exchange</a>
            </li>
        </ul>
    </div>
</div>

<style>
    .d-none,
    .stickyButton {
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

    .service-details-list li {
        list-style-type: none !important;
    }

    publication,
    medium,
    date {
        font-weight: normal;
        font-size: 12px;
        color: #666;
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
                            <h2 class="title" id="2025">2025 - Media Coverage</h2>
                            <div class="faq-wrapper">
                                <div id="accordion">
                                    <!-- corporate announcements -->
                                    <?php $terms = get_term_by('id', 422, $default_taxnomy); ?>
                                    <div class="card" style="display: none;">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    Outcome of Board Meetings /
                                                    Corporate Announcement <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="accordian_Innercontent">
                                                    <div class="investor-select-wrap 76">
                                                        <h3><?php //echo $terms->name
                                                            ?></h3>
                                                        <div class="investor-select-box">
                                                            <input type="hidden" name="class"
                                                                value="share_holder_responsive">
                                                            <input type="hidden" name="main_term_id"
                                                                value="<?php echo $terms->term_id ?>">
                                                            <select name="year" class="select_year">
                                                                <?php foreach ($year_tax as $year) { ?>
                                                                    <option value="<?php echo $year->slug; ?>"
                                                                        <?php echo $year->slug == date('Y') ? 'selected' : '' ?>>
                                                                        <?php echo $year->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="accordian_Innercontent">
                                                            <?php
                                                            $corporate_args = array(
                                                                "post_type" => "investor",
                                                                'fields' => 'ids',
                                                                "post_status" => "publish",
                                                                "posts_per_page" => -1,
                                                                "orderby" => 'menu_order',
                                                                "order" => "DESC",
                                                                "tax_query"  => array(
                                                                    array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id),),
                                                                    array("taxonomy" => "year", "field" => "slug", "terms" => ($year_tax[14]->slug)),
                                                                )
                                                            );
                                                            $corporate_query   =     new WP_Query($corporate_args); ?>
                                                            <ul class="share_holder_responsive">
                                                                <?php if ($corporate_query->have_posts()) { ?>
                                                                    <?php while ($corporate_query->have_posts()) {
                                                                        $corporate_query->the_post() ?>
                                                                        <?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                                        <li><a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)'; ?>"
                                                                                target="_blank">
                                                                                <i class="fa fa-file-pdf-o"
                                                                                    aria-hidden="true"></i>
                                                                                <?php echo get_the_title() ?>
                                                                            </a>
                                                                        </li>
                                                                <?php }
                                                                } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- corporate announcements -->
                                    <!-- related party transaction -->
                                    <?php //$disclosure_terms = get_term_by('id', 187, $default_taxnomy); 
                                    ?>
                                    <!-- December 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree99999999999"
                                                    aria-expanded="false" aria-controls="collapseThree9999999999">
                                                    <?php echo 'December 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree99999999999" class="collapse"
                                            aria-labelledby="headingThree99999999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.ptinews.com/press-release/rswm-ends-the-year-with-multiple-accolades-wins-three-major-industry-honors-for-sustainability/3233476">
                                                                        RSWM Ends the Year with Multiple Accolades: Wins Three Major Industry Honors for Sustainability<br><i
                                                                            class="publication"></i>
                                                                        <publication>PTI</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>December 30, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/pdf/Monthly-Edition/PDF-version/December-2025/index.html">
                                                                        Authored Article by Mr. Rajeev Gupta: Traditional Practices for Sustainable Textiles<br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Textile Journal (ITJ), December 2025 Edition</publication>
                                                                        <medium>[Medium: Online ]</medium>
                                                                        <date>16 December, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://www.textilesresources.com/articles/global-textile-sector-2025-26-from-trade-turbulence-to-future-ready-supply-chains/">
                                                                            Industry Story: Year-Ender Feature: Global Textile Sector 2025–26: From Trade Turbulence to Future-Ready Supply Chains
                                                                            <br><i
                                                                                class="publication"></i>
                                                                            <publication>Textile Resources</publication>
                                                                            <medium>[Medium: Online ]</medium>
                                                                            <date>December 30, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- December 2025-->
                                    <!-- November -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree9999999999"
                                                    aria-expanded="false" aria-controls="collapseThree999999999">
                                                    <?php echo 'November 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree9999999999" class="collapse"
                                            aria-labelledby="headingThree9999999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://businessindia.co/magazine/corporate-report/rswml-weaves-a-new-growth-phase">
                                                                        RSWML weaves a new growth phase<br>
                                                                        RSWM Ltd is actively putting up a more robust business model to expand its footprint<br><i
                                                                            class="publication"></i>
                                                                        <publication>Business India</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>November 30, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.livemint.com/industry/manufacturing/govt-withdraws-bis-norms-on-polyester-chain-polymers-user-industry-cites-relief-on-costs-for-msmes-11763025083259.html">
                                                                        Industry Story- Mr. Rajeev Gupta’s insights on
                                                                        the revocation of QCO on polyester fibre and
                                                                        yarn have been published in an industry story by
                                                                        Mint. (attached full story)<br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Insights</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>November, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/pdf/Monthly-Edition/PDF-version/November-2025/index.html">
                                                                        Authored Article- Mr. Rajeev Gupta’s authored
                                                                        article, “India Threads the Global Future,” has
                                                                        been published as one of the cover stories in
                                                                        the Indian Textile Journal (ITJ) November 2025
                                                                        Special Edition – Top 50 Textile Companies. The
                                                                        article is featured on page 43<br><i
                                                                            class="publication"></i>
                                                                        <publication>Mint</publication>
                                                                        <medium>[Medium: Online ]</medium>
                                                                        <date>16 November, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://www.ptinews.com/story/business/adani-energy-to-supply-60-mw-green-energy-to-rswms-textile-plants/3068782n">
                                                                            RSWM's press release with AESL <br><i
                                                                                class="publication"></i>
                                                                            <publication>Tecoya Trend</publication>
                                                                            <medium>[Medium: Online ]</medium>
                                                                            <date>November, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://www.freepressjournal.in/amp/business/indias-textile-manufacturer-rswm-signs-agreement-with-adani-energy-solutions-for-the-supply-of-60-mw-of-solar-power">
                                                                            India’s Textile Manufacturer, RSWM, Signs
                                                                            Agreement With Adani Energy Solutions For
                                                                            The Supply Of 60 MW Of Solar Power <br><i
                                                                                class="publication"></i>
                                                                            <publication>Tecoya Trend</publication>
                                                                            <medium>[Medium: Online ]</medium>
                                                                            <date>November, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://www.indiantextilemagazine.in/rswm-and-adani-energy-solutions-join-hands-for-sustainable-future/">
                                                                            RSWM and Adani Energy Solutions join hands
                                                                            for sustainable future <br><i
                                                                                class="publication"></i>
                                                                            <publication>Tecoya Trend</publication>
                                                                            <medium>[Medium: Online ]</medium>
                                                                            <date>November, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- November -->
                                    <!-- October -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree999999999"
                                                    aria-expanded="false" aria-controls="collapseThree99999999">
                                                    <?php echo 'October 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree999999999" class="collapse"
                                            aria-labelledby="headingThree999999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textileinsights.in/textile-insights-october-2025-issue-2/">
                                                                        RSWM's JMD Rajeev Gupta authored article on GST
                                                                        2.0 reforms and their impact on the textile and
                                                                        apparel industry [page no. 38]<br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Insights</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>October, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.livemint.com/economy/india-european-union-free-trade-agreement-trade-deal-textile-exports-11760591090018.html">
                                                                        India–EU Pact to Strengthen Textile
                                                                        Exports<br><i class="publication"></i>
                                                                        <publication>Mint</publication>
                                                                        <medium>[Medium: Online ]</medium>
                                                                        <date>16 October, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://drive.google.com/file/d/1qwBbNOVNHMSY14Aq2ySvGZINt8cAl3a0/view">
                                                                            RSWM’s JMD on the Future of Textiles <br><i
                                                                                class="publication"></i>
                                                                            <publication>Tecoya Trend</publication>
                                                                            <medium>[Medium: Online ]</medium>
                                                                            <date>October, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- October -->
                                    <!-- September -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree99999999"
                                                    aria-expanded="false" aria-controls="collapseThree99999999">
                                                    <?php echo 'September 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree99999999" class="collapse"
                                            aria-labelledby="headingThree999999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://responsibleus.com/sustainability-should-be-indias-advantage-not-a-challenge-rajeev-gupta-jmd-rswm">
                                                                        Sustainability Should Be India’s Advantage, Not
                                                                        A Challenge: Rajeev Gupta, JMD, RSWM<br><i
                                                                            class="publication"></i>
                                                                        <publication>Responsible Us</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>30 September, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.textilesresources.com/interviews/conversation-with-mr-rajeev-gupta-joint-managing-director-jmd-rswm-ltd-india/">
                                                                        Conversation with Mr. Rajeev Gupta, Joint
                                                                        Managing Director (JMD), RSWM Ltd, India<br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Resources</publication>
                                                                        <medium>[Medium: Online -Email Interview]
                                                                        </medium>
                                                                        <date>23 September, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://textileoutlookindia.com/2025/09/15/from-looms-to-leadership-inspiring-careers-in-indias-textile-revolution/">
                                                                            From Looms to Leadership: Inspiring Careers
                                                                            in India’s Textile Revolution <br><i
                                                                                class="publication"></i>
                                                                            <publication>Textile Outlook</publication>
                                                                            <medium>[Medium: Online - Authored Article]
                                                                            </medium>
                                                                            <date>12 September, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed">
                                                                        <a target="_blank"
                                                                            href="https://www.thehindubusinessline.com/economy/gst-council-meeting-2025-goods-service-tax-rate-cut-news-live-updates/article70003963.ece">
                                                                            GST Rates 2025 Highlights: GST Council
                                                                            announces sweeping rate cuts across the
                                                                            board, but Government not keen to bring
                                                                            back anti-profiteering mechanism<br><i
                                                                                class="publication"></i>
                                                                            <publication>The Hindu Business Line
                                                                            </publication>
                                                                            <medium>[Medium: Online - Industry Story]
                                                                            </medium>
                                                                            <date>04 September, 2025</date>
                                                                        </a>
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- September -->
                                    <!-- Auguest 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree9999999"
                                                    aria-expanded="false" aria-controls="collapseThree9999999">
                                                    <?php echo 'August 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree9999999" class="collapse"
                                            aria-labelledby="headingThree99999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1_ntPn3BfRDlrqebFiYmFm8phs34f_Ip6/view">
                                                                        RSWM rolls out strategic plans for stronger
                                                                        integration in Southern India market <br><i
                                                                            class="publication"></i>
                                                                        <publication>Tecoya Trend</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>04 August, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://citiindia.org/wp-content/uploads/2025/TT/TT_APR_JUN_2025.pdf">
                                                                        The Shifting Global Appetite for
                                                                        Indian Textiles<br><i class="publication"></i>
                                                                        <publication>Textile Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 August, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.ptinews.com/press-release/celebrating-spiritual-legacy-lnj-bhilwara-group-stages-yugpurush/2848217">
                                                                        Celebrating Spiritual Legacy: LNJ Bhilwara Group
                                                                        Stages Yugpurush <br><i class="publication"></i>
                                                                        <publication>PTI</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>23 August, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/pdf/Monthly-Edition/PDF-version/August-2025/index.html">
                                                                        What’s In And Out And Left In Between <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>23 August, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Auguest 2025 -->
                                    <!-- July 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree9999999"
                                                    aria-expanded="false" aria-controls="collapseThree9999999">
                                                    <?php echo 'July 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree9999999" class="collapse"
                                            aria-labelledby="headingThree99999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->


                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apparelviews.com/india-uk-fta-is-expected-to-boost-indias-textile-exports">
                                                                        India - UK FTA is expected to boost India&#039;s
                                                                        textile exports <br><i class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thehomefashion.in/india-uk-fta-to-boost-indian-textile-export-potential/">
                                                                        India–UK FTA to Boost Indian Textile Export
                                                                        Potential <br><i class="publication"></i>
                                                                        <publication>The Home Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://knittingviews.com/india-uk-fta-is-expected-to-boost-indias-textile-exports/">
                                                                        India - UK FTA is expected to boost India&#039;s
                                                                        textile exports - Knitting Views <br><i
                                                                            class="publication"></i>
                                                                        <publication>Knitting Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.ptinews.com/story/business/trump-tariffs-to-hit-india&#039;s-textile-exporters-in-a-big-way,-say-experts/2780070">
                                                                        Trump tariffs to hit India&#039;s textile
                                                                        exporters in a big way, say experts <br><i
                                                                            class="publication"></i>
                                                                        <publication>PTI</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://economictimes.indiatimes.com/industry/cons-products/garments-/-textiles/trumps-tariff-blow-to-hit-indias-textile-exporters-hard-say-industry-experts/articleshow/123018564.cms?from=mdr">
                                                                        Trump’s tariff blow to hit India’s textile
                                                                        exporters hard, say industry experts <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Economic Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.ndtv.com/india-news/trump-tariffs-to-hit-indias-textile-exporters-in-a-big-way-say-experts-8991528">
                                                                        US Tariffs To Impact India&#039;s Textile
                                                                        Exporters In A Big Way, Say Experts <br><i
                                                                            class="publication"></i>
                                                                        <publication>NDTV</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.financialexpress.com/business/industry-trumps-tariffs-on-india-many-exporters-might-face-order-cancellations-or-pressure-to-says-expert-3932606/lite/">
                                                                        Trump&#039;s tariffs on India: &#039;Many
                                                                        exporters might face order cancellations or
                                                                        pressure to...&#039;, says expert on
                                                                        India&#039;s textile sector <br><i
                                                                            class="publication"></i>
                                                                        <publication>Financial Express</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.deccanherald.com/business/trump-tariffs-to-hit-indias-textile-exporters-in-a-big-way-say-experts-3658792">
                                                                        Trump tariffs to hit India&#039;s textile
                                                                        exporters in a big way, say experts <br><i
                                                                            class="publication"></i>
                                                                        <publication>Deccan Herald</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.theweek.in/wire-updates/business/2025/07/31/dcm55-biz-trump-tariff-textiles.amp.html">
                                                                        Trump tariffs to hit India&#039;s textile
                                                                        exporters in a big way say experts <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Week</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/rajeev-gupta-25-per-cent-tariff-by-the-us-comes-as-a-temporary-setback/">
                                                                        Rajeev Gupta: 25 per cent tariff by the US comes
                                                                        as a temporary setback <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.fibre2fashion.com/news/apparel-news/indian-apparel-industry-resilient-despite-25-us-tariff-hit-304301-newsdetails.htm">
                                                                        Indian apparel industry resilient despite 25% US
                                                                        tariff hit <br><i class="publication"></i>
                                                                        <publication>Fibre2 Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://apparelresources.com/business-news/trade/indias-textile-apparel-industry-disappointed-optimistic-25-us-tariffs/">
                                                                        India&#039;s textile, apparel industry
                                                                        disappointed but optimistic about 25% US tariffs
                                                                        <br><i class="publication"></i>
                                                                        <publication>Apparel Resources</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.devdiscourse.com/article/business/3524537-us-tariffs-hit-indian-textile-exports">
                                                                        US Tariffs Hit Indian Textile Exports <br><i
                                                                            class="publication"></i>
                                                                        <publication>Devdiscourse</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thehomefashion.in/rswms-rajeev-gupta-responds-to-new-us-tariff-on-exports/">
                                                                        RSWM’s Rajeev Gupta Responds to New US Tariff on
                                                                        Exports <br><i class="publication"></i>
                                                                        <publication>Home Fashion Trends</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>02 July, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>




                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- July 2025 -->
                                    <!-- June 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree999999"
                                                    aria-expanded="false" aria-controls="collapseThree999999">
                                                    <?php echo 'June 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree999999" class="collapse"
                                            aria-labelledby="headingThree99999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://m.dailyhunt.in/news/india/tamil/thandora-epaper-thandora/tenninthiyavil+tanathu+vaniga+nedvorkkai+melum+virivubaduthukirathu+aaresdabilyooem+niruvanam-newsid-n670643477?sm=Y">
                                                                        RSWM Ltd. is further expanding its business
                                                                        network in South India
                                                                        <br><i class="publication"></i>
                                                                        <publication>Daily Hunt</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>June 30, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.thandoraa.com/new-news/%e0%ae%a4%e0%af%86%e0%ae%a9%e0%af%8d%e0%ae%a9%e0%ae%bf%e0%ae%a8%e0%af%8d%e0%ae%a4%e0%ae%bf%e0%ae%af%e0%ae%be%e0%ae%b5%e0%ae%bf%e0%ae%b2%e0%af%8d-%e0%ae%a4%e0%ae%a9%e0%ae%a4%e0%af%81-%e0%ae%b5%e0%ae%a3/">
                                                                        RSWM Ltd. is further strengthening its business
                                                                        network in South India
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Covai Post (Tamil)
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>June 30, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- June 2025 -->
                                    <!-- May 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree99999"
                                                    aria-expanded="false" aria-controls="collapseThree99999">
                                                    <?php echo 'May 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree99999" class="collapse"
                                            aria-labelledby="headingThree99999" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mtrack.merryspiders.com/NewsDetailsPublished.aspx?NewsID=ErEQNQetjLM6FxYG6AmUOQ==&ClientId=8665">
                                                                        Global textile market expansion is fuelled by
                                                                        tech innovations & advances in AI, IoT &
                                                                        automation
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Statesman</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>12 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/pdf/Monthly-Edition/PDF-version/May-2025.pdf">
                                                                        Indian denim today stands shoulder to shoulder
                                                                        with global counterparts.
                                                                        <br><i class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>7 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/rajesh-singh-indian-denim-today-stands-shoulder-to-shoulder-with-global-counterparts-in-quality/">
                                                                        Rajesh Singh: Indian denim today stands shoulder
                                                                        to shoulder with global counterparts in quality
                                                                        <br><i class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>22 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1MwnDwR5ZdCF4f93FkkBIp9hmn0JiE1yF/view?usp=sharing">
                                                                        Remagining the textile value chain (LNJ Denim
                                                                        mentioned)
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Economic Times
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>21 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.entrepreneur.com/en-in/news-and-trends/india-uk-fta-unlocks-12-billion-export-opportunity-for/491525">
                                                                        India-UK FTA Unlocks $1.2 Billion Export
                                                                        Opportunity for Indian Garments: Report

                                                                        <br><i class="publication"></i>
                                                                        <publication>Entreprenuer India
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>21 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.fibre2fashion.com/news/apparel-news/indian-textile-industry-leaders-hail-uk-fta-as-game-changer-302502-newsdetails.htm">
                                                                        Indian textile industry leaders hail UK FTA as
                                                                        game-changer
                                                                        <br><i class="publication"></i>
                                                                        <publication>Fibre2Fashion
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>8 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM consolidated net profit declines 95.82% in
                                                                        the March 2025 quarter
                                                                        <br><i class="publication"></i>
                                                                        <publication>Business Standard
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Standalone March 2025 Net Sales at Rs
                                                                        1,255.84 crore, up 7.21% Y-o-Y
                                                                        <br><i class="publication"></i>
                                                                        <publication>Money Control
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>13 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Ltd - Board Meeting Outcome for Outcome Of
                                                                        Board Meeting Held On 13Th May, 2025
                                                                        <br><i class="publication"></i>
                                                                        <publication>Money Rediff
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>13 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Reports Earnings Results for the
                                                                        Fourth Quarter Ended March 31, 2025
                                                                        <br><i class="publication"></i>
                                                                        <publication>Market Screener
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>13 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM March-Quarter Consol Net Profit 14.9
                                                                        Million Rupees
                                                                        <br><i class="publication"></i>
                                                                        <publication>Trading View
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>13 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Launches ‘GLIDE’Denim Collection At Denim &
                                                                        Jeans India 2025
                                                                        <br><i class="publication"></i>
                                                                        <publication>Textile Insights
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>19 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Ltd. unveils ‘GLIDE’, the Autumn/Winter
                                                                        2026-27 Denim Collection by LNJ Denim, at the
                                                                        7th Denim and Jeans India Exhibition
                                                                        <br><i class="publication"></i>
                                                                        <publication>Dainik Newsjyoti
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>20 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Ltd. unveils ‘GLIDE’, the Autumn/Winter
                                                                        2026-27 Denim Collection by LNJ Denim, at the
                                                                        7th Denim and Jeans India Exhibition
                                                                        <br><i class="publication"></i>
                                                                        <publication>Kamyab Kalam
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>20 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Ltd. unveils ‘GLIDE’, the Autumn/Winter
                                                                        2026-27 Denim Collection by LNJ Denim, at the
                                                                        7th Denim and Jeans India Exhibition
                                                                        <br><i class="publication"></i>
                                                                        <publication>Business Remedies
                                                                        </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>20 May, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- May 2025 -->
                                    <!-- April 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link"
                                                    data-toggle="collapse" data-target="#collapseThree9999"
                                                    aria-expanded="false" aria-controls="collapseThree9999">
                                                    <?php echo 'April 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree9999" class="collapse" aria-labelledby="headingThree9999"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textileinsights.in/how-indias-knitting-industry-is-weaving-versatile-and-sustainable-apparel/">
                                                                        How India’s Knitting Industry Is Weaving
                                                                        Versatile And Sustainable Apparel <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Insights</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>09-Apr-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1o-Yy7GS1xjMCz7_SCD6xR6kB6jIBzd9-/view?usp=drive_link">
                                                                        How India’s Knitting Industry Is Weaving
                                                                        Versatile And Sustainable Apparel <br><i
                                                                            class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>09-Apr-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textileoutlookindia.com/wp-content/uploads/2025/04/TOI_March-April2025_Final_Web.pdf">
                                                                        RSWM Limited: Pioneering Sustainable Innovation
                                                                        and Global Expansion in Textiles <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Outlook India Magazine
                                                                            (March- April 2025)</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>04-Apr-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://economictimes.indiatimes.com/small-biz/sme-sector/fabric-of-the-industry-frays-what-trumps-tariffs-really-mean-for-indias-textile-sector/articleshow/120270915.cms?from=mdr">
                                                                        Fabric of the industry frays: What Trump’s
                                                                        tariffs really mean for India’s textile sector
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Economic Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14-Apr-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.fibre2fashion.com/news/textile-news/us-reciprocal-tariffs-offer-india-a-mixed-bag-of-textile-prospects-301790-newsdetails.htm">
                                                                        US reciprocal tariffs offer India a mixed bag of
                                                                        textile prospects <br><i
                                                                            class="publication"></i>
                                                                        <publication>Fibre2Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>04-Apr-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.aninews.in/news/business/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-202420250402173634/">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>ANI</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.ptinews.com/press-release/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024/2427624">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>PTI</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.business-standard.com/content/press-releases-ani/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024-125040300004_1.html">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>Business Standard</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>3 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thewire.in/ptiprnews/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Wire</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.theweek.in/wire-updates/business/2025/04/02/dcm74-rswm-limited.html">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Week</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://theprint.in/ani-press-releases/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024/2575449/">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Print</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.tribuneindia.com/news/business/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024/">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Tribune</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.lokmattimes.com/business/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024/">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>Lokmat Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.bignewsnetwork.com/news/278140991/rswm-limited-receives-three-prestigious-recognitions-at-matexil-export-awards-2023-2024">
                                                                        RSWM Limited Receives Three Prestigious
                                                                        Recognitions at MATEXIL Export Awards 2023-2024
                                                                        <br><i class="publication"></i>
                                                                        <publication>Big News Network</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>2 April, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- April 2025 -->

                                    <!-- March 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree8888"
                                                    aria-expanded="false" aria-controls="collapseThree8888">
                                                    <?php echo 'March 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree8888" class="collapse" aria-labelledby="headingThree8888"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://timestech.in/global-sustainability-summit-2025/">
                                                                        Global Sustainability Summit 2025 <br><i
                                                                            class="publication"></i>
                                                                        <publication>Times Tech</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>11-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://electronicsbuzz.in/gss-2025-hosted-to-celebrate-indias-global-leadership-in-sustainability-decarbonisation/">
                                                                        GSS 2025 hosted to celebrate India’s Global
                                                                        Leadership in Sustainability & Decarbonisation
                                                                        <br><i class="publication"></i>
                                                                        <publication>Electronic Buzz</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>11-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://bizdevelopmentnews.com/news/india-commends-global-sustainability-leaders-at-pioneering-summit-2025/">
                                                                        India Commends Global Sustainability Leaders at
                                                                        Pioneering Summit 2025 <br><i
                                                                            class="publication"></i>
                                                                        <publication>Biz Development News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>11-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://responsibleus.com/sustainability-isnt-an-option-its-a-necessity-no-plan-b-no-planet-b-rajeev-gupta-jmd-rswm">
                                                                        Sustainability Isn’t An Option - It’s a
                                                                        Necessity. No Plan B, No Planet B: Rajeev Gupta,
                                                                        JMD, RSWM <br><i class="publication"></i>
                                                                        <publication>Responsible us</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>15-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        एलएनजे ग्रुप ने उद्योगपतियों को किया एकजुट
                                                                        <br><i class="publication"></i>
                                                                        <publication>Dainik Navajyoti</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>12-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Bhilwara Energy to invest €750cr to set up a
                                                                        rPET resin plant in Raj <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Times of India</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>22 March, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Bhilwara Energy to shell out 750cr to put up
                                                                        India's largest rPET plant in Rajasthan <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Statesman</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>24-Mar-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Bhilwara Energy to invest Rs 750 cr to set up a
                                                                        rPET resin manufacturing plant in Rajasthan
                                                                        <br><i class="publication"></i>
                                                                        <publication>Press Trust of India</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>21 March, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://economictimes.indiatimes.com/industry/indl-goods/svs/chem-/-fertilisers/bhilwara-energy-to-invest-rs-750-cr-to-set-up-a-rpet-resin-manufacturing-plant-in-rajasthan/articleshow/119301775.cms?from=mdr">
                                                                        Bhilwara Energy to invest Rs 750 cr to set up a
                                                                        rPET resin manufacturing plant in Rajasthan
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Economic Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>21 March, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://economictimes.indiatimes.com/industry/indl-goods/svs/chem-/-fertilisers/bhilwara-energy-to-invest-rs-750-cr-to-set-up-a-rpet-resin-manufacturing-plant-in-rajasthan/articleshow/119301775.cms?from=mdr">
                                                                        Bhilwara Energy to invest Rs 750 cr to set up a
                                                                        rPET resin manufacturing plant in Rajasthan
                                                                        <br><i class="publication"></i>
                                                                        <publication>ET Manufacturing</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>21 March, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- March 2025 -->

                                    <!-- Feb 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree7777"
                                                    aria-expanded="false" aria-controls="collapseThree7777">
                                                    <?php echo 'February 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree7777" class="collapse" aria-labelledby="headingThree7777"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM to Showcase ‘Panchtatva’ Inspired Textile
                                                                        Innovations at Bharat Tex 2025 <br><i
                                                                            class="publication"></i>
                                                                        <publication>India Education Diary</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Showcases ‘Panchtatva’ Collection at Bharat
                                                                        Tex 2025 <br><i class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM to unveil Panchtatva-inspired textile
                                                                        innovations at Bharat Tex 2025 <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM to Showcase ‘Panchtatva’ Inspired Textile
                                                                        Innovations at Bharat Tex 2025 <br><i
                                                                            class="publication"></i>
                                                                        <publication>Konexio Network</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM to Unveil ‘Panchtatva’ Inspired Textiles at
                                                                        Bharat Tex 2025 <br><i class="publication"></i>
                                                                        <publication>Home Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM to Unveil ‘Panchtatva’ Textiles at Bharat
                                                                        Tex 2025 <br><i class="publication"></i>
                                                                        <publication>Fashion Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>4 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>APN News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>India Education Diary</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Birla Cellulose, Cellulosic Fibres Division Of
                                                                        Grasim Industries And LNJ Bhilwara Group
                                                                        Collaborate To Explore Functional Textiles With
                                                                        Graphene <br><i class="publication"></i>
                                                                        <publication>Textile World</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Graphene Innovation: LNJ Bhilwara Partners with
                                                                        Birla Cellulose <br><i class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Birla Cellulose, Cellulosic Fibres division of
                                                                        Grasim Industries and LNJ Bhilwara Group
                                                                        collaborate to explore functional Textiles with
                                                                        Graphene <br><i class="publication"></i>
                                                                        <publication>Textile South Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>News it Today</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>Go Earth</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>Earth News 4u</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>The News Watch</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>The Good</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>17 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Showcases Panchtatva- Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2025 <br><i class="publication"></i>
                                                                        <publication>Textile Outlook</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>16 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Birla Cellulose, LNJ Bhilwara partner on
                                                                        graphene-infused textiles <br><i
                                                                            class="publication"></i>
                                                                        <publication>Yahoo Finance</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        LNJ Bhilwara and Birla Cellulose Collaborate to
                                                                        Develop Graphene-Infused Fabrics <br><i
                                                                            class="publication"></i>
                                                                        <publication>Angel One</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Birla Cellulose, LNJ Bhilwara partner on
                                                                        graphene-infused textiles <br><i
                                                                            class="publication"></i>
                                                                        <publication>Just Style</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        LNJ Bhilwara Group and Birla Cellulose
                                                                        collaborate to explore functional Textiles with
                                                                        Graphene <br><i class="publication"></i>
                                                                        <publication>Indian Textile Magazine
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        LNJ Bhilwara and Birla Cellulose partner to
                                                                        explore functional textiles with graphene <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>14 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        Birla Cellulose teams up with Bhilwara Group
                                                                        Companies to explore graphene-enhanced textiles
                                                                        <br><i class="publication"></i>
                                                                        <publication>Apparel Resources</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>18 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>Business Standard</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>Daily Hunt</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>The Print</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>ANI News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>Press Trust of India</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        पंचतत्व से प्रेरित सस्टेनेबल टेक्सटाईल इनोवेशन्स
                                                                        का प्रदर्शन किया <br><i class="publication"></i>
                                                                        <publication>Aaj Samaj</publication>
                                                                        <medium>[Medium: Ludhiana]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited Wins 'Innovative Water Management
                                                                        and Conservation' Award at CITI Textile
                                                                        Sustainability Awards 2024-25 at Bharat Tex
                                                                        <br><i class="publication"></i>
                                                                        <publication>Lokmat Times</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2026 <br><i class="publication"></i>
                                                                        <publication>Hindustan Express</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2027 <br><i class="publication"></i>
                                                                        <publication>Adhikar</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2032 <br><i class="publication"></i>
                                                                        <publication>Rajasthan Live</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2030 <br><i class="publication"></i>
                                                                        <publication>Dainik Newsjyoti</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2030 <br><i class="publication"></i>
                                                                        <publication>Humara Samachar</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2031 <br><i class="publication"></i>
                                                                        <publication>The Public Side</publication>
                                                                        <medium>[Medium: Jaipur]</medium>
                                                                        <date>19-Feb-25</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href="#">
                                                                        RSWM Limited unveils its Panchtatva-Inspired
                                                                        Sustainable Textile Innovations at Bharat Tex
                                                                        2032 <br><i class="publication"></i>
                                                                        <publication>Punjab Kesari</publication>
                                                                        <medium>[Medium: Ludhiana]</medium>
                                                                        <date>21 February, 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feb 2025 -->

                                    <!-- Jan 2025 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree6666"
                                                    aria-expanded="false" aria-controls="collapseThree6666">
                                                    <?php echo 'January 2025'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree6666" class="collapse" aria-labelledby="headingThree6666"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://retail.economictimes.indiatimes.com/news/industry/can-budget-2025-revive-consumer-spending-retail-industry-outlines-key-demands/117606004">
                                                                        Can Budget 2025 revive consumer spending? Retail
                                                                        industry outlines key demands <br><i
                                                                            class="publication"></i>
                                                                        <publication>ET Retail</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>27 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://retail.economictimes.indiatimes.com/live-blog/retail-budget-2025-live-updates/117690448">
                                                                        Retail Budget 2025 Expectations LIVE: Retail
                                                                        industry outlines key demands <br><i
                                                                            class="publication"></i>
                                                                        <publication>ET Retail</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>29 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.deccanherald.com/business/union-budget/budget-2025-expectations-liberalise-import-policies-for-raw-materials-to-make-textile-sector-more-competitive-3378085">
                                                                        Budget 2025 Expectations | Liberalise import
                                                                        policies for raw materials to make textile
                                                                        sector more competitive, says RSWM Limited CEO
                                                                        Rajeev Gupta <br><i class="publication"></i>
                                                                        <publication>Deccan Herald </publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>29 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.moneycontrol.com/budget/budget-2025-enhanced-allocation-scope-of-pli-will-bring-these-sectors-stocks-in-limelight-article-12925048.html">
                                                                        Budget 2025: Enhanced allocation, scope of PLI
                                                                        will bring these sectors, stocks in limelight
                                                                        <br><i class="publication"></i>
                                                                        <publication>Moneycontrol</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>31 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://in.apparelresources.com/business-news/trade/budget-2025-textile-apparel-sectors-pre-budget-recommendations/">
                                                                        Budget 2025: Textile and apparel sector’s
                                                                        pre-budget recommendations <br><i
                                                                            class="publication"></i>
                                                                        <publication> Apparel Resources</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>27 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.fibre2fashion.com/news/textile-news/india-budget-2025-will-demands-of-textile-industry-be-addressed--300438-newsdetails.htm">
                                                                        India Budget 2025: Will demands of textile
                                                                        industry be addressed? <br><i
                                                                            class="publication"></i>
                                                                        <publication>Fibre2Fashion</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>30 Januray 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilevaluechain.in/news-insights/textile-industry/textile-industry-pre-budget-insights-by-rswm-ceo-rajeev-gupta">
                                                                        Pre-Budget Expectations from RSWM Limited CEO
                                                                        Mr. Rajeev <br><i class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>21 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apparelviews.com/rswm-ceo-highlights-key-budget-recommendations-for-textile-sector-growth">
                                                                        RSWM CEO highlights key budget recommendations
                                                                        for textile sector growth <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: ]</medium>
                                                                        <date>21 January 2025</date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Jan 2025 -->
                                    <!-- Dec 2024 -->
                                    <div class="card" id="2024">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree5555"
                                                    aria-expanded="false" aria-controls="collapseThree5555">
                                                    <?php echo 'December 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree5555" class="collapse" aria-labelledby="headingThree5555"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantextilemagazine.in/how-modern-machines-and-innovations-are-transforming-indias-knitting-industry/">
                                                                        How Modern Machines and Innovations are
                                                                        Transforming India’s Knitting Industry <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Textile Magazine
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>23-Dec-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://retail.economictimes.indiatimes.com/blog/decoding-how-indias-textile-industry-enhanced-its-global-standing-in-2024/116831104?utm_source=latest_news&utm_medium=homepage">
                                                                        Decoding how India’s textile industry enhanced
                                                                        its global standing in 2024 <br><i
                                                                            class="publication"></i>
                                                                        <publication>ET Retail</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>31-Dec-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/12qgozoYnTnaPbnkQNqTfMH3393M7PPk0/view">
                                                                        हमारे प्रोडक्ट हर वर्ग के उपभोक्ताओं की उम्मीदों
                                                                        पर खरे उतरते रहे हैं : बी. एम. शर्मा, जॉइंट
                                                                        मैनेजिंग डायरेक्टर, RSWM <br><i
                                                                            class="publication"></i>
                                                                        <publication>Dainik Bhaskar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>27-Dec-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thecsruniverse.com/articles/transforming-textiles-rswm-s-path-to-a-greener-future">
                                                                        Transforming Textiles: RSWM’s Path to a Greener
                                                                        Future <br><i class="publication"></i>
                                                                        <publication>The CSR Universe</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>11-Dec-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dec 2024-->
                                    <!-- Nov 2024 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree4444"
                                                    aria-expanded="false" aria-controls="collapseThree4444">
                                                    <?php echo 'November 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree4444" class="collapse" aria-labelledby="headingThree4444"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.imagesbof.in/how-rswms-lnj-knits-is-leading-indias-activewear-fabric-revolution/">
                                                                        How RSWM’s LNJ Knits is leading India’s
                                                                        activewear fabric revolution <br><i
                                                                            class="publication"></i>
                                                                        <publication>Images Business of Fashion Magazine
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>12-Nov-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.imagesbof.in/sustainable-yarns-rswm-ltds-vision-for-a-greener-textile-future/">
                                                                        Sustainable yarns: RSWM Limited’s vision for a
                                                                        greener textile future <br><i
                                                                            class="publication"></i>
                                                                        <publication>Images Business of Fashion Magazine
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>05-Nov-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1-BpHNA3yh2deR00Gq6kKv2SJMn_DFN8S/view">
                                                                        The Green Blue Print Cover Story <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Resources: Apparel Online
                                                                            Magazine</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>29-Nov-24 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nov 2024-->

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree1111"
                                                    aria-expanded="false" aria-controls="collapseThree1111">
                                                    <?php echo 'October 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree1111" class="collapse " aria-labelledby="headingThree1111"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantextilemagazine.in/future-ready-rswms-plans-for-a-sustainable-and-automated-future/">
                                                                        Future-Ready; RSWM’s plans for a sustainable and
                                                                        automated future <br><i class="publication"></i>
                                                                        <publication>The Textile Magazine</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>October 8, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://apparelresources.com/business-news/manufacturing/denim-mills-gear-comeback-last-years-setback/">
                                                                        Denim mills gear up for comeback after last
                                                                        year’s setback <br><i class="publication"></i>
                                                                        <publication>Apparel Resources</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>October 10, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.financialexpress.com/business/industry-how-a-holistic-approach-to-sustainable-practices-can-provide-the-indian-textile-industry-with-a-competitive-edgenbsp-3647325/">
                                                                        How a Holistic Approach to Sustainable Practices
                                                                        can Provide the Indian Textile Industry with a
                                                                        Competitive Edge <br><i class="publication"></i>
                                                                        <publication>Financial Express</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>October 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://etedge-insights.com/industry/manufacturing/transforming-textile-manufacturing-the-impact-of-renewable-energy-and-efficiency/">
                                                                        Transforming textile manufacturing: The impact
                                                                        of renewable energy and efficiency <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Economic Times (ET Edge)
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>October 29, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>
                                                <?php $disclosure_args = array("post_type" => "investor", 'fields' => 'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "order" => "DESC", "tax_query" => array(array("taxonomy" => $disclosure_terms->taxonomy, "field" => "id", "terms" => array($disclosure_terms->term_id),),));
                                                $disclosure_query = new WP_Query($disclosure_args); ?>
                                                <?php if ($disclosure_query->have_posts()) { ?>
                                                    <div class="accordian_Innercontent">
                                                        <ul class="compliances_responsive">
                                                            <?php while ($disclosure_query->have_posts()) {
                                                                $disclosure_query->the_post() ?>
                                                                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                                                                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)'; ?>"
                                                                        target="_blank"> <img
                                                                            src="<?php echo get_template_directory_uri() ?>/images/pdf-icon.png"
                                                                            alt="" /> <?php the_title(); ?> </a> </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- related party transaction -->
                                    <!-- September 2024 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree2222"
                                                    aria-expanded="false" aria-controls="collapseThree2222">
                                                    <?php echo 'September 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree2222" class="collapse" aria-labelledby="headingThree2222"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->


                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href=""> RSWM Ltd's Brij Mohan
                                                                        Sharma on 'For All Reasons, For All Seasons'
                                                                        Campaign | VideoBrief <br><i
                                                                            class="publication"></i>
                                                                        <publication>Mediabrief</publication>
                                                                        <medium>[Medium: Youtube]</medium>
                                                                        <date>September 03, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabrief.com/rswms-brij-mohan-sharma-on-videobrief/">
                                                                        VideoBrief | Brij Mohan Sharma decodes RSWM's
                                                                        For All Reasons, For All Seasons campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 03, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/mediabriefdotcom_videobrief-mediabrief-brijmohansharma-activity-7240977645558001665-OLlG/">
                                                                        VideoBrief episode, Brij Sharma, Joint MD of
                                                                        RSWM Limited <br><i class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>September 03, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantelevision.com/mam/media-and-advertising/ad-campaigns/a-deep-dive-into-rswm%27s-%27for-all-reasons%2C-for-all-seasons%27-campaign-with-b.m.-sharma-240923">
                                                                        A deep dive into RSWM's 'For All Reasons, For
                                                                        All Seasons' campaign with B.M. Sharma <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Television</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/indian-television-dot-com-pvt-ltd_a-deep-dive-into-rswms-for-all-reasons-activity-7243896436235419648-E9Ie?utm_source=share&utm_medium=member_desktop">
                                                                        A deep dive into RSWM's 'For All Reasons, For
                                                                        All Seasons' campaign with B.M. Sharma <br><i
                                                                            class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>September 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1jtUQp2DYROLYbmVPPKB-FcR0NKhH-js4/view">
                                                                        Key challenges faced by denim manufacturers
                                                                        today, and how we can address these challenges?
                                                                        <br><i class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Print ]</medium>
                                                                        <date>September 10, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://csrbox.org/Impact/description/India_CSR_news_RSWM-Leads-the-Way-in-Sustainability-with-Progressive-Green-Initiatives_2610">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>CSR Box</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thecsruniverse.com/articles/rswm-leads-charge-against-plastic-waste-recycles-1-830-million-pet-bottles-annually">
                                                                        RSWM Leads Charge Against Plastic Waste:
                                                                        Recycles 1,830 Million PET Bottles Annually
                                                                        <br><i class="publication"></i>
                                                                        <publication>The CSR Universe</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/thecsruniverse_textile-biofuel-co2-activity-7244266032670859264-jsry?utm_source=share&utm_medium=member_iosRSWM">
                                                                        RSWM Leads the Fight Against Plastic Waste
                                                                        <br><i class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: Linkedln]</medium>
                                                                        <date> </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/thecsruniverse_textile-biofuel-co2-activity-7244266032670859264-jsry?utm_source=share&utm_medium=member_iosRSWM">
                                                                        RSWM Pioneers Sustainability with Innovative
                                                                        Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>India CSR</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantextilemagazine.in/rswms-commitment-to-sustainability-leading-the-green-textile-revolution/">
                                                                        RSWM's Commitment to Sustainability: Leading the
                                                                        Green Textile Revolution <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Textile Magazine</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/textile-magazine_sustainability-rswm-textileinnovation-activity-7242132451794305024-_Cd1?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM's Commitment to Sustainability: Leading the
                                                                        Green Textile Revolution <br><i
                                                                            class="publication"></i>
                                                                        <publication></publication>
                                                                        <medium>[Medium: Linkedln]</medium>
                                                                        <date>September 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://apparelresources.com/business-news/sustainability/rswm-ltd-launches-sustainability-report-2023-24/">
                                                                        RSWM Ltd., launches Sustainability Report
                                                                        2023-24 <br><i class="publication"></i>
                                                                        <publication>Apparel Resources</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabrief.com/lnj-bhilwara-groups-flagship-company-rswm-launches-2023-24-sustainability-report/">
                                                                        LNJ Bhilwara Group's flagship company RSWM
                                                                        launches 2023-24 sustainability report <br><i
                                                                            class="publication"></i>
                                                                        <publication>MediaBrief</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apnnews.com/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>APN News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://fashionvaluechain.com/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Fashion Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://the9thestate.com/news/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>The 9th Estate</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://knittingviews.com/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Knitting Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://thehomefashion.in/rswm-sets-the-standard-for-sustainability-with-forward-thinking-green-projects/">
                                                                        RSWM Sets the Standard for Sustainability with
                                                                        Forward-thinking Green Projects <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Home Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://businessnewsthisweek.com/business/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Business News This Week
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://onlinemediacafe.com/business/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Online Media Cafe</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabulletins.com/business/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Media Bulletins</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.konexionetwork.com/NewsDetails.aspx?newsid=b7def8dd-c5fb-4a71-be04-6260e7aa3645">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Konexio Network</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://biznewsdesk.com/business/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Biz News Desk</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://smartbusinesnews.com/business/rswm-leads-the-way-in-sustainability-with-progressive-green-initiatives/">
                                                                        RSWM Leads the Way in Sustainability with
                                                                        Progressive Green Initiatives <br><i
                                                                            class="publication"></i>
                                                                        <publication>Smart Business News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 18, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1mKFL_RsMhkZ3NuKVmJUlMdUDgCuTQprk/view">
                                                                        A Turning Point for Tiruppur! <br><i
                                                                            class="publication"></i>
                                                                        <publication>Dinamalar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1ie56ybVAKBC7vquYYMOy9yxYMbQbd9Ky/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Namathu Murasu</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1LxutGgZM1_0ok8GaUI-0FMAvS3foXDsF/view">
                                                                        Textile expo in Tiruppur <br><i
                                                                            class="publication"></i>
                                                                        <publication>Dina Bhoomi</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1r_piIW0SO1UqA3KO575I4znEtMlU0Xs-/view">
                                                                        Yarnex Exhibition in Tiruppur <br><i
                                                                            class="publication"></i>
                                                                        <publication>Tamil Suder</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1nCaSiBuilZSz0K6PepjDUtOVubS9s0vM/view">
                                                                        RSWM plans to expands its presence in Tiruppur
                                                                        <br><i class="publication"></i>
                                                                        <publication>Trinity Mirror</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 15, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1V8T5vGoVEIPjB7ZG_szdU48DMT36S8uR/view">
                                                                        RSWM plans to expands its presence in Tiruppur
                                                                        <br><i class="publication"></i>
                                                                        <publication>Dina Vel</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 16, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1XHnpJX1LT5sgT4cXTokJC042mc9T5_gM/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Afternoon</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 15, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1GWB37RFbNpAsALfC9T0grOLQi-w9lUHH/view">
                                                                        RSWM got huge response in 2024 yarnex in
                                                                        Tiruppur <br><i class="publication"></i>
                                                                        <publication>Ullatchi Murasu</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 16, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/12gBCWMWzDOd3_DCe86-wbRcL4Tkd7UvV/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Dina Sooriyan</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 16, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1cRYuAOarNzFSxbtrWSkaHydjsHKSoSfG/view">
                                                                        RSWM plans to expands its presence in Tiruppur
                                                                        <br><i class="publication"></i>
                                                                        <publication>Urimai Kural</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1SLtT_apTOeJkoZgCr56BQNLBRYEvrFh1/view">
                                                                        RSWM plans to expands its presence in Tiruppur
                                                                        <br><i class="publication"></i>
                                                                        <publication>Ullatchi Saaral</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1USGUM68El5cPxmUhiAvPm8xdqnH8YdAf/view">
                                                                        RSWM launched new products in Yarnex 2024 expo
                                                                        <br><i class="publication"></i>
                                                                        <publication>Tamil Anjal</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1PLgvmTJg9hSm_7AWCL8AH9MMwqsFXtnh/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Dina Sangu</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1PjhVjjgeJBxBlJmEE6DzZymDF4Pbi5HY/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Business Minutes</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1sTRU4pmYuQRxzo8F58bJvZGhmIh65Q_P/view">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Makkal Kural</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1gvOIXpFPQNEKJWX3w0OnJdkzz3X9tK1U/view">
                                                                        RSWM launched new products in Yarnex 2024 expo
                                                                        <br><i class="publication"></i>
                                                                        <publication>Tamilaka News</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/131bpUNsfS7tl19JHyR0ZOTpt7jBzFgoo/view">
                                                                        Yarnex expo in Tiruppur <br><i
                                                                            class="publication"></i>
                                                                        <publication>Maalai Murasu</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1kTreSzvDHNzuXwma--egj-usm1Q_MUMw/view">
                                                                        RWSM Unveiled its sustainability collections in
                                                                        Yarnex 2024 <br><i class="publication"></i>
                                                                        <publication>Covai Mail</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1T5gH09U3ejcmmNlQ6myiPvTyor26MG8f/view">
                                                                        Yarnex 2024: RSWM Unveils Sustainable Product
                                                                        Collection <br><i class="publication"></i>
                                                                        <publication>Minutes News</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.tamil365.com/2024/09/RSWMs-new-products-makes-waves-in-Tiruppur-Market.html">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market
                                                                        <br><i class="publication"></i>
                                                                        <publication>Tamil 356</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.tn24news.com/2024/09/RSWM-new-products-makes-waves-in-tiruppur-market-.html">
                                                                        RSWM's new products makes waves in Tiruppur
                                                                        Market <br><i class="publication"></i>
                                                                        <publication>Tn24News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.thetntoday.com/2024/09/rswm-unveiled-its-sustainability.html">
                                                                        RSWM unveiled its sustainability collections in
                                                                        YARNEX 2024 <br><i class="publication"></i>
                                                                        <publication>The TN Today</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>September 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>


                                                    <!-- Press Release Listings -->
                                                </ul>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- September 2024-->
                                    <!-- August 2024 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree4444"
                                                    aria-expanded="false" aria-controls="collapseThree4444">
                                                    <?php echo 'August 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree4444" class="collapse" aria-labelledby="headingThree4444"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->


                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilesouthasia.com/2024/08/21/yogesh-dutt-tiwari-rswm-limited/">
                                                                        Interview — Yogesh Dutt Tiwari, RSWM Melange
                                                                        Yarn Business <br><i class="publication"></i>
                                                                        <publication>Textile South Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 21, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilesouthasia.com/2024/08/07/arvind-maurya-rswm-knits-business/">
                                                                        Interview — Arvind Maurya, RSWM Knits Business
                                                                        <br><i class="publication"></i>
                                                                        <publication>Textile South Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 07, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.youtube.com/watch?v=sWWVvc9a01Y">
                                                                        Yogesh Dutt Tiwari of RSWM Speaks to Textile
                                                                        South Asia <br><i class="publication"></i>
                                                                        <publication>Textile South Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 07, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apparelviews.com/how-denim-manufacturers-are-steadily-addressing-sustainability-and-other-challenges/">
                                                                        Key challenges faced by denim manufacturers
                                                                        today, and how we can address these challenges?
                                                                        <br><i class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 11, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1UUq3jzpCBZ1N_TAV1D61kL6boUTDJkC8/view">
                                                                        RSWM Limited ने लॉन्च किया अपना नया कैंपेन 'फॉर
                                                                        ऑल रीजन्स, फॉर ऑल सीजन्स' <br><i
                                                                            class="publication"></i>
                                                                        <publication>Dainik Bhaskar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>August 28, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/13XEMyPuibIKnCfDBWpX98vka8zUOfaxO/view">
                                                                        RSWM Limited ने लॉन्च किया अपना नया कैंपेन 'फॉर
                                                                        ऑल रीजन्स, फॉर ऑल सीजन्स' <br><i
                                                                            class="publication"></i>
                                                                        <publication>Aaj Samaj</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>August 28, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1wiOVa5x1UplTZwHn8TLNpolJLp9Uf3lj/view">
                                                                        फॉरऑल रीज़न्स, फॉर ऑल सीजन्स कैंपेन लांच <br><i
                                                                            class="publication"></i>
                                                                        <publication>Veer Arjun</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>August 28, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1aVGT_py9UpITuxUYxSzqSVL89py1Zj-q/view">
                                                                        फॉर ऑल रीजन्स, सीजन्स, फॉर ऑल कैंपेन की हुई
                                                                        शुरुआत <br><i class="publication"></i>
                                                                        <publication>Dainik Savera</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>August 29, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1F_ngTBxIbGToKuW8QBN972otk_q9UpxF/view">
                                                                        RSWM Limited ने लॉन्च किया अपना नया कैंपेन 'फॉर
                                                                        ऑल रीज़न्स, फॉर ऑल सीज़न्स'; छह दशकों के इनोवेशन
                                                                        और भरोसे का जश्न <br><i class="publication"></i>
                                                                        <publication>Business Remedies </publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>August 29, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.afaqs.com/creative-showcase/digital/for-all-reasons-for-all-seasons">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Afaqs</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.brandinginasia.com/rswm-celebrates-resilience-innovation-and-trust-in-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Branding in Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantelevision.com/mam/media-and-advertising/ad-campaigns/rswm-ltd-launches-%E2%80%98for-all-reasons%2C-for-all-seasons%E2%80%99-campaign-240812">
                                                                        RSWM Ltd launches ‘For All Reasons, For All
                                                                        Seasons’ campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Television</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabrief.com/rswm-rolls-out-new-digital-campaign-for-all-reasons-for-all-seasons/">
                                                                        RSWM rolls out new digital campaign ‘For All
                                                                        Reasons, For All Seasons’ <br><i
                                                                            class="publication"></i>
                                                                        <publication>Media Brief</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apparelviews.com/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilevaluechain.in/news-insights/rswm-limited-launches-the-for-all-reasons-for-all-seasons">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://onlinemediacafe.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/#google_vignette">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Online Media Cafe</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://businessnewsthisweek.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Business News This Week
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabulletins.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Media Bulletins</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://contentmediasolution.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Content Media Solutions
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://biznewsdesk.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Biz News Week</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://smartbusinesnews.com/business/rswm-limited-celebrates-the-story-of-resilience-innovation-and-trust-with-the-launch-of-for-all-reasons-for-all-seasons-campaign/">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Smart Business News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.passionateinmarketing.com/#google_vignette">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Passionate in Marketing
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://virtualfashion.tech/index.php/blog/rswm-limited-celebrates-decades-of-weaving-trust">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of “For All
                                                                        Reasons, For All Seasons” campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Virtual Fashion</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.konexionetwork.com/NewsDetails.aspx?newsid=88fbadc0-5819-49e4-a997-291a2b25b9b1">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of "For All
                                                                        Reasons, For All Seasons" campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Konexio Network</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/indian-television-dot-com-pvt-ltd_rswm-ltd-launches-for-all-reasons-for-all-activity-7228724174037352450-Uwe2?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of "For All
                                                                        Reasons, For All Seasons" campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Indian Television</publication>
                                                                        <medium>[Medium: Linkedin]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/knitting-views_rswm-limited-celebrates-the-story-of-resilience-activity-7228717077203668993-XywY?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of "For All
                                                                        Reasons, For All Seasons" campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Knitting Views</publication>
                                                                        <medium>[Medium: Linkedin]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/apparel-views_rswm-limited-celebrates-the-story-of-resilience-activity-7228717087857254400-TwuI?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of "For All
                                                                        Reasons, For All Seasons" campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Linkedin]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/perfect-sourcing_%3F%3F%3F%3F%3F%3F%3F%3F%3F%3F%3F-%3F%3F%3F%3F%3F-%3F%3F%3F%3F%3F%3F-activity-7229012577790402561-0MlV?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM Limited celebrates the story of Resilience,
                                                                        Innovation and Trust with the launch of "For All
                                                                        Reasons, For All Seasons" campaign <br><i
                                                                            class="publication"></i>
                                                                        <publication>Perfect Sourcing</publication>
                                                                        <medium>[Medium: Linkedin]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://x.com/TextileValue/status/1823646797576769638">
                                                                        For All Reasons, For All Seasons <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: X]</medium>
                                                                        <date>August 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- August 2024-->
                                    <!-- July 2024 -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">
                                                <button style="color: #d5b66a;" class="btn btn-link collapsed"
                                                    data-toggle="collapse" data-target="#collapseThree3333"
                                                    aria-expanded="false" aria-controls="collapseThree3333">
                                                    <?php echo 'July 2024'; //$disclosure_terms->name; 
                                                    ?> <span> <i class="ion-plus"></i>
                                                        <i class="ion-minus"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree3333" class="collapse" aria-labelledby="headingThree3333"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="compliances_responsive">
                                                    <!-- Press Release Listings -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantextilemagazine.in/rswm-announces-rs-730-crore-investment-in-jammu-kashmir/">
                                                                        RSWM announces Rs. 730 Crore investment in Jammu
                                                                        & Kashmir <br><i class="publication"></i>
                                                                        <publication>The Textile Magazine</publication>
                                                                        <medium>[Medium: Online ]</medium>
                                                                        <date>July 31, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1XDF-Yamds8kntoiRxUcsQtEHHXJSX-kL/view?usp=sharing">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Samachar Jagat</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1ZYS4ElwhEnz0gwBEoQHxEeG7dTvYNJfD/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Sanjeevani Today</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1z3mB1g6Xgt34quAlDdyG3IGP6Nx7FLmu/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Hindustan Express</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1x8KnCPe7qVtZwOXWucTuFuOWZmXVrTUz/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Adhikar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1bxHZ_eUAtvhw6o3xm9XSQ2kA0SPlc8_i/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Badhtai Dunia</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1LPXjThk8yVu0dKsTM8ek7aw8vLnuJrMj/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Jaipur Bhoomi</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1Lzut7crRvrBLDXaiAHPfLDct_L3D4B0j/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Rajasthan Live</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1MaJf1VqZ7GleZZp5ln1SbcrySzoo853G/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Divya Rashtra</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1tFNQsIEFkwE-UY1idDQSa0bUKOedIJc6/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Yaksham Samachar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1zmtAtrbtSYmo4n1hZbBUJ3j3cSvu3dom/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Uday Today</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1sY0GAgiWoMoIDdxeGJJLx9CZ4P_mkSKl/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Humara Samachar</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 13, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://drive.google.com/file/d/1O2XRKmFC_3MwORasMjYMN-MKblIgONkw/view">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Satta Jagat</publication>
                                                                        <medium>[Medium: Print]</medium>
                                                                        <date>July 14, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.patrikajagat.com/2024/07/jhunjhunwala-budget-full-of-expectations-for-industry/">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Patrika Jagat</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 11, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://divyarashtra.com/%e0%a4%89%e0%a4%a6%e0%a5%8d%e0%a4%af%e0%a5%8b%e0%a4%97-%e0%a4%9c%e0%a4%97%e0%a4%a4-%e0%a4%95%e0%a5%87-%e0%a4%b2%e0%a4%bf%e0%a4%8f-%e0%a4%89%e0%a4%ae%e0%a5%8d%e0%a4%ae%e0%a5%80%e0%a4%a6%e0%a5%8b/">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Divya Rashtra</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 11, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.societynews.page/2024/07/blog-post_93.html">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>Society News</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 11, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.thepublicside.page/2024/07/blog-post_0.html">
                                                                        Budget full of expectations for the industry:
                                                                        Jhunjhunwala <br><i class="publication"></i>
                                                                        <publication>The Public side </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 11, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilesouthasia.com/2024/07/24/rswms-riju-budget-2024-25/">
                                                                        RSWMs Riju Jhunjhunwala praise on union budget
                                                                        2024-25 <br><i class="publication"></i>
                                                                        <publication>Textile South Asia </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 24, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://solarquarter.com/2024/07/25/indias-modi-3-0-budget-a-vision-for-economic-growth-and-sustainable-energy-future/#google_vignette">
                                                                        Mr. Riju Jhunjhunwala, CMD RSWM Ltd & MD
                                                                        Bhilwara Energy Ltd <br><i
                                                                            class="publication"></i>
                                                                        <publication>Passionate in Marketing
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 24, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apnnews.com/budget-quote-comment-from-mr-riju-jhunjhunwala-cmd-rswm-ltd-md-bhilwara-energy-ltd/">
                                                                        Budget Quote comment from Mr. Riju Jhunjhunwala,
                                                                        CMD RSWM Ltd & MD Bhilwara Energy Ltd <br><i
                                                                            class="publication"></i>
                                                                        <publication>APN News </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 24, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textileinsights.in/rswm-launches-sustainable-textile-collection-for-aw-2025-26/">
                                                                        RSWM Launches Sustainable Textile Collection For
                                                                        AW 2025-26 <br><i class="publication"></i>
                                                                        <publication>Textile Insights</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://indiantextilejournal.com/rswm-introduces-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM Launches Sustainable Textile Collection For
                                                                        AW 2025-27 <br><i class="publication"></i>
                                                                        <publication>Indian Textile Journal
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>August 02, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://mediabrief.com/rswm-unveils-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM unveils sustainable autumn-winter 2025-26
                                                                        collection <br><i class="publication"></i>
                                                                        <publication>MediaBrief</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.indiantextilemagazine.in/rswm-introduces-innovative-and-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>The Textile Magazine</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 20, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.imagesbof.in/rswm-introduces-innovative-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM introduces innovative & sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Images Business of Fashion
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19 July 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilevaluechain.in/news-insights/rswm-introduces-innovative-sustainable-autumn-winter-2025-26">
                                                                        RSWM introduces innovative & sustainable
                                                                        Autumn-Winter 2025-26 <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://apparelresources.com/business-news/retail/rswm-introduces-autumn-winter-2025-26-collection/">
                                                                        RSWM introduces Autumn-Winter 2025-26 collection
                                                                        <br><i class="publication"></i>
                                                                        <publication>Apparel Resources</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://fashionvaluechain.com/the-creative-environmentally-friendly-autumn-winter-2025-2026-collection-from-rswm/">
                                                                        The creative & environmentally friendly
                                                                        Autumn-Winter 20252026 collection from RSWM
                                                                        <br><i class="publication"></i>
                                                                        <publication>Fashion Value Chain</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 20, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://textilesouthasia.com/2024/07/19/rswm-winter-2025-26-collection/">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile South Asia</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>19 July 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.apparelviews.com/rswm-introduces-innovative-and-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM Introduces Innovative and Sustainable
                                                                        Autumn-Winter 2025-26 Collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://knittingviews.com/rswm-introduces-innovative-and-sustainable-autumn-winter-2025-26-collection/">
                                                                        RSWM Introduces Innovative and Sustainable
                                                                        Autumn-Winter 2025-26 Collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Knitting Views</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank" href=""> RSWM Unveils Sustainable
                                                                        & Stylish A/W Collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>EasiTex Private Limited
                                                                        </publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 20, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://perfectsourcing.net/news/rswm-limited-unveils-autumn-winter-2025-26-collection-with-a-focus-on-sustainability-and-innovation/">
                                                                        RSWM Limited Unveils Autumn-Winter 2025-26
                                                                        Collection with a Focus on Sustainability and
                                                                        Innovation <br><i class="publication"></i>
                                                                        <publication>Perfect Sourcing</publication>
                                                                        <medium>[Medium: Online]</medium>
                                                                        <date>July 23, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/apparel-views_rswm-introduces-innovative-and-sustainable-activity-7220026760837439488-wMjG?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Apparel Views</publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/textilevaluechain_rswm-introduces-innovative-sustainable-activity-7220015165356875776-HHm-?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/textile-insights-newspaper_rswm-launches-sustainable-textile-collection-activity-7220014130169016320-c9o4?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Insights</publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/knitting-views_rswm-introduces-innovative-and-sustainable-activity-7220026831398129664-l4b5?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Knitting Views</publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/easitexprivatelimited_rswm-unveils-sustainable-stylish-aw-collection-activity-7220276267294629889-12Qw?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>EasiTex Private Limited
                                                                        </publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 20, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/easitexprivatelimited_rswm-unveils-sustainable-stylish-aw-collection-activity-7220276267294629889-12Qw?utm_source=share&utm_medium=member_desktop">
                                                                        RSWM introduces innovative and sustainable
                                                                        Autumn-Winter 2025-26 collection <br><i
                                                                            class="publication"></i>
                                                                        <publication>Textile Value Chain</publication>
                                                                        <medium>[Medium: X]</medium>
                                                                        <date>July 19, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">
                                                                <button class="btn btn-link collapsed">
                                                                    <a target="_blank"
                                                                        href="https://www.linkedin.com/posts/textilesouthasia_rswms-riju-jhunjhunwala-praise-on-union-activity-7221828569117736960-4Ist?utm_source=share&utm_medium=member_desktop">
                                                                        RSWMs Riju Jhunjhunwala praises union budget
                                                                        2024-25 <br><i class="publication"></i>
                                                                        <publication>Textile South Asia </publication>
                                                                        <medium>[Medium: LinkedIn]</medium>
                                                                        <date>July 24, 2024 </date>
                                                                    </a>
                                                                </button>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <!-- Press Release Listings -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- July 2024-->
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
                <div class="col-lg-4 order-2 order-lg-1">
                    <!-- page sidebar -->
                    <div class="page-sidebar" id="scrollingDiv"
                        style="position: sticky; top: 0; width:fit-content; width:-webkit-fill-available; max-width:380px;">

                        <!-- single sidebar widget -->
                        <div class="single-sidebar-widget">
                            <h2 class="widget-title">MEDIA COVERAGE<br><sub style="color: #d5b66a;">Online / Print
                                    Media</sub></h2>
                            <ul class="sidebar-category">
                                <li class="active" style="text-transform:capitalize;"><a href="#2025">2025</a></li>
                                <li class="active" style="text-transform:capitalize;"><a href="#2024">2024</a></li>
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
<script>
    var $scrollingDiv = $("#scrollingDiv");

    $(window).scroll(function() {
        if ($(window).scrollTop() > 320) {
            $scrollingDiv
                .css("position", 'fixed')
                .css("top", '46px')
                .css("width", 'fit-content')
                .css("width", '-webkit-fill-available')
                .css("max-width", '380px')
        } else {
            $scrollingDiv
                .css("position", '')
                .css("top", '')
        }
    });
</script>
<!-- -->

<!-- -->
<?php get_template_part('template-investors/new-footer', 'menu') ?>
<script type="text/javascript" src="<?php echo site_url() ?>/assets/js/bootstrap.min.js"></script>