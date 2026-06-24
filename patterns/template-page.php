<?php
/**
 * Title: Template Page
 * Slug: minimalistic-portfolio/template-page
 * Categories: template
 */
$minimalistic_portfolio_images = array(
	MINIMALISTIC_PORTFOLIO_URL . 'assets/images/banner-ads.png',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0px","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;padding-top:0px;padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:cover {"url":"<?php echo esc_url($minimalistic_portfolio_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"focalPoint":{"x":0.51,"y":0.66},"minHeight":300,"contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"0","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-bottom:0;padding-top:0;padding-bottom:0px;min-height:300px"><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($minimalistic_portfolio_images[0]); ?>" style="object-position:51% 66%" data-object-fit="cover" data-object-position="51% 66%"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1,"fontFamily":"outfit"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:post-featured-image /-->

<!-- wp:post-content {"fontFamily":"outfit","layout":{"type":"default"}} /--></main>
<!-- /wp:group --></main>
<!-- /wp:group -->