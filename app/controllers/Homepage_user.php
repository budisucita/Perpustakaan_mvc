<?php



class Homepage_user extends Controller
{
    
	
	public function detail($id)
	{
		$data['buku']=
		$this->model('Get_models')->ambilDetailbukuby('id_buku','$id','tb_buku');
		$this->view('template/user/header');
		$this->view('perpustakaan/home_user/detail',$data);
		$this->view('template/user/footer');
	}
}
