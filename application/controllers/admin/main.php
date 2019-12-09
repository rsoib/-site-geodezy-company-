<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Admin_Controller 
{
	
	function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		  $data['items'] = "sfsdfsdf";
		  $this->render('admin/main_view',$data);
	}


}



?>