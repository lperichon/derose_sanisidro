<?php
/**
 * Template Name: Home page
 *
 * A custom page template for the home page.
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
    <div id=main role=main class=home>
      <div class=main-left>
        <h1>
          <div class=line1>Método DeRose</div>
          <div class=line2>San Isidro</div>
        </h1>
        <h2>
          Fondo de la Legua 177 | 4766-4291
        </h2>
        <h3>
          Nuestra casa es un espacio<br/>
          de cultura y bienestar.<br/>
          ¡Te invitamos a conocernos!
        </h3>
      </div>
      <div class=main-right>
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/Slider1.png"/>
      </div>
      <div id=contact>
        <h2>Ingresá tu e-mail para recibir más información</h2>
        <?php the_content(); ?>
        <p>¡No hacemos spam!</p>
      </div>
    </div> 
<?php endwhile; ?>

<?php get_footer(); ?>