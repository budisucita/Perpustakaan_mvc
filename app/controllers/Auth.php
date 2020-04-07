<?php  



class Auth extends Controller
{
    public function login(){
    	$data['judul'] = "Login";
		$this->view('perpustakaan/login/login',$data);
    }
    
    public function logout()
    {
    	$_SESSION = [];
    	session_unset();
    	session_destroy();
    	header('Location: '.BASEURL.'/home/page');
    }
}
