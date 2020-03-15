<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('news');
        $this->load->library('session');
        //加载模型
        $this->load->model('News_model');
        $news = $this->News_model->get_list($limit,$offset);
        $newsinfo = array();
        foreach($news as $item){
            $newstype= $this->db->where('news_type_id',$item['news_type_id'])->get('news_type')->row_array();
            $item['news_type_id'] = $newstype['news_name'];
            $newsinfo[] =$item;
        }
      
        $url = site_url('admin/News/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'news'=>$newsinfo,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/news_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['news_title']= $this->input->post('news_title');
            $data['news_author']= $this->input->post('news_author');
            $data['news_content']= $this->input->post('editorValue');
            $data['news_time']= time();
            $data['news_type_id']= $this->input->post('news_type_id');
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['news_img']=$imginfo['path'];
            }else{
                $url = site_url('admin/News/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
            //加载模型
            $this->load->model('News_model');
            $res = $this->News_model->get_add($data);
            if($res){
                $url = site_url('admin/News/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/News/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
         //加载模型
         $this->load->model('News_model');
         //查询新闻类型
         $newtype = $this->News_model->newtype();
        $data = array(
            'name'=>$name,
            'newtype'=>$newtype
        );
        $this->load->view('admin/news_add.php',$data);

    }

    public function edit()
    {
         if($this->input->post('sub')){
            $data['news_title']= $this->input->post('news_title');
            $data['news_author']= $this->input->post('news_author');
            $data['news_content']= $this->input->post('editorValue');
            $data['news_time']= time();
            $data['news_type_id']= $this->input->post('news_type_id');
            $id = $this->input->post('news_id');
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('news_id',$id)->get('news')->row_array();
                $data['news_img'] = $info['news_img'];
            }else{
                $data['news_img'] =$imgs['path'];
            }
             //加载模型
             $this->load->model('News_model');
             $res = $this->News_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/News/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/News/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('News_model');
           //查询新闻类型
          $newtype = $this->News_model->newtype();
          $info = $this->News_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info,
            'newtype'=>$newtype
        );
        $this->load->view('admin/news_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('News_model');
        $res = $this->News_model->del_info($id);
        if($res){
            $url = site_url('admin/News/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/News/index');
            echo "<script>alert('删除失败');window.location.href='".$url."'</script>";
        }

    }

    //上传图片
    public function do_upload()
    {
        $path = 'uploads/';
        if(!file_exists($path)){
            mkdir($path,0777);
        }

        $config['upload_path']      = $path;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 1024*2;
        $config['max_width']        = 2000;
        $config['max_height']       = 2000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('img'))
        {
            $error = array('error' => $this->upload->display_errors());

                
                    $info['code']= 0;
                    
                    return $info;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

                    
                    $info['code']= 1;
                    $info['path'] =$path.$data['upload_data']['file_name'];
                    return $info;
        }
    }

} 