<?php 
/**
 * X_Documents Page Controller
 * @category  Controller
 */
class X_DocumentsController extends SecureController{
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
		$fields = array('z_document_types.document_type_desc', 	'x_documents.doc_name', 	'x_documents.user_send_date', 	'z_document_status.document_status_desc', 	'x_documents.doc_image', 	'x_documents.id');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('z_document_types.document_type_desc',"%$text%",'LIKE');
			$db->orWhere('x_documents.doc_name',"%$text%",'LIKE');
			$db->orWhere('x_documents.user_send_date',"%$text%",'LIKE');
			$db->orWhere('z_document_status.document_status_desc',"%$text%",'LIKE');
			$db->orWhere('x_documents.doc_image',"%$text%",'LIKE');
			$db->orWhere('x_documents.id',"%$text%",'LIKE');
			$db->orWhere('x_documents.user_id',"%$text%",'LIKE');
			$db->orWhere('x_documents.z_doctyp_id',"%$text%",'LIKE');
			$db->orWhere('x_documents.z_doc_sts',"%$text%",'LIKE');
			$db->orWhere('x_documents.user_notes',"%$text%",'LIKE');
			$db->orWhere('x_documents.staff_review_user_id',"%$text%",'LIKE');
			$db->orWhere('x_documents.staff_notes',"%$text%",'LIKE');
			$db->orWhere('x_documents.staff_review_date',"%$text%",'LIKE');
			$db->orWhere('x_documents.doc_deleted',"%$text%",'LIKE');
			$db->orWhere('x_documents.doc_extention',"%$text%",'LIKE');
			$db->orWhere('x_documents.doc_file',"%$text%",'LIKE');
		}
		$db->join("z_document_types","x_documents.z_doctyp_id = z_document_types.id","INNER");
		$db->join("z_document_status","x_documents.z_doc_sts = z_document_status.id","INNER");
		if(!empty($this->orderby)){ // when order by request fields (from $_GET param)
			$db->orderBy($this->orderby,$this->ordertype);
		}
		else{
			$db->orderBy('id', ORDER_TYPE);
		}
		$db->where("user_id='". USER_ID . "'");
		if( !empty($fieldname) ){
			$db->where($fieldname , $fieldvalue);
		}
		//page filter command
		$tc = $db->withTotalCount();
		$records = $db->get('x_documents', $limit, $fields);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['user_send_date'] = human_date($record['user_send_date']);
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="X Documents";
		$this->view->render('x_documents/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'x_documents', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'x_documents' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'x_documents/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'z_document_types.document_type_desc', 	'z_document_status.document_status_desc', 	'x_documents.doc_name', 	'x_documents.user_notes', 	'x_documents.staff_notes', 	'x_documents.user_send_date', 	'x_documents.staff_review_date', 	'x_documents.doc_image', 	'x_documents.id' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('x_documents.id' , $rec_id);
		}
		$db->join("z_document_types","x_documents.z_doctyp_id = z_document_types.id","INNER ");
		$db->join("z_document_status","x_documents.z_doc_sts = z_document_status.id","INNER ");  
		$record = $db->getOne( 'x_documents', $fields );
		if(!empty($record)){
			$record['user_send_date'] = human_date($record['user_send_date']);
$record['staff_review_date'] = human_date($record['staff_review_date']);
			$this->view->page_title ="View  X Documents";
			$this->view->render('x_documents/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('x_documents/view.php' , $record , 'main_layout.php');
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
				'z_doctyp_id' => 'required|numeric',
				'doc_name' => 'required',
				'user_notes' => 'required',
				'doc_image' => 'required',
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
			$modeldata['user_id']=USER_ID;
			if( empty($this->view->page_error) ){
				$db = $this->GetModel();
				$rec_id = $db->insert( 'x_documents' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("x_documents");
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
		$this->view->page_title ="Add Documents";
		$this->view->render('x_documents/add.php' ,null,'main_layout.php');
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
				'z_doctyp_id' => 'required|numeric',
				'doc_name' => 'required',
				'user_notes' => 'required',
				'doc_image' => 'required',
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
			$modeldata['user_id']=USER_ID;
			if(empty($this->view->page_error)){
				$db->where('id' , $rec_id);
				$bool = $db->update('x_documents',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("x_documents");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('z_doctyp_id','doc_name','user_notes','doc_image','id','user_id');
		$db->where('id' , $rec_id);
		$data = $db->getOne('x_documents',$fields);
		$this->view->page_title ="Edit  X Documents";
		if(!empty($data)){
			$this->view->render('x_documents/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('x_documents/edit.php' , $data , 'main_layout.php');
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
		$bool = $db->delete( 'x_documents' );
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
		redirect_to_page("x_documents");
	}
}
