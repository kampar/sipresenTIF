<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
		//$this->lihat();
		$data['dosen']='Noer Effendie';
		$this->load->view('hero',$data);
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
		echo "Silahkan lengkapi data berikut";
	}
	
	public function matakuliah()
	{
		echo "Algoritma dan Pemograman,Basis Data,Rekayasa Perangkat Lunak,Graphic User Interface,Struktur Data,Nur Efendi,Dodolipet DudumTeret,Hehehe";		
	}
	
	public function mahasiswa($nim="2008")
	{
		//if($_POST["name"]){
			$this->load->database();
			//$query = $this->db->query("SELECT * FROM mahasiswa WHERE name LIKE '".$_POST["name"]);
			$query = $this->db->query("SELECT * FROM mahasiswa WHERE nim LIKE '".$nim."%';"); //angkatan, e.g: 2013
			foreach ($query->result() as $row)
			{
				echo $row->name."|||";
			}
		//}
	}
	
	public function test()
	{
		echo serialize($this);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */