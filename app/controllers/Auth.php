<?php  



class Auth extends Controller
{
    //fungsi Login
	public function login(){
    	$data['judul'] = "Login";
		$this->view('perpustakaan/login/login',$data);
    }
    
	//fungsi Logout
    public function logout()
    {
    	$_SESSION = [];
    	session_unset();
    	session_destroy();
    	header('Location: '.BASEURL.'/home/page');
    }
}
