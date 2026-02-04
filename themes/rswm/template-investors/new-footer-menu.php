<?php
$default_taxnomy = 'category'; $year_tax = get_terms('year'); $annualyear = get_terms('annual-year');$obj = get_queried_object();
	if($obj->ID == 1280 ) {
?>
<div class="investerAccordian">
    <div class="">
    <ul class="showAccordian">
<li id="investorspresentation">
    <?php $Investor_terms = get_term_by('id',89,$default_taxnomy);?>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $Investor_terms->name ?>
    </h3>
    <?php $Investor_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $Investor_terms->taxonomy, "field" => "id", "terms" => array($Investor_terms->term_id),), array("taxonomy" => "annual-year", "field" => "slug", "terms" => $annualyear[0]->slug,), ) ); $Investor_query = new WP_Query($Investor_args); ?>
    <div class="Accordian_content">
        <div class="investorPresentation">
            <div class="investorPresentation_respsive">
                <?php if($Investor_query->have_posts() ) { ?>
                <?php while($Investor_query->have_posts() ) { $Investor_query->the_post(); ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
                    <?php the_title() ?> </a>
                <?php } ?>
                <?php } ?> </div>
            <div class="investorPresentation-archive">
                <div class="accordianselect-full"> <input type="hidden" name="class" value="investorPresentation_respsive"> <input type="hidden" name="main_term_id" value="<?php echo $Investor_terms->term_id ?>"> <input type="hidden" name="taxonomy_name" value="annual-year"> <select name="annualyear"
                        class="annualyear"> <?php foreach($annualyear as $anyear) { ?> <option value="<?php echo $anyear->slug ?>"<?php echo $anyear->slug == '2020-21' ? 'selected' : '' ?> > <?php echo $anyear->name ?></option> <?php } ?> </select> </div>
                <div class="view-archive"> <a href="#" class="toggle show_archive" data-tag="show">Show Archive</a> </div>
            </div>
        </div>
    </div>
</li>
<li id="noticetothemembers">
    <?php $Noticetothemember_terms = get_term_by('id',90,$default_taxnomy);?>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $Noticetothemember_terms->name ?>
    </h3>
    <?php $Noticetothemember_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $Noticetothemember_terms->taxonomy, "field" => "id", "terms" => array($Noticetothemember_terms->term_id),), ) ); $Noticetothemember_query = new WP_Query($Noticetothemember_args); ?>
    <div class="Accordian_content">
        <div class="investorPresentation">
            <div>
                <?php if($Noticetothemember_query->have_posts() ) { ?>
                <?php while($Noticetothemember_query->have_posts() ) { $Noticetothemember_query->the_post(); ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <p>
                    <a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
                        <?php the_title() ?>
                    </a>
                </p>
                <?php } ?>
                <?php } ?> </div>
        </div>
    </div>
</li>
<li id="shareholdersmeetings">
    <?php $ShareHoldersMeetingsvoting_terms = get_term_by('id',91,$default_taxnomy);?>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $ShareHoldersMeetingsvoting_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $term_children = array ( 413,404,400,392, 189, 184, 92, 93, 94, 95 ); ?>
        <div class="main_child_div investorPresentation">
            <?php foreach($term_children as $termchild ) { ?>
            <?php $termchild1_terms = get_term_by('id',$termchild,$default_taxnomy);?>
            <p>
                <?php echo ucfirst($termchild1_terms->name) ?>
            </p>
            <?php $share_meeting_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $termchild1_terms->taxonomy, "field" => "id", "terms" => array($termchild1_terms->term_id),), ) ); $share_meeting_query = new WP_Query($share_meeting_args); ?>
            <div class="accordian_Innercontent">
                <ul class="compliances_responsive">
                    <?php if($share_meeting_query->have_posts()) { ?>
                    <?php while($share_meeting_query->have_posts()) { $share_meeting_query->the_post() ?>
                    <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                    <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                    <?php } ?>
                    <?php } ?> </ul>
            </div>
            <?php } ?> </div>
    </div>
</li>

