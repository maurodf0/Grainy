<?php
/**
 * Title: Hero Story
 * Slug: grainy/hero-story
 * Categories: grainy, call-to-action, Hero
 * Keywords: call to action, button, hero
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="min-height:400px;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"main-title"} -->
<h2 class="wp-block-heading has-main-title-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Create', 'grainy'); ?> <em><?php esc_html_e('your story', 'grainy'); ?></em></h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"right":"3rem","left":"3rem"}}},"fontSize":"main-title"} -->
<h2 class="wp-block-heading has-main-title-font-size" style="padding-right:3rem;padding-left:3rem;font-style:normal;font-weight:300"><em><?php esc_html_e('Every words count.', 'grainy'); ?></em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('JOIN IN MY ADVENTURES', 'grainy');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->