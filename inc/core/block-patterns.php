<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Minimalistic Portfolio
 *
 * @since 1.0.0
 *
 * @return void
 */
function minimalistic_portfolio_register_pattern_category() {
	$block_pattern_categories = array(
		'banner'      => array( 'label' => __( 'Minimalistic Portfolio Patterns', 'minimalistic-portfolio' ) ),
		'product'  => array( 'label' => __( 'Product', 'minimalistic-portfolio' ) ),
	);

	$block_pattern_categories = apply_filters( 'minimalistic_portfolio_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}		
	}
}
add_action( 'init', 'minimalistic_portfolio_register_pattern_category', 9 );


