<?php 

include( CHILD_DIR . '/templates/includes/additional-classes.php' );

?>

<section <?php echo $html_id != NULL ? 'id="' . $html_id . '"' : ''; ?> class="content-block headline row-<?php echo $cb_i; ?> row-<?php echo $even_odd; ?><?php echo $html_classes != NULL ? ' ' . $html_classes : ''; ?>">

	<div class="wrap">

	<?php if ( get_sub_field('headline') || get_sub_field('subheadline') ) { ?>

	<header class="section-header small-12 column">		

		<?php if ( $headline = get_sub_field('headline') ) { ?>

		<h1 class="section-title"><?php echo $headline; ?></h1>

		<?php } ?>

		<?php if ( $subheadline = get_sub_field('subheadline') ) { ?>

		<h2 class="section-subtitle"><?php echo $subheadline; ?></h2>

		<?php } ?>

	</header>

	<?php } ?>

	</div>
	<!-- end .wrap -->

</section>
<!-- end .headline -->