<?php get_header(); ?>


<div class="container pt-5 pb-5">

<?php if (have_posts()): ?>
		    <?php while(have_posts()): ?>
              <?php the_post(); ?>
              
              <div class="row">
                  <div class="col-12"><h2><?php the_title(); ?></h2><hr></div>
                  <div class="single-post-img col-4">
                    <?php the_post_thumbnail(); ?>
                  </div>
                      <div class="col-8">
                        <?php the_content(); ?>
                        <hr>
                        <small><?php echo get_the_date(); ?></small>
                        <small><?php echo get_the_author_nickname(); ?></small>
                        <hr>
                        <button class="btn" onclick="goBack()"> < Palaa takaisin</button>
                      </div>
              </div>

		    <?php endwhile; ?>
        <?php endif; ?>
    
</div>

<?php get_footer(); ?>


<script>
function goBack() {
  window.history.back();
}
</script>