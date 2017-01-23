<?php 
class Messages extends CI_Model{
	function Messages(){
		parent::__construct();
	}
	function getMessages(){
		$q = $this->db->get('messages');
		if($q->num_rows()>0){
			foreach($q->result() as $r){
				$data[] = $r;
			}
		return $data;
		}
	}
	function getNumber(){
		$q = $this->db->get('messages');
		return $q->num_rows();
	}

	function getFields(){
		$result = $this->db->list_fields('messages');
		foreach($result as $field){
			$data[] = $field;
		}
		return $data;
	}
	function getComment($data){
		$this->db->select('Comment');
		$this->db->where('ID', $data);
		$q = $this->db->get('messages');
		$data = $q->result_array();
        return $data[0]['Comment'];
	}
	function deleteMessage($data){
		$this->db->where('ID', $data);
   		$this->db->delete('messages');
		return true;
	}

	function insertMessage($data){
		$success = false;
		$this->db->insert('messages',$data);
		if($this->db->affected_rows() === 1){$success = true;}
		return $success;
	}
}

?>