<?php
/**
 * Title: Header
 * Slug: minimalistic-portfolio/header
 * Categories: header
 */

?>

<!-- wp:group {"className":"main-header-top header-section","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group main-header-top header-section" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"className":"header-inner","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"30px","left":"30px"},"margin":{"top":"0","bottom":"0"}},"position":{"type":""},"border":{"style":"none","width":"0px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"20px","bottomRight":"10px"}}},"layout":{"type":"constrained","contentSize":"92%"}} -->
<div class="wp-block-group header-inner" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:20px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","className":"main-header","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center main-header" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"site-title"} -->
<div class="wp-block-column is-vertically-aligned-center site-title" style="flex-basis:15%"><!-- wp:group {"className":"logo-bg","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group logo-bg" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%","className":"header-menu","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-menu" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0px;padding-bottom:0px;flex-basis:65%"><!-- wp:navigation {"textColor":"secondary-accent-text","icon":"menu","overlayTextColor":"secondary-accent-text","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"14px","textTransform":"capitalize"}},"fontFamily":"inter","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#home","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"About","url":"#about","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Services","url":"#services","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Skills","url":"#skills","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Portfolio","url":"#portfolio","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Contact","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-accent-text","textColor":"accent-text","className":"header-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"left":"30px","right":"30px","top":"12px","bottom":"12px"}}},"fontFamily":"outfit"} -->
<div class="wp-block-button header-btn"><a class="wp-block-button__link has-accent-text-color has-secondary-accent-text-background-color has-text-color has-background has-link-color has-outfit-font-family has-custom-font-size wp-element-button" href="#contact" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:12px;padding-right:30px;padding-bottom:12px;padding-left:30px;font-size:14px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Hire Me', 'minimalistic-portfolio' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->