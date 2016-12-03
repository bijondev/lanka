<?php

class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
		   $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           

           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
          	
          	if( $icon_class != '' ) {
            	$icon_classes = '<i class="'. $icon_class .'"></i>';
		   	}
		   	else{
		   		$icon_classes = '';
		   	}

           if($object->object == 'page')
           {
                $varpost = get_post($object->object_id);                
                $separate_page = get_post_meta($object->object_id, "rnr_separate_page", true);
                $disable_menu = get_post_meta($object->object_id, "rnr_disable_section_from_menu", true);
				$current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                	$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

                	if ( $separate_page == true )
	                	$attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'"' : '';
	                else{
	                	if (is_front_page()) 
	                		$attributes .= ' href="#' . $varpost->post_name . '"'; 
	                	else 
	                		$attributes .= ' href="' . home_url() . '#' . $varpost->post_name . '"';
	                }	

	                $object_output = $args->before;
		            $object_output .= '<a'. $attributes .'>';
		            $object_output .= $args->link_before . $icon_classes . '<span>' . apply_filters( 'the_title', $object->title, $object->ID ) . '</span>';
		            $object_output .= $args->link_after;
		            $object_output .= '</a>';
		            $object_output .= $args->after;    

		             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
                }
                                         
           }
           else{

           		$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a'. $attributes .'>';
	            $object_output .= $args->link_before . $icon_classes . '<span>' . apply_filters( 'the_title', $object->title, $object->ID ) . '</span>';
	            $object_output .= $args->link_after;
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
	        }

           
      }
}

?>