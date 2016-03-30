<?php get_header(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12 main-content">
          <div class="clearfix"></div>
          <?php //if(have_posts()) : ?>
          <?php //while(have_posts()) : the_post(); ?>
          <!-- <h2 class="post-title"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>
          <h4 class="date"><?php //the_time('F j, Y'); ?></h4> -->

          
          <?php woocommerce_content(); ?>


          <?php //endwhile; ?>
          <?php //endif; ?>
        </div>
        <!-- <div class="col-md-4 sidebar-content main-content">
          <?php //dynamic_sidebar( 'sidebar-1' ); ?>
        </div> -->
      </div>
    </div>

<?php get_footer(); ?>
