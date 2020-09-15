						<?php
//
// File generated by ... on the 2020-09-02T06:30:07+0000
// Please do not edit manually
//

/**
 * Classes and menus for dvr-add-class (version 1.0.0)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class Dvr extends PhysicalDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'dvr',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'icon' => utils::GetAbsoluteUrlModulesRoot().'dvr-add-class/images/dvr.png',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("hard_disc", array("allowed_values"=>null, "sql"=>'hard_disc', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("channel_number", array("allowed_values"=>null, "sql"=>'channel_number', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("active_channels", array("allowed_values"=>null, "sql"=>'active_channels', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'hard_disc',
  8 => 'channel_number',
  9 => 'active_channels',
  10 => 'serialnumber',
  11 => 'asset_number',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
  15 => 'platform_date',
  16 => 'last_maintenance',
  17 => 'next_maintenance',
  18 => 'description',
  19 => 'contacts_list',
  20 => 'documents_list',
  21 => 'tickets_list',
  22 => 'providercontracts_list',
  23 => 'services_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'serialnumber',
  8 => 'asset_number',
  9 => 'move2production',
  10 => 'purchase_date',
  11 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));
;
	}


}