<?php $Modelletterofappointment_terms = get_term_by('id',97,$default_taxnomy);?>
<li>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $Modelletterofappointment_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $Modelletterofappointment_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $Modelletterofappointment_terms->taxonomy, "field" => "id", "terms" => array($Modelletterofappointment_terms->term_id),), ) ); $Modelletterofappointment_query = new WP_Query($Modelletterofappointment_args); ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php if($Modelletterofappointment_query->have_posts()) { ?>
                <?php while($Modelletterofappointment_query->have_posts()) { $Modelletterofappointment_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?>
                <?php } ?> </ul>
        </div>
    </div>
</li>

<?php $Familiarization_terms = get_term_by('id',98,$default_taxnomy);?>
<li id="familiarizationprogramme">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $Familiarization_terms->name ?>
    </h3>
    <?php $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //print_r($url); ?>
    <div class="Accordian_content" <?php echo $_SERVER[ "REQUEST_URI"] ?>>
        <?php foreach($annualyear as $annualy ) { $Familiarization_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $Familiarization_terms->taxonomy, "field" => "id", "terms" => array($Familiarization_terms->term_id),), array("taxonomy" => $annualy->taxonomy, "field" => "id", "terms" => array($annualy->term_id),), ) ); $Familiarization_query = new WP_Query($Familiarization_args); ?>
        <?php if($Familiarization_query->have_posts()) { ?>
        <h5>
            <?php echo $annualy->name ?>
        </h5>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($Familiarization_query->have_posts()) { $Familiarization_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?>
        <?php } ?> </div>
</li>

<?php $codeofconduct_terms = get_term_by('id',99,$default_taxnomy);?>
<li>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $codeofconduct_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $codeofconduct_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $codeofconduct_terms->taxonomy, "field" => "id", "terms" => array($codeofconduct_terms->term_id),), ) ); $codeofconduct_query = new WP_Query($codeofconduct_args); ?>
        <?php if($codeofconduct_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($codeofconduct_query->have_posts()) { $codeofconduct_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $compositVarious_terms = get_term_by('id',100,$default_taxnomy);?>
<li>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $compositVarious_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $compositVarious_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $compositVarious_terms->taxonomy, "field" => "id", "terms" => array($compositVarious_terms->term_id),), ) ); $compositVarious_query = new WP_Query($compositVarious_args); ?>
        <?php if($compositVarious_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive director-table">
                <?php while($compositVarious_query->have_posts()) { $compositVarious_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_content(); ?> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $newspapernoticeandadvertisement_terms = get_term_by('id',101,$default_taxnomy);?>
<li id="newspapernoticeandadvertisement">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $newspapernoticeandadvertisement_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $newspapernoticeandadvertisementChildren = get_term_children( 101, $default_taxnomy ); ?>

        <?php foreach($newspapernoticeandadvertisementChildren as $result ) { $newspapernoticeandadvertisement_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $newspapernoticeandadvertisement_terms->taxonomy, "field" => "id", "terms" => array($result),), ) ); $newspapernoticeandadvertisement_query = new WP_Query($newspapernoticeandadvertisement_args); ?>
        <?php if($newspapernoticeandadvertisement_query->have_posts()) { ?>
        <?php $terms_name = get_term_by("id",$result,$default_taxnomy)?>
        <h4>
            <?php echo $terms_name->name ?>
        </h4>
        <div class="accordian_Innercontent newspaper-accord-wrap">
            <ul class="compliances_responsive">
                <?php while($newspapernoticeandadvertisement_query->have_posts()) { $newspapernoticeandadvertisement_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <?php $wpcfpdfurl2 = get_post_meta(get_the_ID(), 'wpcf-pdf-url-hindi', true); ?>
                <?php if(get_the_ID() == 5641) { ?>
                    <li> <a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"><span class="newspaper-text"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php the_title(); ?> </span><span class="newspaper-vers"></a>
                   </li>
                <?php } else { ?>
                <li> <span class="newspaper-text"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php the_title(); ?> </span><span class="newspaper-vers"><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">English </a> <?php if($wpcfpdfurl2 != '') { ?> <span>|</span>
                    <a
                        href="<?php echo $wpcfpdfurl2 != '' ? $wpcfpdfurl2 : 'javascript:void(0)' ; ?>" target="_blank">Hindi </a>
                        </span>
                        <?php } ?> </li>
                <?php } ?>
                <?php } ?> </ul>
        </div>
        <?php } ?>
        <?php } ?> </div>
