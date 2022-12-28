<?php include __DIR__.'/header.php'; ?>
<header id="header">
		<h1>
			<?php $plxShow->staticTitle(); ?>
		</h1>
	<hr>
		<ul class="repertory menu breadcrumb" aria-label="Breadcrumb">
			<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
			<li>page / <span aria-current="page"><?php $plxShow->staticTitle(); ?></span></li>
		</ul>
<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "<?php $plxShow->lang('HOME'); ?>",
				"item": "<?php $plxShow->racine() ?>"
				},{															
				"@type": "ListItem",
				"position": 2 ,
				"name": "<?php $plxShow->staticTitle(); ?>",
				"item": "<?php $plxShow->racine() ?><?php echo ltrim($_SERVER['REQUEST_URI'],'/'); ?>"
				}
				]
			}
		</script>
</header>
<main id="main" class="fullpage">
	<section id="single">
		<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">
			<?php $plxShow->staticContent(); ?>
		</article>
	</section>
</main>
<?php include __DIR__.'/footer.php'; ?>