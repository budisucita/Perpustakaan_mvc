<?php



class Homepage_user extends Controller
{
    
	public function index()
	{
		$data['buku'] = $this->model('Get_models')->ambilBuku();
		$data['kategori'] = $this->model('Get_models')->ambilKategori();
		$this->view('template/user/header',$data);
		$this->view('perpustakaan/home_user/index',$data);
		$this->view('template/user/footer',$data);
	}


}
