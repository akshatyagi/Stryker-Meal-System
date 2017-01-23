<?php 
class Admin extends CI_Controller{
	function Admin(){
		parent::__construct();
		$this->load->model('news');
		$this->load->model('rules');
		$this->load->model('menu');
		$this->load->model('contact');
		$this->load->model('feedback');
	}
	function index(){
		if($this->session->userdata('is_logged_in')==true){
			$this->logged_in();
		}
		else {
			echo "You have no authorisation to be on this page";
		}


	}
	function logged_in(){
		$logged=$this->session->userdata('is_logged_in');
		$user=$this->session->userdata('username');
		
		if($logged==true){
			$this->_admin_load_Home();			
		}
		else {
			echo "You no longer have permission to view this page.";
			echo "<a href='../Stryker_home/index'>Go back</a>";
			die();
		}
	}
	function _admin_load_Home(){
		$data_admin=array(
			
			'title'=> 'Welcome '.$this->session->userdata('username').'!',
			'items' =>$this->menu->getItems(),
			'news_items'=> $this->news->getNews(),
			'num_items' => $this->news->getNumber(),
			'rules' => $this->rules->getRules(),
			'right_item' => "<li><a href='http://localhost/Stryker/index.php/Admin/logged_out'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>",
			'is_logged' => TRUE ,
			'contact' => $this->contact->getContact(),
			'feedback' => $this->feedback->getFeedback(),
			'feedback_fields' => $this->feedback->getFields(),
			'avg_feedback' => $this->feedback->getAverage(),
			'num_feedback' => $this->feedback->getNumber(),
			'messages' => $this->messages->getMessages(),
			'number_messages' => $this->messages->getNumber(),
			'messages_fields' => $this->messages->getFields(),
			'weekly_menu_category' => $this->menu->getCategory(),
			'is_set' => $this->menu->get_para('is_set')['is_set'],
			'date_set' => $this->menu->get_para('date_set'),
			'Monday' => $this->menu->getWeeklyItems('Monday'),
			'Tuesday' => $this->menu->getWeeklyItems('Tuesday'),
			'Wednesday' => $this->menu->getWeeklyItems('Wednesday'),
			'Thursday' => $this->menu->getWeeklyItems('Thursday'),
			'Friday' => $this->menu->getWeeklyItems('Friday')
			);
		$this->load->view('header',$data_admin);
		$this->load->view('templates/sidebar',$data_admin);	 		
   		$this->load->view('footer');
	}
	function logged_out(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		redirect('Stryker_home/index');
	}

	public function delete_menu_item(){
		$index = $this->input->post('index');
		$query = $this->menu->delete_item($index);
		$status = "false";
		if ($this->db->affected_rows() > 0){
			$status = "true";
		}
		echo $status;
	}

	public function delete_instruction_item(){
		$index = $this->input->post('index');
		$query = $this->rules->delete_item($index);
		$status = "false";
		if ($this->db->affected_rows() > 0){
			$status = "true";
		}
		echo $status;
	}
	public function delete_news_item(){
		$index = $this->input->post('index');
		$query = $this->news->delete_news($index);
		$status = "false";
		if ($this->db->affected_rows() > 0){
			$status = "true";
		}
		echo $status;
	}

	public function insert_menu_item(){
		$data = array(
			'id' => 2,
			'item_name' => $this->input->post('item_name'),
			'item_category' => $this->input->post('item_category'),
			'type' => $this->input->post('item_type'),
			'weekly' => 'na'
		);
		$data_return = $this->menu->insert_item($data);
		$color_type = ($data['type'] === 'Vegetarian') ? 'green':'red';
		$index_r = $this->menu->getIndex($data);
		$index = $index_r['index'];

		$color_category ="";
		switch($data['item_category']){
			case "Main-Course": $color_category ="purple"; break;
			case "Salad": $color_category ="indigo"; break;
			case "Special": $color_category ="orange"; break;
			case "Beverage": $color_category ="brown"; break;
			case "Dessert": $color_category ="voilet"; break;
			default: $color_category ="black";
		}
		$printData = array(
			'item_name' => "<td><h4>".$data['item_name']."</h4></td>",
			'item_category' => "<td><h4 style = 'color:".$color_category."'>".$data['item_category']."</h4></td>",
			'type' => "<td><h4 class = 'editable' style = 'color: ".$color_type."'>".$data['type']."</h4></td>",
			'action' => "<td><button id = '".$index."' class='btn btn-danger delete_item'><span class='glyphicon glyphicon-remove' ></span>Delete Item</button><span class='badge'>New!</span></td>"
		);
		echo "<tr class='success'>".$printData['item_name'].$printData['item_category'].$printData['type'].$printData['action']."</tr>";
	}

