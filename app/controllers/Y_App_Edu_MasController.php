<?php 
/**
 * Y_App_Edu_Mas Page Controller
 * @category  Controller
 */
class Y_App_Edu_MasController extends SecureController{
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
		$fields = array('id', 	'users_user_id', 	'z_Language_Spoken_Id', 	'created_at', 	'updated_at', 	'z_yes_no_Id_Qus01', 	'z_language_test_Id', 	'exam_results_date', 	'z_language_score_Id_speak', 	'z_language_score_Id_Listening', 	'z_language_score_Id_Reading', 	'z_language_score_Id_Writing', 	'z_yes_no_id_other_lang_result', 	'other_lang_result_date');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('id',"%$text%",'LIKE');
			$db->orWhere('users_user_id',"%$text%",'LIKE');
			$db->orWhere('z_Language_Spoken_Id',"%$text%",'LIKE');
			$db->orWhere('created_at',"%$text%",'LIKE');
			$db->orWhere('updated_at',"%$text%",'LIKE');
			$db->orWhere('z_yes_no_Id_Qus01',"%$text%",'LIKE');
			$db->orWhere('z_language_test_Id',"%$text%",'LIKE');
			$db->orWhere('exam_results_date',"%$text%",'LIKE');
			$db->orWhere('z_language_score_Id_speak',"%$text%",'LIKE');
			$db->orWhere('z_language_score_Id_Listening',"%$text%",'LIKE');
			$db->orWhere('z_language_score_Id_Reading',"%$text%",'LIKE');
			$db->orWhere('z_language_score_Id_Writing',"%$text%",'LIKE');
			$db->orWhere('z_yes_no_id_other_lang_result',"%$text%",'LIKE');
			$db->orWhere('other_lang_result_date',"%$text%",'LIKE');
		}
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
		$records = $db->get('y_app_edu_mas', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="Y App Edu Mas";
		$this->view->render('y_app_edu_mas/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'y_app_edu_mas', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'y_app_edu_mas' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'y_app_edu_mas/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'id', 	'users_user_id', 	'z_Language_Spoken_Id', 	'created_at', 	'updated_at', 	'z_yes_no_Id_Qus01', 	'z_language_test_Id', 	'exam_results_date', 	'z_language_score_Id_speak', 	'z_language_score_Id_Listening', 	'z_language_score_Id_Reading', 	'z_language_score_Id_Writing', 	'z_yes_no_id_other_lang_result', 	'other_lang_result_date' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('id' , $rec_id);
		}
		$record = $db->getOne( 'y_app_edu_mas', $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Y App Edu Mas";
			$this->view->render('y_app_edu_mas/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('y_app_edu_mas/view.php' , $record , 'main_layout.php');
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
				'users_user_id' => 'required|numeric',
				'z_Language_Spoken_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_language_test_Id' => 'required|numeric',
				'exam_results_date' => 'required',
				'z_language_score_Id_speak' => 'required|numeric',
				'z_language_score_Id_Listening' => 'required|numeric',
				'z_language_score_Id_Reading' => 'required|numeric',
				'z_language_score_Id_Writing' => 'required|numeric',
				'z_yes_no_id_other_lang_result' => 'required|numeric',
				'other_lang_result_date' => 'required',
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
				$rec_id = $db->insert( 'y_app_edu_mas' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("y_app_edu_mas");
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
		$this->view->page_title ="Add New Y App Edu Mas";
		$this->view->render('y_app_edu_mas/add.php' ,null,'main_layout.php');
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
				'users_user_id' => 'required|numeric',
				'z_Language_Spoken_Id' => 'required|numeric',
				'z_yes_no_Id_Qus01' => 'required|numeric',
				'z_language_test_Id' => 'required|numeric',
				'exam_results_date' => 'required',
				'z_language_score_Id_speak' => 'required|numeric',
				'z_language_score_Id_Listening' => 'required|numeric',
				'z_language_score_Id_Reading' => 'required|numeric',
				'z_language_score_Id_Writing' => 'required|numeric',
				'z_yes_no_id_other_lang_result' => 'required|numeric',
				'other_lang_result_date' => 'required',
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
				$bool = $db->update('y_app_edu_mas',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("y_app_edu_mas");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('id','users_user_id','z_Language_Spoken_Id','z_yes_no_Id_Qus01','z_language_test_Id','exam_results_date','z_language_score_Id_speak','z_language_score_Id_Listening','z_language_score_Id_Reading','z_language_score_Id_Writing','z_yes_no_id_other_lang_result','other_lang_result_date');
		$db->where('id' , $rec_id);
		$data = $db->getOne('y_app_edu_mas',$fields);
		$this->view->page_title ="Edit  Y App Edu Mas";
		if(!empty($data)){
			$this->view->render('y_app_edu_mas/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('y_app_edu_mas/edit.php' , $data , 'main_layout.php');
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
		$bool = $db->delete( 'y_app_edu_mas' );
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
		redirect_to_page("y_app_edu_mas");
	}
}
