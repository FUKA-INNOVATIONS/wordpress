<?php get_header(); ?>


  <!-- Page Content -->
  <div class="container mt-20" id="top">

    <div class="row">




        
        <div class="row uutiset-cat" id="palvelut">

        <div class="col-lg-12">
          <h4>Uutiset</h4>
          <hr>
        </div>
        

      
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <?php the_title(); ?>
                </h4>
                <small><?php echo get_the_date(); ?></small>
                
                <p class="card-text"><?php the_excerpt(); ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="<?php the_permalink(); ?>">Lue lisää..</a></small>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>

        </div>
        <!-- /.row -->


  </div>
  <!-- /.container -->
<?php get_footer(); ?>