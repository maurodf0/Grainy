<?php
    /**
     * Title: Gradient Background with text
     * Slug: grainy/gradient-bg-with-text
     * Categories: grainy, gradient, banner, call to action
     * Keywords: call to action, button
     */
?>

<!-- wp:group {"align":"wide","style":{"color":{"gradient":"linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground) 26%,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary) 26%)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-background" style="background:linear-gradient(90deg,var(--wp--preset--color--background) 26%,var(--wp--preset--color--primary) 26%)"><!-- wp:image {"lightbox":{"enabled":true},"id":35,"width":"1290px","height":"auto","aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo(get_template_directory_uri()). '/assets/images/mountainous-landforms-mountain.jpg'; ?>" alt="guy see over a mountain" class="wp-image-35" style="aspect-ratio:16/9;object-fit:cover;width:1290px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p style="margin-top:0;margin-bottom:0"><?php esc_html_e('A jump inside my travels', 'grainy') ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"title"} -->
<h2 class="wp-block-heading has-title-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Discover my Adventure', 'grainy')?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in ante mattis, pellentesque elit ac, commodo magna. Phasellus urna sapien, scelerisque non tincidunt in, mollis egestas lectus. Mauris id ex ultricies, fermentum urna id, cursus velit. Morbi venenatis elit sed malesuada rhoncus. Vivamus imperdiet urna bibendum magna suscipit molestie. ', 'grainy');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"text","style":{"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Main Cta Evidence', 'grainy');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary","textColor":"text","style":{"elements":{"link":{"color":{"text":"var:preset|color|text"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Second CTA Evidence', 'grainy')?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->