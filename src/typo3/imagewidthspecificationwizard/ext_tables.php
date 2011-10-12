<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE == 'BE')	{
	include_once(t3lib_extMgm::extPath('imagewidthspecificationwizard').'class.tx_imagewidthspecificationwizard_wizard.php');
}

// Create wizard configuration
$wizardConfig = array(
	'type' => 'userFunc',
	'userFunc' => 'EXT:imagewidthspecificationwizard/class.tx_imagewidthspecificationwizard_wizard.php:tx_imagewidthspecificationwizard_wizard->main',
);

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['columns']['imagewidth']['config']['wizards']['tx_imagewidthspecificationwizard_widthselection']= $wizardConfig;
?>