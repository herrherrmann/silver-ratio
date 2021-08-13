<?php
/**
 * Download Music Album
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */
?>
<div class="download-musicalbum">
	<a class="cover" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php $dlm_download->the_filesize(); ?>)" rel="nofollow">
		<?php $dlm_download->the_image('thumbnail'); ?>
	</a>
	<div class="meta">
		<div class="meta-info">
			<div class="title">
				<?php $dlm_download->the_title(); ?>
			</div>
			<div class="year">
				<?php $dlm_download->the_short_description(); ?>
			</div>
		</div>
		<a class="download-link" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php echo $dlm_download->get_version()->get_filesize_formatted(); ?>)" rel="nofollow">
			Download
		</a>
	</div>
</div>
