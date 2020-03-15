<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	public function index()
	{
        //加载模型
        $this->load->model('News_model');
         //查询新闻类型
        $typeinfo = $this->News_model->newtype();
        //获取新闻类型id
        $tid  = $this->uri->segment(3,0);
        if($tid==0){
            $tid==1;
        }else{
            $tid==0;
        }
        //获取偏移量
        $offset  = $this->uri->segment(4,0);
        //每页显示的数量
        $limit = 6;
        //总数
        if($tid==0){
            $count = $this->db->count_all_results('news');
        }else{
            $count = $this->db->where('news_type_id',$tid)->count_all_results('news');
        }
       
        
      
        $url = site_url('News/index/').$tid;
        $page = MYpages($url,$count,$limit,4,2);
        $newsinfo = $this->News_model->get_info($tid,$limit,$offset);
        $data = array(
            'typeinfo'=>$typeinfo,
            'newsinfo'=>$newsinfo,
            'page'=>$page,
            'tid'=>$tid
            
        );
        $this->load->view('xinwen',$data);
    }

    //详情页
	public function show()
	{
        //获取新闻类型id
        $ids = $this->uri->segment(3);
        //新闻类型
        //$newtype = $this->db->where('news_type_id !=',$id)->get('news_type')->result_array();
         $newtype = $this->db->get('news_type')->result_array();
		//获取新闻ID
        $id = $this->uri->segment(4,0);
        if($ids==0){
            $info = $this->db->where('news_id',$id)->get('news')->row_array();
            //上一页
            $prev_id = $this->db->select('news_id')->where('news_id<',$info['news_id'])->order_by('news_id DESC')->limit(1)->get('news')->row_array();
            if($prev_id){
                $prev = $prev_id;
            }else{
                $prev = "";
            }
            //下一页
            $next_id  = $this->db
            ->select('news_id')
            ->where('news_id>',$info['news_id'])
            ->limit(1)
            ->get('news')
            ->row_array();
           
            if($next_id){
                $next = $next_id;
            }else{
                $next = "";
            }
        }else{
                if($id==0){
                    $info = $this->db->where('news_type_id',$ids)->limit(1)->get('news')->row_array();
                }else{
                    $info = $this->db->where(['news_id'=>$id,'news_type_id'=>$ids])->get('news')->row_array();
                }
              //上一页
              $prev_id = $this->db->select('news_id')->where('news_id<',$info['news_id'])->where('news_type_id',$ids)->order_by('news_id DESC')->limit(1)->get('news')->row_array();
              if($prev_id){
                  $prev = $prev_id;
              }else{
                  $prev = "";
              }
            //下一页
            $next_id  = $this->db
            ->select('news_id')
            ->where('news_id>',$info['news_id'])
            ->where('news_type_id',$ids)
            ->limit(1)
            ->get('news')
            ->row_array();
            if($next_id){
                $next = $next_id;
            }else{
                $next = "";
            }
            
        }
       
		
		$data = array(
            'info'=>$info,
            'newtype'=>$newtype,
            'prev'=>$prev,
            'next'=>$next,
            'ids'=>$ids
			
		);
		
		$this->load->view('news',$data);

	}
   
}

