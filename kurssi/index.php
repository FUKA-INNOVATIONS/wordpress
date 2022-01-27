<?php get_header(); ?>
<div class="content-row">

<!-- Sisallyta sidebar.php -->
<!--  Nayttaa wp_nav_menu(); joka sijaitsee sidebar.php:ssa -->
<?php get_sidebar(); ?>
	
	<main>
	<?php if (have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<h3 class="sininen">Uutuudet</h3>
	<?php
		// haetaan viisi uusinta artikkelia
		$uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '5'));
		foreach ($uudet_artikkelit as $artikkeli):
	?>
	<article>
		<a href="<?php echo get_permalink( $artikkeli['ID'] ); ?>">

			<!-- haetaan postin kuva id:n perusteella ja kooksi 'thumbail' ja lisataan supporti functions.php:een 
				get_post _thumbnail funktio korvaa koko <img src="http://placekitten.com/150/200" alt=""> tagin -->

			<?php echo get_the_post_thumbnail( $artikkeli['ID'], 'thumbnail') ?>
			<h4><?php echo $artikkeli['post_title']; ?></h4>
			<p><?php echo substr($artikkeli['post_excerpt'], 0, 100); ?>...</p>
		</a>
	</article>
	<?php endforeach ?>
	</main>

</div>	

<?php
get_footer();
?>