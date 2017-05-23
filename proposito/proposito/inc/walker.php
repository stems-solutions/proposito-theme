<?php
/* Collection of walker classes */

class Walker_Nav_side extends Walker_Nav_Menu {

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {

        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul>'. "\n";


    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent


        //Depth-dependent classes.
        /*original code*/
//        $depth_classes = array(
//            ( $args->has_children ? 'no-padding' : 'bold' ),
//
//        );

        
           $depth_classes = array(
            ( $args->has_children ? 'pt-padding' : 'pt-bold' ),

        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Build HTML.
        $output .= $indent . '<li class="' . $depth_class_names . '">';

        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
// /*original code */       $attributes .= ' class="' . ( $args->has_children ? 'collapsible-header waves-effect waves-teal' : 'bold' ) . '"';
         $attributes .= ' class="' . ( $args->has_children ? 'waves-effect waves-teal' : 'pt-bold' ) . '"';
        

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        if ($args->has_children){
/*original code*/
//            $output .= $indent . '<ul class="collapsible collapsible-accordion no-stems">';
//            $output .= $indent . '<li class="bold">';
            
            
            $output .= $indent . '<ul class="pt-collapsible pt-collapsible-accordion pt-no-stems">';
            $output .= $indent . '<li class="pt-bold">';


        }
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        if ($args->has_children) {
            
            /*original code*/

//            $output .= $indent . '<div class="collapsible-body active">';
            
            $output .= $indent . '<div class="pt-collapsible-body">';
        }
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
        $output .= "$indent</ul>\n";

    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

?>