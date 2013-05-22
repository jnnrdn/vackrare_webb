<?php
/* Functions of the Child of Twenty Twelve theme */

// Remove the wordpress version number in header, http://digwp.com/2009/07/remove-wordpress-version-number/
remove_action('wp_head', 'wp_generator');

function mytheme_dequeue_fonts() {
  //wp_dequeue_style( 'twentytwelve-fonts' );
  wp_enqueue_script( 'Damion', 'http://use.edgefonts.net/damion:n4:all;meddon.js' );
  wp_enqueue_style( 'Quicksand', 'http://fonts.googleapis.com/css?family=Quicksand' );
  wp_enqueue_style( 'Days One' , 'http://fonts.googleapis.com/css?family=Days+One' );
  wp_enqueue_style( 'Oleo Script Swash Caps', 'http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );

function mychildtheme_setup() {

  // This theme uses wp_nav_menu() in one location.
  register_nav_menu( 'secondary', __( 'Footer Menu', 'twentytwelve' ) );

  // New widgetized sidebar area for pages
  register_sidebar( array(
    'name' => __( 'Page Sidebar', 'twentytwelve' ),
    'id' => 'sidebar-4',
    'description' => __( 'Appears on pages only', 'twentytwelve' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  add_image_size( 'category-thumb', 100, 100, true );
}

add_action( 'after_setup_theme', 'mychildtheme_setup', 11 );


// Add custom pagination function
// Based on original work at http://www.kriesi.at/archives/how-to-build-a-wordpress-post-pagination-without-plugin


function twentytwelve_content_nav() {
  // Sets how many pages to show (leave it alone)
  $pages = '';
  // Sets how many buttons you want to show in the pagination area
  $range = 3;


  $showitems = ( $range ) + 1;

  global $paged;
  if ( empty( $paged ) ) $paged = 1;

  if ( $pages == '' ) {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if ( !$pages ) {
      $pages = 1;
    }
  }

  if ( 1 != $pages ) {
    echo '<ul class="pagination">';
    if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages )
      echo '<li><a href="'.get_pagenum_link(1).'">&laquo;</a></li>';
    if ( $paged > 1 && $showitems < $pages) echo '<li>' .
        previous_posts_link( '&laquo; Previous' ) . '</li>';

    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( 1 != $pages && ( !( $i >= $paged + $range + 1 || $i <= $paged-$range-1 ) || $pages <= $showitems ) ) {
        echo ( $paged == $i ) ? '<li class="current">' . $i . '</li>' :
          '<li><a href="' . get_pagenum_link( $i ) . '" class="inactive" >' . $i . '</a></li>';
      }
    }

    if ( $paged < $pages && $showitems < $pages ) echo '<li>' . next_posts_link('Next &raquo;','') . '</li>';
    if ( $paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages )
        echo '<li><a href="' . get_pagenum_link( $pages ).'">&raquo;</a></li>';
    echo '</ul>';
  }
}

// END pagination

// Adds a hide feature for the welcome message
add_action( 'init', 'ChildOfTwentyTwelve_hideMeta');

function ChildOfTwentyTwelve_hideMeta() {
  if (!is_admin()) {

    // Register your script location, dependencies and version
    wp_register_script( 'hide',
                get_stylesheet_directory_uri() . '/js/hide.js',
                array('jquery') );

    // Enqueue the script
    wp_enqueue_script('hide');
  }
}
?>
