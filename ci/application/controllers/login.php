<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		error_reporting(0);
		//var_dump($_POST);
		/*
		array(2) {
  ["username"]=>
  string(5) "fendy"
  ["password"]=>
  string(7) "ganteng"
}




INSERT INTO  `ta`.`dosen` (
`id` ,
`created_at` ,
`updated_at` ,
`username` ,
`password` ,
`name` ,
`email` ,
`nidn` ,
`nrp`
)
VALUES (
NULL , 
CURRENT_TIMESTAMP , TIMESTAMP(  '' ) ,  'jazman', MD5(  'ganteng' ) ,  'Muhammad Jazman, S.Kom.,MInfoSys',  'jazman@poltek-kapar.ac.id',  '1',  '2'
);



		*/
		if($_POST["username"]){
			$this->load->database();
			
			$query = $this->db->query("SELECT * FROM dosen WHERE username LIKE '"
				.$_POST["username"]."' AND password LIKE '".md5($_POST["password"])."' LIMIT 1");

			/*echo 'Total Results: ' . $query->num_rows();
			foreach ($query->result() as $row)
				{
					echo $row->id;
					echo $row->username;
					echo $row->email;
				}
			*/
			//$row = $query->row();
			if ($query->num_rows() > 0)
			foreach ($query->result() as $row){
				echo "Selamat datang $row->name";
		
			}
			else{
				echo "ERROR_PASSWORD";
				//var_dump ($this->db);
			}
			
			
		}else{
			echo "ERROR";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */