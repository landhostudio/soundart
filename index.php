<?php get_header(); ?>

<?php if (have_posts()): ?>

  <section class="index">
    <div class="container">

      <?php if (is_category()): ?>
        <h2><?php single_cat_title(); ?></h2>
      <?php elseif (is_tag()): ?>
        <h2><?php single_tag_title(); ?></h2>
      <?php elseif (is_search()): ?>
        <h2><?php printf( __( 'Risultati di ricerca per: %s', 'soundart' ), get_search_query() ); ?></h2>
      <?php else: ?>
        <h2><?php esc_html_e('Blog', 'soundart'); ?></h2>
      <?php endif; ?>

      <ol>
        <?php while (have_posts()): the_post(); ?>
          <?php get_template_part('template-parts/content', 'preview'); ?>
        <?php endwhile; ?>
      </ol>

    </div>
    
  </section>

  <?php if (paginate_links()): ?>
    <nav class="pagination">
      <div class="container">
        <?php
          $args = array(
            'end_size'  => 1,
            'mid_size'  => 3,
            'prev_text' => __('«'),
            'next_text' => __('»'),
            'type'      => 'plain'
          );
          echo paginate_links($args);
        ?>
      </div>
    </nav>
  <?php endif; ?>
        
<?php else: ?>
  <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>


<?php get_footer(); ?>
