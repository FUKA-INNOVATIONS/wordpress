<?php get_header(); ?>
<div class="content-row">

<!-- Sisallyta sidebar.php -->
<!--  Nayttaa wp_nav_menu(); joka sijaitsee sidebar.php:ssa -->
<?php get_sidebar(); ?>
	
	<main>
    <h2><?php echo get_queried_object()->name; ?></h2>
    <p><?php echo get_queried_object()->description; ?></p>

	<h3 class="sininen">Kategoriat</h3>
    <?php
        // Haetaan nykyisen kategorian id
        $id = get_queried_object()->term_id;
        $tyyppi = get_queried_object()->taxonomy;
        $alikategoriat = get_term_children($id, $tyyppi);
        foreach( $alikategoriat as $alikategoria ):
            $termi = get_term_by('id', $alikategoria, $tyyppi);
	?>
	<article>
		<a href="<?php echo get_term_link($alikategoria, $tyyppi) ?>">
            <?php
                // Haetaan kategorian kaikki tuotteet / artikkelit
                $artikkelit = get_posts( array('category' => $termi->term_id, 'numberposts' => 1, 'orderby' => 'rand' ));
                //print_r($artikkelit);
                echo get_the_post_thumbnail( $artikkelit[0]->ID, 'thumbnail');
            ?>
            <h4><?php echo $termi->name; ?></h4>
            <p><?php echo substr(category_description( $termi->term_id ), 0, 100); ?>...</p>
	</article>
    <?php endforeach; ?>
	</main>

    
</div>	

<?php
get_footer();
?>