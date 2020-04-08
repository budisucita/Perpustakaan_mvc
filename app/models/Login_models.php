<?php 



class Login_models
{
  private $tb = "auth",
  $db;

  public function __construct(){
    $this->db = new Database;
 }
 public function ambildata($validasi, $nilai){
    if (isset($validasi) && isset($nilai)) {
      $data="SELECT * FROM $this->tb WHERE $validasi =:$validasi";
      $this->db->query($data);
      $this->db->bind($validasi, $nilai);
      return $this->db->single();
   }
}
public function login($data){

/*
*
* # Kita mengambil data username dan masukkan ke variable username
*
*
*/
 $username = $data['username'];
 $password = $data['password'];

 /*
 *
 * # Cek username ada atau tidak kosong
 *
 *
 */
 if (isset($username) && $username !== ''){
   /*
   *
   * # Ambil data dari username di database yang diinputkan, jika ada tampilkan
   *
   *
   */
   if ($datauser = $this->ambildata("username", ($username))){
      /*
      *
      * # Ambil data password dan rolenya dari username yang dimasukan
      *
      *
      */
      $Uspw = $datauser["password"];
      $role = $datauser['id_level'];
      // var_dump($role);die;
      $nama = $datauser['nama'];
      if (isset($password) && $password !== '') {     // Cek password di inputkan atau tidak
         if (password_verify($password, $Uspw)) {     // Pencocokan password di database dan password yang di inputkan
            if ($role == '1' || $role == 1) {
               session_start();                       // Session untuk melakukan pengecekan apakah sudah login atau belum pada role 1 atau admin
               $_SESSION['username'] = $username;
               $_SESSION['nama'] = $nama;
               $_SESSION['status'] = 'ada';
               $_SESSION['role'] = $role;
               Flasher::setFlash('Selamat Datang ', $username,'success');
               header('Location: '.BASEURL.'');
            }elseif ($role == '2' || $role == 2) {
               session_start();                      // Session untuk melakukan pengecekan apakah sudah login atau belum pada role 2 atau petugas
               $_SESSION['username'] = $username;
               $_SESSION['nama'] = $nama;
               $_SESSION['status'] = 'ada';
               $_SESSION['role'] = $role;
               Flasher::setFlash('Selamat Datang ', $username,'success');
               header('Location: '.BASEURL.'/petugas');
            }
            elseif ($role == '3' || $role == 3) {
               session_start();                     // Session untuk melakukan pengecekan apakah sudah login atau belum pada role 3 atau user
               $_SESSION['username'] = $username;
               $_SESSION['nama'] = $nama;
               $_SESSION['status'] = 'ada';
               $_SESSION['role'] = '3';
               Flasher::setFlash('Selamat Datang ', $username,'success');
               header('Location: '.BASEURL.'/menu_user');
            }
         }else { // else cek password db
            Flasher::setFlash('Password Anda', ' Salah !! ','error');             //Message password salah atau error
            header('Location: '.BASEURL.'/home/home');
         }
      }else { // else cek password
         Flasher::setFlash('Username Dan Password', ' Harus Diisi !! ','error'); //Message username dan password harus diisi atau error
         header('Location: '.BASEURL.'/home/home');
      }
         }else{ //else cek data
            Flasher::setFlash('Username Anda ', 'Tidak Terdaftar !! ','error');  //Message username tidak terdaftar atau error
            header('Location: '.BASEURL.'/home/home');
         }
      }else { //else cek username
      	Flasher::setFlash('Username Dan Password', ' Harus Diisi !! ','error'); //Message username dan password harus diisi atau error
      	header('Location: '.BASEURL.'/home/home');
      }
   }
}
