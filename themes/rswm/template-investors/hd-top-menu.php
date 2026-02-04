<?php  $queried_object = get_queried_object(); ?>
<?php  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id($queried_object->ID), 'full' ); ?>
<?php $imgsrc = $imgsrc[0] != '' ? $imgsrc[0]: get_template_directory_uri().'/images/investor-relation-banner.jpg'; ?>
<div class="investeTBanner investerDetailBanner">
    <img src="<?php echo $imgsrc ?>" alt=""/>
    <div class="investeTBannerContent">
      <h1><?php echo $queried_object->post_title ?></h1>
    </div>
</div>
<div class="inversterMenuAria" style="display: none!important;">
    <div class="container">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <ul>
            <li><a href="<?php echo get_permalink(131) ?>" class="<?php echo $queried_object->ID ==  131 ? 'active' : ''; ?>">Annual Reports</a></li>
            <li><a href="<?php echo get_permalink(1280) ?>" class="<?php echo $queried_object->ID == 1280 ? 'active' : ''; ?>">Investors Relations</a></li>
            <li><a href="<?php echo get_permalink(129) ?>" class="<?php echo $queried_object->ID == 129 ? 'active' : ''; ?>">Investors Correspondence</a></li>
            <li><a href="<?php echo get_permalink(135) ?>" class="<?php echo $queried_object->ID == 135 ? 'active' : ''; ?>">Financial Performance</a></li>
            <li><a href="<?php echo get_permalink(137) ?>"class="<?php echo $queried_object->ID == 137 ? 'active' : ''; ?>">Code of Conduct</a></li>
            <li><a href="<?php echo get_permalink(133) ?>" class="<?php echo $queried_object->ID == 133 ? 'active' : ''; ?>">Board of Directors</a></li>
            <li><a href="<?php echo get_permalink(139) ?>" class="<?php echo $queried_object->ID == 139 ? 'active' : ''; ?>">Transfer of shares to IEPF</a></li>
            <li><a href="<?php echo get_permalink(1777) ?>" class="<?php echo $queried_object->ID == 1777 ? 'active' : ''; ?>">Merger</a></li>
             <li><a href="<?php echo get_permalink(1089) ?>" class="<?php echo $queried_object->ID == 1089 ? 'active' : ''; ?>">Intimation to Stock Exchange</a></li>
        </ul>
    </div>
</div>
