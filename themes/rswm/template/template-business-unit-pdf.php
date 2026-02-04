<?php 
	/* Template Name: Business Unit PDF */ 
	get_header();
	global $post;
?>
<div class="container">
  <div class="row business-unit-pdf">
    <?php
        $args = array(
            'post_type' => 'business-units-pdfs',
            'posts_per_page' => -1,
        );
    $post_query = new WP_Query($args);
   $count = $post_query->found_posts;
   //echo $count;
    if ($count == 2) {
      $class_col = "span_6";
    } else{
      $class_col = "span_4";
    } 
        if($post_query->have_posts() ) :
            while($post_query->have_posts() ) : ?>
        <?php 
           $post_query->the_post();
           $file_text = get_post_meta(get_the_ID(), 'wpcf-bs-pdf-name', false);   
           //print_r($file_text);
           $file_url = get_post_meta(get_the_ID(), 'wpcf-bs-pdf-url', false); 

                
    ?>
        <div class="col <?php echo $class_col?>">
          <h2><?php echo get_the_title()?></h2>
          <?php 
            foreach ($file_text as $key => $text){
            ?>
              <div class="shade_book_btn">
                   <a href="<?php echo $file_url[$key]?>" target="_blank"><?php echo $text?></a>
              </div>
         
            <?php }
          ?>
         </div>
      <?php endwhile;?>
      <?php endif;?>
     <?php wp_reset_postdata();?> 
  </div>
</div>

<style type="text/css">
  
  .business-unit-pdf{
    margin-top: 100px;
      margin-bottom: 25px;
  }
  .business-unit-pdf h2{
    margin-bottom: 10px;
  }
  .shade_book_btn {
    width: 200px;
    height: auto;
    font-family: 'gotham_htfbook', serif;
    margin: 0 auto;
    margin-top: 20px;
  }
  .shade_book_btn a {
    background-color: #dec186;
    cursor: pointer;
    display: block;
    padding: 10px;
    border-radius: 2px;
    color: white;
    font-family: 'gotham_htfbook', serif;
    text-align: center;
    text-decoration: none;
    font-size: 12px;
  }
  .business-unit-pdf h2 {
    margin-bottom: 10px;
    text-align: center;
  }
  @media only screen and (max-width: 767px){
    .shade_book_btn {
      margin:0 auto;
    }
    .shade_book_btn a {
      margin-bottom:10px;
    }
    .business-unit-pdf h2 {
      text-align: center;
    }
  }
</style>
<?php get_footer(); ?>