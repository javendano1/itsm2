						<?php
//
// File generated by ... on the 2020-03-10T21:10:52+0000
// Please do not edit manually
//

/**
 * Classes and menus for itop-welcome-itil (version 2.6.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/* Resource access control abstraction. Can be herited by abstract resource access control classes. Generaly controlled using UR_ACTION_MODIFY access right. */
abstract class AbstractResource extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => '',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => 'finalclass',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}

/* AdminTools menu access control. */
abstract class ResourceAdminMenu extends AbstractResource
{
	public static function Init()
	{
		$aParams = array(			'category' => 'grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}

/* RunQueriesMenu menu access control. */
abstract class ResourceRunQueriesMenu extends AbstractResource
{
	public static function Init()
	{
		$aParams = array(			'category' => 'grant_by_profile',
			'key_type' => 'autoincrement',
			'name_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array(),
			'db_table' => '',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();



;
	}


}
//
// Menus
//
class MenuCreation_itop_welcome_itil extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['WelcomeMenu'] = new MenuGroup('WelcomeMenu', 10 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['WelcomeMenuPage'] = new DashboardMenuNode('WelcomeMenuPage', dirname(__FILE__).'/welcomemenupage_dashboard.xml', $__comp_menus__['WelcomeMenu']->GetIndex(), 10 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['MyShortcuts'] = new ShortcutContainerMenuNode('MyShortcuts', $__comp_menus__['WelcomeMenu']->GetIndex(), 20 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['AdminTools'] = new MenuGroup('AdminTools', 80 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UserAccountsMenu'] = new OQLMenuNode('UserAccountsMenu', "SELECT User", $__comp_menus__['AdminTools']->GetIndex(), 1, true , 'User', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['ProfilesMenu'] = new OQLMenuNode('ProfilesMenu', "SELECT URP_Profiles", $__comp_menus__['AdminTools']->GetIndex(), 2, true , 'URP_Profiles', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['NotificationsMenu'] = new WebPageMenuNode('NotificationsMenu', utils::GetAbsoluteUrlAppRoot()."pages/notifications.php", $__comp_menus__['AdminTools']->GetIndex(), 3 , 'Trigger', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['AuditCategories'] = new OQLMenuNode('AuditCategories', "SELECT AuditCategory", $__comp_menus__['AdminTools']->GetIndex(), 4, true , 'AuditCategory', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['RunQueriesMenu'] = new WebPageMenuNode('RunQueriesMenu', utils::GetAbsoluteUrlAppRoot()."pages/run_query.php", $__comp_menus__['AdminTools']->GetIndex(), 8 , 'ResourceRunQueriesMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['QueryMenu'] = new OQLMenuNode('QueryMenu', "SELECT Query", $__comp_menus__['AdminTools']->GetIndex(), 8.5, true , 'Query', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['ExportMenu'] = new WebPageMenuNode('ExportMenu', utils::GetAbsoluteUrlAppRoot()."webservices/export-v2.php?interactive=1", $__comp_menus__['AdminTools']->GetIndex(), 9 , 'ResourceAdminMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['DataModelMenu'] = new WebPageMenuNode('DataModelMenu', utils::GetAbsoluteUrlAppRoot()."pages/schema.php", $__comp_menus__['AdminTools']->GetIndex(), 10 , 'ResourceRunQueriesMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['UniversalSearchMenu'] = new WebPageMenuNode('UniversalSearchMenu', utils::GetAbsoluteUrlAppRoot()."pages/UniversalSearch.php", $__comp_menus__['AdminTools']->GetIndex(), 11 , 'ResourceAdminMenu', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['DataSources'] = new OQLMenuNode('DataSources', "SELECT SynchroDataSource", $__comp_menus__['AdminTools']->GetIndex(), 12, true , 'SynchroDataSource', UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
	}
} // class MenuCreation_itop_welcome_itil
