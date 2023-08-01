<?php
/**
 * Title: Images with text and button.
 * Slug: grainy/images-text
 * Categories: grainy
 * Keywords: banner
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":79,"width":481,"height":855,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo(get_template_directory_uri()). '/assets/images/sea-tree-water-nature-mountain.jpg'; ?>" alt="" class="wp-image-79" style="width:481px;height:855px" width="481" height="855"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":83,"width":392,"height":522,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo(get_template_directory_uri()). '/assets/images/nature-light-sky-night.jpg'; ?>" alt="" class="wp-image-83" style="width:392px;height:522px" width="392" height="522"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0"><?php esc_html_e('Write you personal Experience','grainy');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|80","bottom":"var:preset|spacing|20","left":"0"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--20);margin-left:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'grainy');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e('Discover','grainy');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->