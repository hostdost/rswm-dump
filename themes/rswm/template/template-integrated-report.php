<?php
/* Template Name: Integrated Report */
//get_header('hd');
?>
<?php

$server   = htmlspecialchars($_SERVER['REQUEST_URI']);
$redirectArray = array(
    "/2024" => "/",
    "/2024" => "/",
    "/2023" => "/",
    "/2023" => "/",
    "/2022" => "/",
    "/2022" => "/",
    "/2021/" => "/",
    "/2021/" => "/",
    "/2020" => "/",
    "/2020/" => "/",
    "/2019" => "/",
    "/2019/" => "/",
    "/2018" => "/",
    "/2018/" => "/",
    "/2017" => "/",
    "/2017/" => "/",
    "/2016" => "/",
    "/2016/" => "/",
    "/2015" => "/",
    "/2015/" => "/",
    "/2014" => "/",
    "/2014/" => "/",
    "/2013" => "/",
    "/2013/" => "/",
    "/2012" => "/",
    "/2012/" => "/",
    "/2011/" => "/",
    "/2011/" => "/",
);
$key = array_keys($redirectArray);
if (in_array($server, $key)) {
    wp_redirect(site_url());
};
if ($_SERVER['REQUEST_URI'] == '/?annual-year=2020-21/page/2/' || $_SERVER['REQUEST_URI'] == '/?annual-year=2020-21/page/2' || $_SERVER['REQUEST_URI'] == '/news-coverage/gadget-innovations.com/2020/06/mayur-suiting-launches-virosecure-anti.html' || $_SERVER['REQUEST_URI'] == '/?annual-year=2018-19/page/2/' || $_SERVER['REQUEST_URI'] == '/?annual-year=2018-19/page/2' || $_SERVER['REQUEST_URI'] == '/?annual-year=2017-18/page/2/' || $_SERVER['REQUEST_URI'] == '/?annual-year=2017-18/page/2') {
    wp_redirect(site_url());
}
//echo "<p style='display:none;'>".$_SERVER['REQUEST_URI']."</p>";
?>

