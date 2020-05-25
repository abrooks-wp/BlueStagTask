<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying the homepage.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'home' );
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

  <section class="about">
    <div class="container">
      <div class="row">
      <?php if ( have_rows( 'about_section' ) ) : ?>
        <?php while ( have_rows( 'about_section' ) ) : the_row(); ?>
        <div class="col-md-5">
        <h2><?php the_sub_field( 'about_section_title' ); ?></h2>
          <?php the_sub_field( 'about_section_content' ); ?>
        </div>
        <div class="col-md-6 offset-md-1 thumbnail">
          <?php $about_section_image = get_sub_field( 'about_section_image' ); ?>
            <?php if ( $about_section_image ) : ?>
              <img class="inline-photo show-on-scroll" src="<?php echo esc_url( $about_section_image['url'] ); ?>" alt="<?php echo esc_attr( $about_section_image['alt'] ); ?>" />
            <?php endif; ?>
        </div>
          
        <?php endwhile; ?>
      <?php endif; ?>

      </div>
    </div>
  </section>
  <?php if ( have_rows( 'funding_section' ) ) : ?>
      <?php while ( have_rows( 'funding_section' ) ) : the_row(); ?>
        
  <section class="funding">
  
    <div class="container">
      <div class="row">
        <div class="col-md-5 offset-md-1 content">
          <h2><?php the_sub_field( 'funding_section_title' ); ?></h2>
          <?php the_sub_field( 'funding_section_content' ); ?>
        </div>
        <div class="col-md-4 offset-md-1 thumbnail">    
        
          <p><?php the_sub_field( 'funding_section_extra_content' ); ?></p>
          <?php $funding_section_image = get_sub_field( 'funding_section_image' ); ?>
            <?php if ( $funding_section_image ) : ?>
              <img src="<?php echo esc_url( $funding_section_image['url'] ); ?>" alt="<?php echo esc_attr( $funding_section_image['alt'] ); ?>" />
            <?php endif; ?>
        </div>  
      </div>
    </div>
    
  </section>
  <?php endwhile; ?>
  <?php endif; ?>

  <?php if ( have_rows( 'success_section' ) ) : ?>
  <section class="achieve">
    <div class="container">
      <div class="row">
      <?php while ( have_rows( 'success_section' ) ) : the_row(); ?>
        <div class="col-md-12 center">
          <h2><?php the_sub_field( 'success_section_title' ); ?></h2>
        </div>
      </div>
      <div class="row">
		<?php $success_section_gallery_images = get_sub_field( 'success_section_gallery' ); ?>
		<?php if ( $success_section_gallery_images ) :  ?>
      <?php foreach ( $success_section_gallery_images as $success_section_gallery_image ): ?>
        <div class="col-md-4 vector center">
				
					<img src="<?php echo esc_url( $success_section_gallery_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $success_section_gallery_image['alt'] ); ?>" />
				
        </div>
			<?php endforeach; ?>
		<?php endif; ?>
  <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

  <?php if ( have_rows( 'select_section' ) ) : ?>
  <?php while ( have_rows( 'select_section' ) ) : the_row(); ?>
  <section class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-12 center">
          <h2><?php the_sub_field( 'select_section_title' ); ?></h2>
          <p><?php the_sub_field( 'select_section_sub_title' ); ?></p>
        </div>
      </div>
    </div>
    <?php if ( have_rows( 'select_section_images' ) ) : ?>
      <div class="products--container">
        <?php while ( have_rows( 'select_section_images' ) ) : the_row(); ?>
        <?php $bgClass = get_sub_field( 'image_background_colour' ); ?>
        <div class="col-half center <?php echo $bgClass; ?>">
        <?php 
        $product_image = get_sub_field( 'product_image' ); 
        $size = 'product';

        echo wp_get_attachment_image( $product_image, $size ); ?>
        <p>
          <?php
          if ($bgClass === "white") {
            $btnClass = "black";
          } else {
            $btnClass = "white";
          }
          ?>
        <a class="btn btn-lg btn--<?php echo $btnClass; ?>" href="<?php the_sub_field( 'product_button_url' ); ?>"><?php the_sub_field( 'product_button' ); ?> 🎉</a>
        </p>
        </div>
      
      <?php endwhile; ?>
    </div> <!-- End .products--container  -->
		<?php else : ?>
			<?php // no rows found ?>
    <?php endif; ?>	
			
  </section>
	<?php endwhile; ?>
<?php endif; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
