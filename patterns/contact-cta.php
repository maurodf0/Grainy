<?php
/**
 * Title: Contact CTA
 * Slug: grainy/contact-cta
 * Categories: grainy, call-to-action
 * Keywords: call to action, button
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"top":{"color":"var:preset|color|text","width":"2px"},"right":{},"bottom":{"color":"var:preset|color|text","width":"2px"},"left":{}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--text);border-top-width:2px;border-bottom-color:var(--wp--preset--color--text);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"58px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:58px"><?php esc_html_e('Keep in contact with me','grainy');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Contact me now', 'grainy'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->