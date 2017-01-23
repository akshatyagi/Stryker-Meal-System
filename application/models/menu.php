<?php 
class Menu extends CI_Model{
	function Menu(){
		parent::__construct();
	}
	function getItems(){
		$menu_items= $this->db->get('menu_items');
		if($menu_items->num_rows()>0){
			foreach($menu_items->result() as $m_i){
				$data[] = $m_i;
			}
		return $data;
		}
	}
	function delete_item($index){
		$this->db->where('index', $index);
   		$this->db->delete('menu_items');
		return $this->db->affected_rows();
	}
	function insert_item($data){
		$this->db->insert('menu_items',$data);
		$data_added = $this->db->get('menu_items');
		//if($data->num_rows()>0){
			//foreach($data->result() as $d){
			//	$data_r[] = $d;
			//}
		return $data_added;
		//}		
	}
	function getIndex($data){
		$item_name = $data['item_name'];
		$this->db->select('index');
		$this->db->where('item_name',$item_name);
		$ans = $this->db->get('menu_items');
		return $ans->row_array();
	}

	function getWeeklyItem(){
		$today_day = date('l');
		$data = array(
			'Beverage' => $this->db->select('item_name')->from('menu_items')->where(array('weekly'=>'yes','item_category'=>'Beverage',$today_day => 1))->get()->result(),
			'Main-Course' => $this->db->select('item_name')->from('menu_items')->where(array('weekly'=>'yes','item_category'=>'Main-Course',$today_day => 1))->get()->result(),
			'Dessert' => $this->db->select('item_name')->from('menu_items')->where(array('weekly'=>'yes','item_category'=>'Dessert',$today_day => 1))->get()->result(),
			'Salads' =>$this->db->select('item_name')->from('menu_items')->where(array('weekly'=>'yes','item_category'=>'Salads',$today_day => 1))->get()->result(),
			'Special' =>$this->db->select('item_name')->from('menu_items')->where(array('weekly'=>'yes','item_category'=>'Special',$today_day => 1))->get()->result(),
			);		
		return $data;
	} 
	function getCategory(){
		$data = array('Beverage','Main-Course','Dessert','Salads','Special');
		return $data;
	}
	function get_para($data){
		return $this->db->select($data)->get('menu_param')->row_array();
	}

	function update_weekly_menu($day,$d){
		$this->db->where('index',$d);
		$this->db->update('menu_items',array('weekly' =>'yes',$day => 1));
		$this->db->update('menu_param',array('is_set' =>1));
	}

	function getWeeklyItems($day){
		$data = array(
			'weekly' => 'yes',
			$day => 1
			);
		return $this->db->select('item_name')->where($data)->get('menu_items')->result_array();
	
	}
}

?>