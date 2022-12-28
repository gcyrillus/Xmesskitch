<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer id="footer">
		<div class="desc">
		<div id="presentation" role="presentation">
			<h2><?php $plxShow->mainTitle('link'); ?> -  &copy; 2023</h2>
			<div><?php $plxShow->subTitle(); ?></div>
		</div>
			<p class="m-top">thème <a href="https://github.com/gcyrillus" >Xmesskitch</a> by <a href="https://github.com/gcyrillus" >Gcyrillus</a>  </p>
		</div>
		<div class="column">
			<div>
				<h3>
					<?php $plxShow->lang('CATEGORIES'); ?>
				</h3>

				<ul class="cat-list unstyled-list">
					<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
				</ul>
			</div>
			
			<div>
				<h3>
					<?php $plxShow->lang('TAGS'); ?>
				</h3>

				<ul class="tag-list">
					<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
				</ul>
			</div>
			
			<div>
				<h3>
					<?php $plxShow->lang('ARCHIVES'); ?>
				</h3>

				<ul class="arch-list unstyled-list">
					<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
				</ul>
			</div>
			
			<div>
				<ul class="menu">
						<?php  if($plxShow->plxMotor->aConf['enable_rss']) { ?>
					<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
						<?php } ?>
						<?php if($plxShow->plxMotor->aConf['enable_rss_comment']) { ?>
					<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
						<?php  } ?>
				</ul>
			</div>
			
		</div>
		<div class="infos">
		<p>
			<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
			<?php $plxShow->httpEncoding() ?>&nbsp;-
			<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			 <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
		</p>
	</div>
	</footer>	
</body>
</html>