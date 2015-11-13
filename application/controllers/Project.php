<?php defined('BASEPATH') OR exit('access error!');

class Project extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('BoardLib', array(
			'view_path' => 'board'
		));
	}

	public function index()
	{
		$this->boardlib->render_list_page(1, 10);
	}
}