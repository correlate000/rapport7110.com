<?php
/**
 * The template for displaying pages
 * Based on WF (Wireframe) structure
 */

get_header(); ?>

  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>

  <!-- Page Content -->
  <section class="section">
    <article class="page-content">
      <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
      ?>
    </article>
  </section>

<?php get_footer(); ?>
