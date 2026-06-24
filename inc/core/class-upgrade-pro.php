<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Minimalistic_Portfolio_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/core/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Minimalistic_Portfolio_Customize_Section_Pro' );

		// Add the PRO Upgrade section.
		$manager->add_section(
		    new Minimalistic_Portfolio_Customize_Section_Pro(
		        $manager,
		        'minimalistic_portfolio_upgrade_pro',
		        array(
		            'title'         => esc_html__( 'MINIMALISTIC PORTFOLIO PRO', 'minimalistic-portfolio' ),
		            'pro_text'      => esc_html__( 'Minimalistic PRO', 'minimalistic-portfolio' ),
		            'pro_url'       => esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ),
		            'demo_text'     => esc_html__( 'Demo', 'minimalistic-portfolio' ),
		            'demo_url'      => esc_url( MINIMALISTIC_PORTFOLIO_DEMO_PRO ),
		            'support_text'  => esc_html__( 'Support', 'minimalistic-portfolio' ),
		            'support_url'   => esc_url( MINIMALISTIC_PORTFOLIO_SUPPORT_FREE ),
		            'bundle_text'   => esc_html__( 'Get All Themes', 'minimalistic-portfolio' ),
		            'bundle_url'    => esc_url( MINIMALISTIC_PORTFOLIO_BUNDLE_BUY_NOW ),
		            'lite_doc_text' => esc_html__( 'Lite Doc', 'minimalistic-portfolio' ),
		            'lite_doc_url'  => esc_url( MINIMALISTIC_PORTFOLIO_DOCS_FREE ),
		            'review_text'   => esc_html__( 'Review', 'minimalistic-portfolio' ),
		            'review_url'    => esc_url( MINIMALISTIC_PORTFOLIO_REVIEW_FREE ),
		            'priority'      => 1,
		        )
		    )
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script(
			'minimalistic-portfolio-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js',
			array( 'customize-controls' )
		);

		wp_enqueue_style(
			'minimalistic-portfolio-customize-controls',
			trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css'
		);
	}
}

// Doing this customizer thang!
Minimalistic_Portfolio_Customize::get_instance();
