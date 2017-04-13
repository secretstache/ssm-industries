<?php
/**
 * SSM Industries
 *
 * @package   SSM_Industries
 * @license   GPL-2.0+
 */

/**
 * Register post types and taxonomies.
 *
 * @package SSM_Industries
 */
class SSM_Industries_Registrations {

	public $post_type = 'industry';

	public function init() {
		// Add the SSM Industries and taxonomies
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Initiate registrations of post type and taxonomies.
	 *
	 * @uses SSM_Industries_Registrations::register_post_type()
	 * @uses SSM_Industries_Registrations::register_taxonomy_category()
	 */
	public function register() {
		$this->register_post_type();
	}

	/**
	 * Register the custom post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	protected function register_post_type() {
		
		$labels = array(
			'name'                  => _x( 'Industries', 'Post Type General Name', 'ssm' ),
			'singular_name'         => _x( 'Industry', 'Post Type Singular Name', 'ssm' ),
			'menu_name'             => __( 'Industries', 'ssm' ),
			'name_admin_bar'        => __( 'Industry', 'ssm' ),
			'archives'              => __( 'Industry Archives', 'ssm' ),
			'attributes'            => __( 'Industry Attributes', 'ssm' ),
			'parent_item_colon'     => __( 'Parent Industry:', 'ssm' ),
			'all_items'             => __( 'Industries', 'ssm' ),
			'add_new_item'          => __( 'Add New Industry', 'ssm' ),
			'add_new'               => __( 'Add New', 'ssm' ),
			'new_item'              => __( 'New Industry', 'ssm' ),
			'edit_item'             => __( 'Edit Industry', 'ssm' ),
			'update_item'           => __( 'Update Industry', 'ssm' ),
			'view_item'             => __( 'View Industry', 'ssm' ),
			'view_items'            => __( 'View Industries', 'ssm' ),
			'search_items'          => __( 'Search Industry', 'ssm' ),
			'not_found'             => __( 'No industries found', 'ssm' ),
			'not_found_in_trash'    => __( 'No industries found in Trash', 'ssm' ),
			'featured_image'        => __( 'Industry Icon', 'ssm' ),
			'set_featured_image'    => __( 'Set icon', 'ssm' ),
			'remove_featured_image' => __( 'Remove icon', 'ssm' ),
			'use_featured_image'    => __( 'Use as icon', 'ssm' ),
			'insert_into_item'      => __( 'Insert into Industry', 'ssm' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Industry', 'ssm' ),
			'items_list'            => __( 'Industry List', 'ssm' ),
			'items_list_navigation' => __( 'Industry list navigation', 'ssm' ),
			'filter_items_list'     => __( 'Filter Industry list', 'ssm' ),
		);
		
		$args = array(
			'label'                 => __( 'Industry', 'ssm' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'editor' ),
			'public'          			=> false,
			'capability_type' 			=> 'page',
			'publicly_queriable'		=> true,
			'show_ui' 							=> true,
			'show_in_nav_menus' 		=> false,
			'rewrite'         			=> false,
			'has_archive'						=> false,
			'exclude_from_search'		=> true,
			'menu_icon'             => 'dashicons-businessman',

		);

		$args = apply_filters( 'ssm_industries_args', $args );

		register_post_type( $this->post_type, $args );

	}
	

}