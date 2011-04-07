<?php
/*
 * Template Name: Nosotros
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
    <div id=main role=main class=nosotros>
      <div id=second-header>
        <div class=second-header-left>
          <h1>
            <div class=line2>Nosotros</div>
          </h1>
          <h3>Garantizamos la excelencia técnica de nuestros instructores. Los profesionales que formamos tienen certificado de habilitación (en el nivel de extensión universitaria) expedido por la Universidad Tecnológica Nacional. Son evaluados y revalidados anualmente.</h3>
        </div>
        <div class=second-header-right>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/Slider2.png"/>
        </div>
      </div>
      <div id=nosotros>
        <div id=silvina class="personal first">
          <h5><span class=title>Instructora</span>Silvina Tenenbaum</h5>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/SilvinaCircular.png"/>
          <a class=vermas href='/silvina-tenenbaum'>Ver más</a>
        </div>
        <div id=diego class=personal>
          <h5><span class=title>Instructor</span>Diego Navón</h5>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/DiegoCircular.png"/>
          <a class=vermas href='/diego-navon'>Ver más</a>
        </div>
        <div id=pamela class=personal>
          <h5><span class=title>Instructora</span>Pamela De Pablo</h5>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/PamelaCircular.png"/>
          <a class=vermas href='/pamela-de-pablo'>Ver más</a>
        </div>
        <div id=martin class=personal>
          <h5><span class=title>Instructor</span>Martín Véntola</h5>
          <img src="<?php bloginfo( 'template_directory' ); ?>/images/MartinCircular.png"/>
          <a class=vermas href='/martin-ventola'>Ver más</a>
        </div>
      </div>
      <?php the_content(); ?>

    </div> 
<?php endwhile; ?>

<?php get_footer(); ?>