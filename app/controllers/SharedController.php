<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * x_documents_z_doctyp_id_option_list Model Action
     * @return array
     */
	function x_documents_z_doctyp_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT id AS value,document_type_desc AS label FROM z_document_types ORDER BY id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_edu_dtl_z_edu_lvl_Id_option_list Model Action
     * @return array
     */
	function y_app_edu_dtl_z_edu_lvl_Id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_edu_lvl_Id AS value,z_edu_lvl_Dsc AS label FROM z_edu_lvl ORDER BY z_edu_lvl_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_edu_dtl_z_duration_yrs_Id_option_list Model Action
     * @return array
     */
	function y_app_edu_dtl_z_duration_yrs_Id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_duration_yrs_Id AS value,z_duration_yrsDsc AS label FROM z_duration_yrs ORDER BY z_duration_yrs_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_edu_dtl_z_country_Id_option_list Model Action
     * @return array
     */
	function y_app_edu_dtl_z_country_Id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_country_Id AS value,z_countryname AS label FROM z_country ORDER BY z_countryname ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_edu_dtl_z_me_spouse_id_option_list Model Action
     * @return array
     */
	function y_app_edu_dtl_z_me_spouse_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_me_spouse_id AS value,z_me_spouse_desc AS label FROM z_me_spouse ORDER BY z_me_spouse_id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_salutation_Id_option_list Model Action
     * @return array
     */
	function y_app_gen_z_salutation_Id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_salutation_Id AS value,z_salutation_desc AS label FROM z_salutation ORDER BY z_salutation_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_MaritalStatus_Id_option_list Model Action
     * @return array
     */
	function y_app_gen_z_MaritalStatus_Id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_MaritalStatus_Id AS value,z_MaritalStatus_Dsc AS label FROM z_maritalstatus ORDER BY z_MaritalStatus_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_yes_no_Id_Qus01_option_list Model Action
     * @return array
     */
	function y_app_gen_z_yes_no_Id_Qus01_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_yes_no_Id AS value,z_yes_no_Desc AS label FROM z_yes_no ORDER BY z_yes_no_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_yes_no_Id_Qus02_option_list Model Action
     * @return array
     */
	function y_app_gen_z_yes_no_Id_Qus02_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_yes_no_Id AS value,z_yes_no_Desc AS label FROM z_yes_no ORDER BY z_yes_no_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_country_Id_CountryofCitizenship_option_list Model Action
     * @return array
     */
	function y_app_gen_z_country_Id_CountryofCitizenship_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_country_Id AS value,z_countryname AS label FROM z_country ORDER BY z_countryname ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_country_Id_CountryofResidence_option_list Model Action
     * @return array
     */
	function y_app_gen_z_country_Id_CountryofResidence_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_country_Id AS value,z_countryname AS label FROM z_country ORDER BY z_countryname ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_hear_Id_Qus3_option_list Model Action
     * @return array
     */
	function y_app_gen_z_hear_Id_Qus3_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_hear_Id AS value,z_hear_Dsc AS label FROM z_hear ORDER BY z_hear_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_do_in_canda_Id_Qus4_option_list Model Action
     * @return array
     */
	function y_app_gen_z_do_in_canda_Id_Qus4_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_do_in_canda_Id AS value,z_do_in_canda_Dsc AS label FROM z_do_in_canda ORDER BY z_do_in_canda_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_yes_no_Id_Qus05_option_list Model Action
     * @return array
     */
	function y_app_gen_z_yes_no_Id_Qus05_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_yes_no_Id AS value,z_yes_no_Desc AS label FROM z_yes_no ORDER BY z_yes_no_Id ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * y_app_gen_z_yes_no_Id_Qus01_option_list_2 Model Action
     * @return array
     */
	function y_app_gen_z_yes_no_Id_Qus01_option_list_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT z_yes_no_Id AS value,z_yes_no_Desc AS label FROM z_yes_no ORDER BY z_yes_no_Id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * x_messages_z_read_unread_id_option_list Model Action
     * @return array
     */
	function x_messages_z_read_unread_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT id AS value,read_unread AS label FROM z_read_unread ORDER BY read_unread ASC";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * getcount_documents Model Action
     * @return Value
     */
	function getcount_documents(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM x_documents Where user_id= ?" ;
		$arr = $db->rawQueryValue($sqltext, array(USER_ID));
		return $arr[0];
	}

	/**
     * getcount_messages Model Action
     * @return Value
     */
	function getcount_messages(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM x_messages Where user_id = ? and z_read_unread_id = 0 " ;
		$arr = $db->rawQueryValue($sqltext, array(USER_ID));
		return $arr[0];
	}

	/**
     * getcount_messages_2 Model Action
     * @return Value
     */
	function getcount_messages_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM x_messages Where user_id = ? and z_read_unread_id = 1 " ;
		$arr = $db->rawQueryValue($sqltext, array(USER_ID));
		return $arr[0];
	}

}
