<?php
 /**
  * Title: Sidebar Shop
  * Slug: minimalistic-portfolio/sidebar-shop
  * Categories: all
  */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"fontFamily":"dm-sans","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-dm-sans-font-family"><!-- wp:group {"className":"is-style-bk-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"6px"}},"backgroundColor":"pure-white"} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-outfit-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Product Search', 'minimalistic-portfolio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"},"fontFamily":"outfit","borderColor":"outline"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bk-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"6px"}},"backgroundColor":"pure-white"} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-outfit-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Product Categories', 'minimalistic-portfolio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"hasEmpty":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bk-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"6px"}},"backgroundColor":"pure-white"} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"fontSize":"large","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-outfit-font-family has-large-font-size"><?php echo esc_html__( 'Filter by price', 'minimalistic-portfolio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-bk-box-shadow","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"6px"}},"backgroundColor":"pure-white"} -->
<div class="wp-block-group is-style-bk-box-shadow has-pure-white-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"body","fontSize":"large","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-text-align-left has-body-color has-text-color has-outfit-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><?php echo esc_html__( 'Recent Products', 'minimalistic-portfolio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"x-small","fontFamily":"outfit","layout":{"type":"default","columnCount":2}} -->
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"80px","height":"80px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"small"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->