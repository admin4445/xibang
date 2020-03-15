<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('case');
        $this->load->library('session');
        //加载模型
        $this->load->model('Case_model');
        $cases = $this->Case_model->get_list($limit,$offset);
        $casesinfo = array();
        foreach($cases as $item){
            $casetype= $this->db->where('case_type_id',$item['case_type_id'])->get('case_type')->row_array();
            $item['case_type_id'] = $casetype['case_type_name'];
            $casesinfo[] =$item;
        }
      
        $url = site_url('admin/Cases/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'cases'=>$casesinfo,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/case_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['case_name']= $this->input->post('case_name');
            $data['case_desc']= $this->input->post('editorValue');
            $data['case_status']= '0';
            $data['case_type_id']= $this->input->post('case_type_id');
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['case_img']=$imginfo['path'];
            }else{
                $url = site_url('admin/Cases/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
            //加载模型
            $this->load->model('Case_model');
            $res = $this->Case_model->add_info($data);
            if($res){
                $url = site_url('admin/Cases/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Cases/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
         //加载模型
         $this->load->model('Case_model');
         //查询新闻类型
         $casetype = $this->Case_model->casetype();
        $data = array(
            'name'=>$name,
            'casetype'=>$casetype
        );
        $this->load->view('admin/case_add.php',$data);

    }

    public function edit()
    {
         if($this->input->post('sub')){
            $data['case_name']= $this->input->post('case_name');
            $data['case_desc']= $this->input->post('editorValue');
            $data['case_status']= '0';
            $data['case_type_id']= $this->input->post('case_type_id');
            $id = $this->input->post('case_id');
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('case_id',$id)->get('case')->row_array();
                $data['case_img'] = $info['case_img'];
            }else{
                $data['case_img'] =$imgs['path'];
            }
             //加载模型
             $this->load->model('Case_model');
             $res = $this->Case_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/Cases/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/Cases/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('Case_model');
           //查询新闻类型
          $casetype = $this->Case_model->casetype();
          $info = $this->Case_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info,
            'casetype'=>$casetype
        );
        $this->load->view('admin/case_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('Case_model');
        $res = $this->Case_model->del_info($id);
        if($res){
            $url = site_url('admin/Cases/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/Cases/index');
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