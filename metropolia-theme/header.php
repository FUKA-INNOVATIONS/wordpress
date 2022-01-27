
<!DOCTYPE html>
<html>
    <head>
    <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>



  <!-- Navigation -->

  <div class="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">WP kurssin lopputyö</a>

        <ul class="navbar-nav ml-auto">
          <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'top-menu'
            )
        );?>
        </ul>
    </div>
    
  </nav>
  </div>



