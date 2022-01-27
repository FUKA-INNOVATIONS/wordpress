<?php

// lisaa valikko jota naytetaan get_side_bar funktiolla
// Vaihdetaan valikokn html elementti naviksi (default on Div ) arggumentilla joka on taulukko
// Lisataan class => left-nav
wp_nav_menu(array('container' => 'nav', 'container_class' => 'left-nav'));

if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('vimpaimet') );
?>