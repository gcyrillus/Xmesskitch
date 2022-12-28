<?php if (!defined('PLX_ROOT')) exit; ?><!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css?v=Xmesskitch-24-12-22" media="screen"/>
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body class="page mode-<?php $plxShow->mode(true) ?>">
	<nav id="nav" role="navigation">
	  <a href="#main" id="top"  role="complementary" title="skip to content">Aller au contenu</a>
	  <a href="<?php echo $plxShow->plxMotor->racine; ?>" ><img src="<?php $plxShow->template(); ?>/img/PluXml-LogoJaune_104x82.png" alt="<?php $plxShow->mainTitle(); ?>" aria-labelledby="#presentation"></a>
	  <input type="checkbox" id="toggleNav">
	  <label for="toggleNav" role="checkbox" aria-controls="toggleNav" >Menu</label>
	  <ul role="menubar">
		<?php $plxShow->staticList('','<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
		<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
	  </ul>
	</nav>
	
		<script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "<?php $plxShow->mainTitle(); ?>",
			"url": "<?php echo $plxShow->plxMotor->racine; ?>",
			/*"sameAs": ["https://facebook.com/page", "https://plus.google.com/site", "https://twitter.com/name"],*/
			<?php if(isset($plxShow->plxMotor->plxPlugins->aPlugins['plxMySearch']) && $plxShow->plxMotor->plxPlugins->aPlugins['plxMySearch']->getParam('method') == 'get' && $plxShow->plxMotor->aConf['urlrewriting'])  {	?>
"potentialAction": {
					"@type": "SearchAction",
					"target": "<?php echo $plxShow->plxMotor->racine .$plxShow->plxMotor->plxPlugins->aPlugins['plxMySearch']->getParam('url').'?searchfield={searchfield}' ; ?>",
		            "query-input": "required name=searchfield"
			}
<?php } ?>
		}</script>