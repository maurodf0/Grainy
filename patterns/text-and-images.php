<?php
/**
 * Title: Text and Images with button
 * Slug: grainy/text-and-images
 * Categories: grainy
 * Keywords: banner
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"color":{"background":"#ffffff00"}},"layout":{"type":"constrained","contentSize":"900px","wideSize":"1500px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff00;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0"><?php esc_html_e('Enjoy every seconds','grainy');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|80","bottom":"var:preset|spacing|20","left":"0"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--20);margin-left:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','grainy'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"id":87,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo(get_template_directory_uri()). '/assets/images/landscape-nature-rock-mountain.jpg'; ?>" alt="" class="wp-image-87"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":88,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo(get_template_directory_uri()). '/assets/images/mountainous-landforms-mountain.jpg'; ?>" alt="" class="wp-image-88"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->