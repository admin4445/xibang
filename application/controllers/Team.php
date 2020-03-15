<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {
	public function index()
	{
            //获取偏移量
            $offset  = $this->uri->segment(3,0);
           
            //每页显示的数量
            $limit = 2;
            //加载模型
            $this->load->model('Team_model');
            //总数
            $count = $this->db->count_all_results('team');
            $url = site_url('Team/index');
            $page = MYpages($url,$count,$limit,3,2);

            $teaminfo = $this->Team_model->get_info($limit,$offset);
            $data = array(
                'teaminfo'=>$teaminfo,
                'page'=>$page
            );
            $this->load->view('tuandui',$data);
    }

    public function show()
    {
        //默认团队的id
        $id  = $this->uri->segment(3,0);
        if($id==0){
            $teaminfo  = $this->db->get('team')->row_array();
        }else{
            $teaminfo  = $this->db->where('team_id',$id)->get('team')->row_array();
        }
       
        //上一页
        $prev_id = $this->db->select('team_id')->where('team_id<',$teaminfo['team_id'])->order_by('team_id DESC')->limit(1)->get('team')->row_array();
      
        if($prev_id){
            $prev = $prev_id;
        }else{
            $prev = "";
        }
        //下一页
        $next_id  = $this->db
		->select('team_id')
		->where('team_id>',$teaminfo['team_id'])
		->limit(1)
		->get('team')
		->row_array();
		if($next_id){
			$next = $next_id;
		}else{
			$next = "";
		}
        
        //查询该人的全部作品进行展示
        $worksinfo = $this->db->where('works_author',$teaminfo['team_id'])->get('works')->result_array();
        $data = array(
            'teaminfo'=>$teaminfo,
            'worksinfo'=>$worksinfo,
            'prev'=>$prev,
            'next'=>$next
        );
        
        $this->load->view('tuandui2',$data);
    }
}

