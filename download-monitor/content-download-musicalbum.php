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
	<div class="cover">
		<?php $dlm_download->the_image('thumbnail'); ?>
	</div>
	<div class="meta">
		<div class="meta-info">
			<div class="title">
				<?php $dlm_download->the_title(); ?>
			</div>
			<div class="description">
				<?php $dlm_download->the_short_description(); ?>
			</div>
		</div>
		<a class="download-link" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php echo $dlm_download->get_version()->get_filesize_formatted(); ?>)" rel="nofollow">
			Download
		</a>
	</div>
</div>
