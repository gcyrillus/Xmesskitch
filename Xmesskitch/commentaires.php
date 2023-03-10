<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<h3 id="comments">
			<?php echo $plxShow->artNbCom(); ?>
		</h3>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?>">

			<div id="com-<?php $plxShow->comIndex(); ?>">

				<small>
					<a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>&nbsp;
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time> -
					<?php $plxShow->comAuthor('link'); ?>
					<?php $plxShow->lang('SAID'); ?> :
				</small>

				<blockquote>
					<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
				</blockquote>

			</div>

			<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
			<?php endif; ?>

		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<h3>
		<?php $plxShow->lang('WRITE_A_COMMENT') ?>
	</h3>

	<form id="form" class="com" action="<?php $plxShow->artUrl(); ?>#form" method="post">
		<fieldset>
					<label for="id_name"><?php $plxShow->lang('NAME') ?>* :</label>
					<input id="id_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" required="required" aria-required="true"/>

					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="id_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />

					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="id_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />

					<div id="id_answer" class="fullwidth"></div>
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?>* : </label>
					<textarea id="id_content" name="content" cols="35" rows="6" required="required" aria-required="true"><?php $plxShow->comGet('content',''); ?></textarea>

			<?php $plxShow->comMessage('<p id="com_message" class="#com_class fullwidth"><strong>#com_message</strong></p>'); ?>

			<?php if($plxShow->plxMotor->aConf['capcha']): ?>

			<div class="fullwidth">
					<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>*</label>
					<?php $plxShow->capchaQ(); ?>
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width: auto; display: inline;" required="required" aria-required="true"/>
			</div>

			<?php endif; ?>

			<div class="fullwidth">
					<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
					<input class="blue" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
			</div>

		</fieldset>

	</form>

<script>
function replyCom(idCom) {
	document.getElementById('id_answer').innerHTML='<?php $plxShow->lang('REPLY_TO'); ?> :';
	document.getElementById('id_answer').innerHTML+=document.getElementById('com-'+idCom).innerHTML;
	document.getElementById('id_answer').innerHTML+='<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()"><?php $plxShow->lang('CANCEL'); ?></a>';
	document.getElementById('id_answer').style.display='inline-block';
	document.getElementById('id_parent').value=idCom;
	document.getElementById('id_content').focus();
}
function cancelCom() {
	document.getElementById('id_answer').style.display='none';
	document.getElementById('id_parent').value='';
	document.getElementById('com_message').innerHTML='';
}
var parent = document.getElementById('id_parent').value;
if(parent!='') { replyCom(parent) }
</script>

	<?php $plxShow->comFeed('rss',$plxShow->artId(), '<p><a href="#feedUrl" title="#feedTitle">#feedName</a></p>'); ?>

	<?php else: ?>

	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
