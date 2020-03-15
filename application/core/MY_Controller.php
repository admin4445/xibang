<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->header();
        $this->footer();
    }

    public function header()
    {
        $this->load->database();
        
        $navinfo = $this->db->get('nav')->result_array();

        //查询广告图
        $ban = $this->db->get('banner')->result_array();
       

        $urladdress  = $this->uri->segment(2);
        //以及导航栏选中状态
        $navs  = $this->uri->segment(1);
        //新闻页面、资讯页面，二级导航默认选中状态
        $newsadd  = $this->uri->segment(3,0);
        $data = array(
            'nav' => $navinfo,
            'address'=>$urladdress,
            'newsadd'=>$newsadd,
            'navs'=>$navs,
            'ban'=>$ban
        );
        
        $this->load->vars($data); //只传值过去

    }

    public function footer()
    {
        $this->load->database();
        //查询友情链接
        $linkinfo = $this->db->get('link')->result_array();
        //查询网站配置
        $confinfo = $this->db->get('conf')->result_array();
       
        $data = array(
            'link' => $linkinfo,
            'conf' =>$confinfo
        );
        $this->load->vars($data); //只传值过去
    }

}

?>
