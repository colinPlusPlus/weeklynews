<?php

/**
 *
 * Main Navigation Menu Walker Class.
 *
 */

/**
 * Create HTML list of nav menu items.
 *
 * @uses Walker_Nav_Menu
 */
class WeeklyNews_Do_Nav_Walker extends Walker_Nav_Menu{


  /**
   * Starts the list before the elements are added.
   *
   * @see Walker::start_lvl()
   *
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   */
  public function start_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<div class=\"subnav-container\">\n";
      $output .= "\n$indent<ul class=\"subnav-menu\">\n";
  }

  /**
   * Ends the list of after the elements are added.
   *
   * @see Walker::end_lvl()
   *
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
        $output .= "$indent</div>\n";
    }

  /**
   * Start the element output.
   *
   * @see Walker::start_el()
   *
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param object $item   Menu item data object.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   * @param int    $id     Current item ID.
   */
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
      global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

      $class_names = $value = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;

      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      $class_names = esc_attr( $class_names ) ;


      //var_dump($item->classes);
      if ( $depth == 0 ){

        $attributes  = ! empty( $item->attr_title )  ? ' title="'  . esc_attr( $item->attr_title  ) . '"' : '';
        $attributes .= ! empty( $item->target )      ? ' target="' . esc_attr( $item->target      ) . '"' : '';
        $attributes .= ! empty( $item->xfn )         ? ' rel="'    . esc_attr( $item->xfn         ) . '"' : '';
        $attributes .= ! empty( $item->url )         ? ' href="'   . esc_attr( $item->url         ) . '"' : '';
        $description = ! empty( $item->description ) ? ' <span>'   . esc_attr( $item->description ) . '</span>' : '';

        $output .= $indent . '<li class="cat-' . strtolower($item->title);
        $output .= ! empty( $class_names ) ? ' '. $class_names .'">' :  '">';
      }
      elseif ( $depth == 1 ){
        $output .= '<li class="">';
      }


      $attributes  = ! empty( $item->attr_title )  ? ' title="'  . esc_attr( $item->attr_title  ) . '"' : '';
      $attributes .= ! empty( $item->target )      ? ' target="' . esc_attr( $item->target      ) . '"' : '';
      $attributes .= ! empty( $item->xfn )         ? ' rel="'    . esc_attr( $item->xfn         ) . '"' : '';
      $attributes .= ! empty( $item->url )         ? ' href="'   . esc_attr( $item->url         ) . '"' : '';
      $description = ! empty( $item->description ) ? ' <span>'   . esc_attr( $item->description ) . '</span>' : '';

      if($depth != 0) {
          $description = $append = $prepend = "";
      }

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
      $item_output .= $description.$args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

}


?>
