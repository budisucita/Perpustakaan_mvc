<?php 

class Kategori extends Controller
{
    
	public function index($id)
	{
		$data['buku'] = $this->model('Get_models')->ambilkategoriby('id_kategori',$id,'tb_buku');
		$data['kategori'] = $this->model('Get_models')->ambilKategori();
		$this->view('perpustakaan/kategori/index',$data);
	}

}

?>