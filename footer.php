    <footer role="contentinfo" class="footer">
      <div class="container">

        <h4>
          <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></span></a>
        </h4>

        <?php if (has_nav_menu('menu_footer')): ?>
          <nav role="navigation">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu_footer',
              'items_wrap' => '%3$s'
            )); ?>
          </nav>
        <?php endif; ?>

          <div class="copy">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>.</p>
          </div>

        </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
