<?php global $dlm_download; ?>
<div class="download-album">
	<a class="cover" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php $dlm_download->the_filesize(); ?>)" rel="nofollow">
		<?php $dlm_download->the_image('thumbnail'); ?>
	</a>
	<div class="meta">
		<div class="title">
			<?php $dlm_download->the_title(); ?>
		</div>
		<div class="year">
			<?php $dlm_download->the_short_description(); ?>
		</div>
		<a class="download-link" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php $dlm_download->the_filesize(); ?>)" rel="nofollow">
			Download
		</a>
	</div>
</div>
