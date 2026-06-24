<?php
/**
 * Title: Banner
 * Slug: minimalistic-portfolio/banner
 * Categories: all, banner
 * Keywords: banner
 */
$minimalistic_portfolio_images = array(
    MINIMALISTIC_PORTFOLIO_URL . 'assets/images/banner-bg.png',
);

?>

<!-- wp:group {"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="home" class="wp-block-group banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"slider-main","style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group slider-main" style="margin-top:0;margin-bottom:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($minimalistic_portfolio_images[0]); ?>","id":121,"dimRatio":0,"overlayColor":"accent-text","isUserOverlayColor":true,"minHeight":900,"isDark":false,"sizeSlug":"large","style":{"spacing":{"padding":{"top":"70px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover is-light" style="padding-top:70px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:900px"><img class="wp-block-cover__image-background wp-image-121 size-large" alt="" src="<?php echo esc_url($minimalistic_portfolio_images[0]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-accent-text-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"banner-box-info","style":{"spacing":{"padding":{"top":"0px","bottom":"50px","left":"0px","right":"0px"}},"dimensions":{"minHeight":""},"border":{"bottom":{"color":"var:preset|color|secondary-accent","width":"1px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-box-info" style="border-bottom-color:var(--wp--preset--color--secondary-accent);border-bottom-width:1px;padding-top:0px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:32px;font-style:normal;font-weight:600"><?php echo esc_html__( 'SYSTEM INITIALIZED', 'minimalistic-portfolio' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"80px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:10px;margin-bottom:10px;font-size:80px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Hi! I\'m MHD NIHAD', 'minimalistic-portfolio' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<p class="has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-bottom:20px;font-size:20px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Cybersecurity Specialist | Full-Stack Developer | Flutter Developer', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h4 class="wp-block-heading has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:22px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'A cybersecurity researcher, mobile app developer, and full-stack engineer. I design and build secure, high-performance digital environments, blending robust backend defense with elegant modern user experiences.', 'minimalistic-portfolio' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-box-info","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group banner-box-info" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:columns {"className":"banner-box-column"} -->
<div class="wp-block-columns banner-box-column"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<p class="has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-bottom:0px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'E-mail', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h4 class="wp-block-heading has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:600"><a href="mailto:mhdnihadv@gmail.com"><?php echo esc_html__( 'mhdnihadv@gmail.com', 'minimalistic-portfolio' ); ?></a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<p class="has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-bottom:0px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Instagram', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h4 class="wp-block-heading has-text-align-left class-has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:600"><a href="https://instagram.com/_nihaaaaad" target="_blank"><?php echo esc_html__( '@_nihaaaaad', 'minimalistic-portfolio' ); ?></a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<p class="has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-bottom:0px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'GitHub', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
<h4 class="wp-block-heading has-text-align-left has-secondary-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:600"><a href="https://github.com/MohammedNihadv" target="_blank"><?php echo esc_html__( 'github.com/MohammedNihadv', 'minimalistic-portfolio' ); ?></a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->