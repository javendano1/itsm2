						<?php
//
// File generated by ... on the 2020-09-02T01:29:46-0500
// Please do not edit manually
//

/**
 * Classes and menus for combodo-sla-computation (version 2.2.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
define('COVERAGE_TIME_REGEXP', '^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$|^24:00$');


/**
 * Open hours definition based on a set of "open hours intervals"
 */

require_once('coveragewindow.class.inc.php');
class CoverageWindow extends _CoverageWindow_
{
	public static function Init()
	{
		$aParams = array(			'category' => 'searchable,bizmodel,servicemgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name'),
			'db_table' => 'coverage_windows',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'combodo-sla-computation/images/coverage-window.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("allowed_values"=>null, "sql"=>'name', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("allowed_values"=>null, "sql"=>'description', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("interval_list", array("linked_class"=>'CoverageWindowInterval', "ext_key_to_me"=>'coverage_window_id', "count_min"=>0, "count_max"=>0, "edit_mode"=>LINKSET_EDITMODE_INPLACE, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>LINKSET_TRACKING_ALL)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'description',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'description',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'name',
  1 => 'description',
));
;
	}


}

/**
 * Interval of open hours for a given day of the week
 */
class CoverageWindowInterval extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'searchable,bizmodel,servicemgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('coverage_window_name', 'weekday', 'start_time'),
			'state_attcode' => '',
			'reconc_keys' => array('coverage_window_id', 'weekday', 'start_time'),
			'db_table' => 'coverage_windows_interval',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'combodo-sla-computation/images/coverage-window.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("coverage_window_id", array("targetclass"=>'CoverageWindow', "allowed_values"=>new ValueSetObjects("SELECT CoverageWindow"), "sql"=>'coverage_window_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false, "tracking_level"=>ATTRIBUTE_TRACKING_NONE)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("coverage_window_name", array("allowed_values"=>null, "extkey_attcode"=>'coverage_window_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("weekday", array("allowed_values"=>new ValueSetEnum("monday,tuesday,wednesday,thursday,friday,saturday,sunday"), "display_style"=>'list', "sql"=>'weekday', "default_value"=>'monday', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("start_time", array("allowed_values"=>null, "sql"=>'start_time', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "validation_pattern"=>'^(([01]?[0-9]|2[0-3]):[0-5][0-9])$', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("end_time", array("allowed_values"=>null, "sql"=>'end_time', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "validation_pattern"=>'^(([01]?[0-9]|2[0-3]):[0-5][0-9])|24:00$', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'coverage_window_id',
  1 => 'weekday',
  2 => 'start_time',
  3 => 'end_time',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'coverage_window_id',
  1 => 'weekday',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'coverage_window_id',
  1 => 'weekday',
  2 => 'start_time',
  3 => 'end_time',
));
;
	}


}


class Holiday extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'searchable,bizmodel,servicemgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'date'),
			'db_table' => 'holidays',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'combodo-sla-computation/images/holiday.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("allowed_values"=>null, "sql"=>'name', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeDate("date", array("allowed_values"=>null, "sql"=>'date', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("calendar_id", array("targetclass"=>'HolidayCalendar', "allowed_values"=>new ValueSetObjects("SELECT HolidayCalendar"), "sql"=>'calendar_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_AUTO, "depends_on"=>array(), "display_style"=>'select', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("calendar_name", array("allowed_values"=>null, "extkey_attcode"=>'calendar_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'date',
  2 => 'calendar_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'date',
  2 => 'calendar_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'date',
  1 => 'calendar_id',
));
;
	}


}


class HolidayCalendar extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'searchable,bizmodel,servicemgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name'),
			'db_table' => 'holiday_calendar',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'combodo-sla-computation/images/calendar.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("allowed_values"=>null, "sql"=>'name', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("holiday_list", array("linked_class"=>'Holiday', "ext_key_to_me"=>'calendar_id', "count_min"=>0, "count_max"=>0, "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'holiday_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
));
;
	}


}
//
// Menus
//
class MenuCreation_combodo_sla_computation extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['ServiceManagement'] = new MenuGroup('ServiceManagement', 60 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['CoverageWindows'] = new OQLMenuNode('CoverageWindows', "SELECT CoverageWindow", $__comp_menus__['ServiceManagement']->GetIndex(), 10, true , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['HolidayCalendars'] = new OQLMenuNode('HolidayCalendars', "SELECT HolidayCalendar", $__comp_menus__['ServiceManagement']->GetIndex(), 11, true , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
		$__comp_menus__['Holidays'] = new OQLMenuNode('Holidays', "SELECT Holiday", $__comp_menus__['ServiceManagement']->GetIndex(), 12, true , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
	}
} // class MenuCreation_combodo_sla_computation
