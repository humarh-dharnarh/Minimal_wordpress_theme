<?php get_header(); ?>

<?php get_template_part ( 'inc/indexCarousel' ) ?>

  <!-- About me container -->
  <div class="container bg-white blog-container">

    <h1 class="bold text-black uf-fl" style="line-height: 1"><span class="fa fa-user uf-fl"></span> About Me<small class="small d-block pt-1 text-secondary">Who am I</small></h1>

  </div>

  <br><br>

	<!-- Blog container -->
  <div class="container bg-white blog-container">

  <h1 class="bold text-black uf-fl" style="line-height: 1"><span class="fa fa-thumb-tack uf-fl"></span> Pinned Articles<small class="small d-block pt-1 text-secondary">My starred articles</small></h1>

    <?php
      // Argument that defines how many posts is outputted.
      $args = array('posts_per_page' => 5, 'meta_key' => 'meta-pinned', 'meta_value' => 'yes' );
      // Variable to call WP_Query.
      $query = new WP_Query ( $args );

        if ( $query->have_posts () ) : while( $query->have_posts() ) : $query->the_post();

        	get_template_part ( 'content', get_post_format() );

        endwhile; endif;
        // Function to reset post data.
      wp_reset_postdata();
    ?>

    <br>

    <!-- Go to Articles -->
    <div class="loadp text-center">
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>"><button type="button" class="btn btn-outline-secondary">All Articles <span class="fa fa-long-arrow-right"></span></button></a>
    </div>
  </div>

  <br><br>

<?php get_footer(); ?>