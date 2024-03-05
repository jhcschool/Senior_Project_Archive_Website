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
            'supports' => array('title','author', 'editor', 'custom-fields'),
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
            'supports' => array('title','author', 'editor', 'custom-fields'),
        )
    );
}
add_action( 'init', 'create_community_sponsors_custom_post_type' );

function output_project_preveiw_feed(){

	ob_start();
	?>
	<div class="project-feed">
		<div class="individual_project">
			<div class="student-image-container">
				<img class="student-image" src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg">
			</div>
			<div class="project-details">
				<h2 class="student-name">John</h2>
				<div class="project-title">My Project on Bees</div>
				<div class="project-description">I did a movie on bees</div>
			</div>
			<div class="community-sponsor-container">
				<h3 class="community-sponsor">Commmunity Sponsor</h3>
				<p class="sponsor-foundation">Teton bees</p>
				<p class="person-sponsoring">Tom Smith</p>
				<img class="sponsor-logo" src="https://www.creativefabrica.com/wp-content/uploads/2020/12/16/Funny-Bee-Company-Logo-Template-Graphics-7199182-1-1.jpg">
			</div>
		</div>
		<div class="individual_project">

			<div class="student-image-container">
				<img class="student-image" src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg">
			</div>
			<div class="project-details">
				<h2 class="student-name">John</h2>
				<div class="project-title">My Project on Bees</div>
				<div class="project-description">I did a movie on bees</div>
			</div>
			<div class="community-sponsor-container">
				<h3 class="community-sponsor">Commmunity Sponsor</h3>
				<p class="sponsor-foundation">Teton bees</p>
				<p class="person-sponsoring">Tom Smith</p>
				<img class="sponsor-logo" src="https://www.creativefabrica.com/wp-content/uploads/2020/12/16/Funny-Bee-Company-Logo-Template-Graphics-7199182-1-1.jpg">
			</div>
		</div>
		<div class="individual_project">

			<div class="student-image-container">
				<img class="student-image" src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg">
			</div>
			<div class="project-details">
				<h2 class="student-name">John</h2>
				<div class="project-title">My Project on Bees</div>
				<div class="project-description">I did a movie on bees</div>
			</div>
			<div class="community-sponsor-container">
				<h3 class="community-sponsor">Commmunity Sponsor</h3>
				<p class="sponsor-foundation">Teton bees</p>
				<p class="person-sponsoring">Tom Smith</p>
				<img class="sponsor-logo" src="https://www.creativefabrica.com/wp-content/uploads/2020/12/16/Funny-Bee-Company-Logo-Template-Graphics-7199182-1-1.jpg">
			</div>
		</div>
	</div>	
	<?php
	return ob_get_clean();
}

add_shortcode('jhcs_project_feed', 'output_project_preveiw_feed');

function output_individual_project(){

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
		<h1 class="project-title-name">My Project on Bees</h1>
		<h2 class="student-name">John</h2>
	</div>
	<div class="photo-and-description">
		<div class="student-image-container">
			<img class="student-image" src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg">
		</div>
		<div class="extended-project-description">I did a movie on the life span of female bees in Jackson Hole area and conducted research on the reproduction rates from 1997 to now
		</div>
	</div>
	<div class="project-bottom-third">
		<div class="photos-of-projects-or-links">
			<h3 class="photos-of-projects-or-links-container-name">Photos of Projects or Links</h3>
			<img class="project-photos" src="https://cdn.britannica.com/18/240418-050-38F9D3A5/plasterer-bee-Colletes-daviesanus.jpg">
			<img class="project-photos" src="https://earthshotprize.org/wp-content/uploads/2023/05/bee-on-flower.jpg">
			<img class="project-photos" src="https://i.guim.co.uk/img/media/c313242627c0777f34ce07182d31eb6d3fe12502/0_0_5760_3456/master/5760.jpg?width=1200&quality=85&auto=format&fit=max&s=8c29f34855fed1a29598750f87bc5475">
			<a href="https://en.wikipedia.org/wiki/Bee">My Video on bees</a>
		</div>
		<div class="sponsor-and-where">
			<div class="community-sponsor-container">
				<h3 class="community-sponsor-box-title">Community Sponsors</h3>
				<p class="name-of-community-sponsor">Teton Bees</p>
				<img class="sponsor-logo" src="https://www.creativefabrica.com/wp-content/uploads/2020/12/16/Funny-Bee-Company-Logo-Template-Graphics-7199182-1-1.jpg">
			</div>
			<div class="where-are-they-now-container">
				<h3 class="where-are-they-now-box-title">Where Are They Now?</h3>
				<p class="where-are-they-now-text">Today John attends Middlebury College and studies biology</p>
			</div>
		</div>
	</div>
</div>	
	<?php
	return ob_get_clean();
}

add_shortcode('jhcs_individual_project', 'output_individual_project');




/* rosey */
/* piper */
