<?php 
/**
 * Y_App_Gen Page Controller
 * @category  Controller
 */
class Y_App_GenController extends SecureController{
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function index($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$fields = array('y_app_gen.y_app_gen_Id', 	'z_salutation.z_salutation_desc', 	'y_app_gen.y_app_gen_GivenName', 	'y_app_gen.y_app_gen_FamilyName', 	'y_app_gen.y_app_gen_DOB', 	'z_country.z_country_Id', 	'z_yes_no.z_yes_no_Id', 	'z_yes_nor.z_yes_no_Idr', 	'z_countryr.z_country_Idr', 	'z_hear.z_hear_Id', 	'z_do_in_canda.z_do_in_canda_Id', 	'z_yes_nox.z_yes_no_Idx');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('y_app_gen.y_app_gen_Id',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_salutation_Id',"%$text%",'LIKE');
			$db->orWhere('z_salutation.z_salutation_desc',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_GivenName',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_FamilyName',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_DOB',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_MaritalStatus_Id',"%$text%",'LIKE');
			$db->orWhere('z_maritalstatus.z_MaritalStatus_Dsc',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_yes_no_Id_Qus01',"%$text%",'LIKE');
			$db->orWhere('z_yes_no.z_yes_no_Desc',"%$text%",'LIKE');
			$db->orWhere('z_yes_nor.z_yes_no_Descr',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_yes_no_Id_Qus02',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_country_Id_CountryofCitizenship',"%$text%",'LIKE');
			$db->orWhere('z_countryr.z_countrynamer',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_country_Id_CountryofResidence',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_Address',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_PhoneNo',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_hear_Id_Qus3',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_do_in_canda_Id_Qus4',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_yes_no_Id_Qus05',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.y_app_gen_further_information',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.created_at',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.updated_at',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.users_user_id',"%$text%",'LIKE');
			$db->orWhere('y_app_gen.z_app_sts_id',"%$text%",'LIKE');
			$db->orWhere('z_country.z_country_Id',"%$text%",'LIKE');
			$db->orWhere('z_country.z_countryname',"%$text%",'LIKE');
			$db->orWhere('z_yes_no.z_yes_no_Id',"%$text%",'LIKE');
			$db->orWhere('z_yes_nor.z_yes_no_Idr',"%$text%",'LIKE');
			$db->orWhere('z_countryr.z_country_Idr',"%$text%",'LIKE');
			$db->orWhere('z_hear.z_hear_Id',"%$text%",'LIKE');
			$db->orWhere('z_hear.z_hear_Dsc',"%$text%",'LIKE');
			$db->orWhere('z_do_in_canda.z_do_in_canda_Id',"%$text%",'LIKE');
			$db->orWhere('z_do_in_canda.z_do_in_canda_Dsc',"%$text%",'LIKE');
			$db->orWhere('z_yes_nox.z_yes_no_Idx',"%$text%",'LIKE');
			$db->orWhere('z_yes_nox.z_yes_no_Descx',"%$text%",'LIKE');
		}
		$db->join("z_salutation","y_app_gen.z_salutation_Id = z_salutation.z_salutation_Id","INNER");
		$db->join("z_country","y_app_gen.z_country_Id_CountryofCitizenship = z_country.z_country_Id","INNER");
		$db->join("z_maritalstatus","y_app_gen.z_MaritalStatus_Id = z_maritalstatus.z_MaritalStatus_Id","INNER");
		$db->join("z_yes_no","y_app_gen.z_yes_no_Id_Qus01 = z_yes_no.z_yes_no_Id","INNER");
		$db->join("z_yes_nor","y_app_gen.z_yes_no_Id_Qus02 = z_yes_nor.z_yes_no_Idr","INNER");
		$db->join("z_countryr","y_app_gen.z_country_Id_CountryofResidence = z_countryr.z_country_Idr","INNER");
		$db->join("z_hear","y_app_gen.z_hear_Id_Qus3 = z_hear.z_hear_Id","INNER");
		$db->join("z_do_in_canda","y_app_gen.z_do_in_canda_Id_Qus4 = z_do_in_canda.z_do_in_canda_Id","INNER");
		$db->join("z_yes_nox","y_app_gen.z_yes_no_Id_Qus05 = z_yes_nox.z_yes_no_Idx","INNER");
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('y_app_gen_Id', ORDER_TYPE);
		}
		$db->where("users_user_id='". USER_ID . "'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('y_app_gen', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="My Application";
		$this->view->render('y_app_gen/list.php' , $data ,'main_layout.php');
	}
	/**
     * Load csv|json data
     * @return data
     */
	function import_data(){
		if(!empty($_FILES['file'])){
			$finfo = pathinfo($_FILES['file']['name']);
			$ext = strtolower($finfo['extension']);
			if(!in_array($ext , array('csv','json'))){
				set_flash_msg("File format not supported",'danger');
			}
			else{
			$file_path = $_FILES['file']['tmp_name'];
				if(!empty($file_path)){
					$db = $this->GetModel();
					if($ext == 'csv'){
						$options = array('table' => 'y_app_gen', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'y_app_gen' , false );
					}
					if($db->getLastError()){
						set_flash_msg($db->getLastError(),'danger');
					}
					else{
						set_flash_msg("Data imported successfully",'success');
					}
				}
				else{
					set_flash_msg("Error uploading file",'success');
				}
			}
		}
		else{
			set_flash_msg("No file selected for upload",'warning');
		}
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'y_app_gen/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'y_app_gen.y_app_gen_Id', 	'z_salutation.z_salutation_desc', 	'y_app_gen.y_app_gen_GivenName', 	'y_app_gen.y_app_gen_FamilyName', 	'y_app_gen.y_app_gen_DOB', 	'z_maritalstatus.z_MaritalStatus_Dsc', 	'z_yes_no.z_yes_no_Desc', 	'z_yes_nor.z_yes_no_Descr', 	'z_country.z_countryname', 	'z_countryr.z_countrynamer', 	'y_app_gen.y_app_gen_Address', 	'y_app_gen.y_app_gen_PhoneNo', 	'z_hear.z_hear_Dsc', 	'z_do_in_canda.z_do_in_canda_Dsc', 	'z_yes_nox.z_yes_no_Descx', 	'y_app_gen.y_app_gen_further_information', 	'y_app_gen.created_at', 	'z_country.z_country_Id', 	'z_yes_no.z_yes_no_Id', 	'z_yes_nor.z_yes_no_Idr', 	'z_countryr.z_country_Idr', 	'z_hear.z_hear_Id', 	'z_do_in_canda.z_do_in_canda_Id', 	'z_yes_nox.z_yes_no_Idx' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('y_app_gen.y_app_gen_Id' , $rec_id);
		}
		$db->join("z_salutation","y_app_gen.z_salutation_Id = z_salutation.z_salutation_Id","INNER ");
		$db->join("z_country","y_app_gen.z_country_Id_CountryofCitizenship = z_country.z_country_Id","INNER ");
		$db->join("z_maritalstatus","y_app_gen.z_MaritalStatus_Id = z_maritalstatus.z_MaritalStatus_Id","INNER ");
		$db->join("z_yes_no","y_app_gen.z_yes_no_Id_Qus01 = z_yes_no.z_yes_no_Id","INNER ");
		$db->join("z_yes_nor","y_app_gen.z_yes_no_Id_Qus02 = z_yes_nor.z_yes_no_Idr","INNER ");
		$db->join("z_countryr","y_app_gen.z_country_Id_CountryofResidence = z_countryr.z_country_Idr","INNER ");
		$db->join("z_hear","y_app_gen.z_hear_Id_Qus3 = z_hear.z_hear_Id","INNER ");
		$db->join("z_do_in_canda","y_app_gen.z_do_in_canda_Id_Qus4 = z_do_in_canda.z_do_in_canda_Id","INNER ");
		$db->join("z_yes_nox","y_app_gen.z_yes_no_Id_Qus05 = z_yes_nox.z_yes_no_Idx","INNER ");  
		$record = $db->getOne( 'y_app_gen', $fields );
		if(!empty($record)){
			$this->view->page_title ="View Profile Data";
			$this->view->render('y_app_gen/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('y_app_gen/view.php' , $record , 'main_layout.php');
		}
	}
	/**
     * Add New Record Action 
     * If Not $_POST Request, Display Add Record Form View
     * @return View
     */
	function add(){
		if(is_post_request()){
			$modeldata = transform_request_data($_POST);
			$rules_array = array(
				'z_salutation_Id' => 'required|numeric',
				'y_app_gen_GivenName' => 'required',
				'y_app_gen_FamilyName' => 'required',
				'y_app_gen_DOB' => 'required',
				'z_MaritalStatus_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_yes_no_Id_Qus02' => 'required|numeric',
				'z_country_Id_CountryofCitizenship' => 'required|numeric',
				'z_country_Id_CountryofResidence' => 'required|numeric',
				'y_app_gen_Address' => 'required',
				'y_app_gen_PhoneNo' => 'required',
				'z_hear_Id_Qus3' => 'required|numeric',
				'z_do_in_canda_Id_Qus4' => 'required|numeric',
				'z_yes_no_Id_Qus05' => 'required|numeric',
			);
			$is_valid = GUMP::is_valid($modeldata, $rules_array);
			if( $is_valid !== true) {
				if(is_array($is_valid)){
					foreach($is_valid as  $error_msg){
						$this->view->page_error[] = $error_msg;
					}
				}
				else{
					$this->view->page_error[] = $is_valid;
				}
			}
			$modeldata['users_user_id']=USER_ID;
			if( empty($this->view->page_error) ){
				$db = $this->GetModel();
				$rec_id = $db->insert( 'y_app_gen' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("y_app_gen");
					return;
				}
				else{
					if($db->getLastError()){
						$this->view->page_error[] = $db->getLastError();
					}
					else{
						$this->view->page_error[] = "Error inserting record";
					}
				}
			}
		}
		$this->view->page_title ="Add Profile Data";
		$this->view->render('y_app_gen/add.php' ,null,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit($rec_id=null){
		$db = $this->GetModel();
		if(is_post_request()){
			$modeldata = transform_request_data($_POST);
			$rules_array = array(
				'z_salutation_Id' => 'required|numeric',
				'y_app_gen_GivenName' => 'required',
				'y_app_gen_FamilyName' => 'required',
				'y_app_gen_DOB' => 'required',
				'z_MaritalStatus_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_yes_no_Id_Qus02' => 'required|numeric',
				'z_country_Id_CountryofCitizenship' => 'required|numeric',
				'z_country_Id_CountryofResidence' => 'required|numeric',
				'y_app_gen_Address' => 'required',
				'y_app_gen_PhoneNo' => 'required',
				'z_hear_Id_Qus3' => 'required|numeric',
				'z_do_in_canda_Id_Qus4' => 'required|numeric',
				'z_yes_no_Id_Qus05' => 'required|numeric',
			);
			$is_valid = GUMP::is_valid($modeldata, $rules_array);
			if( $is_valid !== true) {
				if(is_array($is_valid)){
					foreach($is_valid as  $error_msg){
						$this->view->page_error[] = $error_msg;
					}
				}
				else{
					$this->view->page_error[] = $is_valid;
				}
			}
			$modeldata['users_user_id']=USER_ID;
			if(empty($this->view->page_error)){
				$db->where('y_app_gen_Id' , $rec_id);
				$bool = $db->update('y_app_gen',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("y_app_gen");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('y_app_gen_Id','z_salutation_Id','y_app_gen_GivenName','y_app_gen_FamilyName','y_app_gen_DOB','z_MaritalStatus_Id','z_yes_no_Id_Qus01','z_yes_no_Id_Qus02','z_country_Id_CountryofCitizenship','z_country_Id_CountryofResidence','y_app_gen_Address','y_app_gen_PhoneNo','z_hear_Id_Qus3','z_do_in_canda_Id_Qus4','z_yes_no_Id_Qus05','y_app_gen_further_information','users_user_id');
		$db->where('y_app_gen_Id' , $rec_id);
		$data = $db->getOne('y_app_gen',$fields);
		$this->view->page_title ="Edit Profile Data";
		if(!empty($data)){
			$this->view->render('y_app_gen/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('y_app_gen/edit.php' , $data , 'main_layout.php');
		}
	}
	/**
     * Delete Record Action 
     * @return View
     */
	function delete( $rec_ids = null ){
		$db = $this->GetModel();
		$arr_id = explode( ',', $rec_ids );
		foreach( $arr_id as $rec_id ){
			$db->where('y_app_gen_Id' , $rec_id,"=",'OR');
		}
		$bool = $db->delete( 'y_app_gen' );
		if($bool){
			set_flash_msg('','');
		}
		else{
			if($db->getLastError()){
				set_flash_msg($db->getLastError(),'danger');
			}
			else{
				set_flash_msg("Error deleting the record. please make sure that the record exit",'danger');
			}
		}
		redirect_to_page("y_app_gen");
	}
	/**
     * Add New Record Action 
     * If Not $_POST Request, Display Add Record Form View
     * @return View
     */
	function application_wizad_1(){
		if(is_post_request()){
			$modeldata = transform_request_data($_POST);
			$rules_array = array(
				'z_salutation_Id' => 'required|numeric',
				'y_app_gen_GivenName' => 'required',
				'y_app_gen_FamilyName' => 'required',
				'y_app_gen_DOB' => 'required',
				'z_MaritalStatus_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_yes_no_Id_Qus02' => 'required|numeric',
				'z_country_Id_CountryofCitizenship' => 'required|numeric',
				'z_country_Id_CountryofResidence' => 'required|numeric',
				'y_app_gen_Address' => 'required',
				'y_app_gen_PhoneNo' => 'required',
				'z_hear_Id_Qus3' => 'required|numeric',
				'z_do_in_canda_Id_Qus4' => 'required|numeric',
				'z_yes_no_Id_Qus05' => 'required|numeric',
				'y_app_gen_further_information' => 'required',
				'created_at' => 'required',
				'updated_at' => 'required',
				'users_user_id' => 'required|numeric',
				'z_app_sts_id' => 'required|numeric',
			);
			$is_valid = GUMP::is_valid($modeldata, $rules_array);
			if( $is_valid !== true) {
				if(is_array($is_valid)){
					foreach($is_valid as  $error_msg){
						$this->view->page_error[] = $error_msg;
					}
				}
				else{
					$this->view->page_error[] = $is_valid;
				}
			}
			if( empty($this->view->page_error) ){
				$db = $this->GetModel();
				$rec_id = $db->insert( 'y_app_gen' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("y_app_gen");
					return;
				}
				else{
					if($db->getLastError()){
						$this->view->page_error[] = $db->getLastError();
					}
					else{
						$this->view->page_error[] = "Error inserting record";
					}
				}
			}
		}
		$this->view->page_title ="Add New Y App Gen";
		$this->view->render('y_app_gen/application_wizad_1.php' ,null,'main_layout.php');
	}
	/**
     * Edit Record Action 
     * If Not $_POST Request, Display Edit Record Form View
     * @return View
     */
	function edit_page_step($rec_id=null){
		$db = $this->GetModel();
		if(is_post_request()){
			$modeldata = transform_request_data($_POST);
			$rules_array = array(
				'z_salutation_Id' => 'required|numeric',
				'y_app_gen_GivenName' => 'required',
				'y_app_gen_FamilyName' => 'required',
				'y_app_gen_DOB' => 'required',
				'z_MaritalStatus_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_yes_no_Id_Qus02' => 'required|numeric',
				'z_country_Id_CountryofCitizenship' => 'required|numeric',
				'z_country_Id_CountryofResidence' => 'required|numeric',
				'y_app_gen_Address' => 'required',
				'y_app_gen_PhoneNo' => 'required',
				'z_hear_Id_Qus3' => 'required|numeric',
				'z_do_in_canda_Id_Qus4' => 'required|numeric',
				'z_yes_no_Id_Qus05' => 'required|numeric',
				'y_app_gen_further_information' => 'required',
			);
			$is_valid = GUMP::is_valid($modeldata, $rules_array);
			if( $is_valid !== true) {
				if(is_array($is_valid)){
					foreach($is_valid as  $error_msg){
						$this->view->page_error[] = $error_msg;
					}
				}
				else{
					$this->view->page_error[] = $is_valid;
				}
			}
			$modeldata['users_user_id']=USER_ID;
			if(empty($this->view->page_error)){
				$db->where('y_app_gen_Id' , $rec_id);
				$bool = $db->update('y_app_gen',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("y_app_gen");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('y_app_gen_Id','z_salutation_Id','y_app_gen_GivenName','y_app_gen_FamilyName','y_app_gen_DOB','z_MaritalStatus_Id','z_yes_no_Id_Qus01','z_yes_no_Id_Qus02','z_country_Id_CountryofCitizenship','z_country_Id_CountryofResidence','y_app_gen_Address','y_app_gen_PhoneNo','z_hear_Id_Qus3','z_do_in_canda_Id_Qus4','z_yes_no_Id_Qus05','y_app_gen_further_information','users_user_id');
		$db->where('y_app_gen_Id' , $rec_id);
		$data = $db->getOne('y_app_gen',$fields);
		$this->view->page_title ="Edit  Y App Gen";
		if(!empty($data)){
			$this->view->render('y_app_gen/edit_page_step.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('y_app_gen/edit_page_step.php' , $data , 'main_layout.php');
		}
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function list_page_step($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$fields = array('y_app_gen_Id', 	'y_app_gen_GivenName', 	'y_app_gen_FamilyName', 	'y_app_gen_DOB', 	'created_at');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('y_app_gen_Id',"%$text%",'LIKE');
			$db->orWhere('z_salutation_Id',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_GivenName',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_FamilyName',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_DOB',"%$text%",'LIKE');
			$db->orWhere('z_MaritalStatus_Id',"%$text%",'LIKE');
			$db->orWhere('z_yes_no_Id_Qus01',"%$text%",'LIKE');
			$db->orWhere('z_yes_no_Id_Qus02',"%$text%",'LIKE');
			$db->orWhere('z_country_Id_CountryofCitizenship',"%$text%",'LIKE');
			$db->orWhere('z_country_Id_CountryofResidence',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_Address',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_PhoneNo',"%$text%",'LIKE');
			$db->orWhere('z_hear_Id_Qus3',"%$text%",'LIKE');
			$db->orWhere('z_do_in_canda_Id_Qus4',"%$text%",'LIKE');
			$db->orWhere('z_yes_no_Id_Qus05',"%$text%",'LIKE');
			$db->orWhere('y_app_gen_further_information',"%$text%",'LIKE');
			$db->orWhere('created_at',"%$text%",'LIKE');
			$db->orWhere('updated_at',"%$text%",'LIKE');
			$db->orWhere('users_user_id',"%$text%",'LIKE');
			$db->orWhere('z_app_sts_id',"%$text%",'LIKE');
		}
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('y_app_gen_Id', ORDER_TYPE);
		}
		$db->where("user_id='". USER_ID . "'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('y_app_gen', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="Y App Gen";
		$this->view->render('y_app_gen/list_page_step.php' , $data ,'main_layout.php');
	}
}
