<?php
/**
 * Content for displaying read more link and comment link.
 *
 * @package Checathlon
 */
?>

<div class="entry-comment grid-same-line">
  <a href="<?php the_permalink() ?>" class="more-link underline-link medium-font-weight">
    Listen to episode &rarr;
    <span class="screen-reader-text"><?php the_title() ?></span>
  </a>

	<?php
		checathlon_comments_popup_link();
	?>
</div><!-- .entry-comment -->
