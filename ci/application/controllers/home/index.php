<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->lihat();
	}
	
	public function lihat(){
		echo "berikut adalah jadwal Anda";
		echo "<a href='tambah'>Tambah Jadwal</a>";
	}
	
	public function simpan()
	{
		echo "Anda menyimpan";
	}
	
	public function hapus($id="")
	{
		if($id==""){
		echo "Silahkan pilih Cewe mana yang ingin kamu hapus dari memori:";
		}else{
		echo "<br/> <h1>Apakah Anda ingin menghapus $id?</h1>";
		}
	}
	
	public function tambah()
	{
		//$this->load->scaffolding('mahasiswa');
		//echo "Silahkan lengkapi data berikut";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */