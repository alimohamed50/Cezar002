<?php 
/**
 * Y_App_Mans Page Controller
 * @category  Controller
 */
class Y_App_MansController extends SecureController{
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
		$fields = array('y_app_mans.id', 	'users2.user_name', 	'z_app_sts.z_app_sts_Dsc', 	'y_app_mans.y_app_mans_submitted_date', 	'z_immigration_program.z_immigration_program_Name', 	'z_app_sts.z_app_sts_Id', 	'z_immigration_program.z_immigration_program_Id');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('y_app_mans.id',"%$text%",'LIKE');
			$db->orWhere('users2.user_name',"%$text%",'LIKE');
			$db->orWhere('z_app_sts.z_app_sts_Dsc',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_created_date',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_submitted_date',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Name',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.z_immigration_program_id',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.z_app_sts_id',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_notes',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.user_user_id_client',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.user_user_id_consult',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_notes_consultant',"%$text%",'LIKE');
			$db->orWhere('users2.email',"%$text%",'LIKE');
			$db->orWhere('users2.password',"%$text%",'LIKE');
			$db->orWhere('users2.photo',"%$text%",'LIKE');
			$db->orWhere('users2.user_role',"%$text%",'LIKE');
			$db->orWhere('users2.date_registered',"%$text%",'LIKE');
			$db->orWhere('z_app_sts.z_app_sts_Id',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Id',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Sel',"%$text%",'LIKE');
		}
		$db->join("users2","y_app_mans.user_user_id_client = users2.id","INNER");
		$db->join("z_app_sts","y_app_mans.z_app_sts_id = z_app_sts.z_app_sts_Id","INNER");
		$db->join("z_immigration_program","y_app_mans.z_immigration_program_id = z_immigration_program.z_immigration_program_Id","INNER");
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('id', ORDER_TYPE);
		}
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('y_app_mans', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="Y App Mans";
		$this->view->render('y_app_mans/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'y_app_mans', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'y_app_mans' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'y_app_mans/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'y_app_mans.y_app_mans_submitted_date', 	'y_app_mans.z_immigration_program_id', 	'y_app_mans.z_app_sts_id', 	'y_app_mans.y_app_mans_notes', 	'y_app_mans.id', 	'y_app_mans.user_user_id_client', 	'y_app_mans.user_user_id_consult', 	'y_app_mans.y_app_mans_created_date', 	'y_app_mans.y_app_mans_notes_consultant', 	'users2.id AS users2_id', 	'users2.user_name', 	'users2.email', 	'users2.password', 	'users2.photo', 	'users2.user_role', 	'users2.date_registered', 	'z_app_sts.z_app_sts_Id', 	'z_app_sts.z_app_sts_Dsc', 	'z_immigration_program.z_immigration_program_Id', 	'z_immigration_program.z_immigration_program_Name', 	'z_immigration_program.z_immigration_program_Sel' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('y_app_mans.id' , $rec_id);
		}
		$db->join("users2","y_app_mans.user_user_id_client = users2.id","INNER ");
		$db->join("z_app_sts","y_app_mans.z_app_sts_id = z_app_sts.z_app_sts_Id","INNER ");
		$db->join("z_immigration_program","y_app_mans.z_immigration_program_id = z_immigration_program.z_immigration_program_Id","INNER ");  
		$record = $db->getOne( 'y_app_mans', $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Y App Mans";
			$this->view->render('y_app_mans/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('y_app_mans/view.php' , $record , 'main_layout.php');
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
				'y_app_mans_submitted_date' => 'required',
				'z_immigration_program_id' => 'required|numeric',
				'z_app_sts_id' => 'required|numeric',
				'y_app_mans_notes' => 'required',
				'user_user_id_client' => 'required|numeric',
				'user_user_id_consult' => 'required|numeric',
				'y_app_mans_notes_consultant' => 'required',
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
				$rec_id = $db->insert( 'y_app_mans' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("y_app_mans");
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
		$this->view->page_title ="Add New Y App Mans";
		$this->view->render('y_app_mans/add.php' ,null,'main_layout.php');
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
				'y_app_mans_submitted_date' => 'required',
				'z_immigration_program_id' => 'required|numeric',
				'z_app_sts_id' => 'required|numeric',
				'y_app_mans_notes' => 'required',
				'user_user_id_client' => 'required|numeric',
				'user_user_id_consult' => 'required|numeric',
				'y_app_mans_notes_consultant' => 'required',
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
			if(empty($this->view->page_error)){
				$db->where('id' , $rec_id);
				$bool = $db->update('y_app_mans',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("y_app_mans");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('y_app_mans_submitted_date','z_immigration_program_id','z_app_sts_id','y_app_mans_notes','user_user_id_client','user_user_id_consult','y_app_mans_notes_consultant');
		$db->where('id' , $rec_id);
		$data = $db->getOne('y_app_mans',$fields);
		$this->view->page_title ="Edit  Y App Mans";
		if(!empty($data)){
			$this->view->render('y_app_mans/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('y_app_mans/edit.php' , $data , 'main_layout.php');
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
		$bool = $db->delete( 'y_app_mans' );
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
		redirect_to_page("y_app_mans");
	}
	/**
     * Load Record Action 
     * $arg1 Field Name
     * $arg2 Field Value 
     * $param $arg1 string
     * $param $arg1 string
     * @return View
     */
	function list_page_01($fieldname = null , $fieldvalue = null){
		$db = $this->GetModel();
		$fields = array('y_app_mans.id', 	'users2.user_name', 	'z_app_sts.z_app_sts_Dsc', 	'y_app_mans.y_app_mans_submitted_date', 	'z_immigration_program.z_immigration_program_Name', 	'z_app_sts.z_app_sts_Id', 	'z_immigration_program.z_immigration_program_Id');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('y_app_mans.id',"%$text%",'LIKE');
			$db->orWhere('users2.user_name',"%$text%",'LIKE');
			$db->orWhere('z_app_sts.z_app_sts_Dsc',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_created_date',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_submitted_date',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Name',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.z_immigration_program_id',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.z_app_sts_id',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_notes',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.user_user_id_client',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.user_user_id_consult',"%$text%",'LIKE');
			$db->orWhere('y_app_mans.y_app_mans_notes_consultant',"%$text%",'LIKE');
			$db->orWhere('users2.email',"%$text%",'LIKE');
			$db->orWhere('users2.password',"%$text%",'LIKE');
			$db->orWhere('users2.photo',"%$text%",'LIKE');
			$db->orWhere('users2.user_role',"%$text%",'LIKE');
			$db->orWhere('users2.date_registered',"%$text%",'LIKE');
			$db->orWhere('z_app_sts.z_app_sts_Id',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Id',"%$text%",'LIKE');
			$db->orWhere('z_immigration_program.z_immigration_program_Sel',"%$text%",'LIKE');
		}
		$db->join("users2","y_app_mans.user_user_id_client = users2.id","INNER");
		$db->join("z_app_sts","y_app_mans.z_app_sts_id = z_app_sts.z_app_sts_Id","INNER");
		$db->join("z_immigration_program","y_app_mans.z_immigration_program_id = z_immigration_program.z_immigration_program_Id","INNER");
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('id', ORDER_TYPE);
		}
		$db->where("user_user_id_client='". USER_ID . "'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('y_app_mans', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="My Applications";
		$this->view->render('y_app_mans/list_page_01.php' , $data ,'main_layout.php');
	}
}