</li>

<?php $VariousPolicy_terms = get_term_by('id',103,$default_taxnomy);?>
<li id="variouspolicies">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $VariousPolicy_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $VariousPolicy_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $VariousPolicy_terms->taxonomy, "field" => "id", "terms" => array($VariousPolicy_terms->term_id),), ) ); $VariousPolicy_query = new WP_Query($VariousPolicy_args); ?>
        <?php if($VariousPolicy_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($VariousPolicy_query->have_posts()) { $VariousPolicy_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $articleAssociation_terms = get_term_by('id',104,$default_taxnomy);?>
<li>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $articleAssociation_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $articleAssociation_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $articleAssociation_terms->taxonomy, "field" => "id", "terms" => array($articleAssociation_terms->term_id),), ) ); $articleAssociation_query = new WP_Query($articleAssociation_args); ?>
        <?php if($articleAssociation_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($articleAssociation_query->have_posts()) { $articleAssociation_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $unpaindclaimed_terms = get_term_by('id',106,$default_taxnomy);?>
<li id="unpaidunclaimeddividendamount">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $unpaindclaimed_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $unpaindclaimed_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $unpaindclaimed_terms->taxonomy, "field" => "id", "terms" => array($unpaindclaimed_terms->term_id),), ) ); $unpaindclaimed_query = new WP_Query($unpaindclaimed_args); ?>
        <?php if($unpaindclaimed_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($unpaindclaimed_query->have_posts()) { $unpaindclaimed_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $unpaindclaimed_terms = get_term_by('id',182,$default_taxnomy);?>
<li id="unpaidunclaimeddividendamount">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $unpaindclaimed_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $unpaindclaimed_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $unpaindclaimed_terms->taxonomy, "field" => "id", "terms" => array($unpaindclaimed_terms->term_id),), ) ); $unpaindclaimed_query = new WP_Query($unpaindclaimed_args); ?>
        <?php if($unpaindclaimed_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($unpaindclaimed_query->have_posts()) { $unpaindclaimed_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>
<?php $disclosure_terms = get_term_by('id',187,$default_taxnomy);?>
<li id="unpaidunclaimeddividendamount">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $disclosure_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $disclosure_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $disclosure_terms->taxonomy, "field" => "id", "terms" => array($disclosure_terms->term_id),), ) ); $disclosure_query = new WP_Query($disclosure_args); ?>
        <?php if($disclosure_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($disclosure_query->have_posts()) { $disclosure_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>

<?php $postal_ballot_terms = get_term_by('id',399,$default_taxnomy);?>
<li id="unpaidunclaimeddividendamount">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $postal_ballot_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $postal_ballot_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $postal_ballot_terms->taxonomy, "field" => "id", "terms" => array($postal_ballot_terms->term_id),), ) ); $postal_ballot_query = new WP_Query($postal_ballot_args); ?>
        <?php if($postal_ballot_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($postal_ballot_query->have_posts()) { $postal_ballot_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>
<?php $postal_ballot_terms = get_term_by('id',405,$default_taxnomy);?>
<li id="unpaidunclaimeddividendamount">
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $postal_ballot_terms->name ?>
    </h3>
    <div class="Accordian_content">
        <?php $postal_ballot_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $postal_ballot_terms->taxonomy, "field" => "id", "terms" => array($postal_ballot_terms->term_id),), ) ); $postal_ballot_query = new WP_Query($postal_ballot_args); ?>
        <?php if($postal_ballot_query->have_posts()) { ?>
        <div class="accordian_Innercontent">
            <ul class="compliances_responsive">
                <?php while($postal_ballot_query->have_posts()) { $postal_ballot_query->the_post() ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <li><a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/pdf-icon.png" alt=""/> <?php the_title(); ?> </a> </li>
                <?php } ?> </ul>
        </div>
        <?php } ?> </div>
</li>





<li id="unpaidunclaimeddividendamount">
    <div class="container container--55" style="padding: 0 0px;">
