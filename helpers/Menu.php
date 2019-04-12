<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
	public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Dashboard', 
			'icon' => '<i class="fa fa-line-chart "></i>'
		),
		
		array(
			'path' => 'menu2', 
			'label' => 'Eligibility Check', 
			'icon' => '<i class="fa fa-search "></i>'
		),
		
		array(
			'path' => 'y_app_gen/application_wizad_1', 
			'label' => 'My Application', 
			'icon' => '<i class="fa fa-file "></i>'
		),
		
		array(
			'path' => 'menu4', 
			'label' => 'Assessment', 
			'icon' => '<i class="fa fa-list-ul "></i>'
		),
		
		array(
			'path' => 'menu5', 
			'label' => 'Payment', 
			'icon' => '<i class="fa fa-cc-visa "></i>'
		),
		
		array(
			'path' => 'menu6', 
			'label' => 'History', 
			'icon' => '<i class="fa fa-history "></i>'
		),
		
		array(
			'path' => 'x_messages', 
			'label' => 'Messages', 
			'icon' => '<i class="fa fa-envelope "></i>'
		),
		
		array(
			'path' => 'menu10', 
			'label' => 'Profile', 
			'icon' => '<i class="fa fa-child "></i>'
		),
		
		array(
			'path' => 'x_documents/list', 
			'label' => 'Documents', 
			'icon' => '<i class="fa fa-cloud-upload "></i>'
		),
		
		array(
			'path' => 'y_app_gen/list', 
			'label' => 'Application Profile', 
			'icon' => '<i class="fa fa-archive "></i>'
		),
		
		array(
			'path' => 'Application_A', 
			'label' => 'Application Education', 
			'icon' => '<i class="fa fa-leanpub "></i>','submenu' => array(
		array(
			'path' => 'y_app_gen/list', 
			'label' => 'Education', 
			'icon' => ''
		),
		
		array(
			'path' => 'y_app_edu_dtl/list', 
			'label' => 'Education Background', 
			'icon' => '<i class="fa fa-leanpub "></i>'
		),
		
		array(
			'path' => 'y_app_gen/list', 
			'label' => 'language results', 
			'icon' => '<i class="fa fa-bank "></i>'
		)
	)
		)
	);

	
	
}