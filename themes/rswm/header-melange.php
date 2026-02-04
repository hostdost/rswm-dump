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
    <title>Melange Yarns | Largest Melange Yarn Exporters in India | RSWM Limited</title>
    <meta name="description"
        content="RSWM is the Largest Cotton Melange Yarn Exporters in India. Cotton Melange Yarn is suitable for Shirts, T-Shirts, Business Suits, Socks, Home Furnishing and Sports Wear.">
    <meta name="keywords" content="Melange Yarns, Cotton Melange Yarn Exporter in India, largest Cotton Melange Yarn Exporters in India, Cotton Melange Yarn Shirts, Cotton Melange Yarn T-shirts, Cotton Melange Yarn Business Suits, Cotton Melange Yarn for Socks, Cotton Melange Yarn for Home furnishing, Cotton Melange Yarn for Sports wear
">
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
    <link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/css/vendor/bootstrap.min.css">
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
                                <li><a href="https://story.rswm.in/technicaltextiles/" class="" title="Technical Textile">Technical Textile</a></li>
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