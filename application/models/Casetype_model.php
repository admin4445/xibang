<?php
class Casetype_model extends CI_model
{
    public function get_info()
    {
        $info = $this->db->get('case_type')->result_array();
        return $info;
    }
	public function get_list($limit,$offset)
	{
	 $navinfo  = $this->db->limit($limit,$offset)->get('case_type')->result_array();
	 return $navinfo;
	}
	public function add_info($data)
	{
	$res = $this->db->insert('case_type',$data);
	return $res;
	}
	public function find_info($id)
	{
	 $info = $this->db->where('case_type_id',$id)->get('case_type')->row_array();
	 return $info;

	}
	public function edit_info($id,$data)
	{
	 $res = $this->db->where('case_type_id',$id)->update('case_type',$data);
	 return $res;

	}
	public function del_info($id)
	{
	$res = $this->db->where('case_type_id',$id)->delete('case_type');
	return $res;
	}

}

