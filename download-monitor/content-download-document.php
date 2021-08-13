<?php
/**
 * Download Document
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */
?>
<div class="download-document">
	<a class="download-link" href="<?php $dlm_download->the_download_link(); ?>" title="Download (<?php echo $dlm_download->get_version()->get_filesize_formatted(); ?>)" rel="nofollow">
		<?php $dlm_download->the_title(); ?>
	</a>
	<div class="download-description">
		<?php $dlm_download->the_short_description(); ?>
	</div>
</div>
