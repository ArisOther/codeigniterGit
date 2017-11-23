<?php
defined('BASEPATH') OR exit ('o direct script access allowed');

class Front extends CI_Controller{
//ini adalah konstanta yang bisa diakses pada setiap halaman, penambahan lib session (2.7.1)
	public function __construct()
	{
		parent::__construct();
		echo 'jalankan construct</br>';
		$this->load->library('session');
	}

//halaman default dari controller Front
	public function index()
	{
		$data = array(
			'title'=>'ini adalah judul',
			'author'=>'aris winandi',
			'date'=>date('Y,m,d H:i:s'),
			'content'=>'ini adalah isi dari website'
			);

		$this->load->view('depan', $data);
	}

//halaman kategori
	public function category_page()

	{
		
		
		$this->load->view('category_page');
	}

//halaman tambah artikel(2.5.5)
// penerapan model (2.6)
	public function tambah_artikel($param=NULL)
	{
		if($param=='kirim')
		{
			$post = $this->input->post();

			if(!empty($post['author']) && !empty($post['title']) && !empty('content'))
			{
				
				$this->load->model('Post_model');

				$data2 = array(
				'author'=>$post['author'],
				'title'=>$post['title'],
				'date'=>date('Y,m,d'),
				'content'=>$post['content']
				);

				$this->Post_model->create('tbl_post',$data2);
				$this->load->view('tambah_artikel_berhasil',$data2);

			}
			else
			{
				$this->load->view('tambah_artikel_gagal',$data2);
			}

			
			
		}
		else
		{
			$this->load->view('tambah_artikel');
		}
		
		
	}

//library untuk merubah ukuran image (2.7.0)
	public function image_lib_test()
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'C:\xampp\htdocs\codeIgniter\asset\image\banner.jpg';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 75;
		$config['height']       = 50;

		$this->load->library('image_lib', $config);

		if($this->image_lib->resize())
		{
			echo "bekerja dengan baik";

		}
		else
		{
			$this->image_lib->display_error();
		}
	}

//library membuat pagination (2.7.0)
	public function pagination_lib_test()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url('Front/pagination_lib_test/hal/');
		$config['total_rows'] = 200;
		$config['per_page'] = 20;

		$this->pagination->initialize($config);

		echo $this->pagination->create_links();
	}

//custom library - Pembuatan kondisi Login /cek custom library pada folder "application/library" (2.7.1)
	public function login()
	{
		$this->load->helper('url');
		echo "<a href=".base_url('Front/login_success').">klik untuk login</a>";

	}


	public function login_success()
	{
		$array_login = array(
		
			'username' => 'admin',
			'password' => 'admin',
			'login_status' => TRUE
		);

		$this->session->set_userdata($array_login);
		echo "<h1>anda berhasil login</h1>";
	}

	public function admin()
	{
		echo "<h1>selamat datang admin</h1>";
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "<h1>anda telah logout</h1>";
	}





}

?>