<div class="topdetail-content">
            <?php $terms = get_term_by('id',408,$default_taxnomy, array());?>
            <div class="investor-select-wrap 76">
               <h3> <i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $terms->name ?></h3>
                  <div class="investor-select-box">
                <input type="hidden" name="class" value="share_holder_responsive">
                <input type="hidden" name="main_term_id" value="<?php echo $terms->term_id ?>">
                <select name="year" class="select_year">
                    <?php foreach($year_tax as $year ) { ?>
                    <option value="<?php echo $year->slug; ?>" <?php echo $year->slug == date('Y') ? 'selected' : '' ?>><?php echo $year->name; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="accordian_Innercontent">
                    <?php
                        $shareholder_args = array("post_type" =>"investor", 'fields' =>'ids',"post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order',
                                      "tax_query"  => array(
                                                            array("taxonomy" => $terms->taxonomy, "field" => "id", "terms" => array($terms->term_id),),
                                                            array("taxonomy" => "year", "field" => "slug", "terms" => ($year_tax[0]->slug )),
                                                           ));
                        $shareholder_query   =  new WP_Query($shareholder_args);?>
                    <ul class="share_holder_responsive">
                        <?php if($shareholder_query->have_posts() ) { ?>
                            <?php while($shareholder_query->have_posts() ) {  $shareholder_query->the_post() ?>
                                <?php $wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                        <li><a href="<?php echo $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)' ; ?>" target="_blank">
                           <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            <?php echo get_the_title() ?>
                            </a>
                        </li>
                         <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>

<li id="investorspresentation">
    <?php $Investor_terms = get_term_by('id',409,$default_taxnomy);?>
    <h3><i class="fa fa-caret-right" aria-hidden="true"></i>
        <?php echo $Investor_terms->name ?>
    </h3>
    <?php $Investor_args = array("post_type" =>"investor",'fields' =>'ids', "post_status" => "publish", "posts_per_page" => -1, "orderby" => 'menu_order', "tax_query" => array( array("taxonomy" => $Investor_terms->taxonomy, "field" => "id", "terms" => array($Investor_terms->term_id),), array("taxonomy" => "annual-year", "field" => "slug", "terms" => $annualyear[0]->slug,), ) ); $Investor_query = new WP_Query($Investor_args); ?>
    <div class="Accordian_content">
        <div class="investorPresentation">
            <div class="investorPresentation_respsive">
                <?php if($Investor_query->have_posts() ) { ?>
                <?php while($Investor_query->have_posts() ) { $Investor_query->the_post(); ?>
                <?php $wpcfpdfurl1 = get_post_meta(get_the_ID(), 'wpcf-pdf-url', true); ?>
                <a href="<?php echo $wpcfpdfurl1 != '' ? $wpcfpdfurl1 : 'javascript:void(0)' ; ?>" target="_blank">
                    <?php the_title() ?> </a>
                <?php } ?>
                <?php } ?> </div>
            <div class="investorPresentation-archive">
                <div class="accordianselect-full"> <input type="hidden" name="class" value="investorPresentation_respsive"> <input type="hidden" name="main_term_id" value="<?php echo $Investor_terms->term_id ?>"> <input type="hidden" name="taxonomy_name" value="annual-year"> <select name="annualyear"
                        class="annualyear"> <?php foreach($annualyear as $anyear) { ?> <option value="<?php echo $anyear->slug ?>"<?php echo $anyear->slug == '2020-21' ? 'selected' : '' ?> > <?php echo $anyear->name ?></option> <?php } ?> </select> </div>
                <div class="view-archive"> <a href="#" class="toggle show_archive" data-tag="show">Show Archive</a> </div>
            </div>
        </div>
    </div>
</li>



    </ul>
 </div>
</div>
<?php } ?>
<?php get_template_part('footerpart'); ?>
<div class="allSocialIcon">
    <ul>
        <li> <a href="https://www.instagram.com/rswmofficial/" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/instagram-symbol.png" alt=""/> </a> </li>
        <li> <a href="https://twitter.com/rswmofficial?lang=en" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/twitter-logo-silhouette.png" alt=""/> </a> </li>
        <li> <a href="https://www.facebook.com/rswmofficial/" target="_blank"> <img src="<?php echo get_template_directory_uri()?>/images/facebook-letter-logo.png" alt=""/> </a> </li>
    </ul>
</div>
<?php get_footer('less'); ?>
<script type="text/javascript">
 $(document).ready(function() {
 $('.inversterMenuAria i.fa').click(function(){ $('.inversterMenuAria ul').slideToggle(); }); $(document).on("change",".select_year",function(){ var year = $(this).val(); var responsive = $(this).parents('.investor-select-wrap').find("input[name='class']").val(); var main_termid = $(this).parents('.investor-select-wrap').find("input[name='main_term_id']").val(); $('.'+responsive).html('<li><img src="<?php echo get_template_directory_uri() ?>/images/preload.svg" width="50" style="float: none;"></li>'); $.post("<?php echo admin_url('admin-ajax.php') ?>",{'slug':year ,'termid':main_termid, 'action' :'filter_shareholder_more_data'},function(data){ $("."+responsive).html(data); }); });		
 $(document).on('change',".annualyear",function(){ var year = $(this).val(); var responsiveClass = $(this).parents('.investorPresentation').find('input[name="class"]').val(); var main_term_id = $(this).parents('.investorPresentation').find('input[name="main_term_id"]').val(); var taxonomy_name = $(this).parents('.investorPresentation').find('input[name="taxonomy_name"]').val(); var archive = $(this).attr('data-tag'); $('.'+responsiveClass).html('<p><img src="<?php echo get_template_directory_uri() ?>/images/preload.svg" width="50" style="float: none;"></p>'); $.post("<?php echo admin_url('admin-ajax.php') ?>",{"slug":year,"main_term_id":main_term_id,"taxonomy_name":taxonomy_name,"action":"rswm_insvestor_more_data"},function(data){ $(".annualyear").parents('.investorPresentation').find(".show_archive").attr("data-tag","show"); $(".annualyear").parents('.investorPresentation').find(".show_archive").html("Show Archive"); $('.loader').css('display','none'); $("."+responsiveClass).html(data); }); });		
 $(document).on("click",".show_archive",function(){ var year = $(this).parents('.investorPresentation').find(".annualyear option:first").val(); var responsiveClass = $(this).parents('.investorPresentation').find('input[name="class"]').val(); var main_term_id = $(this).parents('.investorPresentation').find('input[name="main_term_id"]').val(); var taxonomy_name = $(this).parents('.investorPresentation').find('input[name="taxonomy_name"]').val(); var archive = $(this).attr('data-tag'); $('.'+responsiveClass).html('<p><img src="<?php echo get_template_directory_uri() ?>/images/preload.svg" width="50" style="float: none;"></p>'); $.post("<?php echo admin_url('admin-ajax.php') ?>",{"archive":archive,"slug":year,"main_term_id":main_term_id,"taxonomy_name":taxonomy_name,"action":"show_archive_inverstor_presentation"},function(data){ var archives = archive == 'hide' ? 'show' : 'hide'; $(".show_archive").parents('.investorPresentation').find(".annualyear").prop('selectedIndex',0); $(".show_archive").attr("data-tag",archives); $('.loader').css('display','none'); $("."+responsiveClass).html(data); }) }); 
 });  
 if(window.location.hash) { var hash = window.location.hash.substring(1); if(hash == 'familiarizationprogramme' || hash == 'variouspolicies' || hash == 'investorspresentation' || hash == 'noticetothemembers' || hash == 'shareholdersmeetings' || hash == 'unpaidunclaimeddividendamount' || hash == 'newspapernoticeandadvertisement' ) { $("#"+hash).find(".Accordian_content").css("display","block"); } }   
 jQuery('ul.showAccordian li h3').click(function(){ jQuery('.Accordian_content:visible').slideUp(function(){ jQuery(this).prev('h3').find('i.fa').addClass('fa-caret-right').removeClass('fa-caret-down'); }); jQuery(this).parent('li').find('.Accordian_content:hidden').slideDown(); jQuery(this).find('i.fa').addClass('fa-caret-down').removeClass('fa-caret-right'); });   
</script>
