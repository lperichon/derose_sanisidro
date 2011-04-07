<?php
/*
 * Template Name: Empresas
 *
 * A custom page template for the empresas page.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage derose_si
 * @since derose_si 1.0
 */
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php include 'menu.html' ?>
    <div id="main" role="main" class=" <?php body_class('empresas'); ?>">
      <div id=second-header>
        <div class=second-header-left>
          <h1>
            <div class=line1>Método DeRose</div>
            <div class=line2>Empresas</div>
          </h1>
        </div>
        <div class=second-header-right>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/Slider4.png"/>
        </div>
      </div>
      <?php the_content(); ?>

    </div> 
<?php endwhile; ?>

<?php get_footer(); ?>