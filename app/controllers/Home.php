<?php  



class Home extends Controller
{
    // fungsi menampilkan Page setelah login
	public function page(){

    	if ( !isset($_POST['login']) ) {
    		$data['judul'] = "Home | Perpustakaan Skensa";
			$this->view('perpustakaan/login/home',$data);
    	}else {
    		$this->model('Login_models')->login($_POST);
    	}
    }

}
