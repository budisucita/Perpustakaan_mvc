<?php 



class Buku extends Controller
{
    public function index()
	{
		// var_dump($_SESSION['role']);die;
		if (empty($_SESSION['role']) || $_SESSION['role'] == "") {
			header('Location: http://perpustakaan.com/Perpustakaan_mvc/app/views/template/404.php');
		}else{
			/*
	         * 
	         * 1. kita  cek apa user itu rolenya admin  = 1 atau user = 2
	         * 
	         * 
	         * 
	         */
			$auth = $_SESSION['role'];
			if ($auth == '1' || $auth == 1) {
				$data['judul'] = "Daftar Buku";
				$data['buku'] = $this->model('Get_models')->ambilBuku();
				$data['kategori'] = $this->model('Get_models')->ambilKategori();
				$this->view('template/header',$data);
				$this->view('perpustakaan/buku/index',$data);
				$this->view('template/footer');
			}elseif ($auth == '2' || $auth == 2){
				$data['judul'] = "Daftar Buku";
				$data['buku'] = $this->model('Get_models')->ambilBuku();
				$data['kategori'] = $this->model('Get_models')->ambilKategori();
				$this->view('template/petugas/header',$data);
				$this->view('perpustakaan/buku/index',$data);
				$this->view('template/petugas/footer');
			}
		}
		
	}

	//fungsi menampilkan categori
	public function kategori()
	{
		$data['judul'] = "Daftar Kategori";
		$data['kategori'] = $this->model('Get_models')->ambilKategori();
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/kategori',$data);
		$this->view('template/footer');
	}

	//fungsi edit buku
	public function edit_buku($id)
	{
		/*
	    * 
	    * 1. kita  cek apa user itu rolenya admin  = 1 atau user = 2
		* 
		* 
		* 
		*/
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
			$data['judul'] = "Edit Buku";
			$data['buku'] = $this->model('Get_models')->ambilDataby("id_buku",$id,"tb_buku");
			$data['kategori'] = $this->model('Get_models')->ambilKategori($id);
			$this->view('template/header',$data);
			$this->view('perpustakaan/buku/edit_buku',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Edit Buku";
			$data['buku'] = $this->model('Get_models')->ambilDataby("id_buku",$id,"tb_buku");
			$data['kategori'] = $this->model('Get_models')->ambilKategori($id);
			$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/buku/edit_buku',$data);
			$this->view('template/petugas/footer');
		}
	}

	//fungsi edit kategori buku
	public function edit_kategori($id)
	{
		$data['judul'] = "Edit Kategori";
		$data['buku'] = $this->model('Get_models')->ambilDataby("id_kategori",$id, "tb_kategori");
		// $data['kategori'] = $this->model('Get_models')->ambilKategori($id);
		$this->view('template/header',$data);
		$this->view('perpustakaan/buku/edit_kategori',$data);
		$this->view('template/footer');
	}

	//fungsi menampilkan data detail buku 
	public function detail_buku($id)
	{
		/*
	    * 
	    * 1. kita  cek apa user itu rolenya admin  = 1 atau user = 2
		* 
		* 
		* 
		*/
		$auth = $_SESSION['role'];
		if ($auth == '1' || $auth == 1) {
			$data['judul'] = "Detail Buku";
			$data['buku'] = $this->model('Get_models')->ambilDetailbukuby("id_buku",$id, "tb_buku");
			$this->view('template/header',$data);
			$this->view('perpustakaan/buku/detail_buku',$data);
			$this->view('template/footer');
		}elseif ($auth == '2' || $auth == 2){
			$data['judul'] = "Detail Buku";
			$data['buku'] = $this->model('Get_models')->ambilDetailbukuby("id_buku",$id, "tb_buku");
			$this->view('template/petugas/header',$data);
			$this->view('perpustakaan/buku/detail_buku',$data);
			$this->view('template/petugas/footer');
		}
	}

	
}
