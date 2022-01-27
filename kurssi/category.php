<?php get_header(); ?>
<div class="content-row">

<!-- Sisallyta sidebar.php -->
<!--  Nayttaa wp_nav_menu(); joka sijaitsee sidebar.php:ssa -->
<?php get_sidebar(); ?>
	
	<main>
    <h2><?php echo get_queried_object()->name; ?></h2>
    <p><?php echo get_queried_object()->description; ?></p>

	<h3 class="sininen">Kategorian tuotteet</h3>
    <?php
        // Haetaan nykyisen kategorian id
        $id = get_queried_object()->term_id;
        $artikkelit = get_posts( array('category' => $id, 'numberposts' => 999 ));
        foreach( $artikkelit as $artikkeli ):
	?>
	<article>
        <a href="<?php echo get_permalink( $artikkeli->ID ); ?>">

        <!-- haetaan postin kuva id:n perusteella ja kooksi 'thumbail' ja lisataan supporti functions.php:een 
            get_post _thumbnail funktio korvaa koko <img src="http://placekitten.com/150/200" alt=""> tagin -->

        <?php echo get_the_post_thumbnail( $artikkeli->ID, 'thumbnail') ?>
        <h4><?php echo $artikkeli->post_title; ?></h4>
        <p><?php echo substr($artikkeli->post_excerpt, 0, 100); ?>...</p>
        </a>
	</article>
    <?php endforeach; ?>
	</main>

</div>	

<?php
get_footer();
?>