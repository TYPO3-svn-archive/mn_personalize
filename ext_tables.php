<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'web',	 // Make module a submodule of 'web'
		'filterproperties',	// Submodule key
		'',						// Position
		array(
			'FilterProperty' => 'list, show, new, create, edit, update, delete','Filter' => 'list, show, new, create, edit, update, delete','PersonalizeFilter' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_filterproperties.xml',
		)
	);

}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Personalize content');

			t3lib_extMgm::addLLrefForTCAdescr('tx_mnpersonalize_domain_model_filterproperty', 'EXT:mn_personalize/Resources/Private/Language/locallang_csh_tx_mnpersonalize_domain_model_filterproperty.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_mnpersonalize_domain_model_filterproperty');
			$TCA['tx_mnpersonalize_domain_model_filterproperty'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:mn_personalize/Resources/Private/Language/locallang_db.xml:tx_mnpersonalize_domain_model_filterproperty',
					'label' => 'name',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FilterProperty.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mnpersonalize_domain_model_filterproperty.gif'
				),
			);

			t3lib_extMgm::addLLrefForTCAdescr('tx_mnpersonalize_domain_model_filter', 'EXT:mn_personalize/Resources/Private/Language/locallang_csh_tx_mnpersonalize_domain_model_filter.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_mnpersonalize_domain_model_filter');
			$TCA['tx_mnpersonalize_domain_model_filter'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:mn_personalize/Resources/Private/Language/locallang_db.xml:tx_mnpersonalize_domain_model_filter',
					'label' => 'filter_property',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Filter.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_mnpersonalize_domain_model_filter.gif'
				),
			);

$tmp_mn_personalize_columns = array(

	'filter' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:mn_personalize/Resources/Private/Language/locallang_db.xml:tx_mnpersonalize_domain_model_personalizefilter.filter',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_mnpersonalize_domain_model_filterproperty',
			'foreign_field' => 'personalizefilter',
			'maxitems'      => 9999,
			'appearance' => array(
				'collapse' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_mn_personalize_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:mn_personalize/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_MnPersonalize_PersonalizeFilter','Tx_MnPersonalize_PersonalizeFilter');

$TCA['tt_content']['types']['Tx_MnPersonalize_PersonalizeFilter']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_MnPersonalize_PersonalizeFilter']['showitem'] .= ',--div--;LLL:EXT:mn_personalize/Resources/Private/Language/locallang_db.xml:tx_mnpersonalize_domain_model_personalizefilter,';
$TCA['tt_content']['types']['Tx_MnPersonalize_PersonalizeFilter']['showitem'] .= 'filter';

?>