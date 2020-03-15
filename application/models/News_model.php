<?php
class News_model extends CI_model
{
    //前台数据
    public function get_info($tid,$limit,$offset)
    {
        if($tid==0){
            $info = $this->db->limit($limit,$offset)->get('news')->result_array();
        }else{
            $info = $this->db->where('news_type_id',$tid)->limit($limit,$offset)->get('news')->result_array();
        }
        return $info;
    }

    //查询新闻类型
    public function newtype()
    {
          $info = $this->db->get('news_type')->result_array();
          return $info;
    }

    public function get_list($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('news')->result_array();
        return $info;
    }
    public function get_add($data)
    {
       $res = $this->db->insert('news',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('news_id',$id)->get('news')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('news_id',$id)->update('news',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('news_id',$id)->delete('news');
       return $res;
    }

    

}