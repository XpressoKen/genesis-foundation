<?php if ( get_field('header_right_options', 'options') != 'Empty' ) { ?>

<?php $header_right = get_field('header_right_options', 'options'); ?>

<div class="header-right small-12 medium-6 column">

	<?php if  ( $header_right == 'Menu' ) { ?>

	<?php $header_menu = get_field('header_right_menu', 'options'); ?>

	<div class="header-menu align-right">

		<?php wp_nav_menu( array('depth' => 1, 'menu' => $header_menu) ); ?>

	</div>
	<!-- end .header-menu -->

	<?php } elseif ( $header_right == 'Search Form' ) { ?>

	<div class="header-search align-right">
	
		<?php get_search_form(); ?>

	</div>
	<!-- end .header-search -->

	<?php } elseif ( $header_right == 'Social Networks' ) { ?>

	<div class="header-social align-right">

		<?php include( CHILD_DIR . '/templates/includes/social-networks.php' ); ?>

	</div>

	<?php } ?>

</div>

<?php } ?>