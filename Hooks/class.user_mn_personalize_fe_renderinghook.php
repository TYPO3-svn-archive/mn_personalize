<?php
class user_mn_personalize_fe_renderinghook {

	function contentPostProc_output(&$params) {
		$feobj = &$params['pObj'];
		str_ireplace('TYPO3', 'XXX', $feobj->content);
        print_r($params['pObj']->content);
	}
}
?>