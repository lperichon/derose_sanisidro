<?php
/*
 * Template Name: Silvina
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
    <div id=main role=main class=silvina>
      <div class=content>
        <h1>
          <div class=line1>Silvina</div>
          <div class=line2>Tenenbaum</div>
        </h1>
        <?php the_content(); ?>
      </div>
    </div> 
<?php endwhile; ?>

<?php get_footer(); ?>