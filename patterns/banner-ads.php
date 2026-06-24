<?php
/**
 * Title: Banner Ads
 * Slug: minimalistic-portfolio/banner-ads
 * Categories: all, banner-ads
 * Keywords: banner-ads
 */

$minimalistic_portfolio_images = array(
    MINIMALISTIC_PORTFOLIO_URL . 'assets/images/banner-ads.png',
);

?>

<!-- wp:group {"tagName":"section","className":"contact-section","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"background":{"color":"var:preset|color|secondary-one"}},"layout":{"type":"constrained"}} -->
<section id="contact" class="wp-block-group contact-section" style="padding-top:80px;padding-bottom:80px">
    <div class="wp-block-group container">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary-accent-text","fontFamily":"outfit"} -->
        <h2 class="wp-block-heading has-text-align-center has-secondary-accent-text-color has-text-color has-outfit-font-family" style="font-size:50px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Contact Me', 'minimalistic-portfolio' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:html -->
        <form action="#" class="glass-panel" style="padding: 45px; border-radius: 20px; max-width: 800px; margin: 40px auto 0; background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.08);">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <input type="text" placeholder="Your Name" id="name" required style="padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff;">
                <input type="email" placeholder="Your Email" id="email" required style="padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <input type="text" placeholder="Your City/Address" id="address" style="padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff;">
                <input type="tel" placeholder="Phone Number" id="phone" style="padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff;">
            </div>
            <textarea cols="30" rows="8" placeholder="Your Message Here..." id="message" required style="width: 100%; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; margin-bottom: 20px; box-sizing: border-box; font-family: inherit;"></textarea>
            <div style="text-align: center;">
                <button type="button" class="wp-block-button__link wp-element-button contact-submit-btn" style="padding: 12px 35px; border-radius: 30px; color: #fff; border: none; font-weight: 600; cursor: pointer; transition: all 0.3s;" onclick="sendMail()">Send Message</button>
            </div>
        </form>
        <!-- /wp:html -->
    </div>
</section>
<!-- /wp:group -->