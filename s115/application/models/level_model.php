<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 用户等级操作模型
 */
class Level_model extends CI_Model{
	/**
	 * 添加用户等级
	 */
	public function add($data){
		$this->db->insert('userlevel', $data);
	}

	/**
	 * 查看用户等级
	 */
	public function check(){
		$data = $this->db->get('userlevel')->result_array();
		return $data;
	}

}