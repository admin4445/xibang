<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abolib extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('abo_libimg');
        $this->load->library('session');
        //加载模型
        $this->load->model('Abolib_model');
        $news = $this->Abolib_model->get_list($limit,$offset);
        $libinfo = array();
        foreach($news as $item){
            $newstype= $this->db->where('abo_id',$item['abo_type_id'])->get('about')->row_array();
            $item['abo_type_id'] = $newstype['abo_title'];
            $libinfo[] =$item;
        }
      
        $url = site_url('admin/Abolib/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'libinfo'=>$libinfo,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/abolib_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['abo_libimg_title']= $this->input->post('abo_libimg_title');
            $data['abo_libimg_etitle']= $this->input->post('abo_libimg_etitle');
           
            $data['abo_type_id']= $this->input->post('abo_type_id');
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['abo_libimg_img']=$imginfo['path'];
            }else{
                $url = site_url('admin/Abolib/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
            //加载模型
            $this->load->model('Abolib_model');
            $res = $this->Abolib_model->get_add($data);
            if($res){
                $url = site_url('admin/Abolib/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Abolib/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
         //加载模型
         $this->load->model('Abolib_model');
         //查询新闻类型
         $type = $this->Abolib_model->type();
        $data = array(
            'name'=>$name,
            'type'=>$type
        );
        $this->load->view('admin/abolib_add.php',$data);

    }

    public function edit()
    {
         if($this->input->post('sub')){
            $data['abo_libimg_title']= $this->input->post('abo_libimg_title');
            $data['abo_libimg_etitle']= $this->input->post('abo_libimg_etitle');
            $data['abo_type_id']= $this->input->post('abo_type_id');
            $id = $this->input->post('abo_libimg_id');
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('abo_libimg_id',$id)->get('abo_libimg')->row_array();
                $data['abo_libimg_img'] = $info['abo_libimg_img'];
            }else{
                $data['abo_libimg_img'] =$imgs['path'];
            }
             //加载模型
             $this->load->model('Abolib_model');
             $res = $this->Abolib_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/Abolib/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/Abolib/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('Abolib_model');
           //查询新闻类型
          $type = $this->Abolib_model->type();
          $info = $this->Abolib_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info,
            'type'=>$type
        );
        $this->load->view('admin/abolib_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('Abolib_model');
        $res = $this->Abolib_model->del_info($id);
        if($res){
            $url = site_url('admin/Abolib/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/Abolib/index');
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