<!-- ______________________ HEADER _______________________ -->

<header id="header" class="bar bar-fixed bar-header js-bar-header bar-top-active" role="banner">
	<?php print render($page['header']); ?>
	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="home-logo" class="desktop logo logo-bar small">
		<img src="/<?php print drupal_get_path('theme', 'adu'); ?>/assets/media/img/optimized/logo-full-white.png" alt="<?php print t('Home'); ?>" />
		<?php /* print $logo; */ ?>
	</a>
	<nav class="">
		<?php
			$mainmenu = menu_tree_output(menu_tree_all_data('main-menu'));
			print drupal_render($mainmenu);
		?>
		<?php
      			$block = module_invoke('search', 'block_view', 'form');
				print render($block);
		?>
		<?php print render($page['navigation']); ?>
	</nav>
</header>