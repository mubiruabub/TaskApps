<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {

    public function _construct()
	{
		parent::_construct();
		
	}
	function index() 
	{
	    $this->load->model('user_model');
		$result=$this->user_model->index();
		$data=array('userlist'=>$result);
		$this->load->view("user",$data);  // user is page in view
	}	
	
	function insert()
	{
		$textusername=Null;
		$textDateCreated=Null;
		$textdateupdated=Null;
		$textdescription=Null;
		
		extract($_POST);
		$param['user_Name']=$textusername;
		$param['user_DateCreated']=$textDateCreated;
		$param['user_DateUpdated']=$textdateupdated;
		$param['user_Description']=$textdescription;  
		
		if(isset($textusername))
		{
			$this->load->model('user_model');
			$result=$this->user_model->insert($param);
			$this->index();
		}
	}
		
	function view($x='')  // is for viewing User_edit
	{
		// echo "Welcome to view Page".$x;  // put this first as in testing 
		 $data['condition']=array('ID'=>$x);
		 $this->load->model('user_model');
		 $result=$this->user_model->view($data);
		 $data=array('index'=>$result);
		 $this->load->view('user_edit',$data);
	}
	
	function update()  //for updating that user_edit
	{
		$textuserid=Null;
		$textusername=Null;
		$textDateCreated=Null;
		$textdateupdated=Null;
		$textdescription=Null;
		
		extract($_POST);
		$param['user_ID']=$textuserid;
		$param['user_Name']=$textusername;
		// remove $param['user_DateCreated']=$textDateCreated;
		$param['user_DateUpdated']=$textdateupdated;
		$param['user_Description']=$textdescription;   

		if(isset($textusername))
		{
			$this->load->model('user_model');
			$result=$this->user_model->update($param);   //is a function for update
			$this->index();
		}
		
	}
	
    function delete($x='')
	{
		// echo "Delete".$x; put this one for testing if it works, only in this fuction, and after u comment it
		
		$data['condition']=array('ID'=>$x);
		$this->load->model('user_model');
		$re=$this->user_model->delete($data);
		$this->index();  // to take u back to the index page
		
	}
}
