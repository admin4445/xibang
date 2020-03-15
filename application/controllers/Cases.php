<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends MY_Controller {
	public function index()
	{

		$id = $this->uri->segment(3,0);
		
		//加载模型
		$this->load->model('Casetype_model');
		//查询案列类型
		$casetype = $this->Casetype_model->get_info();

		/**查询案列**/
		//获取偏移量
		$offset  = $this->uri->segment(4,0);
		//每页显示的数量
		$limit = 4;
		//加载模型
		$this->load->model('Case_model');
		//查询数据的总数
		if($id==0){
			$count = $this->db->count_all_results('case');
			$caseinfo = $this->Case_model->get_info($id,$limit,$offset);
		}else{
			$count = $this->db->where(array('case_type_id'=>$id))->count_all_results('case');
			$caseinfo = $this->Case_model->get_info($id,$limit,$offset);
		}
		
		
		$url = site_url('Cases/index/').$id;
		$page = MYpages($url,$count,$limit,4,2);
	
		$data = array(
			'casetype'=>$casetype,
			'caseinfo'=>$caseinfo,
			'page'=>$page
		);

		$this->load->view('case',$data);

	}
	
	//详情页
	public function deail()
	{
		//加载模型
		$this->load->model('Casetype_model');
		//查询案列类型
		$casetype = $this->Casetype_model->get_info();
		//获取案例类型
		$type = $this->uri->segment(3);
		//获取案例ID
		$id = $this->uri->segment(4);
		if($id==0){
			$info=$this->db->select('case_id')->where('case_type_id <',$type)->order_by('case_id DESC')->limit(1)->get('case')->row_array();
			$id = $info['case_id'];
		}

		if($type==0){
			//获取上一页
			$prev = $this->db->select('case_id')->where('case_id <',$id)->order_by('case_id DESC')->limit(1)->get('case')->row_array();
			if($prev==null){
				$prev="";
			}else{
				$prev= $prev['case_id'];
			}
			//获取下一页
			$next = $this->db->select('case_id')->where('case_id>',$id)->limit(1)->get('case')->row_array();
			if($next==null){
				$next="";
			}else{
				$next = $next['case_id'];
			}
		}else{
			//获取上一页
			$prev = $this->db->select('case_id')->where('case_id <',$id)->where('case_type_id',$type)->order_by('case_id DESC')->limit(1)->get('case')->row_array();
			if($prev==null){
				$prev="";
			}else{
				$prev= $prev['case_id'];
			}
			//获取下一页
			$next = $this->db->select('case_id')->where('case_id>',$id)->where('case_type_id',$type)->limit(1)->get('case')->row_array();
			if($next==null){
				$next="";
			}else{
				$next = $next['case_id'];
			}
		}
		
		
		
		$info = $this->db->where('case_id',$id)->get('case')->row_array();
		
		$data = array(
			'info'=>$info,
			'casetype'=>$casetype,
			'prev'=>$prev,
			'next'=>$next
		);
		
		$this->load->view('descpage',$data);

	}
} 