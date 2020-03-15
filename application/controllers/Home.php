<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index()
	{

        //查询所有类型
        $typeinfo = $this->db->get('type')->result_array();
     
        //查询产业数据
        $industry = $this->db->get('industry')->result_array();

        //查询推荐的案例展示
        $caseinfo = $this->db->where('case_status',1)->get('case')->result_array();

        //查询团队数据，测试数据
        $teaminfo = $this->db->limit(5)->get('team')->result_array();
        //查询团队
       
        //查询新闻数据，测试数据
        $newsinfo = $this->db->limit(3)->get('news')->result_array();
       
        $data = array(
            'type' => $typeinfo,
            'industry'=>$industry,
            'case' =>$caseinfo,
            'team' =>$teaminfo,
            'news' =>$newsinfo
        );


		$this->load->view('index',$data);
    }
    
    //异步请求团队个人信息

    public function getteam()
    {
        $id = $this->uri->segment(4);
       
        $info = $this->db->where('team_id',$id)->get('team')->row_array();
        echo json_encode($info);
    }
}
