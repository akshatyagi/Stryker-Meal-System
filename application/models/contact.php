<?php 
class Contact extends CI_Model{
	function Contact(){
		parent::__construct();
	}

	function getContact(){
		$contact=$this->db->get('contact');
  		if($contact->num_rows()>0){
  			foreach($contact->result() as $c){
  				$data[]=$c;
  			}
  			return $data;
  		}
	}
	function update_email($old_data,$new_data){
		$this->db->where('email',$old_data);
		$this->db->update('contact',array('email' => $new_data));
		return true;
	}
	function update_phone($old_data,$new_data){
		$this->db->where('phone',$old_data);
		$this->db->update('contact',array('phone' => $new_data));
		return true;
	}
	function update_address($old_data,$new_data){
		$this->db->where('address',$old_data);
		$this->db->update('contact',array('address' => $new_data));
		return true;
	}
}

?>