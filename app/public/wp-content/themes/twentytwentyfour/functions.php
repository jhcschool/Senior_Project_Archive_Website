<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

function my_theme_style() {
	wp_enqueue_style( 'my-theme-style' , get_theme_file_uri('style.css'));
}
add_action('wp_enqueue_scripts', 'my_theme_style');

function create_projects_custom_post_type(){
   register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
            	'add_new' => 'Create Project',
            	'add_new_item' => 'New Project',
            	'edit_item' => 'Edit Project',
            ),
            'public' => true,
            'hierarchical' => true,
            'supports' => array('title','author', 'editor', 'custom-fields', 'thumbnail'),
        )
    );
}
add_action( 'init', 'create_projects_custom_post_type' );

function create_community_sponsors_custom_post_type(){
   register_post_type( 'community_sponsors',
        array(
            'labels' => array(
                'name' => 'Community Sponsors',
                'singular_name' => 'Community Sponsor',
            	'add_new' => 'Create Community Sponsor',
            	'add_new_item' => 'New Community Sponsors',
            	'edit_item' => 'Edit Community Sponsors',
            ),
            'public' => true,
            'hierarchical' => true,
            'supports' => array('title','author', 'editor', 'custom-fields', 'thumbnail'),
        )
    );
}
add_action( 'init', 'create_community_sponsors_custom_post_type' );

function output_project_preveiw_feed(){
		$args = array('post_type' => 'projects');
		$posts = get_posts($args);
	ob_start();
	?>
	<div class="project-feed">
	<?php foreach($posts as $post){ 
	$community_sponsor_ID = get_field("community_sponsor",$post->ID);
	$people_involved_names = get_field ("people_involved",$community_sponsor_ID);
	$community_sponsor_data = get_post(get_field("community_sponsor",$post->ID)); ?>
		<div class="individual_project">
			<h1 class="graduation-year">Class of 2023</h1>
			<div class="student-image-container">
				<?php echo get_the_post_thumbnail ($post->ID); ?>
			</div>
			<div class="project-details">
				<h2 class="student-name"><?php echo get_field("student_name",$post->ID); ?> </h2>
				<div class="project-title"> <?php echo $post->post_title; ?> </div>
				<div class="project-description"> <?php echo $post->post_content; ?> </div>
			</div>
			<div class="community-sponsor-container">
				<h3 class="community-sponsor"> Community Sponsor</h3>
				<p class="sponsor-foundation"> <?php echo $community_sponsor_data->post_title; ?> </p>
				<p class="person-sponsoring"><?php foreach($people_involved_names as $person){echo "<div>". $person["sponsors_name"]."</div>"; } ?></p>
				<?php echo get_the_post_thumbnail($community_sponsor_ID); ?>
			</div>
		</div>
<?php } 
	return ob_get_clean();
}


add_shortcode('jhcs_project_feed', 'output_project_preveiw_feed');

function output_individual_project(){

		$args = array('post_type' => 'projects');
		$posts = get_posts($args);
		echo '<pre>';
		print_r($posts[0]);
		echo '</pre>';
		$community_sponsor_data = get_post(get_field("community_sponsor",$posts[0]->ID));
		echo '<pre>';
		print_r($community_sponsor_data);
		echo '</pre>';

		echo '<pre>';
		print_r(get_the_post_thumbnail(get_field("community_sponsor",$posts[0]->ID)));
		echo '</pre>';


	ob_start();
	?>
<div class="jhcs_individual_project-page">
	<!-- <div class="top-banner">
		<div class="logo-and-sp-banner">
			<img class="school-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA7D25AmfqmO6Yhysx8xBi1iicwifRGY5ecBmWMWQRjxQFsscoD3a8mMT68JDNzTkT&usqp=CAU">
			<h1 class="senior-projects-header"></h1>
		</div>
		<div class="menu-bar">
			<h3 class="home-button">Home</h3>
			<h3 class="classes-button">Classes</h3>
			<h3 class="honors-button">Honors</h3>
		</div>
	</div> -->
	<div class="project-title-and-student">
		<h1 class="project-title-name"> <?php echo $posts[0]->post_title; ?> </h1>
		<h2 class="student-name"> <?php echo get_field("student_name",$posts[0]->ID); ?></h2>
	</div>
	<div class="photo-and-description">
		<div class="student-image-container">
			<?php echo get_the_post_thumbnail ($posts[0]->ID); ?>
		</div>
		<div class="extended-project-description">
		</div>
	</div>
	<div class="project-bottom-third">
		<div class="photos-of-projects-or-links">
			<h3 class="photos-of-projects-or-links-container-name">Photos of Project or Links</h3>
			<a href="<?php echo get_field("video_link",$posts[0]->ID); ?>">Project Link</a>
		</div>
		<div class="sponsor-and-where">
			<div class="community-sponsor-container">
				<h3 class="community-sponsor-box-title">Community Sponsor</h3>
				<p class="name-of-community-sponsor"> <?php echo $community_sponsor_data->post_title; ?> </p>
				<?php echo get_the_post_thumbnail(get_field("community_sponsor",$posts[0]->ID)); ?>
			</div>
			<div class="where-are-they-now-container">
				<h3 class="where-are-they-now-box-title">Where Are They Now?</h3>
				<p class="where-are-they-now-text"><?php echo get_field("where_are_they_now",$posts[0]->ID); ?></p>
			</div>
		</div>
	</div>
</div>	
	<?php
	return ob_get_clean();
}

add_shortcode('jhcs_individual_project', 'output_individual_project');

function acf_load_community_sponsor_choices( $field ) {
    $field['choices'] = array();
    $community_sponsors = get_posts([
      'post_type'   => 'community_sponsors',
      'post_status' => 'publish',
      'numberposts' => -1,
    ]);

    if( is_array($community_sponsors) ) {       
        foreach( $community_sponsors as $community_sponsor) {         
            $field['choices'][ $community_sponsor->ID ] = $community_sponsor->post_title;       
        }
    }
    return $field;
}
add_filter('acf/load_field/name=community_sponsor', 'acf_load_community_sponsor_choices');


/* rosey */
/* piper */