	public function insert_news_item(){
		$printdata = "";
		$data = array(		
			'title' => $this->input->post('news_title'),
			'article' => $this->input->post('news_article')
		);
		$data_return = $this->news->insert_item_news($data);
		$index_r = $this->news->getIndex($data);
		$index = $index_r['index'];
		if($data_return){
			$printData = array(
			'news_title' => "<td><h4>".$data['title']."</h4></td>",
			'news_article' => "<td><h4>".$data['article']."</h4></td>",
			'action' => "<td><button id = '".$index."' class='btn btn-danger delete_news' ><span class='glyphicon glyphicon-remove' ></span>Delete Item</button><span class='badge'>New!</span></td>"
			);
		}
		echo "<tr class='success'>".$printData['news_title'].$printData['news_article'].$printData['action']."</tr>";
		//echo $data_return;
		
	}

	public function insert_instruction_item(){
		$printdata = "";
		$data = array(		
			'item' => $this->input->post('item_instruction')
		);
		$data_return = $this->rules->insert_item_instruction($data);
		$index_r = $this->rules->getIndex($data);
		$index = $index_r['index'];
		if($data_return){
			$printData = array(
			'item_instruction' => "<td><h4>".$data['item']."</h4></td>",
			'action' => "<td><button id = '".$index."' class='btn btn-danger delete_instruction' ><span class='glyphicon glyphicon-remove' ></span>Delete Item</button><span class='badge'>New!</span></td>"
			);
		}
		echo "<tr class='success'>".$printData['item_instruction'].$printData['action']."</tr>";
		//echo $data_return;
		
	}

	function update_email(){
		$new_email = $this->input->post('new_email');
		$old_email = $this->input->post('old_email');
		$opdata = $old_email;
		$op = $this->contact->update_email($old_email,$new_email);
		if($op){
			$opdata = $new_email;
		}
		echo $opdata;
	}

	function update_phone(){
		$new_phone = $this->input->post('new_phone');
		$old_phone = $this->input->post('old_phone');
		$opdata = $old_phone;
		$op = $this->contact->update_phone($old_phone,$new_phone);
		if($op){
			$opdata = $new_phone;
		}
		echo $opdata;
	}
	function update_address(){
		$new_address = $this->input->post('new_address');
		$old_address = $this->input->post('old_address');
		$opdata = $old_address;
		$op = $this->contact->update_address($old_address,$new_address);
		if($op){
			$opdata = $new_address;
		}
		echo $opdata;
	}

	function delete_feedback(){
		$result = $this->feedback->deleteFeedback();
		if($result){
			echo "deleted";
		}
		else {
			echo "error";
		}
	}

	function get_comment(){
		$ID = $this->input->post('ID');
		$comment = $this->messages->getComment($ID);
		$content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $comment); 
		echo $content;
	}
	function delete_comment(){
		$ID = $this->input->post('ID');
		$deleted = $this->messages->deleteMessage($ID);
		if($deleted){
			echo 'true';
		}
	}
	function new_weekly_menu(){
		$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		for($i=0;$i<count($days);$i++){
			$day = $days[$i];
			$days[$i] = $this->input->post($days[$i]);
			foreach($days[$i] as $d){
				$this->menu->update_weekly_menu($day,$d);
			}
		}		
	}
	function reset_weekly_menu(){
		$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
		for($i=0;$i<count($days);$i++){
			$day = $days[$i];
			$this->db->update('menu_items',array('weekly' =>'na',$day => 0));
			$this->db->update('menu_param',array('is_set' =>0));
		}
		return true;
	}
		
}

?>