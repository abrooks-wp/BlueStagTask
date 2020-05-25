<?php
/**
 * Partial template for content in home page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <div class="row">
    <div class="col-md-5">
      <div class="entry-content">

        <?php the_content(); ?>
        
      </div><!-- .entry-content -->
    </div>
    <div class="col-md-6 offset-md-1 thumbnail">
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>
  </div>

</article><!-- #post-## -->
