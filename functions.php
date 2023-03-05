function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'website' ),
		'two' => __( 'Two', 'website' ),
		'three' => __( 'Three', 'website' ),
		'four' => __( 'Four', 'website' ),
		'five' => __( 'Five', 'website' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'website' ),
		'two' => __( 'Pancake', 'website' ),
		'three' => __( 'Omelette', 'website' ),
		'four' => __( 'Crepe', 'website' ),
		'five' => __( 'Waffle', 'website' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'website' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'website' ),
		'placeholder' => __( 'upload logo.', 'website' ),
		'id' => 'website_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'website' ),
		'placeholder' => __( 'upload ratina logo.', 'website' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'website' ),
		'placeholder' => __( 'upload Footer logo.', 'website' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'Open Time Add', 'website' ),
		'placeholder' => __( 'Open Time link', 'website' ),
		'id' => 'time',
		'type' => 'text'
	);
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'website' ),
		'placeholder' => __( 'Enter Phone No.', 'website' ),
		'id' => 'phone',
		'std' => '+ 0406 583 082',
		'type' => 'text'
	);

	
	$options[] = array(
		'name' => __( 'Email:', 'website' ),
		'placeholder' => __( 'Enter Email Address.', 'website' ),
		'id' => 'email',
		'std' => 'azqualitycars.605belmore@gmail.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'website' ),
		'placeholder' => __( 'Your Address.', 'website' ),
		'id' => 'address',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'Website:', 'website' ),
		'placeholder' => __( 'Website link.', 'website' ),
		'id' => 'website',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'website' ),
		'placeholder' => __( 'Enter Facebook link.', 'website' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'website' ),
		'placeholder' => __( 'Enter instagram link', 'website' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'website' ),
		'placeholder' => __( 'Enter Youtube link', 'website' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);

 $options[] = array(
		'name' => __( 'Twitter:', 'website' ),
		'placeholder' => __( 'Enter Twitter link.', 'website' ),
		'id' => 'twitter',
		'std' => '#',
		'type' => 'text'
	);

  $options[] = array(
		'name' => __( 'Linkedin:', 'website' ),
		'placeholder' => __( 'Enter Linkedin link.', 'website' ),
		'id' => 'linkedin',
		'std' => '#',
		'type' => 'text'
	);

   $options[] = array(
		'name' => __( 'Youtube:', 'website' ),
		'placeholder' => __( 'Enter Youtube link.', 'website' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Footer Text', 'website' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Footer About Text', 'website' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'website' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}



//for custom post types


function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'website' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'website' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'slider', 'website' ),
		'parent_item_colon'   => __( 'Parent slider', 'website' ),
		'all_items'           => __( 'All slider', 'website' ),
		'view_item'           => __( 'View slider', 'website' ),
		'add_new_item'        => __( 'Add New slider', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit slider', 'website' ),
		'update_item'         => __( 'Update slider', 'website' ),
		'search_items'        => __( 'Search slider', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'Slider', 'website' ),
		'description'         => __( 'Slider news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );
