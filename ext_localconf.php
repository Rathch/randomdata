<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Http\ApplicationType;

call_user_func(static function () {

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['randomdata']['allowedActions'] = ['insert', 'replace'];

});
