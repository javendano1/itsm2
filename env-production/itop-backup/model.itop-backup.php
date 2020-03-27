						<?php
//
// File generated by ... on the 2020-03-27T19:30:51+0000
// Please do not edit manually
//

/**
 * Classes and menus for itop-backup (version 2.6.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_itop_backup extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['AdminTools'] = new MenuGroup('AdminTools', 80 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		if (UserRights::IsAdministrator())
		{
			$__comp_menus__['BackupStatus'] = new WebPageMenuNode('BackupStatus', utils::GetAbsoluteUrlModulePage('itop-backup', "status.php"), $__comp_menus__['AdminTools']->GetIndex(), 15 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		}
	}
} // class MenuCreation_itop_backup
