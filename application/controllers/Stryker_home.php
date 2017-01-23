<?php
class Stryker_home extends CI_Controller {
	public function index()
	{    
       
		$this->_load_Home();
		
	}
	public function _load_Home(){	
		$this->load->library('table');
		//$config = array(
		//	'base_url' => 'http://localhost/Stryker/index.php/Stryker_home/load_Home',
		//	'total_rows' => $this->news->getRows(),
		//	'per_page' => 3,
		//	'num_links' => $this->news->get_num_links()
		//	);
		
		$data_home=array(
			'title'=> 'Stryker',
			'items' =>$this->menu->getItems(),
			'records'=> $this->news->getNews(),
			'num_items' => $this->news->getNumber(),
			'rules' => $this->rules->getRules(),
			'contact' => $this->contact->getContact(),
			'right_item' => "<li data-toggle='modal' data-target='#login' ><a href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>",
			'is_logged' =>FALSE,
			'weekly_menu' => $this->menu->getWeeklyItem(),
			'weekly_menu_category' => $this->menu->getCategory()
			);
		$this->load->view('header',$data_home);
    	if(!$data_home['is_logged']){
        $this->load->view('templates/login_modal'); 
        $this->load->view('templates/welcome_section');   
        $this->load->view('templates/menu_section');
        $this->load->view('templates/feedback_section');
        $this->load->view('templates/rules_section');
        $this->load->view('templates/contact_us');
        $this->load->view('templates/bulletin');
     	 }
      $this->load->view('footer');		
	}
	function validate_credentials(){
		$query=$this->login->validate();
		if($query){
			$user_data=array(
			'username' => $this->input->post('user'),
			'is_logged_in' => true
			);	
            $this->session->set_userdata($user_data);
           	redirect('Admin/logged_in');
            return true;         					
		}
	}	

	function getNews(){
		$index = $this->input->post('index');		
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('index',$index);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
			{
    			$row = $query->row();
    			$title = $row->title;
    			$article = $row->article;

		} else {
    		throw new Exception("No records found");
		}
		$data = array('title'=>$title, 'article'=>$article);
		echo json_encode($data);
		//"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"
	}

	function validate_feedback(){
		$data = array(
			'SERVICE' => $this->input->post('service'),
			'STAFF_FRIENDLINESS' => $this->input->post('sf'),
			'FOOD_QUALITY' => $this->input->post('fq'),
			'ATMOSPHERE' => $this->input->post('atm'),
			'CLEANLINESS' => $this->input->post('cln'),
			'TIMELINESS' => $this->input->post('tml'),
			'DATE' => date('Y-m-d H:i:s',now())
			);
		$t = $this->feedback->insertFeedback($data);
		if($t){
			redirect();
		}
		else {

		}
	}

	function insert_Message(){
		$data = array(
			'ID' => '',
			'First_Name' => $this->input->post('fname'),
			'Last_Name' => $this->input->post('lname'),
			'Email' => $this->input->post('email'),
			'Comment' => $this->input->post('comments'),
			'Date-Time' => date('Y-m-d H:i:s',now())
			);
		$t = $this->messages->insertMessage($data);
		if($t){
			redirect();
		}
		else {

		}
	}
}

?>