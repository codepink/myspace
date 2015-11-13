<?php defined('BASEPATH') OR exit('access error!');

class Board extends CI_Model {

	private $_db_name = 'default';
	private $_tbl_name = 'board';

	/**
	 * 생성자
	 * 
	 * @param array $init_data 설정값
	 */
	function __construct()
	{
		parent::__construct();

		$this->load->database($this->_db_name);
	}

	/**
	 * @param  int
	 * @param  int
	 * @param  int
	 * @return array
	 */
	function get_list_all($start, $end, $rows)
	{
		// select

		return $result;
	}

	/**
	 * @param  int
	 * @return array
	 */
	function get_list_one($id)
	{
		// select

		return $result;
	}

	/**
	 * @param  int
	 * @return boolean
	 */
	function insert_list($id)
	{
		// insert

		return $state;
	}

	/**
	 * @param  int
	 * @return boolean
	 */
	function update_list($id)
	{
		// update

		return $state;
	}

	/**
	 * @param  int
	 * @return boolean
	 */
	function delete_list($id)
	{
		// delete

		return $state;
	} 
}