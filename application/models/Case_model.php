<?php
class Case_model extends CI_model
{

    //前台展示的数据
    public function get_info($id,$limit,$offset)
    {
        if($id==0){
            $info = $this->db->limit($limit,$offset)->get('case')->result_array();
        }else{
            $info = $this->db->where('case_type_id',$id)->limit($limit,$offset)->get('case')->result_array();
        }
      
        return $info;
    }

    public function casetype()
    {
        $info = $this->db->get('case_type')->result_array();
        return $info;
    }

    public function get_list($limit,$offset)
    {
        $navinfo  = $this->db->limit($limit,$offset)->get('case')->result_array();
        return $navinfo;
    }
    public function add_info($data)
    {
       $res = $this->db->insert('case',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('case_id',$id)->get('case')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('case_id',$id)->update('case',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('case_id',$id)->delete('case');
       return $res;
    }

}