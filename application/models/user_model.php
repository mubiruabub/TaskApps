<?php
class User_model extends CI_Model {

    public function _construct()
	{
		parent::_construct();
		
	}
	function index() 
	{
	   return $this->db->get('users');
	}	
	
	function insert($param)
	{
		$field=array(
		'UserName'=>$param['user_Name'],
		'DateCreated'=>$param['user_DateCreated'],  //put
		'DateUpdated'=>$param['user_DateUpdated'],  //put
		
		//'DateCreated'=>date('Y-m-d'),
		//'DateUpdated'=>date('Y-m-d'),
				
		'Description'=>$param['user_Description']
		);
		$this->db->insert("users",$field);
				
	}	
	
	function view($param)
	{
		$query=$this->db->get_where('users',$param['condition']);
		return $query->row_array();
		
	}
	
	function update($param)  
	{
		$field=array(
		'UserName'=>$param['user_Name'],
		// 'DateCreated'=>$param['user_DateCreated'],
		'DateUpdated'=>$param['user_DateUpdated'],
		'Description'=>$param['user_Description']
		);
		
		$condition=array('ID'=>$param['user_ID']);
		$query=$this->db->get_where('users',$condition);
		$result=$query->result_array();
		if(!empty($result))
		{
			// $this->load->model('user_model');
			// $result=$this->user_model->update($param);   //is a function for update
			$this->db->where($condition);
			$this->db->update('users',$field);
			//$this->index();
		}
	}	
	
	function delete($param)
	{
		$this->db->delete('users',$param['condition']);
	}
	
}
