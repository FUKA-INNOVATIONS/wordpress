<?php get_header(); ?>

<?php $miksi = get_field('miksi'); ?>
<?php $yt = get_field('yhteystiedot'); ?>

  <!-- Page Content -->
  <div class="container" id="top">

    <div class="row">


      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Banneri">
            </div>


          </div>

        </div>


        <div class="row tervetuloa" id="tervetuloa">

        <div class="col-lg-12">
        <?php if (have_posts()): ?>
		    <?php while(have_posts()): ?>
			  <?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <hr>
			  <?php the_content(); ?>
		    <?php endwhile; ?>
        <?php endif; ?>
        </div>



          <div class="miksi col-lg-12">
          <h2><?php echo $miksi['otsikko']; ?></h2>
          <hr>
          <p>
            <?php echo $miksi['kuvaus']; ?>
          </p>

          </div>

        </div>


        
        <div class="row palvelut" id="palvelut">

        <div class="col-lg-12">
          <h4>Palvelut</h4>
          <hr>
        </div>
        

        <?php query_posts('cat=3'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <?php the_title(); ?>
                </h4>
                
                <p class="card-text"><?php the_content(); ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="#yhteystiedot">Pyydä tarjous</a></small>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>

        </div>
        <!-- /.row -->


        
        <div class="row uutiset" id="uutiset">

        <div class="col-lg-12">
          <h4>Uutiset</h4>
          <hr>
        </div>

<?php query_posts('cat=5'); ?>
<?php query_posts('posts_per_page=3'); ?>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <div class="col-lg-4 col-md-12 mb-4">
    <div class="card h-100">
      <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="">
      <div class="card-body">
        <h4 class="card-title">
          <?php the_title(); ?>
        </h4>
        
        <p class="card-text"><?php the_excerpt(); ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="<?php echo post_permalink(); ?>">Lue lisää..</a></small>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<div class="col-lg-12">
<a class="btn-uutiset btn" href="<?php echo get_category_link(5); ?>" role="button">Lisää uutisia</a>
</div>

</div>
<!-- /.row -->


        <div class="row yhteystiedot" id="yhteystiedot">

        <div class="col-lg-6">
          <h4>Yhteystiedot</h4>
          <hr>
          <b>Osoite</b>
          <p><?php echo $yt['katuosoite']; ?>,
          <br>
          <?php echo $yt['postinumero']; ?> <?php echo $yt['paikkakunta']; ?></p>

          <b>Puhelinnumero</b>
          <p>
            <?php echo $yt['puhelinnumero']; ?>
          </p>

          <b>Sähköpostiosoite</b>
          <p>
          <?php echo $yt['sahkopostiosoite']; ?>
          </p>

          <b>Aukioloajat</b>
          <p>
          <?php echo $yt['aukioloajat']; ?>
          </p>
          <hr>
          <div class="kartta">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="300" id="gmap_canvas" src="https://maps.google.com/maps?ll=60.1863013,24.9210636&q=<?php echo $yt['katuosoite'] . "," . $yt['postinumero'] . $yt['paikkakunta']; ?>&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
          </div>

        </div>

        <div class="lomake col-lg-6 md-12">
          <h4>Yhteydenottolomake</h4>
          <hr>
          <?php echo do_shortcode( '[contact-form-7 id="154" title="Contact form 1"]' ); ?>
        </div>

        </div>




    </div>
    <!-- /.row -->







  </div>
  <!-- /.container -->
<?php get_footer(); ?>