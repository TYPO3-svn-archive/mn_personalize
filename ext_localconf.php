<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output']['mn_personalize'] = 'EXT:mn_personalize/Hooks/class.user_mn_personalize_fe_renderinghook.php:&user_mn_personalize_fe_renderinghook->contentPostProc_output';
?>