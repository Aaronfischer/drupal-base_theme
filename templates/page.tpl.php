<?php /*
	General Page Template
*/ ?>
<?php include 'page.header.inc'; ?>


<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	<!-- ______________________ MAIN _______________________ -->

	<div id="main">

		<section id="content" class="content content-main">
			<?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>

				<header id="content-header" class="header-content">
					<?php print $breadcrumb; ?>
					<?php if ($page['highlighted']): ?>
						<div id="highlighted"><?php print render($page['highlighted']) ?></div>
					<?php endif; ?>
					<?php print render($title_prefix); ?>

					<?php if ($title): ?>
						<h1 class="title h2"><?php print $title; ?></h1>
					<?php endif; ?>
				</header> <!-- /#content-header -->

			<div id="content-area" class="">
				<section class="">
					<div class="admin-messages">
						<?php print render($title_suffix); ?>
						<?php print $messages; ?>
						<?php print render($page['help']); ?>

						<?php if ($tabs): ?>
							<div class="tabs"><?php print render($tabs); ?></div>
						<?php endif; ?>

						<?php if ($action_links): ?>
							<ul class="action-links"><?php print render($action_links); ?></ul>
						<?php endif; ?>
					</div>
					<?php print render($page['content']); ?>
				</section>
			</div>

			<?php print $feed_icons; ?>
		</section> <!-- /content-inner /content -->
	</div> <!-- /main -->

</div> <!-- /page -->

<?php include 'page.footer.inc'; ?>