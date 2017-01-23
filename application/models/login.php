<?php 
class Login extends CI_Model{
	function validate(){
		
		$this->db->where('username',$this->input->post('user'));
		$this->db->where('password',md5($this->input->post('pwd')));
		$q=$this->db->get('login');
		if($q->num_rows()==1){
			return true;
		}
		
	}
}
?>
