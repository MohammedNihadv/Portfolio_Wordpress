<?php
/**
 * Title: Testimonial
 * Slug: minimalistic-portfolio/testimonial
 * Categories: all, testimonial
 * Keywords: testimonial
 */

$minimalistic_portfolio_images = array(
    MINIMALISTIC_PORTFOLIO_URL . 'assets/images/project_brightify.png',
    MINIMALISTIC_PORTFOLIO_URL . 'assets/images/project_tango.png',
    MINIMALISTIC_PORTFOLIO_URL . 'assets/images/project_cyber_demo.png',
);

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary-one","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-secondary-one-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"70px","bottom":"70px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:70px;padding-right:0;padding-bottom:70px;padding-left:0"><!-- wp:group {"className":"planner-section","style":{"spacing":{"margin":{"top":"0px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"80%","justifyContent":"center"}} -->
<div class="wp-block-group planner-section" style="margin-top:0px;margin-bottom:40px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<h2 id="portfolio" class="wp-block-heading has-text-align-center has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:50px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Latest Projects', 'minimalistic-portfolio' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"padding":{"top":"40px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:0;padding-top:40px;padding-bottom:0"><!-- wp:columns {"className":"task-column"} -->
<div class="wp-block-columns task-column"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"testimonial-box","style":{"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-box has-tertiary-background-color has-background" style="border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($minimalistic_portfolio_images[0]); ?>" alt="" class="wp-image-63" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"testimonial-content","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:html -->
<i class="fas fa-folder-open"></i>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"10px","bottom":"30px"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:10px;margin-bottom:30px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Developed and launched a live e-commerce platform for a lighting solutions business, handling real-world transactions and catalog navigation.', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:18px;font-style:normal;font-weight:600"><a href="https://github.com/MohammedNihadv/Brightify-Ecommerce-Lighting-Platform" target="_blank"><?php echo esc_html__( 'Brightify Lighting', 'minimalistic-portfolio' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'React / E-Commerce', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"testimonial-box","style":{"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-box has-tertiary-background-color has-background" style="border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($minimalistic_portfolio_images[1]); ?>" alt="" class="wp-image-63" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"testimonial-content","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:html -->
<i class="fas fa-folder-open"></i>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"10px","bottom":"30px"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:10px;margin-bottom:30px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Elevating food ordering with a gorgeous Flutter and Dart cross-platform mobile application, connecting Kerala users directly to local eateries.', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:18px;font-style:normal;font-weight:600"><a href="https://github.com/MohammedNihadv/Tropical-Tango" target="_blank"><?php echo esc_html__( 'Tropical Tango', 'minimalistic-portfolio' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Flutter / Dart', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"testimonial-box","style":{"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-box has-tertiary-background-color has-background" style="border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:image {"id":63,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($minimalistic_portfolio_images[2]); ?>" alt="" class="wp-image-63" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"testimonial-content","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group testimonial-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:html -->
<i class="fas fa-folder-open"></i>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"10px","bottom":"30px"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:10px;margin-bottom:30px;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'A web-based social engineering simulation showing how attackers exploit browser permissions. Built in a safe sandbox for security training.', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"outfit"} -->
<h3 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="font-size:18px;font-style:normal;font-weight:600"><a href="https://github.com/MohammedNihadv/Cybersecurity-Awareness-Demonstration" target="_blank"><?php echo esc_html__( 'Security Awareness Demo', 'minimalistic-portfolio' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-text","fontFamily":"outfit"} -->
<p class="has-accent-text-color has-text-color has-link-color has-outfit-font-family" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Pen-Test / JavaScript', 'minimalistic-portfolio' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->