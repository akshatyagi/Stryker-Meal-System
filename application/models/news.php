<?php 
class News extends CI_Model{
	function getNews(){
	  $q=$this->db->get('news');
	   if($q->num_rows()>0){
		  foreach ($q->result() as $rows) {
			$data[]=$rows;
		   }
      return $data;
	    }
    }
    function getNumber(){
		$q=$this->db->get('news');
		$number=$q->num_rows();
		return $number;
	}
	function getRows(){
		$query=$this->db->get('news');
		$rows= $query->num_rows();
		return $rows;
	}
	function getInfo($index){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('index',$index);
		$q = $this->db->get();
		if($q->num_rows()>0){
		  foreach ($q->result() as $rows) {
			$data[]=$rows;
		   }
      	return $data;
	    }	
	}
	/*function get_num_links(){
		$query=$this->db->get('news');
		$rows=$query->num_rows();
		$links = $rows/3;
		return $links;
	} */ 
	function delete_news($index){
		$this->db->where('index', $index);
   		$this->db->delete('news');
		return $this->db->affected_rows();
	}

	function insert_item_news($data){
		$success = false;
		$this->db->insert('news',$data);
		//$data_added = $this->db->get('news');
		/*if($data->num_rows()>0){
			foreach($data->result() as $d){
				$data_r[] = $d;
			}  */
		if($this->db->affected_rows() === 1){$success = true;}
		return $success;
		//}		
	}

	function getIndex($data){
		$news_title = $data['title'];
		$this->db->select('index');
		$this->db->where('title',$news_title);
		$ans = $this->db->get('news');
		return $ans->row_array();
	} 
	
}
?>
