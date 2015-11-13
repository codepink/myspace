<?php defined('BASEPATH') OR exit('access error!');
/**
 * ## baord 기능 명세 & url
 *
 * 1. 글 목록 보여주기 (/baord_sample/get)
 * 2. 글 입력 (/baord_sample/add)
 * 3. 글 수정 (/baord_sample/mod)
 * 4. 글 삭제 (/baord_sample/del)
 */

class BoardLib {

	private $model_name = 'board';
	private $view_path = 'board';

	function __construct($params)
	{
		$this->ci =& get_instance();

		$this->_set_attr_val($params);

		//$this->ci->load->model($this->mode_name);
	}

	public function render_list_page($page, $rows)
	{
		// 페이지네이션 구현하기
		// 1 페이지 : 0 ~ 9 ((1 - 1) * 10 ~ +9)
		// 2 페이지 : 10 ~ 19 ((2 - 1) * 10 ~ +9)
		// 3 페이지 : 20 ~ 29 ((3 - 1) * 10 ~ +9)

		// DB 셀렉트시 사용
		$start = ($page - 1) * $rows;
		$end = ($start + $rows) - 1;

		// 테이블 로드
		//$view_data['list'] = $this->ci->model->get_list_all($start, $end, $rows);

		$view_data['list'] = array(
			array(
				'idx' => '123',
				'title' => '테스트123',
				'name' => 'admin'
			),
			array(
				'idx' => '123',
				'title' => '테스트123',
				'name' => 'admin'
			)			
		);

		// 페이징
		$total = 102;
		$now_rows = 10;
		$div = 5;

		$tot_page = round($total / $now_rows); // 11 page
		
		$grp_page = float($page / $div); // 현재 12page 이면.. 3그룹 (10~15)
		$grp_pstart = ($grp_page - 1) * $div;
		$grp_pend =  $grp_pstart + $div;



		$view_data['paging'] = array(
			'start' => $start,
			'end' => $end,
			'total' => 100, // DB 토탈 개수 가져온다
			'div' => 5
		);

		// 뷰 렌더
		$this->ci->load->view($this->_get_view_path('list'), $view_data);
	}

	private function _set_attr_val($params)
	{
		foreach ($params as $key => $val)
		{
			if (isset($this->$key)) $this->$key = $val;
		}
	}

	private function _get_view_path($type)
	{
		return $this->view_path . '/' . $type;
	}
}