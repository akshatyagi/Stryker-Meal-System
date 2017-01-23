<?php 
  class Rules extends CI_Model{
  	function getRules(){
  		$rules=$this->db->get('rules');
  		if($rules->num_rows()>0){
  			foreach($rules->result() as $r){
  				$data[]=$r;
  			}
  			return $data;
  		}
  	}
    function delete_item($index){
      $this->db->where('index', $index);
      $this->db->delete('rules');
      return $this->db->affected_rows();
    }
    function insert_item_instruction($data){
    $this->db->insert('rules',$data);
    $data_added = $this->db->get('rules');
    return $data_added;   
    }
    function getIndex($data){
      $item = $data['item'];
      $this->db->select('index');
      $this->db->where('item',$item);
      $ans = $this->db->get('rules');
      return $ans->row_array();
  }

  }
?>
