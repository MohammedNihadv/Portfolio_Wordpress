<?php
 /**
  * Title: Template 404
  * Slug: minimalistic-portfolio/template-404
  * Categories: template
  */
$minimalistic_portfolio_images = array(
MINIMALISTIC_PORTFOLIO_URL . 'assets/images/banner-ads.png',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"var:preset|spacing|x-large"}}} -->
<main class="wp-block-group" style="padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($minimalistic_portfolio_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":300,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large);min-height:300px"><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($minimalistic_portfolio_images[0]); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:spacer {"height":"70px","className":"bk-hide-desktop uag-hide-tab uag-hide-mob"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer bk-hide-desktop uag-hide-tab uag-hide-mob"></div>
<!-- /wp:spacer -->

<!-- wp:query-title {"type":"archive","textAlign":"center","fontFamily":"outfit"} /-->

<!-- wp:heading {"className":"has-text-align-center","style":{"typography":{"fontSize":"clamp(4rem, 30vw, 15rem)","fontWeight":"400","lineHeight":"1","fontStyle":"normal"}},"fontFamily":"outfit"} -->
<h2 class="wp-block-heading has-text-align-center has-outfit-font-family" style="font-size:clamp(4rem, 30vw, 15rem);font-style:normal;font-weight:400;line-height:1">
<?php echo esc_html__( '404', 'minimalistic-portfolio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontFamily":"outfit"} -->
<p class="has-text-align-center has-outfit-font-family"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","textColor":"light","fontFamily":"outfit"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->