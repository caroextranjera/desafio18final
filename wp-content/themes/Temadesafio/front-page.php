<?php get_header (); ?>
  

    <!-- Page Content -->
    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Portfolio Item Heading -->
      <h1 class="my-4"><?php the_title(); ?>
      </h1>
      <div class="row">
      <?php  the_content(); ?>
    </div>

<?php endwhile; endif; ?>

  </div>

   


  <?php  get_footer(); ?>

