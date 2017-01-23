<?php 
class Feedback extends CI_Model{
	function feedback(){
		parent::__construct();
	}

	function getFeedback(){ 
		$q = $this->db->get('feedback');
		if($q->num_rows()>0){
			foreach($q->result() as $r){
				$data[] = $r;
			}
		return $data;
		}
	}
	function getFields(){
		$result = $this->db->list_fields('feedback');
		foreach($result as $field){
			$data[] = $field;
		}
		return $data;	
	}
	function getAverage(){
		$avg_data = array(
			'SERVICE' => $this->db->select_avg('SERVICE')->from('feedback')->get()->result(),
			'STAFF_FRIENDLINESS' => $this->db->select_avg('STAFF_FRIENDLINESS')->from('feedback')->get()->result(),
			'FOOD_QUALITY' => $this->db->select_avg('FOOD_QUALITY')->from('feedback')->get()->result(),
			'ATMOSPHERE' => $this->db->select_avg('ATMOSPHERE')->from('feedback')->get()->result(),
			'CLEANLINESS' => $this->db->select_avg('CLEANLINESS')->from('feedback')->get()->result(),
			'TIMELINESS' => $this->db->select_avg('TIMELINESS')->from('feedback')->get()->result(),
		);
		return $avg_data;
	}
	function deleteFeedback(){
		$result = false;
		$this->db->empty_table('feedback');
		if($this->db->affected_rows()>0){ $result = true;}
		return $result;
	}
	function insertFeedback($data){
		$result = false;
		$this->db->insert('feedback',$data);
		$q = $this->db->affected_rows();
		if($q>0){ $result = true;}
		return $result;
	}
	function getNumber(){
		return $this->db->get('feedback')->num_rows();
	}
}

?>