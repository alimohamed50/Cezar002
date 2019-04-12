<?php 
/**
 * Users Page Controller
 * @category  Controller
 */
class UsersController extends SecureController{
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
		$fields = array('id', 	'email', 	'password', 	'permissions', 	'last_login', 	'last_name', 	'created_at', 	'updated_at', 	'deleted_at', 	'bio', 	'gender', 	'dob', 	'pic', 	'country', 	'user_state', 	'city', 	'address', 	'postal', 	'provider', 	'provider_id', 	'full_name');
		$limit = $this->get_page_limit(MAX_RECORD_COUNT); // return pagination from BaseModel Class e.g array(5,20)
		if(!empty($this->search)){
			$text = $this->search;
			$db->orWhere('id',"%$text%",'LIKE');
			$db->orWhere('email',"%$text%",'LIKE');
			$db->orWhere('password',"%$text%",'LIKE');
			$db->orWhere('permissions',"%$text%",'LIKE');
			$db->orWhere('last_login',"%$text%",'LIKE');
			$db->orWhere('first_name',"%$text%",'LIKE');
			$db->orWhere('last_name',"%$text%",'LIKE');
			$db->orWhere('created_at',"%$text%",'LIKE');
			$db->orWhere('updated_at',"%$text%",'LIKE');
			$db->orWhere('deleted_at',"%$text%",'LIKE');
			$db->orWhere('bio',"%$text%",'LIKE');
			$db->orWhere('gender',"%$text%",'LIKE');
			$db->orWhere('dob',"%$text%",'LIKE');
			$db->orWhere('pic',"%$text%",'LIKE');
			$db->orWhere('country',"%$text%",'LIKE');
			$db->orWhere('user_state',"%$text%",'LIKE');
			$db->orWhere('city',"%$text%",'LIKE');
			$db->orWhere('address',"%$text%",'LIKE');
			$db->orWhere('postal',"%$text%",'LIKE');
			$db->orWhere('provider',"%$text%",'LIKE');
			$db->orWhere('provider_id',"%$text%",'LIKE');
			$db->orWhere('full_name',"%$text%",'LIKE');
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
		$records = $db->get('users', $limit, $fields);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = count($records);
		$data->total_records = intval($tc->totalCount);
		if($db->getLastError()){
			$this->view->page_error = $db->getLastError();
		}
		$this->view->page_title ="Users";
		$this->view->render('users/list.php' , $data ,'main_layout.php');
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
						$options = array('table' => 'users', 'fields' => '', 'delimiter' => ',', 'quote' => '"');
						$data = $db->loadCsvData( $file_path , $options , false );
					}
					else{
						$data = $db->loadJsonData( $file_path, 'users' , false );
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
		$list_page = (!empty($_POST['redirect']) ? $_POST['redirect'] : 'users/list');
		redirect_to_page($list_page);
	}
	/**
     * View Record Action 
     * @return View
     */
	function view( $rec_id = null , $value = null){
		$db = $this->GetModel();
		$fields = array( 'id', 	'email', 	'password', 	'permissions', 	'last_login', 	'last_name', 	'created_at', 	'updated_at', 	'deleted_at', 	'bio', 	'gender', 	'dob', 	'pic', 	'country', 	'user_state', 	'city', 	'address', 	'postal', 	'provider', 	'provider_id', 	'full_name' );
		if( !empty($value) ){
			$db->where($rec_id, urldecode($value));
		}
		else{
			$db->where('id' , $rec_id);
		}
		$record = $db->getOne( 'users', $fields );
		if(!empty($record)){
			$this->view->page_title ="View  Users";
			$this->view->render('users/view.php' , $record ,'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error = $db->getLastError();
			}
			else{
				$this->view->page_error = "Record not found";
			}
			$this->view->render('users/view.php' , $record , 'main_layout.php');
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
				'email' => 'required|valid_email',
				'password' => 'required',
				'permissions' => 'required',
				'last_login' => 'required',
				'first_name' => 'required',
				'last_name' => 'required',
				'created_at' => 'required',
				'updated_at' => 'required',
				'deleted_at' => 'required',
				'bio' => 'required',
				'gender' => 'required',
				'dob' => 'required',
				'pic' => 'required',
				'country' => 'required',
				'user_state' => 'required',
				'city' => 'required',
				'address' => 'required',
				'postal' => 'required',
				'provider' => 'required',
				'provider_id' => 'required',
				'full_name' => 'required',
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
			$cpassword = $modeldata['confirm_password'];
			$password = $modeldata['password'];
			if($cpassword != $password){
				$this->view->page_error[] = "Your password confirmation is not consistent";
			}
			unset($modeldata['confirm_password']);
			$password_text = $modeldata['password'];
			$modeldata['password'] = password_hash($password_text , PASSWORD_DEFAULT);
			if( empty($this->view->page_error) ){
				$db = $this->GetModel();
				$rec_id = $db->insert( 'users' , $modeldata );
				if(!empty($rec_id)){
					set_flash_msg('','');
					redirect_to_page("users");
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
		$this->view->page_title ="Add New Users";
		$this->view->render('users/add.php' ,null,'main_layout.php');
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
				'password' => 'required',
				'permissions' => 'required',
				'last_login' => 'required',
				'last_name' => 'required',
				'created_at' => 'required',
				'updated_at' => 'required',
				'deleted_at' => 'required',
				'bio' => 'required',
				'gender' => 'required',
				'dob' => 'required',
				'pic' => 'required',
				'country' => 'required',
				'user_state' => 'required',
				'city' => 'required',
				'address' => 'required',
				'postal' => 'required',
				'provider' => 'required',
				'provider_id' => 'required',
				'full_name' => 'required',
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
				$bool = $db->update('users',$modeldata);
				if($bool){
					set_flash_msg('','');
					redirect_to_page("users");
					return;
				}
				else{
					$this->view->page_error[] = $db->getLastError();
				}
			}
		}
		$fields = array('id','password','permissions','last_login','last_name','created_at','updated_at','deleted_at','bio','gender','dob','pic','country','user_state','city','address','postal','provider','provider_id','full_name');
		$db->where('id' , $rec_id);
		$data = $db->getOne('users',$fields);
		$this->view->page_title ="Edit  Users";
		if(!empty($data)){
			$this->view->render('users/edit.php' , $data, 'main_layout.php');
		}
		else{
			if($db->getLastError()){
				$this->view->page_error[] = $db->getLastError();
			}
			else{
				$this->view->page_error[] = "Record not found";
			}
			$this->view->render('users/edit.php' , $data , 'main_layout.php');
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
		$bool = $db->delete( 'users' );
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
		redirect_to_page("users");
	}
}
