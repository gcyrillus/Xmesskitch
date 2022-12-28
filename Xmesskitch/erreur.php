<?php include __DIR__.'/header.php'; ?>
			<header id="header">
				<h2>
					<?php $plxShow->lang('ERROR'); ?>
				</h2>
			</header>
			<main id="main">
	<section>
		<article class="article">
			<p>
				<?php $plxShow->erreurMessage(); ?>
			</p>
		</article>
	</section>
	<?php include __DIR__.'/sidebar.php'; ?>
	</main>
<?php include __DIR__.'/footer.php'; ?>