<!DOCTYPE html>
<html class="no-js no-svg" <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php echo wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/themes/rswm/images/rswm-logo.svg">
    <meta name="twitter:site" content="@RSWM Limited">
    <meta name="twitter:creator" content="@rswmofficial">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png"
        type="image/x-icon" />
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/fonts/fontawesome-webfont.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/fonts/BodoniStd-Book.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/fonts/Bodoni Book.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload"
        href="<?php echo get_template_directory_uri() ?>/css/fonts/ufonts.com_gotham-light-webfont.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/fonts/Gotham-Light.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/fonts/gothamhtf-book-webfont.woff2"
        as="font" type="font/woff2" crossorigin>
    <meta name="google-site-verification" content="GmhVfK4UqJEXpucwnpe44KFUI5P--q-qDD-2mURwSx8" />
    <?php wp_deregister_script('jquery'); ?>
    <?php wp_head() ?>
    <?php if (get_queried_object_id() === 1021) { ?>
        <meta property="business:contact_data:street_address" content="Bhilwara Tower, A-12, Sector - 1">
        <meta property="business:contact_data:locality" content="Noida">
        <meta property="business:contact_data:region" content="Uttar Pradesh">
        <meta property="business:contact_data:postal_code" content="201301">
        <meta property="business:contact_data:country_name" content="India">
    <?php } ?>
    <meta property="og:title" content="Integrated Annual Report 2024-25 | RSWM Limited" />
    <meta property="og:image" content="https://rswm.in/wp-content/uploads/2025/08/integrated-report.jpg" />
    <meta property="og:description" content="The integrated annual report brings together our performance, purpose and sustainability priorities into one cohesive narrative, anchored in transparency and long-term value creation." />
    <link rel="stylesheet" type="text/css" href="https://rswm.in/assets/vendors/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://rswm.in/assets/vendors/slick/slick-theme.css" />
    <!-- <link rel="stylesheet" href="<?php //echo site_url('/'); 
                                        ?>assets/css/vendor/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/font-awesome.min.css">
    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/ionicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/flaticon.min.css">
    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/icomoon.min.css">
    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/tractor-icon.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/plugins/animate.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/style-blue.css">
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/custom.css">
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "j0rrzjjcg8");
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1XTTXW8CEL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1XTTXW8CEL');
    </script>
    <!-- -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T76WQFL7');
    </script>
    <!-- End Google Tag Manager -->

    <!-- -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body <?php echo body_Class() ?>>
    <div class="loader"></div>
    <!-- -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T76WQFL7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- -->
    <div class="stickyButton"><a href="<?php echo site_url('/'); ?>wp-content/uploads/2020/04/RSWM_Cares.pdf"
            target="blank"> We
            Care</a></div>
    <div class="wrapper">
        <div class="overlaybg"></div>
        <!-- Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col span_2 col-md-2 col-4">
                        <a href="<?php echo site_url(); ?>" class="logo"
                            title="RSWM Ltd. – Leading Yarn Manufacturer and Supplier in India">
                            <img src="<?php echo get_template_directory_uri() ?>/images/rswm-logo.svg"
                                title="RSWM Ltd. – Leading Yarn Manufacturer and Supplier in India"
                                alt="RSWM Ltd. is Leading Yarn Manufacturer and Supplier in India" height="80"
                                width="100%" />
                        </a>
                    </div>
                    <div class="col span_10 col-md-10 col-8">
                        <div class="mobile-navigation">
                            <a href="#menu" id="toggle" class="">
                                <div class="menuText">MENU</div> <span></span>
                            </a>
                        </div>
                        <nav>
                            <?php $obj = get_queried_object();  ?>
                            <ul>
                                <li style="display:none!important;"><a class="about_MainNav"
                                        href="javascript:void(0);">ABOUT</a>
                                    <div class="subNav" style="display: none;">
                                        <ul>
                                            <li><a href="<?php echo get_permalink(95) ?>"
                                                    class="<?php echo $obj->ID == 95 ? 'active' : '' ?>"
                                                    title="Yarn Supplier and Manufacturer">ABOUT US</a></li>
                                            <li><a href="<?php echo get_permalink(95) ?>#locationBlock"
                                                    class="location_menu" title="RSWM Ltd. Locations">LOCATIONS</a></li>
                                            <li><a href="<?php echo get_permalink(5937) ?>" class="location_menu"
                                                    title="RSWM Ltd. Locations">MANAGEMENT</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a id="business-unitscroll" href="javascript:void(0);"
                                        class="<?php echo ($obj->ID == 5  || $obj->ID == 111 || $obj->ID == 8 || $obj->ID == 10 || $obj->name == 'melange') ? 'active' : '' ?>">YARNS
                                    </a>
                                    <div class="subNav" style="display: none;">
                                        <ul>

                                            <li><a href="<?php echo site_url('dyed'); ?>"
                                                    class="<?php echo $obj->name == 'dyed' ? 'active' : '' ?>"
                                                    title="Dyed Yarn Manufacturers">DYED YARNS</a></li>
                                            <li><a href="<?php echo site_url('greige'); ?>"
                                                    class="<?php echo $obj->ID == 111 ? 'active' : '' ?>"
                                                    title="Greige Yarn Manufacturers">GREIGE YARNS</a></li>
                                            <li><a href="<?php echo site_url('melange') ?>"
                                                    class="<?php echo $obj->name == 'melange' ? 'active' : '' ?>"
                                                    title="Melange Yarn">MELANGE YARNS</a></li>




                                </li>
                            </ul>
                    </div>
                    </li>

                    <li><a href="<?php echo get_permalink(10); ?>" class="<?php echo $obj->ID == 10 ? 'active' : '' ?>"
                            title="Denim Fabric Manufacturer">Denim</a></li>
                    <li><a href="<?php echo get_permalink(5834); ?>"
                            class="<?php echo $obj->ID == 5834 ? 'active' : '' ?>"
                            title="Knitted Fabric Manufacturer">Knitted Fabric</a>
                        <!-- <li><a href="<?php //echo get_permalink(103) 
                                            ?>" class="<?php //echo $obj->ID == 103 ? 'active' : '' 
                                                        ?>" title="Functional Blended Yarns">RSWM EDGE<sup>&reg;</sup></a></li> -->
                    <li><a href="<?php echo get_permalink(108) ?>" class="<?php echo $obj->ID == 108 ? 'active' : '' ?>"
                            title="RSWM Sustainable Initiatives ">Sustainability</a></li>
                    <li><a class="about_MainNav" href="javascript:void(0);">INVESTOR RELATIONS</a>
                        <div class="subNav" style="display: none;">
                            <ul>
                                <li><a href="<?php echo get_permalink(6076) ?>"
                                        class="<?php echo $obj->ID == 6076 ? 'active' : '' ?>"
                                        title="Yarn Supplier and Manufacturer">Disclosure under Regulation 46</a></li>
                                <li><a href="<?php echo get_permalink(6077) ?>"
                                        class="<?php echo $obj->ID == 6077 ? 'active' : '' ?>"
                                        title="RSWM Ltd. Locations">Other Disclosures </a></li>
                                <li><a href="<?php echo get_permalink(6330) ?>"
                                        class="<?php echo $obj->ID == 6330 ? 'active' : '' ?>"
                                        title="RSWM Ltd. Locations">Rights Issue </a></li>
                            </ul>
                        </div>
                    </li>
                    </li>
                    <li><a href="javascript:void(0);" class="" title="Story">Story</a>
                        <div class="subNav" style="display: none; width:200px;">
                            <ul>
                                <li><a href="https://story.rswm.in/denim" class="" title="Denim">Denim</a></li>
                                <li><a href="https://story.rswm.in/panchtatva" class=""
                                        title="Panchtatva">Panchtatva</a></li>
                                <li><a href="https://story.rswm.in/reasonsandseasons/" class=""
                                        title="Reasons and Seasons">Reasons and Seasons</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li><a href="<?php //echo get_permalink(108) 
                                        ?>" class="<?php //echo $obj->ID == 108 ? 'active' : '' 
                                                    ?>" title="RSWM Sustainable Initiatives">SUSTAINABILITY</a></li> -->
                    <!-- -->
                    <li style="display: none!important;"><a href="javascript:void(0);"
                            class="<?php echo ($obj->ID == 5  || $obj->ID == 111 || $obj->ID == 8 || $obj->ID == 10 || $obj->name == 'melange') ? 'active' : '' ?>">Collections
                        </a>
                        <div class="subNav" style="display: none;">
                            <ul>
                                <li><a href="<?php echo get_permalink(2326) ?>" class="<?php //echo ($obj->ID == 5 || $obj->ID == 111 || $obj->name == 'melange' || $obj->name == 'dyed') ? 'active' : '' 
                                                                                        ?>"
                                        title="Premier Knitting Collection">KNITTED FABRICS <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                    <ul class="yarnsSubMenu">
                                        <li><a href="<?php echo get_permalink(7091) ?>"
                                                class="<?php echo $obj->ID == 7091 ? 'active' : '' ?>"
                                                title="KNITSCAPE">KNITSCAPE</a></li>
                                        <!-- <li><a href="javascript:void(0);" class="<?php //echo $obj->name == 'dyed' ? 'active' : '' 
                                                                                        ?>" title="Dyed Yarn Manufacturers" target="_blank">KNITSCAPE</a></li>                                                     -->
                                    </ul>
                                </li>
                                <li><a href="<?php echo get_permalink(2326) ?>"
                                        class="<?php echo $obj->ID == 2326 ? 'active' : '' ?>"
                                        title="Yarn collections">YARNS</a>
                                    <ul class="knitSubMenu">
                                        <li><a href="<?php echo get_permalink(7131) ?>"
                                                class="<?php echo $obj->ID == 7131 ? 'active' : '' ?>"
                                                title="Stones & Sutras">Stones & Sutras</a></li>
                                        <li><a href="<?php echo get_permalink(6641) ?>"
                                                class="<?php echo $obj->ID == 6641 ? 'active' : '' ?>"
                                                title="Harmonize">Harmonize</a></li>
                                        <li><a href="<?php echo get_permalink(5942) ?>"
                                                class="<?php echo $obj->ID == 5942 ? 'active' : '' ?>"
                                                title="Canvas">Botanica</a></li>
                                        <li><a href="<?php echo get_permalink(5852) ?>"
                                                class="<?php echo $obj->ID == 5852 ? 'active' : '' ?>"
                                                title="Canvas">Wellbeing</a></li>
                                        <li><a href="<?php echo get_permalink(5783) ?>"
                                                class="<?php echo $obj->ID == 5783 ? 'active' : '' ?>"
                                                title="Canvas">Shift</a></li>
                                        <li><a href="<?php echo get_permalink(5456) ?>"
                                                class="<?php echo $obj->ID == 5456 ? 'active' : '' ?>"
                                                title="Canvas">Canvas</a></li>
                                        <li><a href="<?php echo get_permalink(4944) ?>"
                                                class="<?php echo $obj->ID == 4944 ? 'active' : '' ?>"
                                                title="Reboot">Reboot</a></li>
                                        <li><a href="<?php echo get_permalink(2795) ?>"
                                                class="<?php echo $obj->ID == 2795 ? 'active' : '' ?>"
                                                title="Divercity">Divercity</a></li>
                                        <li><a href="<?php echo get_permalink(2732) ?>"
                                                class="<?php echo $obj->ID == 2732 ? 'active' : '' ?>"
                                                title="Escapism">Escapism</a></li>
                                        <li><a href="<?php echo get_permalink(2272) ?>"
                                                class="<?php echo $obj->ID == 2272 ? 'active' : '' ?>"
                                                title="Reneu">Reneu</a></li>
                                        <li><a href="<?php echo get_permalink(2093) ?>"
                                                class="<?php echo $obj->ID == 2093 ? 'active' : '' ?>"
                                                title="FreeQuency">FreeQuency</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- -->
                    <li style="display: none!important;"><a href="<?php echo get_permalink(1021) ?> "
                            class="<?php echo $obj->ID == 1021 ? 'active' : '' ?>" title="Contact RSWM Ltd.">contact</a>
                    </li>
                    <?php
                    $marketstock = json_decode(get_option('rswm_stock_price'));
                    $rswm_stock_prvious_day_close_price = json_decode(get_option('rswm_stock_prvious_day_close_price'));
                    //$regularMarketPrice = $marketstock->quote->{"Current Price"};;
                    //$differenceStock = $marketstock->quote->{"Current Price"} - $rswm_stock_prvious_day_close_price->previous_day;
                    //$regularMarketChange =  number_format((float) $differenceStock, 2, '.', '');
                    //$regulare_percentage = (($differenceStock * 100) / $rswm_stock_prvious_day_close_price->previous_day);
                    //$regularMarketChangePercent = number_format((float) $regulare_percentage, 2, '.', '');;
                    ?>
                    <li class="socials-icon">
                        <ul>
                            <li style="display:none!important;" class="instagram1"><a
                                    href="https://www.instagram.com/rswmofficial/" target="_blank"
                                    title="RSWM Ltd. Official Instagram Page"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li style="display:none!important;" class="twitter"><a href="#" target="_blank"
                                    title="RSWM Ltd. Official Youtube Page"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a></li>
                            <li style="display:none!important;" class="facebook1"><a
                                    href="https://www.facebook.com/rswmofficial/" target="_blank"
                                    title="RSWM Ltd. Official Facebook Page"><i class="fa fa-facebook-f"
                                        aria-hidden="true"></i></a></li>
                            <li style="display:none!important;" class="facebook1"><a
                                    href="https://www.linkedin.com/company/rswmofficial/" target="_blank"
                                    title="RSWM Ltd. Official Linkedin Page"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>


                        </ul>
                    </li>
                    <li style="<?php echo !wp_is_mobile() ? 'display: flex;' : ''; ?>">
                        <!-- <a target="_blank" style="padding: 4px 10px;" href="https://www1.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=RSWM&illiquid=0&smeFlag=0&itpFlag=0"> -->
                        <a target="_blank" style="padding: 4px 10px;"
                            href="https://www.nseindia.com/get-quotes/equity?symbol=RSWM">
                            <!-- 									
									<div class="stock-ticker-wrapper di_ticker">
									<div class="stock-ticker-container"> 
										<div class="mask"> 
										
											RSWM <?php echo $regularMarketPrice ?> <?php echo $regularMarketChange ?> <?php echo $regularMarketChangePercent ?>%
										</div>
									</div>
								</div>
								 -->

                            RSWM Ltd-NSE Live



                        </a>
                    </li>
                    </nav>
                </div>
            </div>
    </div>
    </header>
    <?php
    global $post;
    ?>


    <div class="Sustainabilitypage">


        <div class="rswmCares">
            <style>
                .sustainability-img {
                    max-width: 220px !important;
                    width: 100%;
                }

                .sustainability-box {
                    /* border:1px solid #ccc;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; */
                    padding: 20px 5px;
                    border-radius: 20px;
                    /* margin: 8px; */

                }

                .sustainability-box p {
                    font-size: 13px !important;
                    padding: 10px;
                }

                .sustainability-box h3 {
                    font-weight: bold !important;
                }

                .sustainability-box h4 {
                    font-size: 30px !important;

                }

                .sustainability-box b {
                    text-align: center !important;
                    display: block;
                }

                .clogo {
                    width: 120px !important;
                    margin: auto auto;
                }

                h1 {
                    font-size: 1.5rem;
                }
            </style>
            <div class="container">
                <style>
                    .pdf {
                        width: 100%;
                        aspect-ratio: 4 / 3;
                    }

                    .pdf,
                    html,
                    body {
                        height: 100%;
                        margin: 0;
                        padding: 0;
                    }

                    h1,
                    h3 {
                        text-align: center;
                    }

                    h1 {
                        color: green;
                    }
                </style>
                <object class="pdf"
                    data="https://rswm.in/wp-content/uploads/2025/08/Integrated-Annual-Report-2024-25-and-AGM-Notice.pdf"
                    width="100%"
                    height="800">
                </object>



                <?php //endif; 
                ?>

            </div>
        </div>










    </div>





    <style>
        @media only screen and (max-width: 720px) {
            .text-alignl {
                text-align: center !important;
            }

            .text-alignr {
                text-align: center !important;
            }
        }

        @media only screen and (min-width: 721px) {
            .text-alignl {
                text-align: right !important;
            }

            .text-alignr {
                text-align: left !important;
            }
        }


        .lnjBhilwaraContent h3 {
            background: #4c913f;
            padding: 8px 34px;
            color: #fff;
            border-radius: 7px;

            font-family: 'gotham_htfbook';
            font-size: 18px;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-block;
        }

        .lnjBhilwaraContent h3 a {
            color: #fff;
            text-decoration: none;
        }


        .Sustainabilitypage .rswmCares h2 {
            color: #000;
            font-size: 25px;
            font-family: 'Bodoni Std Book';
            text-transform: uppercase;
            text-align: center;
            border-bottom: 1px solid #ccc;
            position: relative;
            margin-bottom: 70px;
        }

        .Sustainabilitypage .rswmCares h2 span {
            position: relative;
            top: 13px;
            background: #fff;
            padding: 0px 15px;
        }

        .Sustainabilitypage .rswmCares {
            overflow: hidden;
            margin-top: 40px;
        }

        .Sustainabilitypage .rswmCares img {
            max-width: 120px;
            width: 100%;
            margin: 0 auto;
            display: block;
        }

        .Sustainabilitypage .rswmCares h3 {
            font-family: 'gotham_htfbook';
            font-weight: normal;
            font-size: 15px;
            text-align: center;
            color: #000;
            margin-top: 20px;
        }

        .Sustainabilitypage .rswmCares p {
            font-family: 'gotham_htfbook';
            font-weight: normal;
            font-size: 12px;
            text-align: center;
            color: #000;
            line-height: 19px;
            margin-top: 20px;
            /* min-height: 140px; */
        }

        .largestMenufecture.slider .item img {
            width: 100%;
        }

        .Sustainabilitypage .rswmCares h4 {
            font-size: 37px;
            font-family: 'gotham_htfmedium';
            color: #000;
            text-align: center;
            font-weight: 500;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .Sustainabilitypage .rswmCares h5,
        .Sustainabilitypage .rswmCares h6 {
            font-family: 'gotham_htfmedium';
            color: #525456;
            text-align: center;
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            line-height: 26px;
        }

        .Sustainabilitypage .rswmCares h6 {
            margin-top: 30px;
            margin-bottom: 8px;
        }

        .Sustainabilitypage .largestMenufecture h2 {
            font-family: 'gotham_htfbook';
            text-align: center;
            color: #fff;
            font-weight: normal;
            text-transform: uppercase;
            font-size: 25px;
            z-index: 4;
            position: relative;
        }

        .Sustainabilitypage .largestMenufecture {
            padding: 150px 0px;
            margin-top: 70px;
        }

        .largestMenufecture .item {
            padding: 0 !important;
        }

        .Sustainabilitypage .menufacturersFactory ul li {
            display: inline-block;
            width: calc(33.33% - 4px);
            padding: 0px 9px;
            margin-bottom: 55px;
            vertical-align: top;
        }

        .Sustainabilitypage .menufacturersFactory ul {
            text-align: center;
            margin: 0px -11px;
        }

        .Sustainabilitypage .menufacturersFactory ul li img {
            display: block;
            width: 100%;
            outline: 8px solid rgba(255, 255, 255, 0.58);
            outline-offset: -8px;
            transition: all 0.3s ease-in-out;
        }

        .Sustainabilitypage .menufacturersFactory h2 {
            font-family: 'gotham_htfmedium';
            color: #000;
            text-align: center;
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            margin-top: 22px;
        }

        .Sustainabilitypage .menufacturersFactory ul li p {
            font-family: 'gotham_htfbook';
            font-weight: normal;
            font-size: 18px;
            text-align: center;
            color: #000;
            margin-top: 6px;
            line-height: 23px;
        }

        .Sustainabilitypage .menufacturersFactory {
            margin-top: 65px;
        }

        .Sustainabilitypage .fibreGroon img {
            width: auto;
            display: block;
        }

        .Sustainabilitypage .fibreGroon p {
            font-family: 'gotham_htfbook';
            font-weight: normal;
            text-align: justify;
            font-size: 13px;
            color: #000;
            line-height: 19px;
        }

        .Sustainabilitypage .fibreGroon .row {
            display: table;
            width: 100%;
        }

        .Sustainabilitypage .fibreGroon .col {
            display: table-cell;
            float: inherit;
            vertical-align: middle;
        }

        .zoomIn,
        .translateY {
            transition: all .6s ease-in-out;
        }

        .rotate {
            transition: all 1s ease-in-out;
        }

        .zoomIn:hover {
            transform: scale(1.1);
        }

        .translateY:hover {
            transform: translateY(-10%);
        }

        .rotate:hover {
            transform: rotate(-180deg);
        }

        @media only screen and (max-width:768px) {
            .Sustainabilitypage .fibreGroon img {
                width: 100%;
            }

            .Sustainabilitypage .rswmCares h2 span {
                top: 12px;
            }

            .Sustainabilitypage .rswmCares h2 {
                font-size: 20px;
                margin-bottom: 50px;
            }

            .Sustainabilitypage .rswmCares h5,
            .rswmCares h6 {
                font-size: 14px;
                line-height: 23px;
            }

            .Sustainabilitypage .rswmCares p {
                font-size: 11px;
            }

            .Sustainabilitypage .rswmCares h4 {
                font-size: 25px;
            }

            .Sustainabilitypage .largestMenufecture h2 {
                font-size: 20px;
            }

            .Sustainabilitypage .menufacturersFactory h2 {
                font-size: 15px;
            }

            .Sustainabilitypage .menufacturersFactory ul li p {
                font-size: 14px;
                line-height: 20px;
            }


        }

        @media only screen and (max-width:600px) {
            .Sustainabilitypage .rswmCares h2 {
                font-size: 18px;
            }

            .Sustainabilitypage .rswmCares h2 span {
                top: 12px;
            }

            .Sustainabilitypage .menufacturersFactory ul li {
                width: calc(50% - 4px);
            }

            .Sustainabilitypage .fibreGroon .col {
                display: block;
            }

            .Sustainabilitypage .largestMenufecture h2 {
                font-size: 13px;
                line-height: 22px;
                padding: 0px 15px;
            }

            .Sustainabilitypage .largestMenufecture img {
                max-width: 110px;
                margin: 0 auto 18px;
                position: relative;
                z-index: 4;
            }

            .Sustainabilitypage .largestMenufecture {
                padding: 93px 0px;
                margin-top: 30px;
            }

            .Sustainabilitypage .menufacturersFactory h2 {
                font-size: 13px;
                line-height: 18px;
            }

            .Sustainabilitypage .menufacturersFactory ul li p {
                font-size: 13px;
                line-height: 19px;
            }

            .Sustainabilitypage .rswmCares h4 {
                font-size: 20px;
            }


        }
    </style>

    <style>
        .client-logos {
            /* background-color: #fff; */
        }

        /* Slider */
        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 117px;
            /* width: auto; */
            /*max-width:160px;*/
            vertical-align: middle;
        }

        @media only screen and (max-width: 600px) {
            .slick-slide img {
                width: auto !important;
            }
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;

            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;

            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;

            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;

            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;

            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;

            height: auto;

            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        /* .slide{
    display: block;
    width: fit-content;
} */
    </style>
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>	 -->
    <script type="text/javascript" src="https://rswm.in/assets/vendors/slick/slick.min.js"></script>
    <!-- <script>
$(document).ready(function(){
    $('.clientsSlider').slick({
      dots: false,
      infinite: true,
      autoplaySpeed: 1000,
      speed: 500,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
		});
</script> -->
    <footer>
        <div class="stickyButtontwo">
            <!-- <a href="<?php //echo site_url(); 
                            ?>/wp-content/uploads/2021/09/RSWM_We-Care.pdf" target="blank" style=""> From
            the CMD's <span class="covid"> desk </span></a> -->
            <!-- <a href=""  data-toggle="modal" data-target="#exampleModal" style="padding: 4px 10px;"> Contact us</a> -->
            <!-- <a target="_blank" style="padding: 4px 10px;" href="https://www.nseindia.com/get-quotes/equity?symbol=RSWM">RSWM Ltd-NSE Live</a> -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

        </div>

        <div class="container">
            <div class="row">
                <div class="col span_12">
                    <ul class="footer_menu">
                        <?php $obj = get_queried_object();  ?>
                        <li><a href="<?php echo get_permalink(95) ?>" class="<?php echo $obj->ID == 95 ? 'active' : '' ?>"
                                title="Yarn Supplier and Manufacturer">About</a></li>
                        <li><a href="<?php echo get_permalink(1066) ?>"
                                class="<?php echo $obj->ID == 1066 ? 'active' : '' ?>"
                                title="Exhibitions by RSWM Ltd.">Exhibitions</a></li>
                        <!-- <li><a href="<?php //echo get_permalink(5); 
                                            ?>#business-units" class="<?php echo $obj->ID == 5 ? 'active' : '' ?>" title="Premier Yarns Manufacturer">Business Units</a></li> -->
                        <!-- <li><a href="<?php //echo get_permalink(103) 
                                            ?>" class="<?php //echo $obj->ID == 103 ? 'active' : '' 
                                                        ?>" title="Functional Blended Yarns">RSWM Edge<sup>&reg;</sup></a></li> -->
                        <li><a href="https://rswm.in/blogs/" title="Our Blogs">Blogs</a></li>
                        <li><a href="https://news.rswm.in/inside-rswm-june-2025-edition/" target="_blank" class=""
                                title="Functional Blended Yarns">R-Connect</a></li>

                        <!-- <li><a href="<?php //echo get_permalink(103) 
                                            ?>" class="<?php //echo $obj->ID == 103 ? 'active' : '' 
                                                        ?>"
                            title="Functional Blended Yarns">RSWM EDGE<sup>&reg;</sup></a></li> -->
                        <!-- <li><a href="<?php //echo get_permalink(131) 
                                            ?>" class="<?php //echo $obj->ID == 131 ? 'active' : '' 
                                                        ?>" title="Annual Reports and Investor Relations">Investors</a></li> -->
                        <!-- <li><a href="<?php //echo get_permalink(108) 
                                            ?>" class="<?php //echo $obj->ID == 108 ? 'active' : '' 
                                                        ?>" title="RSWM Sustainable Initiatives ">Sustainability</a></li> -->
                        <li><a href="<?php echo get_permalink(95) ?>#locationBlock" class="location_menu"
                                title="RSWM Ltd. Locations">Locations</a></li>
                        <li><a href="<?php echo get_permalink(2326) ?>"
                                class="<?php echo $obj->ID == 2326 ? 'active' : '' ?>"
                                title="Yarn collections">Collections</a></li>
                        <!-- <li><a href="<?php //echo get_template_directory_uri() 
                                            ?>/images/RSWM_Home_Furnishing.pdf" target="_blank" title="RSWM Corporate Brochure">Home Furnishing Range</a></li> -->
                        <li><a href="<?php echo get_permalink(6492) ?>"
                                class="<?php echo $obj->ID == 6492 ? 'active' : '' ?>"
                                title="Privacy Policy RSWM Ltd.">Privacy Policy</a>
                        <li><a href="<?php echo get_permalink(7056) ?>"
                                class="<?php echo $obj->ID == 7056 ? 'active' : '' ?>" title="Media Coverage">Media
                                Coverage</a>
                        </li>
                        <li><a href="<?php echo get_permalink(1021) ?>"
                                class="<?php echo $obj->ID == 7056 ? 'active' : '' ?>" title="Contact RSWM Ltd.">Contact</a>
                        </li>
                        <li class="socials-icon">
                            <ul>
                                <li class="instagram1"><a href="https://www.instagram.com/rswmofficial/" target="_blank"
                                        title="RSWM Ltd. Official Instagram Page"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                                <li class="twitter"><a href="https://youtube.com/" target="_blank"
                                        title="RSWM Ltd. Official YouTube Page"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li class="facebook1"><a href="https://www.facebook.com/rswmofficial/" target="_blank"
                                        title="RSWM Ltd. Official Facebook Page"><i class="fa fa-facebook-f"
                                            aria-hidden="true"></i></a></li>
                                <li class="facebook1"><a href="https://www.linkedin.com/company/rswmofficial/"
                                        target="_blank" title="RSWM Ltd. Official Linkedin Page"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>


                    <div class="copyright">
                        All Rights Reserved <?php date('Y') ?> | rswm.in<br />
                        Powered by <a href="https://www.hostdost.in" target="_blank">HOSTDOST</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700|Roboto:100,100i,300,300i,400,500,700,900&display=swap"
        rel="stylesheet">

    <link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/jquery.fancybox.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/slick.css">
    <script defer src="https://www.google.com/recaptcha/api.js?render=6Ld2WawZAAAAAMdgXl2Kf6xSMu19ZCkn7uhzTPoo"></script>
    <!--link rel='stylesheet' href="css/media.css" -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123368677-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-123368677-1');
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
    <!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri() 
                                                ?>/js/jquery-2.1.4.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri() 
                                                ?>/js/jquery-migrate-1.2.1.min.js"></script> -->
    <?php if (!is_front_page() && !is_home()) : ?>
        <script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/jquery.elevatezoom.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/SmoothScroll.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.pack.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/imagesloaded.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/masonry1.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.min.js?var=1"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/custom.js?var=1.1"></script>
    <script async src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        var theToggle = document.getElementById('toggle');
        // hasClass
        function hasClass(elem, className) {
            return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
        }
        // addClass
        function addClass(elem, className) {
            if (!hasClass(elem, className)) {
                elem.className += ' ' + className;
            }
        }
        // removeClass
        function removeClass(elem, className) {
            var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
            if (hasClass(elem, className)) {
                while (newClass.indexOf(' ' + className + ' ') >= 0) {
                    newClass = newClass.replace(' ' + className + ' ', ' ');
                }
                elem.className = newClass.replace(/^\s+|\s+$/g, '');
            }
        }
        // toggleClass
        function toggleClass(elem, className) {
            var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
            if (hasClass(elem, className)) {
                while (newClass.indexOf(" " + className + " ") >= 0) {
                    newClass = newClass.replace(" " + className + " ", " ");
                }
                elem.className = newClass.replace(/^\s+|\s+$/g, '');
            } else {
                elem.className += ' ' + className;
            }
        }
        theToggle.onclick = function() {
            toggleClass(this, 'on');
            return false;
        }
    </script>
    <!-- Footer End -->

    <script>
        jQuery(document).ready(function() {

            jQuery(document).on('click', "a.inline, .img_layerbtnEnquire", function() {
                jQuery(document).find('.zoomContainer').remove();
                jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');
                jQuery(".product_details11").html('<div class="loadingicon">loading..</div>');
                var pid = jQuery(this).data('tag');
                jQuery('#melange_post_id').val(pid);
                jQuery('.melange_responsive_scuess').html('');
                jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                    'postid': pid,
                    'action': 'product_details_popup'
                }, function(resp) {
                    jQuery(".product_details11").html(resp);
                    jQuery.fancybox({
                        width: '100%',
                        height: 'auto',
                        maxWidth: 1000,
                        'href': '#data-form'
                    });
                    jQuery('.product_details11').find("#zoom_08").elevateZoom({
                        zoomWindowHeight: 475,
                        zoomWindowWidth: 495,
                        borderSize: 0
                    });
                });

            });

            jQuery('#melange_product_details_subbtn').click(function() {
                jQuery(this).html('Please wait...');
                jQuery(this).prop('disabled', true);
                jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#melange_product_details")
                    .serialize(),
                    function(resp) {
                        jQuery('#melange_product_details_subbtn').html('Submit');
                        jQuery('#melange_product_details_subbtn').prop('disabled', false);
                        jQuery(".melange_responsive_scuess").html('');
                        if (resp == 'name') {
                            jQuery('#melange_name').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_name').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'phone') {
                            jQuery('#melange_phone').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_phone').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'email') {
                            jQuery('#melange_email').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_email').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'company') {
                            jQuery('#melange_company').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_company').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 1) {
                            jQuery("#melange_product_details")[0].reset();
                            jQuery(".melange_responsive_scuess").html('Your enquiry has been submitted!');
                            jQuery(".melange_responsive_scuess").css({
                                'color': 'green',
                                "text-align": "center",
                                "margin-top": "11px",
                                "font-size": "14px"
                            });
                        }
                    });
                return false;
            });
            grecaptcha.ready(function() {
                grecaptcha.execute('6Ld2WawZAAAAAMdgXl2Kf6xSMu19ZCkn7uhzTPoo').then(function(token) {
                    $('#enquire').prepend('<input type="hidden" name="g-recaptcha-response" value="' +
                        token + '">');
                });
            });
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            jQuery('#submit_btn').click(function() {
                //debugger;
                //alert(jQuery('input[name="g-recaptcha-response"]').val());
                //alert(jQuery("#enquire").serialize());
                var onfoucs = "NULL";
                $("#enquire .isvalid").each(function(index, val) {
                    var inputName = $(this).prop("name");
                    var tagName = $(this).prop("tagName").toLowerCase()
                    var labelName = $(tagName + "[name='" + inputName + "']").attr('placeholder')
                        .toLowerCase();
                    $(tagName + "[name='" + inputName + "']").parent(".form-fields").find(".en_error")
                        .remove();
                    if ($.trim($(tagName + "[name='" + inputName + "']").val()) == '') {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your " + labelName + "</span>");
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ((inputName == "email") && $.trim($(tagName + "[name='" + inputName +
                            "']").val()) != "" && reg.test($.trim($(tagName + "[name='" + inputName +
                            "']").val())) == false) {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your valid " + labelName + "</span>");
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ((inputName == "phone") && $.trim($(tagName + "[name='" + inputName +
                            "']").val()) != "" && !$.trim($(tagName + "[name='" + inputName + "']")
                            .val()).match('[0-9]{10,15}')) {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your valid " + labelName +
                            " (10-15 digits)</span>");
                        //$( "<p class='terror'>Enter your valid "+labelName+" (10-15)</p>" ).insertAfter( tagName+"[name='"+inputName+"']" );
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ($.trim($(tagName + "[name='" + inputName + "']").val()) != "") {
                        $(tagName + "[name='" + inputName + "']").css("border", "");
                        // $(tagName+"[name='"+inputName+"']").find(".terror").remove();
                    }
                });

                // grecatcha set	

                /*var response = grecaptcha.getResponse();
                	var uri = '/wp-content/themes/rswm/template/template-ajax.php';
                    if(response.length == 0) {
                        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
                        return false;
                    }else if(response.length != 0){
                		document.getElementById('g-recaptcha-error').innerHTML = '';
                		$.post(uri, {'captcha': response}, function(data) {
                			 $("#g-recaptcha-error").css('display', 'inline', 'important');
                             //$("#g-recaptcha-error").html(data);
                		});
                		
                	}*/

                if (onfoucs != 'NULL') {
                    $(onfoucs).focus();
                }
                // function verifyCaptcha() {
                //     document.getElementById('g-recaptcha-error').innerHTML = '';
                // }
                // grecaptcha end		   
                if (onfoucs == 'NULL') {
                    jQuery(this).html('Please wait...');
                    jQuery(this).prop('disabled', true);

                    jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#enquire").serialize(),
                        function(resp) {
                            jQuery('#submit_btn').html('Submit');
                            jQuery('#submit_btn').prop('disabled', false);
                            jQuery('#enquire input[type="text"]').css('border', '1px solid #b7b7b7');

                            jQuery(".responsive").html('');
                            if (resp != 1) {
                                if (resp == 'captcha') {
                                    jQuery("#enquire")[0].reset();
                                    alert('User is not valid');
                                    location.reload();
                                } else {
                                    jQuery('#' + resp).css('border', '1px solid red');
                                }
                            } else if (resp == 1) {
                                jQuery("#enquire")[0].reset();
                                //grecaptcha.reset();
                                jQuery(document).find("div.responsive").html(
                                    'Your enquiry has been submitted!');
                                jQuery(document).find("div.responsive").css({
                                    'color': 'green',
                                    "text-align": "center",
                                    "margin-top": "11px",
                                    "font-size": "14px"
                                });
                                window.location.href = "<?php echo site_url(); ?>/thank-you/";
                            }
                        });
                }

                return false;
            });

            jQuery(document).on('click', '.checked12', function() {
                jQuery(this).removeAttr('checked', 'false')
                jQuery(this).removeClass('checked12')
            });
            var checkboxValues_color = [];
            jQuery(document).on('click',
                'input[type="checkbox"], input[type="radio"] , .melangColorBoxLeft.book_section .dropdown .dropdown-menu li',
                function() {

                    jQuery('html, body').animate({
                        scrollTop: jQuery('.offsetdiv').offset().top - parseInt(30)
                    }, 1200);
                    var catid = jQuery(this).val();

                    var checkboxValues = [];

                    var checkboxValues_blind = [];
                    var checkboxValues_end_usage = [];
                    var checkboxValues_book = [];

                    if (jQuery('.melangColorBoxLeft.book_section input').val() != '') {

                        checkboxValues_book.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_book), 1);
                        checkboxValues_book.push(jQuery(this).val());
                    }

                    //~ if(jQuery('.book_section input[type="checkbox"]').is(":checked")) {
                    //~ jQuery('.book_section input[type="checkbox"]:checked').map(function() {
                    //~ checkboxValues_book.push(jQuery(this).val());
                    //~ });
                    //~ } else {
                    //~ checkboxValues_book.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_book),1);
                    //~ }

                    if (jQuery('.blind_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.blind_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues_blind.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues_blind.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_blind), 1);
                    }

                    if (jQuery('.end_usage_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.end_usage_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues_end_usage.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues_end_usage.splice(jQuery.inArray(jQuery(this).val(),
                            checkboxValues_end_usage), 1);
                    }

                    if (jQuery('.category_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.category_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues.splice(jQuery.inArray(jQuery(this).val(), checkboxValues), 1);
                    }
                    if (jQuery(this).attr('type') == 'radio') {
                        checkboxValues_color.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_color), 1);
                        if (jQuery('.color_section input[type="radio"]').is(":checked")) {

                            jQuery(this).parents(".color_section").find(".checked12").removeClass();
                            jQuery(this).addClass("checked12");
                            checkboxValues_color.push(jQuery(this).val());
                        }
                    }

                    book_id = checkboxValues_book.toString();
                    jQuery('#book_id').val(book_id);
                    if (book_id == '') {
                        book_id = '';
                    }

                    blend_id = checkboxValues_blind.toString();
                    jQuery('#blend_id').val(blend_id);
                    if (blend_id == '') {
                        blend_id = '';
                    }


                    end_usage_id = checkboxValues_end_usage.toString()
                    jQuery('#end_usage_id').val(end_usage_id);

                    if (end_usage_id == '') {
                        end_usage_id = '';
                    }

                    catids = checkboxValues.toString();
                    jQuery('#category_id').val(catids);
                    if (catids == '') {
                        catids = '';
                    }
                    console.log(catids);
                    colorcode = checkboxValues_color.toString();
                    jQuery('#swatches_id').val(colorcode);
                    if (colorcode == '') {
                        colorcode = '';
                    }

                    console.log(catids);
                    console.log(blend_id);
                    console.log(end_usage_id);
                    console.log(colorcode);

                    jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                        'catid': catids,
                        'blend_id': blend_id,
                        'end_usage_id': end_usage_id,
                        'book_id': book_id,
                        'colorcode': colorcode,
                        'action': 'category_filter_post_melange'
                    }, function(res) {
                        if (res.status == 1) {
                            jQuery(".product_details11").html('');
                            var item = res.list
                            var $html = '';
                            for (var i = 0; i < item.length; i++) {
                                if (jQuery.inArray(item[i]['postid'], swetch_post_id) != -1) {
                                    var $checked = 'checked';
                                    var $display = 'block';
                                } else {
                                    var $checked = '';
                                    var $display = 'none';
                                }
                                var imgs = item[i]['img'] != '' ? item[i]['img'] :
                                    '<?php echo get_template_directory_uri() . "/images/melangProductArea3.jpg" ?>';
                                $html += '<li class="melangProducdetails">';
                                $html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] +
                                    '" class="add_swatch">';
                                $html += '<img src="' + imgs + '" alt="' + item[i]['title'] + '"/>';

                                $html += ' <span class="img_layer">';
                                /* $html +='<span class="img_layerbtn add_swatchs">Add</span> ';*/
                                $html += '<span class="img_layerbtnEnquire" data-tag="' + item[i][
                                    'postid'
                                ] + '">Enquiry</span>';
                                $html += '</span>';

                                $html += '</a>';
                                $html += '<div class="melangProducDescription">';
                                $html += '<div class="melangProductleft">';
                                $html += '<h2>' + item[i]['title'] + '</h2><p>';
                                /* if(item[i]['shadeNo'] != '') {
                                	 $html += 'Shade# '+item[i]['shadeNo'];
                                  }*/
                                /* if(item[i]['shadeNo'] != '' && item[i]['lotno'] != '') {
                                	 $html += ' | ';
                                  }
                                  if(item[i]['lotno'] != '') {
                                	 $html += ' Lot No.- '+item[i]['lotno'];
                                  }*/
                                $html += '</p>';
                                $html += '</div>';

                                $html +=
                                    '<div class="melangProductright"><span class="img_layerbtn add_swatchs" ></span>';
                                $html += '<input type="checkbox" value="' + item[i]['postid'] +
                                    '" class="melange_product" ' + $checked + ' style="display:' +
                                    $display + '">';
                                $html += '</div>';
                                $html += '</div>';
                                $html += '</li>';
                            }
                            jQuery("#current_page").val(2)
                            jQuery("#load_more225").html('View more');


                            var cat_id = jQuery("#category_id").val();
                            var swatches_id = jQuery("#swatches_id").val();
                            var blend_id = jQuery("#blend_id").val();
                            var end_usage_id = jQuery("#end_usage_id").val();
                            var book_idsss = jQuery("#book_id").val();
                            if (cat_id == '' && swatches_id == '' && blend_id == '' && end_usage_id == '' &&
                                book_idsss == '') {
                                jQuery(".load_more").css('display', 'block');
                            } else {
                                jQuery(".load_more").css('display', 'none');
                            }


                            jQuery("#load_more225").prop('disabled', false);
                            jQuery(".product_details_categroy_wise_responsive").html($html);
                            jQuery(".melangProducdetails a.inline").fancybox({
                                wrapCSS: 'someClass',
                                width: 850,
                                height: 'auto',
                                maxWidth: '100%'

                            });
                        } else {
                            jQuery(".product_details_categroy_wise_responsive").html(
                                '<li class="noresultfound">No result found.</li>');
                        }


                    }, 'json');


                });
        })






        jQuery(document).on("click", "#load_more225", function() {
            var cat_id = jQuery("#category_id").val();
            var swatches_id = jQuery("#swatches_id").val();
            var blend_id = jQuery("#blend_id").val();
            var end_usage_id = jQuery("#end_usage_id").val();
            var current_page = jQuery("#current_page").val();

            jQuery(this).html('Please wait...');
            jQuery(this).prop('disabled', true);
            jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                "catid": cat_id,
                "blend_id": blend_id,
                "end_usage_id": end_usage_id,
                "colorcode": swatches_id,
                "paged": current_page,
                "action": "category_filter_post_melange"
            }, function(resp) {
                if (resp.status == 1) {
                    jQuery(".product_details11").html('');
                    jQuery("#load_more225").html('View more');
                    jQuery("#load_more225").prop('disabled', false);
                    var currentpageINC = parseInt(jQuery("#current_page").val()) + 1;
                    jQuery("#current_page").val(currentpageINC);
                    var item = resp.list
                    var $html = '';
                    for (var i = 0; i < item.length; i++) {
                        if (jQuery.inArray(item[i]['postid'], swetch_post_id) != -1) {
                            var $checked = 'checked';
                            var $display = 'block';
                        } else {
                            var $checked = '';
                            var $display = 'none';
                        }
                        $html += '<li class="melangProducdetails">';
                        $html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] +
                            '" class="add_swatch">';
                        $html += '<img src="' + item[i]['img'] + '" alt="' + item[i]['title'] + '"/>';
                        /* $html +='<input type="checkbox" value="'+item[i]['postid']+'" class="melange_product" '+$checked+' style="display:'+$display+'">';*/
                        $html += ' <span class="img_layer">';
                        /*$html +='<span class="img_layerbtn add_swatchs">Add</span> ';*/
                        $html += '<span class="img_layerbtnEnquire" data-tag="' + item[i]['postid'] +
                            '">Enquiry</span>';
                        $html += '</span>';
                        $html += '</a>';
                        $html += '<div class="melangProducDescription">';
                        $html += '<div class="melangProductleft">';
                        $html += '<h2>' + item[i]['title'] + '</h2><p>';
                        /* if(item[i]['shadeNo'] != '') {
				 $html += 'Shade# '+item[i]['shadeNo'];
			  }*/
                        /* if(item[i]['shadeNo'] != '' && item[i]['lotno'] != '') {
				 $html += ' | ';
			  }
			  if(item[i]['lotno'] != '') {
				 $html += ' Lot No.- '+item[i]['lotno'];
			  }*/
                        $html += '</p>';
                        $html += '</div>';


                        $html +=
                            '<div class="melangProductright"><span class="img_layerbtn add_swatchs"></span>';
                        $html += '<input type="checkbox" value="' + item[i]['postid'] +
                            '" class="melange_product" ' + $checked + ' style="display:' + $display + '">';
                        $html += '</div>';
                        $html += '</div>';
                        $html += '</li>';
                    }

                    jQuery(".product_details_categroy_wise_responsive").append($html);
                    jQuery(".melangProducdetails a.inline").fancybox({
                        wrapCSS: 'someClass',
                        width: '100%',
                        height: 'auto',
                        maxWidth: 550

                    });
                } else {
                    jQuery("#load_more225").html('No result found.');
                }

            }, 'json');
            return false;
        });
        jQuery(document).ready(function() {

            var submitIcon = jQuery('.searchbox-icon');
            var inputBox = jQuery('.searchbox-input');
            var searchBox = jQuery('.searchbox');
            var isOpen = false;
            submitIcon.click(function() {
                if (isOpen == false) {
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
            submitIcon.mouseup(function() {
                return false;
            });
            searchBox.mouseup(function() {
                return false;
            });
            jQuery(document).mouseup(function() {
                if (isOpen == true) {
                    jQuery('.searchbox-icon').css('display', 'block');
                    submitIcon.click();
                }
            });
        });

        function buttonUp() {
            var inputVal = jQuery('.searchbox-input').val();
            inputVal = jQuery.trim(inputVal).length;
            if (inputVal !== 0) {
                jQuery('.searchbox-icon').css('display', 'none');
            } else {
                jQuery('.searchbox-input').val('');
                jQuery('.searchbox-icon').css('display', 'block');
            }
        }
    </script>

    <script>
        jQuery(document).ready(function(e) {
            e(".mapTabList ul li").mouseenter(function() {
                var n = e(this).attr("data-tabb");
                e(".mapTabList ul").find("li").removeClass("activeMap"), e(".mapTabList ul li").find(
                        ".map-Content-content").slideUp(), e(this).addClass("activeMap"), e(this).find(
                        ".map-Content-content." + n).slideDown(), e(this).parents(".row").find(".mapImages li")
                    .hide(), e(this).parents(".row").find(".mapImages ." + n).hide(function() {
                        e(this).css("display", "block")
                    })
            }), e(".mapTabList ul li").mouseleave(function() {
                e(this).find(".map-Content-content:visible").css({
                    display: "none"
                })
            }), "#locationBlock" == window.location.hash && (jQuery("nav li a, .footer_menu li a").removeClass(
                    "active"), jQuery("nav .location_menu, .footer_menu .location_menu").addClass("active"), console
                .log("done123")), e("nav .location_menu").on("click", function() {
                e(this).parents("nav").find(".active").removeClass("active"), e(this).addClass("active"), e(
                    ".footer_menu a.location_menu").addClass("active")
            }), jQuery(document).on("click", "#newsletter-subscribehome", function() {
                return jQuery(this).html("<span><span>PLEASE WAIT...</span></span>"), jQuery(document).find(
                    ".error").html("").attr("style", ""), e.post(
                    "<?php echo admin_url('admin-ajax.php') ?>", e("#subscribe-details").serialize(),
                    function(n) {
                        jQuery("#newsletter-subscribehome").html("<span><span>SIGN UP</span></span>"),
                            "undefined" != n.success && "" != e.trim(n.success) ? (e(document).find(
                                ".error").html(n.success).css({
                                color: "#856118",
                                "font-size": "17px",
                                "font-weight": "600",
                                "line-height": "30px"
                            }), e("#subscribe-details")[0].reset()) : e.each(n, function(n, t) {
                                e(document).find("." + n).html(t).css({
                                    "font-size": "15px",
                                    color: "red"
                                })
                            })
                    }, "json"), !1
            })
        }), $("#homeslideid").on("loadstart", function() {
            console.log("page_video_loaded")
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
<?php
global $template;
if ($_GET['debug'] == '1') {
    echo 'template_name ' . basename($template);
}
?>