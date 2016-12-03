<?php get_header(); 

/*
Template name: Frontpage Template
*/

$current_page_id = get_option('page_on_front');

if ( ( $locations = get_nav_menu_locations() ) && $locations['main-menu'] ) {
    $menu = wp_get_nav_menu_object( $locations['main-menu'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $test_include = array();
    foreach($menu_items as $item) {
        if($item->object == 'page')
            $test_include[] = $item->object_id;
    }
	
	if( function_exists('CPTOrderPosts') )
    	remove_filter('posts_orderby', 'CPTOrderPosts', 99, 2);
    
	$main_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $test_include, 'posts_per_page' => count($test_include), 'orderby' => 'post__in' ) );
	
	if( function_exists('CPTOrderPosts') )
		add_filter('posts_orderby', 'CPTOrderPosts', 99, 2);
}
else{
    $args=array(
    'post_type' => 'page',
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'posts_per_page' => '-1'
  );
    $main_query = new WP_Query($args); 
}

$menu = 1;
if( have_posts() ) : 
    while ($main_query->have_posts()) : $main_query->the_post();

    global $post;

    $post_name = $post->post_name;
    
    $post_id = get_the_ID();
    
    $separate_page = get_post_meta($post_id, "rnr_separate_page", true); 
    if (($separate_page!= true )&& ($post_id != $current_page_id ))
    {
		
?>

<?php if (get_post_meta($post_id, "rnr_assign_type", true) == "parallax-section") { ?>
   
	<!-- START PARALLAX SECTION -->	
	<div id="<?php echo $post_name; ?>" class="parallax">
		<div id="bg<?php echo $post_id; ?>" class="parallax-bg"></div><!-- END PARALLAX BACKGROUND -->
		<div class="overlay"></div><!-- END PATTERN OVERLAY -->
		<div class="container clearfix">
			<div class="parallax-content">
				<?php the_content(); ?>
			</div><!-- END PARALLAX CONTENT -->
		</div><!-- END CONTAINER -->
	</div>
	<!-- END PARALLAX SECTION -->   
    
<?php } else { ?>   
   

    <section id="<?php echo $post_name; ?>" class="page<?php echo $post_id; ?> section <?php if((get_post_meta($post_id, "rnr_assign_type", true) == "home-section") ){ if(($smof_data['rnr_home_type']=="Video")) { echo ' fullscreen home-video '; } else if(($smof_data['rnr_home_type']=="FullScreen Slider")) { echo ' fullscreen home-fullscreenslider '; } else { echo ' fullscreen home-parallax '; }  if($smof_data['rnr_menu_style'] == "bottom"){ echo 'pagescroll'; } if($smof_data['rnr_home_look_type'] == "Regular"){ echo ' home-banner2'; }?> <?php if($smof_data['rnr_home_look_type'] == "Regular with padding"){ echo ' home-banner'; }} else { echo ' '.$post_name; }?> "><!-- SECTION -->

<?php if((get_post_meta($post_id, "rnr_assign_type", true) != "home-section") ){ ?>    

<?php if((get_post_meta( $post_id, 'rnr_disable_title', true )!= true) ){ ?>    
  
          
	  <div class="hdng">
<div class="container clearfix center"><?php if(get_post_meta( get_the_ID(), 'rnr_alt_title', true )){ echo get_post_meta( get_the_ID(), 'rnr_alt_title', true ); } else { the_title(); } ?></div>
</div>

               
  <?php } ?>   
  <?php } ?>   
   

   <?php
	if (get_post_meta($post_id, "rnr_assign_type", true) == "home-section") { ?>
      <?php get_template_part('home_section');
	  
	}

	else if (get_post_meta($post_id, "rnr_assign_type", true) == "portfolio-section") { ?>
      <div class="contentBx">
<div class="container clearfix ">    
                <?php the_content(); ?>
            </div>
      </div>	
      <?php get_template_part('portfolio_section');
	}
	else if (get_post_meta($post_id, "rnr_assign_type", true) == "contact-section") { ?>
      <div class="contentBx">
<div class="container clearfix ">  
                <?php the_content(); ?>
            </div>
      </div>	
      <?php get_template_part('contact_section');
	}
	else { ?>

      <div class="contentBx">
<div class="container clearfix ">  
                <?php the_content(); ?>
            </div>
      </div>	
		
	<?php } ?> 

    </section><!-- END CONTAINER --> 

    
<?php
    } ?>
    
    
   <?php if($menu==1){
        get_template_part('menu_section');
     } 	
	  $menu=2;
  }
    endwhile;
    endif; 
	wp_reset_query();
?>




<?php get_footer(); ?>
