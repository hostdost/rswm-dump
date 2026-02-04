<?php
/*
 * Template Name: Upcoming Events 
*/
?>

<?php get_header(); ?>
<style>
    .left-section {
        width: 100%;
    }
</style>
<div class="main-event-page">
    <div class="event-banner">
        <img src="<?php echo get_template_directory_uri() ?>/images/Events-banner.jpg" alt="" />
        <h1 class="hider">Upcoming Events</h1>
        <!--div class="event-text">
        <h2><span>events</span></h2>
    </div--->
    </div>
    <?php
    // Query arguments for upcoming events query
    $args = array(
        'meta_query' => array(
            array(
                'key' => 'wpcf-end-date',
                'value' => strtotime(date("Y-m-d")),
                'compare' => '>=',
                'type' => 'NUMERIC'
            )
        ),
        'orderby' => 'meta_value_num',
        'meta_key' => 'wpcf-start-date',
        'post_type' => 'event',
        'posts_per_page' => -1,
        'order' => 'DESC',
    );

    $events = get_posts($args);
    //print_r($events);
    ?>
    <div class="container">
        <?php if (count($events) > 0) { ?>
            <div class="event-section">
                <h3>upcoming events</h3>

                


                    <div class="row">
                    <?php foreach ($events as $event) {
                    $startd = date('d', get_post_meta($event->ID, 'wpcf-start-date',  true));
                    $startm = date('M', get_post_meta($event->ID, 'wpcf-start-date',  true));
                    $starty = date('Y', get_post_meta($event->ID, 'wpcf-start-date',  true));

                    $endd     = date('d', get_post_meta($event->ID, 'wpcf-end-date',  true));
                    $endm     = date('M', get_post_meta($event->ID, 'wpcf-end-date',  true));
                    $endy     = date('Y', get_post_meta($event->ID, 'wpcf-end-date',  true));

                    $eventimages = get_post_meta($event->ID, 'wpcf-event-images',  false);
                    $eventimagesbig = get_post_meta($event->ID, 'wpcf-event-images-big',  false);


                ?>

                        <?php if ($count % 2 == 0) { ?>

                            <div class="col span_6" style="margin-bottom: 10px;">
                                <div class="left-section">
                                    <div class="inner-section">
                                        <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 2) { ?>
                                            <div class="pre-vision"><img src="<?php echo get_post_meta($event->ID, 'wpcf-image',  true) ?>" alt="" /></div>
                                        <?php } ?>
                                        <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 1) { ?>
                                            <div class="pre-vision"><?php echo get_post_meta($event->ID, 'wpcf-text',  true) ?></div>
                                        <?php } ?>
                                        <div class="date"><?php echo $startm . ' ' . $startd . ' - ' . $endm . ' ' . $endd . ', ' . $endy ?></div>
                                        <h6><?php echo $event->post_title; ?></h6>
                                        <?php echo wpautop($event->post_content); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col span_6">
                                <div class="event_slider right-section">

                                    <?php for ($i = 0; $i < count($eventimages); $i++) { ?>
                                        <div class="item">
                                            <div class="maine-overlay">
                                                <a href="<?php echo $eventimagesbig[$i]; ?>" rel="groups_<?php echo $event->ID ?>"><img src="<?php echo $eventimages[$i]; ?>" alt="" />
                                                    <div class="image-ovelay">
                                                        <div class="inner-overlay">
                                                            <span><img src="<?php echo get_template_directory_uri() ?>/images/search-event.png" alt="" /></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col span_6">
                                <div class="event_slider right-section">
                                    <?php for ($i = 0; $i < count($eventimages); $i++) { ?>
                                        <div class="item">
                                            <div class="maine-overlay">
                                                <a href="<?php echo $eventimagesbig[$i]; ?>" rel="groups_<?php echo $event->ID ?>"><img src="<?php echo $eventimages[$i]; ?>" alt="" />
                                                    <div class="image-ovelay">
                                                        <div class="inner-overlay">
                                                            <span><img src="<?php echo get_template_directory_uri() ?>/images/search-event.png" alt="" /></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col span_6">
                                <div class="left-section">
                                    <div class="inner-section">
                                        <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 2) { ?>
                                            <div class="pre-vision"><img src="<?php echo get_post_meta($event->ID, 'wpcf-image',  true) ?>" alt="" /></div>
                                        <?php } ?>
                                        <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 1) { ?>
                                            <div class="pre-vision"><?php echo get_post_meta($event->ID, 'wpcf-text',  true) ?></div>
                                        <?php } ?>
                                        <div class="date"><?php echo $startm . ' ' . $startd . ' - ' . $endm . ' ' . $endd . ', ' . $endy ?></div>
                                        <h6><?php echo $event->post_title; ?></h6>
                                        <?php echo wpautop($event->post_content); ?>
                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                        <?php } //endforeach ?>
                    </div>
                
            </div>
        <?php } ?>

        <?php
        // Query arguments for upcoming events query
        $args = array(
            'meta_query' => array(
                array(
                    'key' => 'wpcf-end-date',
                    'value' => strtotime(date("Y-m-d")),
                    'compare' => '<=',
                    'type' => 'NUMERIC'
                )
            ),
            'orderby' => 'meta_value_num',
            'meta_key' => 'wpcf-start-date',
            'post_type' => 'event',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $pastevents = get_posts($args);
        $count = 0;
        ?>


        <div class="event-section">

            <h3><a href="<?php echo get_permalink(1066) ?>" style="text-decoration:none;color:#333;" >PAST EVENTS</a> | <a href="<?php echo get_permalink(7270) ?>"  style="text-decoration:underline;color:#333;" class="active" >Up Coming Events</a> </h3>

            <?php foreach ($pastevents as $event) {
                $count++;
                $startd = date('d', get_post_meta($event->ID, 'wpcf-start-date',  true));
                $startm = date('M', get_post_meta($event->ID, 'wpcf-start-date',  true));
                $starty = date('Y', get_post_meta($event->ID, 'wpcf-start-date',  true));

                $endd     = date('d', get_post_meta($event->ID, 'wpcf-end-date',  true));
                $endm     = date('M', get_post_meta($event->ID, 'wpcf-end-date',  true));
                $endy     = date('Y', get_post_meta($event->ID, 'wpcf-end-date',  true));

                //$pasteventimages = get_post_meta($event->ID, 'wpcf-event-images',  false);
                // $pasteventimagesbig = get_post_meta($event->ID, 'wpcf-event-images-big',  false);
                $arr = get_post_meta($event->ID, 'wpcf_event_images',  false);
                //print_r($eventImg[0])
                $it = new RecursiveArrayIterator($arr);
                $iterator = new RecursiveIteratorIterator($it);

                $pasteventimages = iterator_to_array($iterator, false);
                $pasteventimagesbig = iterator_to_array($iterator, false);
            ?>
                <?php if (isset($_GET['mode']) && $_GET['mode'] == true) {
                    //echo 'mode-true';
                    print_r($pasteventimages);
                    echo '<br><br><br>';
                    print_r($pasteventimagesbig);
                    echo '<br><br><br>';

                    print_r($pasteventimages);
                } ?>

                <div class="row past-events">

                    <?php if ($count % 2 == 0) { ?>
                        <div class="col span_6">
                            <div class="event_slider right-section">

                                <?php for ($i = 0; $i < count($pasteventimages); $i++) { ?>
                                    <div class="item">
                                        <div class="maine-overlay">
                                            <a href="<?php echo $pasteventimagesbig[$i]; ?>" id="single-image" rel="groups_<?php echo $event->ID ?>"><img width="555px; height:279px!important;" src="<?php echo $pasteventimages[$i]; ?>" alt="" />
                                                <div class="image-ovelay">
                                                    <div class="inner-overlay">
                                                        <span><img src="<?php echo get_template_directory_uri() ?>/images/search-event.png" alt="" /></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="col span_6">
                            <div class="left-section">
                                <div class="inner-section">
                                    <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 2) { ?>
                                        <div class="pre-vision"><img src="<?php echo get_post_meta($event->ID, 'wpcf-image',  true) ?>" alt="" /></div>
                                    <?php } ?>
                                    <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 1) { ?>
                                        <div class="pre-vision"><?php echo get_post_meta($event->ID, 'wpcf-text',  true) ?></div>
                                    <?php } ?>
                                    <div class="date"><?php echo $startm . ' ' . $startd . ' - ' . $endm . ' ' . $endd . ', ' . $endy ?></div>
                                    <h6><?php echo $event->post_title; ?></h6>
                                    <?php echo wpautop($event->post_content); ?>
                                </div>
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="col span_6">
                            <div class="left-section">
                                <div class="inner-section">
                                    <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 2) { ?>
                                        <div class="pre-vision"><img src="<?php echo get_post_meta($event->ID, 'wpcf-image',  true) ?>" alt="" /></div>
                                    <?php } ?>
                                    <?php if (get_post_meta($event->ID, 'wpcf-type',  true) == 1) { ?>
                                        <div class="pre-vision"><?php echo get_post_meta($event->ID, 'wpcf-text',  true) ?></div>
                                    <?php } ?>
                                    <div class="date"><?php echo $startm . ' ' . $startd . ' - ' . $endm . ' ' . $endd . ', ' . $endy ?></div>
                                    <h6><?php echo $event->post_title; ?></h6>
                                    <?php echo wpautop($event->post_content); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col span_6">
                            <div class="event_slider right-section">

                                <?php for ($i = 0; $i < count($pasteventimages); $i++) { ?>
                                    <div class="item">
                                        <div class="maine-overlay">
                                            <a href="<?php echo $pasteventimagesbig[$i]; ?>" id="single-image" rel="groups_<?php echo $event->ID ?>"><img src="<?php echo $pasteventimages[$i]; ?>" alt="" />
                                                <div class="image-ovelay">
                                                    <div class="inner-overlay">
                                                        <span><img src="<?php echo get_template_directory_uri() ?>/images/search-event.png" alt="" /></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>


                    <?php } ?>




                </div>

            <?php } ?>



        </div>
    </div>
</div>


<?php get_footer(); ?>