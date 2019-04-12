<?php 
/**
 * Y_App_Edu_Dtl Page Controller
 * @category  Controller
 */
class Y_App_Edu_DtlController extends SecureController{
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
		$fields = array('y_app_edu_dtl.id', 	'z_edu_lvl.z_edu_lvl_Dsc', 	'y_app_edu_dtl.field_of_study', 	'y_app_edu_dtl.name_of_School_Institution', 	'z_duration_yrs.z_duration_yrsDsc', 	'z_country.z_countryname', 	'z_me_spouse.z_me_spouse_desc');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('y_app_edu_dtl.users_user_id',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.created_at',"%$text%",'LIKE');
			$db->orWhere('z_edu_lvl.z_edu_lvl_Dsc',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.field_of_study',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.name_of_School_Institution',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.z_duration_yrs_Id',"%$text%",'LIKE');
			$db->orWhere('z_duration_yrs.z_duration_yrsDsc',"%$text%",'LIKE');
			$db->orWhere('z_country.z_countryname',"%$text%",'LIKE');
			$db->orWhere('z_me_spouse.z_me_spouse_desc',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.z_country_Id',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.updated_at',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.z_edu_lvl_Id',"%$text%",'LIKE');
			$db->orWhere('y_app_edu_dtl.z_me_spouse_id',"%$text%",'LIKE');
			$db->orWhere('users2.user_name',"%$text%",'LIKE');
			$db->orWhere('users2.email',"%$text%",'LIKE');
			$db->orWhere('users2.password',"%$text%",'LIKE');
			$db->orWhere('users2.photo',"%$text%",'LIKE');
			$db->orWhere('users2.user_role',"%$text%",'LIKE');
			$db->orWhere('users2.date_registered',"%$text%",'LIKE');
		}
		$db->join("users2","y_app_edu_dtl.users_user_id = users2.id","INNER");
		$db->join("z_edu_lvl","y_app_edu_dtl.z_edu_lvl_Id = z_edu_lvl.z_edu_lvl_Id","INNER");
		$db->join("z_duration_yrs","y_app_edu_dtl.z_duration_yrs_Id = z_duration_yrs.z_duration_yrs_Id","INNER");
		$db->join("z_country","y_app_edu_dtl.z_country_Id = z_country.z_country_Id","INNER");
		$db->join("z_me_spouse","y_app_edu_dtl.z_me_spouse_id = z_me_spouse.z_me_spouse_id","INNER");
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby, $this->ordertype);
		}
		else{
			$db->orderBy("id","ASC");
		}
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('y_app_edu_dtl', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="Education Background";
		$this->view->render('y_app_edu_dtl/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'y_app_edu_dtl', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'y_app_edu_dtl' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'y_app_edu_dtl/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'z_edu_lvl.z_edu_lvl_Dsc', 	'y_app_edu_dtl.field_of_study', 	'y_app_edu_dtl.name_of_School_Institution', 	'z_duration_yrs.z_duration_yrsDsc', 	'z_country.z_countryname', 	'z_me_spouse.z_me_spouse_desc', 	'y_app_edu_dtl.id' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('y_app_edu_dtl.id' , $rec_id);
		}
		$db->join("users2","y_app_edu_dtl.users_user_id = users2.id","INNER ");
		$db->join("z_edu_lvl","y_app_edu_dtl.z_edu_lvl_Id = z_edu_lvl.z_edu_lvl_Id","INNER ");
		$db->join("z_duration_yrs","y_app_edu_dtl.z_duration_yrs_Id = z_duration_yrs.z_duration_yrs_Id","INNER ");
		$db->join("z_country","y_app_edu_dtl.z_country_Id = z_country.z_country_Id","INNER ");
		$db->join("z_me_spouse","y_app_edu_dtl.z_me_spouse_id = z_me_spouse.z_me_spouse_id","INNER ");  
		$record = $db->getOne( 'y_app_edu_dtl', $fields );
		if(!empty($record)){
			$this->view->page_title ="View Education Background";
			$this->view->render('y_app_edu_dtl/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('y_app_edu_dtl/view.php' , $record , 'main_layout.php');
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
				'z_edu_lvl_Id' => 'required|numeric',
				'field_of_study' => 'required',
				'name_of_School_Institution' => 'required',
				'z_duration_yrs_Id' => 'required|numeric',
				'z_country_Id' => 'required|numeric',
				'z_me_spouse_id' => 'required|numeric',
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
				$rec_id = $db->insert( 'y_app_edu_dtl' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("y_app_edu_dtl");
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
		$this->view->page_title ="Add Education Background";
		$this->view->render('y_app_edu_dtl/add.php' ,null,'main_layout.php');
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
				'z_edu_lvl_Id' => 'required|numeric',
				'field_of_study' => 'required',
				'name_of_School_Institution' => 'required',
				'z_duration_yrs_Id' => 'required|numeric',
				'z_country_Id' => 'required|numeric',
				'z_me_spouse_id' => 'required|numeric',
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
				$db->where('id' , $rec_id);
				$bool = $db->update('y_app_edu_dtl',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("y_app_edu_dtl");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('id','users_user_id','z_edu_lvl_Id','field_of_study','name_of_School_Institution','z_duration_yrs_Id','z_country_Id','z_me_spouse_id');
		$db->where('id' , $rec_id);
		$data = $db->getOne('y_app_edu_dtl',$fields);
		$this->view->page_title ="Edit Education Background";
		if(!empty($data)){
			$this->view->render('y_app_edu_dtl/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('y_app_edu_dtl/edit.php' , $data , 'main_layout.php');
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
			$db->where('id' , $rec_id,"=",'OR');
		}
		$bool = $db->delete( 'y_app_edu_dtl' );
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
		redirect_to_page("y_app_edu_dtl");
	}
}
