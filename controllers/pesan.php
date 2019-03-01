<?php 
class pesan extends CI_Controller{
	
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pesan');
		$this->load->helper(array('form','url'));
	}

	public function index(){
		$this->load->view('index');
	}

	function pemesan(){
		$this->load->view('v_pesan');
	}
	public function proseslogin(){
		$nama = $this->input->post('nama');
		
		$data['nama'] = $nama;
		$this->m_pesan->input_data($data,'pemesan');
		redirect('pesan/memesan');

	}


	public function memesan(){
		$data['value'] = $this->m_pesan->tampil_menu()->result();
 		$this->load->view('menu', $data);
	}
	
	function tambah($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_pesan->tambah($where,'pemesan')->result();
		$this->load->view('pesanan',$data);
	}





}
 ?>