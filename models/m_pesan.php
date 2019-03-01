<?php 
/**
 * 
 */
class m_pesan extends CI_Model{
	
	 // function __construct(argument){
 	// 		$this->load->database();
	 // }

	// public function menu(){
	// 	$query = $this->db->get('menu');
	// 	return $query->();
	// }

	function tampil_menu(){
		return $this->db->get('menu');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}


	
}

 ?>