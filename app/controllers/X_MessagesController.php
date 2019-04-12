<?php 
/**
 * X_Messages Page Controller
 * @category  Controller
 */
class X_MessagesController extends SecureController{
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
		$fields = array('x_messages.id', 	'x_messages.message_subject', 	'x_messages.message_body', 	'x_messages.message_sent_date', 	'users2.user_name', 	'z_read_unread.read_unread');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('x_messages.id',"%$text%",'LIKE');
			$db->orWhere('x_messages.user_id',"%$text%",'LIKE');
			$db->orWhere('x_messages.message_subject',"%$text%",'LIKE');
			$db->orWhere('x_messages.message_body',"%$text%",'LIKE');
			$db->orWhere('x_messages.message_sent_date',"%$text%",'LIKE');
			$db->orWhere('x_messages.read_flag',"%$text%",'LIKE');
			$db->orWhere('x_messages.message_read_date',"%$text%",'LIKE');
			$db->orWhere('x_messages.message_from_user_id',"%$text%",'LIKE');
			$db->orWhere('users2.user_name',"%$text%",'LIKE');
			$db->orWhere('users2.email',"%$text%",'LIKE');
			$db->orWhere('users2.password',"%$text%",'LIKE');
			$db->orWhere('users2.photo',"%$text%",'LIKE');
			$db->orWhere('users2.user_role',"%$text%",'LIKE');
			$db->orWhere('users2.date_registered',"%$text%",'LIKE');
			$db->orWhere('x_messages.z_read_unread_id',"%$text%",'LIKE');
			$db->orWhere('z_read_unread.read_unread',"%$text%",'LIKE');
		}
		$db->join("users2","x_messages.message_from_user_id = users2.id","INNER");
		$db->join("z_read_unread","x_messages.read_flag = z_read_unread.id","INNER");
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
		$records = $db->get('x_messages', $limit, $fields);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['message_body'] = str_truncate($record['message_body'],20,'...');
$record['message_sent_date'] = human_date($record['message_sent_date']);
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="X Messages";
		$this->view->render('x_messages/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'x_messages', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'x_messages' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'x_messages/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'x_messages.id', 	'x_messages.message_subject', 	'x_messages.message_body', 	'x_messages.message_sent_date', 	'x_messages.message_read_date', 	'users2.user_name', 	'z_read_unread.read_unread' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('x_messages.id' , $rec_id)->orWhere('x_messages.read_flag' , $rec_id);
		}
		$db->join("users2","x_messages.message_from_user_id = users2.id","INNER ");
		$db->join("z_read_unread","x_messages.read_flag = z_read_unread.id","INNER ");  
		$record = $db->getOne( 'x_messages', $fields );
		if(!empty($record)){
			$record['message_sent_date'] = human_date($record['message_sent_date']);
			$this->view->page_title ="View  Messages";
			$this->view->render('x_messages/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('x_messages/view.php' , $record , 'main_layout.php');
		}
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
				'z_read_unread_id' => 'required|numeric',
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
				$db->where('id' , $rec_id)->orWhere('read_flag' , $rec_id);
				$bool = $db->update('x_messages',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("x_messages");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('id','message_subject','message_body','message_sent_date','z_read_unread_id');
		$db->where('id' , $rec_id)->orWhere('read_flag' , $rec_id);
		$data = $db->getOne('x_messages',$fields);
		$this->view->page_title ="Messages";
		if(!empty($data)){
			$this->view->render('x_messages/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('x_messages/edit.php' , $data , 'main_layout.php');
		}
	}
}
